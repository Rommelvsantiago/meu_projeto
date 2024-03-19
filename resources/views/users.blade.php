<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista de Usuários<h2>
        <ul>
            @foreach($users as $user)
                <li>{{$user->name}}</li>
                <li>{{$user->email}}</li>
                <li>{{$user->password}}</li>
            @endforeach
        </ul>
</body>
</html>