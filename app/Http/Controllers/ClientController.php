<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
   
    public function index()
    {
       $client = Client::latest()->paginate(5);
       return view('client.index',compact('client'))
       ->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('client.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
      client::create($request->all());
       return redirect()->route('client.index')
       ->with('success','Client created successfully');   
    }

   
    public function show(Client $client)
    {
      return view('client.show',compact('client'));  
    }

  
    public function edit(Client $client)
    {
        return view('client.edit',compact('client'));
    }

   
    public function update(Request $request, Client $client)
    {
        $request->validate([

        ]);
        $client->update($request->all());
        return redirect()->route('client.index')
        ->with('succes','client updated successfully');
    }

   
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')
        ->with('success','client deleted successfully');
    }
}
