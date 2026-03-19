<!DOCTYPE html>
<html lang="vi">
<body>
    @foreach($movies as $movie)
        Tên phim: {{ $movie->movie_name }}
        Ngày phát hành: {{ $movie->release_date }}
        Thời lượng: {{ $movie->runtime }}<br>
    @endforeach
</body>
</html>