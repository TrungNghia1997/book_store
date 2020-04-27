<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AuthorRequest;
use App\Repositories\Backend\AuthorRepository;

class AuthorController extends Controller
{
    private $authorRepository;    

    public function __construct() {
        $this->authorRepository = new AuthorRepository();
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authorRepository =  $this->authorRepository->getList();   
        return view('admin.elements.author.index', compact('authorRepository'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.elements.author.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        $data = $request->only([
            'author',
            'image_author',
            'des_author',            
        ]);       
        $author = $this->authorRepository->createAuthor($data);    
        if($author){   
            return redirect('admin/author')->with('flash_success', 'Success!');
        }
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
        $authorRepository = $this->authorRepository->getById($id);         
        return view('admin.elements.author.edit', compact('authorRepository'));
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
        $authorRepository = $this->authorRepository->getById($id);          
        $data = $request->only([
            'author',
            'image_author',
            'des_author',  
        ]);               
        $data = $this->authorRepository->editAuthor($data);
        $authorRepository->update($data);           
        return redirect('admin/author')->with('flash_success', 'Success!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $authorRepository = $this->authorRepository->getById($id);
        $authorRepository->delete();
        return redirect('/admin/author')->with('alert','Xoa thanh cong');
    }
}
