<?php
 namespace App\Http\ViewComposers;

 use Illuminate\View\View;
use App\Repositories\Backend\CategoryRepository;


 class CategoriesComposer
 {
     public $movieList = [];
     /**
      * Create a movie composer.
      *
      * @return void
      */

     public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }
     

     /**
      * Bind data to the view.
      *
      * @param  View  $view
      * @return void
      */
     public function compose(View $view)
     {
       $categories = $this->category->all();
        $view->with('categories', $categories);

     }
 }