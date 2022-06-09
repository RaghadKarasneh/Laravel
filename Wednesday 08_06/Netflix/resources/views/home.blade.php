<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    <title>@yield('title','')</title>
    <style>
.social-link {
  width: 30px;
  height: 30px;
  border: 1px solid #ddd;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #666;
  border-radius: 50%;
  transition: all 0.3s;
  font-size: 0.9rem;
}
.social-link:hover,
.social-link:focus {
  background: #ddd;
  text-decoration: none;
  color: #555;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <li class="nav-item active">
            LOGO <!-- Logo -->
        </li>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                    <a class="nav-link" href="">Home</a>
                </li>

                <li class="nav-item">
                 <a class="nav-link " href="">About</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="">Register</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="">Login</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>
<div>
    @if(session('message'))
    <p>{{session('message')}}</p>
 @endif
 
<div class="container" style="margin:100px">
    <div class="row">
        @foreach($movies as $item)
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <iframe width="100%" height="100%" src="{{$item->movie_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <div class="card-body">
                      <h5 class="card-title">{{$item->movie_name}}</h5>
                      <p class="card-text">Movie genre: {{$item->movie_genre}}</p>
                      <a class="btn btn-primary" href="{{url('/movies/id/'.$item->id)}}"style="margin:10px auto;">Show</a>
                      <a class="btn btn-primary" href="{{url('/movies/'.$item->id.'/edit')}}"style="margin:10px auto;">Update</a>
                      <a class="btn btn-primary" href="{{url('/movies/delete/'.$item->id)}}" style="margin:10px auto;">Delete</a>
                    </div>
                  </div>
        
      </div>
      @endforeach
    </div>
    <a class="btn btn-danger add-data" href="{{url('movies/create')}}">Add Movie</a>
</div>
  </div>
</body>
</html>