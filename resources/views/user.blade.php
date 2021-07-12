<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Hello my boys! Welcome to the CODING WORLD. <br> </p>

    @foreach ($firsts as $first)

        {{ $first->name }}
        
        {{ $first->task }}

        {{ $first->position }} <br>

    @endforeach


</body>
</html>