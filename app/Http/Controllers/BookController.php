<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class BookController extends Controller{
   // Hiển thị tất cả sách
public function index()
{
    $data = DB::table("sach")->get();
    return view("qlysach.sach", compact("data"));
}

// Hiển thị theo thể loại
public function theloai($id)
{
    $data = DB::table("sach")
                ->where("the_loai", $id)
                ->get();

    return view("qlysach.sach", compact("data"));
}
}
