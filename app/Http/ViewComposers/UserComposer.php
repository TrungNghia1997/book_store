<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\Backend\UserRepository;
use Auth;
class UserComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    private $user;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $user)
    {
        // Dependencies automatically resolved by service container...
        $this->user = $user;
       
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $user_id=Auth::user()->id;
        $usercomposer = $this->user->getById($user_id)->toarray();
        
        $view->with('usercomposer', $usercomposer);
        
    }
}