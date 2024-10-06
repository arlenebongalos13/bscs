@extends('components.layouts.app')
  
@section('title', 'Show Residence')
  
@section('contents')
    <h1 class="mb-0">Info</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $baranggay->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Birthday</label>
            <input type="text" name="birthday" class="form-control" placeholder="birthday" value="{{ $baranggay->birthday }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Purok</label>
            <input type="text" name="purok" class="form-control" placeholder="Purok" value="{{ $baranggay->purok }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Age</label>
            <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $baranggay->age }}" readonly>
        </div> 
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $baranggay->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $baranggay->updated_at }}" readonly>
        </div>
    </div>
@endsection