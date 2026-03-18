<!DOCTYPE html>
<html>
<head>
    <title>Danh sách thể loại</title>
    <style>
        table { width: 50%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2 f2 f2; }
    </style>
</head>
<body>
    <h2>Danh sách thể loại phim</h2>
    <table>
        <tr>
            <th>Tên Tiếng Anh</th>
            <th>Tên Tiếng Việt</th>
        </tr>
        @foreach($genres as $genre)
        <tr>
            <td>{{ $genre->genre_name }}</td>
            <td>{{ $genre->genre_name_vn }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>