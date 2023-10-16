<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Home</title>
</head>

<body>
    <a href="/awards">Awards</a>
    <a href="/top-rated-movies">Top 50 movies</a>
    <h1>Top 10 movies</h1>
    <ol>
        <?php foreach ($movies as $movie) : ?>
            <li><?= $movie->name ?> | rating: <strong><?= $movie->rating ?></strong> </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>