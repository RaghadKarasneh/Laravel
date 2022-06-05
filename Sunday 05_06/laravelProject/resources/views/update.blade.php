<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="{{url('update-data/id/'.$update->id)}}" method="post">
    @csrf
    @method('PUT')
    <!--Update title-->
    <label for="title">Name</label>
    <input type="text" name="name" id="title" value="{{$update->candy_name}}">
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" id="quantity" value="{{$update->candy_quantity}}">
    <!--Update body-->
    <label for="body">Price</label>
    <input type="text" name="price" id="body" value="{{$update->candy_price}}">
    <!--update Button-->
    <button type="submit">Update</button>
    </form>
</body>
</html>