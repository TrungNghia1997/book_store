<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\Backend\OptionRepository;

class ProfileComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $option;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(OptionRepository $option)
    {
        // Dependencies automatically resolved by service container...
        $this->option = $option;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
       $option = $this->option->all();
        
        $view->with('option', $option);
        
    }
}