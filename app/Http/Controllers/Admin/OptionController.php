<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\OptionRequest;
use App\Repositories\Backend\OptionRepository;
use App\Repositories\Backend\ImageUploadRepository;

class OptionController extends Controller
{
    private $optionRepository;   

    public function __construct() {       
        $this->optionRepository = new OptionRepository();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $optionRepository =  $this->optionRepository->all();   
        return view('admin.elements.option.index', compact('optionRepository'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionRepository =  $this->optionRepository->all();      
        if(isset($optionRepository[0])){
            foreach ($optionRepository as $value) {
                $id = $value->id;
            } 
            $optionRepository = $this->optionRepository->getById($id);
            $slides = explode('+img+', $optionRepository->slides);             
            return view('admin.elements.option.edit', compact('optionRepository', 'slides'));
        }
        else{
             return view('admin.elements.option.add');
        }       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OptionRequest $request)
    {

        $data = $request->only([
            'logo',
            'email',
            'address',
            'phone',
            'slides',
        ]);       
        $option = $this->optionRepository->createOption($data);    
        if($option){   
            return redirect('admin/option')->with('flash_success', 'Success!');
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
        $optionRepository = $this->optionRepository->getById($id);
         $slides = explode('+img+', $optionRepository->slides);       
        return view('admin.elements.option.show', compact('optionRepository','slides'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $optionRepository = $this->optionRepository->getById($id);
        $slides = explode('+img+', $optionRepository->slides); 
        return view('admin.elements.option.edit', compact('optionRepository', 'slides'));
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
        $optionRepository = $this->optionRepository->getById($id);          
        $data = $request->only([
            'logo',
            'email',
            'address',
            'phone',
            'slides',
        ]);               
        $data = $this->optionRepository->editOption($data);
        $optionRepository->update($data);           
        return redirect('admin/option')->with('flash_success', 'Success!');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $optionRepository = $this->optionRepository->getById($id);
        $optionRepository->delete();
        return redirect('/admin/option')->with('alert','Xoa thanh cong');
    }
}
