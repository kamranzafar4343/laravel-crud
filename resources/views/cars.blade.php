@extends('layouts.app')

@section('title', 'List of cars')

@section('content')
    <h1 class="mb-4">List of cars</h1>

  <a href="{{ route('addCars') }}" class="btn btn-success mb-3">
    Add cars
</a>


@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Model</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @if (isset($data) && $data->count() > 0)           
           @foreach ($data as $cars)
            <tr>
               <td>{{ $cars->id ?? '' }}</td>

               {{-- relationship access --}}
               <td>{{ $cars->carData->car_name ?? '' }}</td>
               <td>{{ $cars->carData->car_model ?? '' }}</td>
               <td>
                   
                 <a href="{{ route('editCars', base64_encode($cars -> id)) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="{{ route('deleteCars', base64_encode($cars-> id)) }}" class="btn btn-danger btn-sm">
                    Delete
                </a>
             
               </td>
           </tr>

           @endforeach
           @endif
        </tbody>
    </table>
@endsection
