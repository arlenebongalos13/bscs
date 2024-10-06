@extends('components.layouts.app')
  
@section('title', 'Add')
  
@section('contents')
    <h1 class="mb-0">Add Residence</h1>
    <hr />
    <form action="{{ route('baranggay.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <input type="text" name="birthday" class="form-control" placeholder="Birthday">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="purok" class="form-control" placeholder="Purok">
            </div>
            <div class="col">
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection