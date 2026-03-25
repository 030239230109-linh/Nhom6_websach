<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Top vote</title>
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
    @foreach($movies as $movie)
        Tên phim: {{ $movie->movie_name }}
        Ngày phát hành: {{ $movie->release_date }}
        Thời lượng: {{ $movie->runtime }}<br>
    @endforeach
</body>
</html>