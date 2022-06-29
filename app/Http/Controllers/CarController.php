<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Producer;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all();
        return view('car-list',['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('car-create', ["producers" => Producer::all()]);
        return view('car-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'nameCar'=>'required', 
            'price'=>'required',
            'img'=>'required|mimes:jpg,png,jpeg|max:2048',
        ],[
            'nameCar.required' =>'Bạn chưa nhập tên xe',
            'nameProducer.required' =>'Bạn chưa nhập tên nhà sản xuất',
            'price.required' =>'Bạn chưa nhập giá',
            'img.required' =>'Bạn chưa nhập ảnh',
            'img.mimes'=>'Chỉ chấp nhận files ảnh',
            'img.max' => 'Chỉ chấp nhận files ảnh dưới 2Mb'
        ]);
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

        return redirect()->route('cars.index')->with('alert', 'Bạn đã thêm thành công');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $car = Car::find($id);
        // return view('cars.show',['car'=>$car]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $car = Car::find($id);
        $producers = Producer::all();
        return view ('car-update' ,compact('car','producers'));
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
        $car = Car::find($id);
        $car->name_car = $request->input('nameCar');
        $car->price = $request->input('price');
        if($request->hasFile("img")){
            $file = $request->file('img');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images'),$fileName);
            $car->img = $fileName;
        }
        $car->save();
        return redirect()->route('cars.index')->with('alert','update successfully');
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
        $car = Car::find($id);
        $car->delete();
        return redirect()->route('cars.index')->with('alert', 'Xóa thành công !!');;
    }
}
