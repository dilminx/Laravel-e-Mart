@extends('master')
@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="w-50">
      <h1 class="text-center mb-4">Login</h1>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
  
  
@endsection