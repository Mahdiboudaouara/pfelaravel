@extends('reclamation.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$reclamation->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$reclamation->id}}" id="id" />
        <label>Titre</label></br>
        <input type="text" name="titre" id="name" value="{{$reclamation->name}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="Description" id="address" value="{{$reclamation->address}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop