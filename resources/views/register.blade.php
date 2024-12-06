@extends('master')
@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="w-50">
      <h1 class="text-center mb-4">Register</h1>
      <form action="/registeruser" method="POST">

        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">User Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Register</button>
        </div>
      </form>
    </div>
  </div>
  
  
@endsection