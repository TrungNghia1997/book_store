<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\UserRequest;
use App\Repositories\Backend\UserRepository;

class UserController extends Controller
{

     private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
        $this->userRequest = new UserRequest();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=  $this->userRepository->getList(); 
        return view('admin.elements.user.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.elements.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userrequest=$this->userRequest->Validator($request->all())->Validate();
        // dd($userrequest);
        $data = $this->userRepository->addUser($userrequest,NULL);
        return redirect()->back()->with('alert','Thanh cong!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view('admin.elements.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userrequest=$this->userRequest->Validator($request->all())->Validate();
        $this->userRepository->addUser($userrequest,$id);
        return redirect('/admin/user')->with('alert','Bạn đã sửa thông tin thành viên thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= $this->userRepository->getById($id);
        $user->delete();
        return redirect('/admin/user')->with('alert','Bạn đã xóa một thành viên');
    }
}
