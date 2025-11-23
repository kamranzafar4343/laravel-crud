<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    function index(Request $request){
        $data = User::all();

        // dd($data);

        return view('welcome', compact('data'));
    }
    function add(Request $request){
    
        return view('add');
    }
    function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'passcode'=> 'required|min:6',
        ]);

        $user = new User();
    $user->name = $validated['name'];
    $user->email = $validated['email'];
    $user->password = bcrypt($validated['passcode']);
    $user->save();

    return redirect()->route('add')->with('success', 'User created successfully!');
        
        // return view('store');
    }

    function edit($id){
        $id = base64_decode($id);
        // dd($id);
        $Data = User::findOrFail($id);

        // dd($Data);
        return view('edit', compact('Data'));
    }

    function update(Request $request, $id){

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'passcode'=> 'required|min:6',
        ]);

        $Data = User::findOrFail(base64_decode($id));
        $Data->name = $validated['name'];
        $Data->email = $validated['email']; 
        $Data->password = bcrypt($validated['passcode']);
        $Data->save();

        return redirect()->route('index')->with('success', 'User updated successfully!');
    }

    function delete($id){

        User::where('id', base64_decode($id))->delete();

            return redirect()->route('index')->with('success', 'User deleted successfully!');
    }
}
