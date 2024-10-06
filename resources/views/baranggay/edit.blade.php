@extends('components.layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('baranggay.update', $baranggay->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $baranggay->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Birthday</label>
                <input type="text" name="birthday" class="form-control" placeholder="Birthday" value="{{ $baranggay->birthday }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Purok</label>
                <input type="text" name="purok" class="form-control" placeholder="Purok" value="{{ $baranggay->purok }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" value="{{ $baranggay->age }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection