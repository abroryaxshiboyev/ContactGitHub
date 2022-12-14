<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table border="1">
        <tr>
            <td>№</td>
            <td>title</td>
            <td>description</td>
            <td>name</td>
            <td>email</td>
            <td>file</td>
            <td>Status</td>
            <td>Orinlandi</td>
            <td>delete</td>
        </tr>

        @foreach ($messages as $message)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $message->title }}</td>
            <td>{{ $message->description }}</td>
            <td>{{ $message->name }}</td>
            <td>{{ $message->email }}</td>
            <td><img src="{{ $message->file }}" alt="" style="width: 200px"></td>
            <td>{{ $message->status }}</td>
            <td>
                <form action="{{ url('admins/'.$message->id ) }}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                    <input type="submit" value="OK">
                </form>
            </td>
            <td>
                <form action="{{ url('admins/'.$message->id ) }}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <input type="submit" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>