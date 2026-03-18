<!DOCTYPE html>
<html>
<head>
    <title>Genres</title>
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
    </style>
</head>

<body>

<h2>Danh sách thể loại</h2>

<table>
<tr>
    <th>Genre EN</th>
    <th>Genre VN</th>
</tr>

@foreach($genres as $g)
<tr>
    <td>{{ $g->genre_name }}</td>
    <td>{{ $g->genre_name_vn }}</td>
</tr>
@endforeach

</table>

</body>
</html>