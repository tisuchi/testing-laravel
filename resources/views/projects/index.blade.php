<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bload Page</title>
</head>
<body>
    <h1>Birdboard</h1>

    @foreach($projects as $project)
        {{ $project->title }}
    @endforeach

    <form action="projects" method="POST">
        {{ csrf_field() }}
        Title: <input type="text" name="title">
        <br>
        <br>
        Description: <input type="text" name="description">
        <br>
        <br>
        <input type="submit" value="Post the form">
    </form>
</body>
</html>