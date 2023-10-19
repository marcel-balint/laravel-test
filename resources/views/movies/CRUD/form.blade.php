<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    @include('components.messages')
    @if ($movie->id)
    <a href="/">< back home</a>
    <h2>Edit</h2>
        <form action="{{ route('movies.update', $movie->id) }}" method="post">
        @method('PUT')
    @else
    <a href="/">< back home</a>
    <h2>Create</h2>
    <form action="{{ route('movies.store') }}" method="post">
    @endif
        @csrf
    <label for="name">Name</label>
    <br>
    <input type="text" class="{{ $errors->first('name') ? 'test' : '' }}" name="name" value="{{ old('name', $movie->name) }}">
    <p style="display: none"></p>
    <br>

    <label for="year">Year</label>
    <br>
    <input type="text" class="{{ $errors->first('year') ? 'test' : '' }}"  name="year" value="{{ old('year', $movie->year) }}">
    <br>
    <br>
    <button>Save</button>
    </form>
</form>
</body>
</html>