<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['*'], 'App\Http\ViewComposers\ProfileComposer');
        View::composer(['*'], 'App\Http\ViewComposers\CategoriesComposer');
        View::composer(
            [
                'admin.elements.category.index', 'admin.elements.category.add', 'admin.elements.category.edit', 

                'admin.elements.branch.index', 'admin.elements.branch.add', 'admin.elements.branch.edit', 

                'admin.elements.category_detail.index', 'admin.elements.category_detail.add', 'admin.elements.category_detail.edit', 

                'admin.elements.customer.index', 'admin.elements.customer.add', 'admin.elements.customer.edit', 

                'admin.elements.option.index', 'admin.elements.option.add', 'admin.elements.option.edit', 'admin.elements.option.show', 

                'admin.elements.author.index', 'admin.elements.author.add', 'admin.elements.author.edit', 'admin.elements.author.show', 

                'admin.elements.product.index', 'admin.elements.product.add', 'admin.elements.product.edit', 'admin.elements.product.show', 



                'admin.elements.product_category.index', 'admin.elements.product_category.add', 'admin.elements.product_category.edit', 

                'admin.elements.user.index', 'admin.elements.user.add', 'admin.elements.user.edit', 
                

                'admin.elements.listCumtomer.index', 'admin.elements.listCumtomer.listChecked',
                'admin.elements.feedback.index', 'admin.elements.feedback.show', 
                 

                'admin.elements.search', 




            ], 
            'App\Http\ViewComposers\UserComposer');


    }
}
