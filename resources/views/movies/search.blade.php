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

            <h2>Results:</h2>
            <?php foreach ($movies_by_input as $movie) : ?>
                <p>{{ $movie->name }}</p>
            <?php endforeach; ?>
</body>

</html>