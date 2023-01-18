<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>upload file</h2>
    <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" name="name" placeholder="Product Name">
    <input type="text" name="description" placeholder="Product description">
    <input type="file" name="file">
    <input type="submit" >
    </form>
</body>
</html>