<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/">
        < back home</a>
            <?php foreach ($movie_details as $movie) : ?>
                <h3>{{ $movie->name }}</h3>
                <p>Year: {{ $movie->year }}</p>
                <p>Rating: {{ $movie->rating }}</p>
                <p>Votes: {{ $movie->votes_nr }}</p>
            <?php endforeach; ?>
</body>

</html>