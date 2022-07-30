<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/user')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit" value="Ro'yxatdan o'tish"><br><br>
    </form>
    <form action="{{url('user/1')}}" method="GET">
        @csrf
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <input type="submit"value="Kirish">
    </form>
    @if(isset($status))
    {{$status}}
    @endif
</body>
</html>