<!DOCTYPE html>
<html>
<head>
    <title>Thông tin sách</title>
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
        img{
            width:80px;
        }
    </style>    
</head>
<body>

<h2>Danh sách sách thuộc thể loại Tác phẩm kinh điển</h2>

<table>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nhà xuất bản</th>
        <th>Tác giả</th>
        <th>Giá bán</th>
        <th>Hình ảnh</th>
    </tr>

@foreach($sach as $key => $s)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>{{ $s->tieu_de }}</td>
    <td>{{ $s->nha_xuat_ban }}</td>
    <td>{{ $s->tac_gia }}</td>
    <td>{{ $s->gia_ban }}</td>
    <td>
        <img src="{{$s->link_anh_bia }}">
    </td>
</tr>
@endforeach

</table>

</body>
</html>