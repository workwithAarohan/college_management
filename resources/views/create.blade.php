<html>
    <head>
        <title>keyframe and animation</title>
        <link rel="stylesheet" type="text/css" href="animation.css">
    </head>
    <body>
        <div class="box">
            welcome
            @foreach ($test as $tests)
        {{ $tests->name }}
        {{ $tests->description }}<br>
        @endforeach

        </div>
    </body>
</html>
