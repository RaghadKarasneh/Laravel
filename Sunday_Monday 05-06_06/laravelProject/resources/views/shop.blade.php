<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .add-data{
            width: 50%;
            margin: 52px auto;
            position: relative;
            padding: 10px;
            left: 23%;
            font-size: 20px;
        }
        </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <li class="nav-item active">
            <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Candy-clipart.svg/768px-Candy-clipart.svg.png" alt="" srcset="" height="70px" width="70px">
        </li>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>

                <li class="nav-item">
                 <a class="nav-link " href="{{ url('/about') }}">About</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="{{ url('/register') }}">Register</a> 
                </li>
                <li class="nav-item">
                 <a class="nav-link " href="{{ url('/login') }}">Login</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>
    <!-- To show the confirmation message after updating data -->
 @if(session('message'))
    <p>{{session('message')}}</p>
 @endif
 

        <div class="container" style="margin:100px">
            <div class="row">
                @foreach($update as $value)
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{$value->candy_image}}" height= "250px" width= "280px" alt="" srcset="">
                            <div class="card-body">
                                <h5 class="card-title">{{$value->candy_name}}</h5>
                                <p class="card-text">Quantity: {{$value->candy_quantity}}</p>
                                <p class="card-text">Price: {{$value->candy_price}}</p>
                                <a class="btn btn-primary" href="{{url('delete-data/id/'.$value->id)}}" style="margin:10px auto;">Delete</a>
                                <a class="btn btn-primary" href="{{url('edit-data/id/'.$value->id)}}"style="margin:10px auto;">Update</a>
                                <a class="btn btn-primary" href="{{url('showData/id/'.$value->id)}}"style="margin:10px auto;">Show Data</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="btn btn-danger add-data" href="{{url('add-data')}}">Add Data</a>
        </div>
        <!--Add new item-->
        
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            Group Three
        </div>
  <!-- Copyright -->
</footer>
</body>
</html>


