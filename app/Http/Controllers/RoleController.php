<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
       $Role = Role::latest()->paginate(5);
       return view('Role.index',compact('Role'))
       ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('Role.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre'=>'required',
            'Description'=>'required',
            

        ]);
      Role::create($request->all());
       return redirect()->route('Role.index')
       ->with('success','Role created successfully');   
    }

   
    public function show(Role $Role)
    {
      return view('Role.show',compact('Role'));  
    }

  
    public function edit(Role $Role)
    {
        return view('Role.edit',compact('Role'));
    }

   
    public function update(Request $request, Role $Role)
    {
        $request->validate([

        ]);
        $Role->update($request->all());
        return redirect()->route('Role.index')
        ->with('succes','Role updated successfully');
    }

   
    public function destroy(Role $Role)
    {
        $Role->delete();
        return redirect()->route('Role.index')
        ->with('success','Role deleted successfully');
    }
}
