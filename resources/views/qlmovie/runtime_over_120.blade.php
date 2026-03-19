<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Movies with runtime > 120</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2>Movies with runtime greater than 120 minutes</h2>

<table>
    <tr>
        <th>STT</th>
        <th>Tên phim</th>
        <th>Ngày phát hành</th>
        <th>Thời lượng (phút)</th>
    </tr>

    @foreach($movies as $index => $movie)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $movie->movie_name }}</td>
        <td>{{ $movie->release_date }}</td>
        <td>{{ $movie->runtime }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>