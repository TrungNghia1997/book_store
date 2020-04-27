<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Basket;

class listCustomorController extends Controller
{
	private $basket;
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    public function index()
    {

        $basket = $this->basket->all();
        // dd($basket);
        return view('admin.elements.listCumtomer.index', compact('basket'));
    }

    public function updateListCustomer($id)
    {
    	$data = $this->basket->findOrfail($id);
    	(array)$data['nameproduct'] = explode('+', $data['nameproduct']);
    	(array)$data['qty'] = explode('+', $data['qty']);
    	// dd($data);
    	return view('admin.elements.listCumtomer.listChecked',compact('data'));

    }

    public function postupdateListCustomer(Request $request , $id)
    {
        // 
       $data = $request->all();
       $data['nameproduct']=implode("+", (array)$data['nameproduct']);
       $data['qty']=implode("+", (array)$data['qty']);
       // dd($data);
       $basket =$this->basket->findOrfail($id);
       // dd($basket);
       $basket->update($data);
       return redirect('admin/list')->with('đã gọi cho khách hàng ');
    }

    public function deleteListCustomer($id)
    {
    	// dd(123);
    	 $basket = $this->basket->findOrfail($id);
        $basket->delete();
        return redirect('/admin/list')->with('alert','Bạn đã xóa một khách hàng');
    }


}
