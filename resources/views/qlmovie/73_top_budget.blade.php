<!DOCTYPE html>
<html>
<head>
    <title>Top Budget Movies</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse; 
        }
        th,td{
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
    </style>
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