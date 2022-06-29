<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Car::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'nameCar'=>'required', 
        //     'price'=>'required',
        //     'img'=>'required|mimes:jpg,png,jpeg|max:2048',
        // ],[
        //     'nameCar.required' =>'Bạn chưa nhập tên xe',
        //     'nameProducer.required' =>'Bạn chưa nhập tên nhà sản xuất',
        //     'price.required' =>'Bạn chưa nhập giá',
        //     'img.required' =>'Bạn chưa nhập ảnh',
        //     'img.mimes'=>'Chỉ chấp nhận files ảnh',
        //     'img.max' => 'Chỉ chấp nhận files ảnh dưới 2Mb'
        // ]);
// handle file
        $file =$request->file('img');
        $fileName = time().'_'.$file->getClientOriginalName();
        $file -> move(public_path('images'), $fileName);
// create a new record in DB
        $car = new Car();
        $car->name_car=$request->input('nameCar');
        // $car->producer_id = $request->input('producerId');
        $car->price=$request->input('price');
        $car->img = $fileName;
        $car->save();
        return response()->json(['message'=>'Product Created Successfully!!']);
    

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
