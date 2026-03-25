@extends("layouts.sach_layout")

@section("title","Chi tiết sách")

@section("content")

<div class="row">
    <div class="col-4">
        <img src="{{ asset('book_image/'.$sach->file_anh_bia) }}" 
             width="100%">
    </div>

    <div class="col-8">
        <h3>{{ $sach->tieu_de }}</h3>

        <p><b>Giá:</b> 
            {{ number_format($sach->gia_ban, 0, ",", ".") }}đ
        </p>

        <p><b>Mô tả:</b></p>
        <p>{{ $sach->mo_ta }}</p>
    </div>
</div>

@endsection