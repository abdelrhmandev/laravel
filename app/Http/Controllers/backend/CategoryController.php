<?php
namespace App\Http\Controllers\backend;
use App\Http\Requests\backend\CategoryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Models\Category as MainModel;
use App\Models\CategoryTranslation as TransModel;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Traits\UploadAble;
use App\Traits\Functions; 
use DataTables;


class CategoryController extends Controller
{
    use UploadAble,Functions;

    public function store(CategoryRequest $request){

        try {
            DB::beginTransaction();        
            $validated               = $request->validated();
            $validated['published']  = isset($request->published) ? '1' : '0';       
            $validated['image']      = (!empty($request->file('image'))) ? $this->uploadFile($request->file('image'),'categories') : NULL;    
            $validated['parent_id']  = isset($request->parent_id) ? $request->parent_id : NULL;
            $query                   = MainModel::create($validated);
            DB::commit();                
            $translatedArr           = $this->HandleMultiLangdatabase(['title_','slug_','description_'],['category_id'=>$query->id]);                      
            
       
            if(TransModel::insert($translatedArr)){              
                     $arr = array('msg' => __('category.storeMessageSuccess'), 'status' => true);
              
                }
        
        } catch (\Exception $e) {
            DB::rollback();            
            $arr = array('msg' => __('category.storeMessageError'), 'status' => false);
        }
        return response()->json($arr);
        
}

public function index(Request $request){    


    $query = MainModel::withCount('posts');
    if ($request->ajax()) {
  
            

         return Datatables::of($query->latest())    
                    ->addIndexColumn()
 
                    
                    ->editColumn('translate.title', function ($row) {
                     $route = route('admin.categories.edit',$row->id);   
                    $div = "<div class=\"d-flex align-items-center\">";                            
                    if($row->image){
                        $div.= "<a href=".$route." title='".$row->translate->title."' class=\"symbol symbol-50px\">
                                    <span class=\"symbol-label\" style=\"background-image:url(".asset("storage/".$row->image).")\" />
                                    </span>
                                </a>";                                                                
                    }else{
                        $div.="<a href=".$route." class=\"symbol symbol-50px\" title='".$row->translate->title."'>
                                        <div class=\"symbol-label fs-3 bg-light-primary text-primary\">".$this->str_split($row->translate->title,1)."</div>
                               </a>";  
                    } 
                    $description = '';//"<div class=\"text-muted fs-7 fw-bold\">".Str::of($row->translate->description)->words(8,'...')."</div>";
                    $div.="<div class=\"ms-5\">
                                <a href=".$route." class=\"text-gray-800 text-hover-primary fs-5 fw-bold mb-1\" data-kt-categories-filter=\"item\">".$row->translate->title."</a>
                            ".$description."</div>"; 

                    $div.= "</div>";
                    return $div;
                
                })

 
                                                             
  
         
                  ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('d/m/Y');
                })
                
        

                ->editColumn('actions', function ($row) {      
                                                 
                return view('backend.partials.btns.edit-delete', [
                    'edit_route'=>route('admin.categories.edit',$row->id),
                    'destroy_route'=>route('admin.categories.destroy',$row->id),
                    'id'=>$row->id]);
                })                           
                ->rawColumns(['translate.title','created_at','actions'])    
                ->make(true);    
    }  


        if (view()->exists('backend.categories.index')) {
            $compact = [
                'storeUrl'   => route('admin.categories.store'), 
                'redirectUrl'    => route('admin.categories.index'),
            ];            
            return view('backend.categories.index',$compact);
        }
    }
        public function create(){
        if (view()->exists('backend.categories.create')) {
            $compact = [
                'storeUrl'   => route('admin.categories.store'), 
                'categories' =>  MainModel::tree()  
            ];            
             return view('backend.categories.create',$compact);
        }
    }
     public function edit(MainModel $category){ 
        if (view()->exists('backend.categories.edit')) {         


        

            $kk = TransModel::where('category_id',$category->id)->get();
            


            //   $kk = $category->translate('all')->where('category_id',$category->id)->get();

            $TrsanslatedColumnValues = 
            $compact = [                
                'updateUrl'               => route('admin.categories.update',$category->id), 
                'categories'              => MainModel::tree($category),
                'row'                     => $category,
                'TrsanslatedColumnValues' => $this->getItemtranslatedllangs($kk,['title','slug','description']),
                'destroy_route'           => route('admin.categories.destroy',$category->id),
                'redirect_after_destroy'  => route('admin.categories.index'),
                'trans'                   => 'category',
            ];            



             return view('backend.categories.edit',$compact);                    
            }
    }

    public function update(CategoryRequest $request, MainModel $category)
    {

        
        try {
            DB::beginTransaction();        
            $validated = $request->validated();


            $image = $category->image;

            if(!empty($request->file('image'))) {
               $image =  $this->uploadFile($request->file('image'),'categories');
               $this->unlinkFile($category->image);
             }

            if(isset($request->drop_image_checkBox)  && $request->drop_image_checkBox == 1) {                
                $this->unlinkFile($category->image);
                $image = NULL;
            }


            $data = [
                'published'     =>isset($request->published) ? '1' : '0',
                'image'         => $image,
                'parent_id'     => isset($request->parent_id) ? $request->parent_id : NULL,
            ];

            MainModel::findOrFail($category->id)->update($data);
            $arr = array('msg' => __('category.updateMessageSuccess'), 'status' => true);
            
            DB::commit();
            
            
            $this->UpdateMultiLangsQuery(['title_','description_','slug_'],'category_translations',['category_id'=>$category->id]);

        } catch (\Exception $e) {
            DB::rollback();            
            $arr = array('msg' => __('category.updateMessageError'), 'status' => false);
        }
        return response()->json($arr);

            
           

    }
    public function destroy(MainModel $category){        
        // SET ALL childs to NULL 
        $childs = $category->where('parent_id', $category->id);     
        foreach ($childs->get() as $child) {
            $child->id ? MainModel::where('id',$child->id)->update(['parent_id' => NULL]) : '';
        }
        
        $category->image ? $this->unlinkFile($category->image) : ''; // Unlink Image
        $item = MainModel::findOrFail($category->id); // Check
        
        if($item->delete()){
            $arr = array('msg' => __('category.deleteMessageSuccess'), 'status' => "success");
        }else{
            $arr = array('msg' => __('category.deleteMessageError'), 'status' => false);

        }
        

        return response()->json($arr);

    }


    public function multi_delete(){
        dd('multi_delete');
    }


}
