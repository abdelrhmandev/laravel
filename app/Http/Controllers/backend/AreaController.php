<?php
namespace App\Http\Controllers\backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
use App\Models\Area;
class AreaController extends Controller
{

    protected $model;
    protected $resource;
    protected $trans_file;

    public function __construct(Recipe $model){
        $this->model = $model;
        $this->resource = 'recipes';
        $this->trans_file = 'recipe';
    }


    
    public function index(){
        if (view()->exists('admin.areas.index')) {
            $areas = Area::with(['area','city','district','city.country'])->get(); 
            return view('admin.areas.index',['areas'=>$areas]);
        }
    }
        public function create(){
        if (view()->exists('admin.areas.create')) {
            return view('admin.areas.create');
        }
    }
     public function edit(){
        if (view()->exists('admin.areas.index')) {
            return view('admin.areas.edit');
        }
    }

    public function multi_delete() {
		if (is_array(request('item'))) {
			foreach (request('item') as $id) {
				// $items = Zone::findOrFail($id);
				// $items->delete();
			}
		} else {
			$items =Area::findOrFail(request('item'));
			$items->delete();
		}
        return back()->with('success' , trans('zone.deleteMessageSuccess')); 
    }
    
    public function destroy($id)
    {
        Area::findOrFail($id)->delete();
        return back()->with('success' , trans('zone.deleteMessageSuccess')); 
    }


}
