@extends('layouts.app')

@section('title', 'Add Cars')

@section('content')
    <h1 class="mb-4">Add Cars</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('cars') }}" class="btn btn-primary mb-3">View Dashboard</a>

    
<form action="{{ route('storeCars') }}" method="post">
    @csrf

    <select name="car_data_id" class="form-control mb-3" style="width: 300px;">
      <option value="">Select Car</option>

      @foreach($carsData as $car)
          <option value="{{ $car->id }}">
              {{ $car->car_name }} - {{ $car->car_model }}
          </option>
      @endforeach

  </select>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection
