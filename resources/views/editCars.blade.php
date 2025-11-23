@extends('layouts.app')

@section('title', 'Edit Cars')

@section('content')
    <h1 class="mb-4">Edit Cars</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('cars') }}" class="btn btn-primary mb-3">View Dashboard</a>

    
<form action="{{ route('updateCars', base64_encode($Data ->id)) }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" value="{{ $Data ->name }}" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="model" class="form-control" id="model" name="model" value="{{ $Data ->model }}" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection
