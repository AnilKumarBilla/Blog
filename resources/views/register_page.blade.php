@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card my-4">
          <div class="card-header">
            <h4>Register</h4>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('register_account') }}" class="mb-3">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <p>Having an Account? <a href="{{ route('login') }}">Login Here</a> </p>
          </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
      </div>
    </div>


  </div>

@endsection
