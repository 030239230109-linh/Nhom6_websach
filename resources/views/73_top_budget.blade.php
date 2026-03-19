<!DOCTYPE html>
<html>
<head>
    <title>Top Budget Movies</title>
</head>
<body>

<h1>Top 10 Movies by Budget</h1>

<ul>
    @foreach($movies as $movie)
        <li>
            {{ $movie->movie_name }} - 
            {{ $movie->release_date }} - 
            {{ $movie->budget }}
        </li>
    @endforeach
</ul>

</body>
</html>