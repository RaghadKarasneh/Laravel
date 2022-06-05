<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <form action="{{url('add-data')}}" method="post">
        @csrf 
        Title<input type="text" name="title">
        Body<input type="text" name="body">
        <button type="submit">Add Data</button>
    </form>
</body>
</html>