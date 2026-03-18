<!DOCTYPE html>
<html>
<head>
    <title>Phim Hot</title>
    <style>
        .container{
            display: grid;
            grid-template-columns: repeat(4, 1fr); 
            gap: 20px;
        }

        .card{
            border:1px solid #ccc;
            padding:10px;
            border-radius:10px;
        }

        img{
            width:100%;
            height:200px;
            object-fit:cover;
        }
    </style>
</head>
<body>

<h2>Phim hot</h2>

<div class="container">
@foreach($movies as $m)
    <div class="card">
        <h3>{{ $m->movie_name }}</h3>
        <p>{{ $m->release_date }}</p>
        <p>{{ $m->overview }}</p>
        <img src="{{ $m->image_link }}">
    </div>
@endforeach
</div>

</body>
</html>
