@extends('components.layouts.app')
  
@section('title', 'Home')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List of Residence</h1>
        <a href="{{ route('baranggay.create') }}" class="btn btn-primary">Add Residence</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Purok</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($baranggay->count() > 0)
                @foreach($baranggay as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->birthday }}</td>
                        <td class="align-middle">{{ $rs->purok }}</td>
                        <td class="align-middle">{{ $rs->age }}</td> 
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('baranggay.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('baranggay.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('baranggay.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Person not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection