<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 50 Movies</title>
</head>

<body>
    <a href="/">
        < back to home</a>
            <h3>Top 50 Movies</h3>
            <ol>
                <?php foreach ($top_50_movies as $movie) : ?>
                    <li>{{ $movie->name }} | {{ $movie->rating }}</li>
                <?php endforeach; ?>

            </ol>
</body>

</html>