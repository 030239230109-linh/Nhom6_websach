@extends("layouts.sach_layout")

@section("title","Sách")

@section("content")

<h4>Danh sách sách</h4>

<div class="list-book">
    @foreach($data as $row)
        <div class="book">
            <a href="{{ url('sach/chitiet/'.$row->id) }}">
                <img src="{{ asset('book_image/'.$row->file_anh_bia) }}" width="200"><br>
                <b>{{$row->tieu_de}}</b><br>
                <i>{{number_format($row->gia_ban,0,",",".")}} đ</i>
            </a>
        </div>
    @endforeach
</div>

@endsection