<!DOCTYPE>

<html>
<head>
    <title>Hello world!</title>
</head>
<body>
<h1>Hello world again tasks!</h1>
<ul>
    @foreach($tasks as $task)
        <li>
            <a href="/task/{{ $task->id }}">{{ $task->body }}</a>
        </li>

    @endforeach
</ul>
</body>
</html>