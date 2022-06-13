@extends('reclamation.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">
      
      <form action="{{ url('create') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="titre" id="titre" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Description" id="Description" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop