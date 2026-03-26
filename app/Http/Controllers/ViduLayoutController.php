<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ViduLayoutController extends Controller
{
    public function chitiet($id)
{
    $book = DB::select("select * from sach where id = ?", [$id]);

    return view("vidusach.chitiet", [
        "book" => $book[0] // lấy phần tử đầu
    ]);

}
}
