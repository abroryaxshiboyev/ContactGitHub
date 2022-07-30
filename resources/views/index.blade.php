<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url('/message')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="title"><br><br>
    <input type="text" name="description" placeholder="description"><br><br>
    <input type="text" name="name" placeholder="name"><br><br>
    <input type="email" name="email" placeholder="email"><br><br>
    <input type="file" name="file" placeholder="file"><br><br>
    <input type="submit" value="yuborish">
</form>
@if (isset($message))
    {{$message}}
@endif
</body>
</html>