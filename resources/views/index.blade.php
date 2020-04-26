@extends('layouts.app')

@section('content')
    <div class="container bg-dark p-4 rounded">
      <div class="row justify-content-center p-4 text-center">
        <h1 class="display-4 text-white">Welcome to My Blog</h1>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          @foreach($blogs as $blog)

          <div class="card my-2">
            <div class="card-body">
              <p class="m-0 badge badge-primary">Category Name</p><br>
              <a href="{{ route('viewBlog', [ $blog['id'], $blog['slug'] ] ) }}" class="m-0 text-dark">{{ $blog['title'] }}</a>
              <p class="m-0"> {{ substr( strip_tags($blog['content']) , 0, 100 ) }} </p>
              <h6 class="m-0">Created by: Instacks <small>{{ $blog['created_at']->diffForHumans() }}</small></h5>
            </div>
          </div>

          @endforeach

        </div>

        <div class="col-md-4">
          <div class="list-group sticky-top my-2">
            <a href="#" class="list-group-item list-group-item-action active">
              Popular Blogs
            </a>
            <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
            <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
          </div>
        </div>
      </div>
    </div>
@endsection
