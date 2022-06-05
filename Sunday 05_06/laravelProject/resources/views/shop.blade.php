<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- To show the confirmation message after updating data -->
 @if(session('message'))
    <p>{{session('message')}}</p>
 @endif
 <a href="{{url('add-data')}}">Add Data</a>
 <div class="container" style="margin:100px">
    <div class="row">

@foreach($update as $value)
<ul>
    <li>{{$value->id}}</li>
    <li>{{$value->candy_name}}</li>
    <li>{{$value->candy_quantity}}</li>
    <li>{{$value->candy_price}}</li>
    <li><a href="{{url('delete-data/id/'.$value->id)}}">Delete</a></li>
    <li><a href="{{url('edit-data/id/'.$value->id)}}">Update</a></li>
    <li><a href="{{url('showData/id/'.$value->id)}}">Show Data</a></li>
</ul>
@endforeach
</body>

</html>