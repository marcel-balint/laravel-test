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
    <a href="/movies/shawshank-redemption">The Shawshank redemption</a>
    <div>Search: <form action="/search" method="get">
            <input type="text" name="name" placeholder="Search a movie">
            <input type="submit" value="Search">
        </form>
    </div>
    <h1>Top 10 movies</h1>
    <ol>
        <?php foreach ($movies as $movie) : ?>
            <li>
                <?= $movie->name ?> | rating: <strong><?= $movie->rating ?></strong>
                <a href="/movie-detail?id=<?= $movie->id ?>">Details</a>
            </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>