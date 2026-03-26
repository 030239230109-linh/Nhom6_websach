<x-book-layout>

    <x-slot name="title">
        Chi tiết sách
    </x-slot>

    <div class="container mt-4">

        <div class="row">

            <!-- Ảnh sách -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/'.$book->file_anh_bia) }}" 
                     class="img-fluid"
                     style="max-height:300px">
            </div>

            <!-- Thông tin sách -->
            <div class="col-md-8">

                <h2>{{ $book->tieu_de }}</h2>

                <p>
                    <b>Giá:</b> 
                    <span style="color:red;font-size:20px">
                        {{ number_format($book->gia_ban,0,",",".") }} đ
                    </span>
                </p>

                <p>
                    <b>Thể loại:</b> {{ $book->the_loai }}
                </p>

                <hr>

                <p>
                    <p><b>Mô tả:</b></p>
                    <p>{{ $book->mo_ta }}</p>

                <br>

                <a href="{{ url('sach') }}" class="btn btn-primary">
                    ← Quay lại
                </a>

            </div>

        </div>

    </div>

</x-book-layout>