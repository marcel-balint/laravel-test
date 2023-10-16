<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Home</title>
</head>

<body>
    <h1>This is the index page............</h1>
    <ul>
        <?php foreach ($movies as $movie) : ?>
            <li><?= $movie ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>