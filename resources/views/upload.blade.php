<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola soy una imagen</h1>
    <form method="POST" enctype="multipart/form-data">
    {{-- @csrf --}}
    <input type="file" name="photo">
    <input type="submit" name="upload">
    </form>
</body>
</html>