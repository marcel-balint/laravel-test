<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Awards list</title>
</head>

<body>
    <a href="/">
        < back to home</a>
            <h1>List of Movie Awards</h1>
            <p>The data: <?= $data ?></p>
            <ul>
                <?php foreach ($awards as $award) : ?>
                    <li><?= $award ?></li>
                <?php endforeach; ?>
            </ul>
</body>

</html>