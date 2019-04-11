<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <div>
    <h1>user</h1>
    <h3>

    @foreach ($user as $key => $value)
    <p>{{ $key }} ===  {{ $value }}</p>

    @endforeach
    </h3>
    </div>
</body>
</html>