@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="card col-md-12 m-4">
        <div class="card-body">
          <h2 class="text-center">{{ $blog['title'] }}</h2>
          <h6 class="p-1 text-center text-primary">Category</h6>
          <div class="row">
            <div class="col-md-4">
              <h6><small>Author: Feroz</small></h6>
            </div>
            <div class="col-md-4 text-center">
              <h6><small>Views: {{ $blog['views'] }}</small></h6>
            </div>
            <div class="col-md-4">
              <h6 class="float-right"><small>Created {{ $blog['created_at']->diffForHumans() }}</small></h6>
            </div>
          </div>

          <hr>

          <p>{!! $blog['content'] !!}</p>
          
        </div>
      </div>

    </div>
</div>

@endsection
