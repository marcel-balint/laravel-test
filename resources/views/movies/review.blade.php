<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('movie.review', $movie->id) }}" method="post">
        @csrf
        <textarea name="text"></textarea>
        <button>Submit review</button>
    </form>
</body>
</html>