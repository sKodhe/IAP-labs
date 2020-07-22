<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function allcars(){
        $cars = Car::all();
        $title = "IAPLaravel";
        $data = [
            'cars'=>$cars,
            'title'=>$title
        ];
        return view('cars.pages.allcars')->with('data',$data);
    }
    public function particularcar($id){

    }
    public function newcarform(){
        $title = 'Add New Car';
        $data = [
            'title'=>$title
        ];
        return view('cars.pages.addcar')->with('data',$data);
    }
    public function newcar(Request $request){
        $this->validate($request,[
            'make'=>'required',
            'model'=>'required',
            'produced_on'=>'required'
        ]);

        $car = new Car;
        $car->make = $request->input('make');
        $car->model = $request->input('model');
        $car->produced_on = $request->input('produced_on');
        $car->save();

        return redirect('/cars')->with('success','New Car Added Succesfully');
    }

    public function show($id)
    {
        $car = Car::find($id);

        return view('cars.pages.show', compact('car'));
    }
}
