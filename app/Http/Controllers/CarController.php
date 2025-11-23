<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function cars(Request $request){
        $data = Car::all();

        // dd($data);

        return view('cars', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
     function addCars(Request $request){
    
        return view('addCars');
    }
    function storeCars(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:50',
            'model' => 'required|max:15'
            
        ]);

        $cars = new Car();
    $cars->name = $validated['name'];
    $cars->model = $validated['model'];
    $cars->save();

    return redirect()->route('addCars')->with('success', 'Car added successfully!');
        
        // return view('store');
    }

    function editCars($id){
        $id = base64_decode($id);
        // dd($id);
        $Data = Car::findOrFail($id);

        // dd($Data);
        return view('editCars', compact('Data'));
    }

    function updateCars(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required|max:50',
            'model' => 'required|max:15'
        ]);

        $Data = Car::findOrFail(base64_decode($id));
        $Data->name = $validated['name'];
        $Data->model = $validated['model'];
        $Data->save();

        return redirect()->route('cars')->with('success', 'Car updated successfully!');
    }

    function deleteCars($id){

        Car::where('id', base64_decode($id))->delete();

            return redirect()->route('cars')->with('success', 'Car deleted successfully!');
    }
}
