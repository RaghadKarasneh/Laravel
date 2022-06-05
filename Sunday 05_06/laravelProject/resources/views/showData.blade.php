<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    <title>Update</title>
</head>
<body>
  
<div class="container" style="margin:100px">
<table class="table">
    <tr>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Product Price</th>
    </tr>
    <tr>
    <td>{{$update->candy_name}}</td>
    
    <td>{{$update->candy_quantity}}</td>

    <td>{{$update->candy_price}}</td>
</tr>
    <!--update Button-->
</table>
</div>
  
</body>
</html>