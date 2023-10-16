<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Shawshank redemption</title>
</head>

<body>
    <a href="/">
        < back to home</a>
            <?php foreach ($movie_shawshank_redemption as $movie) : ?>
                <h2>{{ $movie->name }}</h2>
                <br>
                <p>Year: {{ $movie->year }}</p>
                <p>Rating: {{ $movie->rating }}</p>
            <?php endforeach; ?>
</body>

</html>