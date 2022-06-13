<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;
use App\Models\Personnel;

class ReclamationController extends Controller
{
    public function index()
    {
        $Reclamation = Reclamation::all();
        $RH = Reclamation::all('departement')->where('departement', 'RH'); 
        $DAF = Reclamation::all('departement')->where('departement', 'DAF');
        $Purchases = Reclamation::all('departement')->where('departement', 'Purchases');
        $RndD = Reclamation::all('departement')->where('departement', 'RndD');
        $Deployment = Reclamation::all('departement')->where('departement', 'Deployment');
        $RH1 = Personnel::all('departement')->where('departement', 'RH'); 
        $DAF1 = Personnel::all('departement')->where('departement', 'DAF');
        $Purchases1 = Personnel::all('departement')->where('departement', 'Purchases');
        $RndD1 = Personnel::all('departement')->where('departement', 'RndD');
        $Deployment1 = Personnel::all('departement')->where('departement', 'Deployment');
        $Departement=[['departement'=>'RH','countReclamation'=>count($RH),'countEmployees'=>count($RH1),'Tsat'=>70],
        ['departement'=>'DAF','countReclamation'=>count($DAF),'countEmployees'=>count($DAF1),'Tsat'=>50],
        ['departement'=>'Purchases','countReclamation'=>count($Purchases),'countEmployees'=>count($Purchases1),'Tsat'=>28],
        ['departement'=>'RndD','countReclamation'=>count($RndD),'countEmployees'=>count($RndD1),'Tsat'=>36],
        ['departement'=>'Deployment','countReclamation'=>count($Deployment),'countEmployees'=>count($Deployment1),'Tsat'=>78]];
        $Diagramme=[['departement'=>'RH','Tsat'=>70],
        ['departement'=>'DAF','Tsat'=>50],
        ['departement'=>'Purchases','Tsat'=>28],
        ['departement'=>'RndD','Tsat'=>36],
        ['departement'=>'Deployment','Tsat'=>78]];

        return response()->json([$Reclamation,$Departement,$Diagramme]);
    //    return view('personnel.index',compact('personnel'))
    //    ->with('i',(request()->input('page',1)-1)*5);
    }

    // public function create()
    // {
    //     return view('personnel.create'); 
    // }

    public function store(Request $request)
    {

        Reclamation::create($request->all());
       return redirect('/Admin/reclamations')->with('success','Reclamation added successfully');   
    }
   
    public function show(Reclamation $client)
    {
      return view('reclamation.show',compact('reclamation'));  
    }

  
    public function edit(Reclamation $reclamation)
    {
        return view('reclamation.edit',compact('reclamation'));
    }

   
    public function update(Request $request, Reclamation $reclamation)
    {
        $request->validate([

        ]);
        $reclamation->update($request->all());
        return redirect()->route('reclamation.index')
        ->with('succes','reclamation updated successfully');
    }

   
    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();
        return redirect()->route('reclamation.index')
        ->with('success','reclamation deleted successfully');
    }
}

