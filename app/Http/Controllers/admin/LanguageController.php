<?php
namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelLocalization;
class LanguageController extends Controller
{
    public function index()
    {
//https://phrase.com/blog/posts/laravel-i18n-modelling-best-practices/
        foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
        
        ?>    
            
                <?php echo LaravelLocalization::getLocalizedURL($localeCode) ?></p>


                
                  <p>  <?php echo $properties['native'];?></p>
      
    
    
                
            
          
       <?php
       }
    //    echo LaravelLocalization::transRoute('routes.posts'); //https://lavalite.readme.io/docs/trans
    
        // return view('admin.languages.index');
    }
        public function create()
    {
        return view('admin.languages.create');
    }
}
