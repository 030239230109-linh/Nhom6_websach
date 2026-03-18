<!DOCTYPE html>
<html>
<head>
    <title>Phim Action</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
        th,td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }
        th{
            background-color: black;
            color: white;
        }
        img{
            width:120px;
        }
    </style>
</head>
<body>

<h2>Danh sách phim Action</h2>

<table>
<tr>
    <th>Tên phim</th>
    <th>Ngày phát hành</th>
    <th>Mô tả</th>
    <th>Hình ảnh</th>
</tr>

@foreach($movies as $m)
<tr>
    <td>{{ $m->movie_name }}</td>
    <td>{{ $m->release_date }}</td>
    <td>{{ $m->overview }}</td>
    <td>
        <img src="{{ $m->image_link }}" alt="image">
    </td>
</tr>
@endforeach

</table>

</body>
</html>