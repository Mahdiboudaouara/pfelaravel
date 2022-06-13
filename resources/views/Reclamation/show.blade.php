@extends('Reclamation.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Titre : {{ $Reclamation->Titre }}</h5>
        <p class="card-text">Description : {{ $Reclamation->Description }}</p>
        
  </div>
       
    </hr>
  
  </div>
</div>