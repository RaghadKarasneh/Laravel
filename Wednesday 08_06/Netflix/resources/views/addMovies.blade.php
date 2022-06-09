<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <form action="{{url('movies')}}" method="post">
        @csrf 
     
        
        <label for="title">Movie Name</label>
        <input type="text" name="name" id="title">
        <label for="quantity">Movi Description</label>
        <input type="text" name="desc" id="quantity">
        <!--Update body-->
        <label for="body">Movie Genre</label>
        <input type="text" name="genre" id="body">
        <label for="video">Movie Video link</label>
        <input type="text" name="video" id="video">
    <button type="submit">add Item</button>
    </form>
    
</body>
</html>
