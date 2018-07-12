<!DOCTYPE>

<html>
<head>
    <title>Hello world!</title>
</head>
<body>
    <h1>Hello world again compact!</h1>
    <ul>
        @foreach($tasks as $task)

            <li>{{ $task->body }}</li>

        @endforeach
    </ul>
</body>
</html>