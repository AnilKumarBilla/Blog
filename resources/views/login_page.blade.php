@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card my-4">
          <div class="card-header">
            <h4>Login</h4>
          </div>
          <div class="card-body">
            <form method="post" action="{{ route('login_account') }}" class="mb-3">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p>No Account? <a href="{{ route('register') }}">Register Here</a> </p>
          </div>
        </div>

      </div>
    </div>


  </div>

@endsection
