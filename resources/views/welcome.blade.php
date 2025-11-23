@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="mb-4">Dashboard</h1>

  <a href="{{ route('add') }}" class="btn btn-success mb-3">
    Add User
</a>


@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           @if (isset($data) && $data->count() > 0)           
           @foreach ($data as $user)
            <tr>
               <td>{{ $user-> id ?? '' }}</td>
               <td>{{ $user-> name ?? '' }}</td>
               <td>{{ $user-> email ?? '' }}</td>
               <td>
                   
                 <a href="{{ route('edit', base64_encode($user -> id)) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="{{ route('delete', base64_encode($user-> id)) }}" class="btn btn-danger btn-sm">
                    Delete
                </a>
             
               </td>
           </tr>

           @endforeach
           @endif
        </tbody>
    </table>
@endsection
