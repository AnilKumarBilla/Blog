@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center my-4">
      <div class="col-md-9">
        <div class="card">
          <div class="card-body">
            <form method="post" action="{{ route('save_blog') }}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" name="title">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Content</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="content"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Create</button>
            </form>
          </div>
        </div>

      </div>
    </div>
</div>

@endsection

@section('js')

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector:'textarea',
      plugins: "lists",
    });
  </script>

@endsection
