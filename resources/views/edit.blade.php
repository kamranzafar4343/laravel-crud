@extends('layouts.app')

@section('title', 'Edit')

@section('content')
    <h1 class="mb-4">Edit user</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<a href="{{ route('index') }}" class="btn btn-primary mb-3">View Dashboard</a>

    
<form action="{{ route('update', base64_encode($Data ->id)) }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" value="{{ $Data ->name }}" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $Data ->email }}" aria-describedby="emailHelp">
    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="passcode" value="{{ $Data ->password }}" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection
