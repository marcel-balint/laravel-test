<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Home</title>
</head>

<body>
    @include('components.navigation')
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
                <a href="/movie-detail/<?= $movie->id ?>">Details</a> |
                <a href="/movies/<?= $movie->id ?>/edit">Edit</a> |

                <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                 @method('DELETE')
                @csrf
                 <button>Delete</button>
                </form>

            </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>