<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    public function index()
    {
       $departement = Departement::latest()->paginate(5);
       return view('departement.index',compact('departement'))
       ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('departement.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            

        ]);
      Departement::create($request->all());
       return redirect()->route('departement.index')
       ->with('success','departement created successfully');   
    }

   
    public function show(Departement $departement)
    {
      return view('departement.show',compact('departement'));  
    }

  
    public function edit(Departement $departement)
    {
        return view('departement.edit',compact('departement'));
    }

   
    public function update(Request $request, Departement $departement)
    {
        $request->validate([

        ]);
        $departement->update($request->all());
        return redirect()->route('departement.index')
        ->with('succes','Departement updated successfully');
    }

   
    public function destroy(Departement $client)
    {
        $client->delete();
        return redirect()->route('departement.index')
        ->with('success','Departement deleted successfully');
    }
}

