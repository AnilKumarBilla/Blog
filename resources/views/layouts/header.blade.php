<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{ route('index') }}">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">



      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
      <a href="{{ route('create_blog') }}" class="btn btn-outline-dark btn-sm mx-2">Create Blog</a>
      <a href="#" class="mx-2 text-secondary"><i class="fas fa-search"></i></a>
      <a href="#" class="mx-2 text-secondary"><i class="far fa-bookmark"></i></a>
      <a href="#" class="mx-2 text-secondary"><i class="far fa-bell"></i></a>
      <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm ml-2">Log In</a>
    </div>
  </nav>
</div>
