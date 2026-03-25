
<!DOCTYPE html>
<html>
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

<h2>Top 10 phim điểm cao</h2>

<table>
<tr>
    <th>Tên phim</th>
    <th>Ngày phát hành</th>
    <th>Vote</th>
</tr>

@foreach($movies as $m)
<tr>
    <td>{{ $m->movie_name }}</td>
    <td>{{ $m->release_date }}</td>
    <td>{{ $m->vote_average }}</td>
</tr>
@endforeach

</table>