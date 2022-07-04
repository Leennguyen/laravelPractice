<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

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
        // handle file
        $file = $request->file('img');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $fileName);
        // create a new record in DB
        $car = new Car();
        $car->name_car = $request->input('nameCar');
        // $car->producer_id = $request->input('producerId');
        $car->price = $request->input('price');
        $car->img = $fileName;
        $car->save();
        return response()->json(['message' => 'car Created Successfully!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Car::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $car)
    {
        $request->validate([
            'nameCar' => 'required',
            'price' => 'required',
            'img' => 'mimes:jpg,jpeg,png'
        ]);

        try {

            $car = Car::find($car);
            if ($request->hasFile("image")) {
                $img = $request->file("img");
                $imageName = time() . '_' . $img->getClientOriginalName();
                $img->move(public_path("images"), $imageName);
                // remove old image
                if (file_exists("/images/" . $car->image)) {
                    unlink("/images/" . $car->image);
                }
                $car->img = $imageName;
            }
            $car->name_car = $request->nameCar;
            $car->price = $request->price;
            $car->save();

            return response()->json([
                'message' => 'car Updated Successfully!!'
            ]);
        } catch (\Exception $e) {
            // \Log::error($e->getMessage());
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
        try {

            if ($car->image) {
                $exists = Storage::disk('public')->exists("images/{$car->image}");
                if ($exists) {
                    Storage::disk('public')->delete("images/{$car->image}");
                }
            }

            $car->delete();

            return response()->json([
                'message' => 'car Deleted Successfully!!'
            ]);
        } catch (\Exception $e) {
            // \Log::error($e->getMessage());
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }
}
