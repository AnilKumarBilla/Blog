@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="card col-md-10 m-4">
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

    <div class="row justify-content-center">
      <div class="col-md-10">
        <div class="card">
          <div class="card-body">
            <form method="post" action="{{ route('create_comment', [ $blog['id'] ]) }}">
              @csrf
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Add Comment</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        @foreach($blog->comments as $comment)
        <div class="card my-2">
          <div class="card-body">
            <p class="m-0 p-0"> {{ $comment->comment }} </p>
            <p class="m-0 p-0"> Commented By: {{ $comment->user->name }} {{ $comment['created_at']->diffForHumans() }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>

</div>

@endsection
