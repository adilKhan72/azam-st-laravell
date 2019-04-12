<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

       
        
        <p>{{ $blog->id }} :  {{ $blog->title }} </p>
        <p>{{ $blog->paragraph }} </p>
        <a href="<?php echo url("blogs"); ?>"> back </a>
       
</body>
</html>