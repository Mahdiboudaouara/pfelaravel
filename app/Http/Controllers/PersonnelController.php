<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function index()
    {
       $personnel = personnel::all();
       return response()->json($personnel);
    //    return view('personnel.index',compact('personnel'))
    //    ->with('i',(request()->input('page',1)-1)*5);
    }

    // public function create()
    // {
    //     return view('personnel.create'); 
    // }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nom'=>'required',
        //     'prenom'=>'required',
        //     'email'=>'required',
        //     'password'=>'required',

        // ]);
      personnel::create($request->all());
       return redirect('/Admin/infos')->with('success','personnel created successfully');   
    }

   
    public function show(Personnel $client)
    {
      return view('personnel.show',compact('personnel'));  
    }

  
    public function edit(Personnel $personnel)
    {
        return view('personnel.edit',compact('personnel'));
    }

   
    public function update(Request $request, Personnel $personnel)
    {
        $request->validate([

        ]);
        $personnel->update($request->all());
        return redirect()->route('personnel.index')
        ->with('succes','personnel updated successfully');
    }

   
    public function destroy(Personnel $personnel)
    {
        $personnel->delete();
        return redirect()->route('personnel.index')
        ->with('success','personnel deleted successfully');
    }
}

