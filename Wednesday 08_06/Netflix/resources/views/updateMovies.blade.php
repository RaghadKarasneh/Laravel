
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="{{url('movies/'. $update->id)}}" method="post">
    @csrf
    @method('PUT')
    <!--Update title-->
    <label for="title">Movie Name</label>
    <input type="text" name="name" id="title" value="{{$update->movie_name}}">
    <label for="quantity">Movi Description</label>
    <input type="text" name="desc" id="quantity" value="{{$update->movie_description}}">
    <!--Update body-->
    <label for="body">Movie Genre</label>
    <input type="text" name="genre" id="body" value="{{$update->movie_genre}}">
    <label for="body">>Movie Video link</label>
    <input type="text" name="video" id="body" value="{{$update->movie_video}}">
    <!--update Button-->
    <button type="submit">Update</button>
    </form>
</body>
</html>