<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        return 'Selamat Datang';
        }
    public function about() {
        return 'Nama : Muhammad ali murrofid, NIM : 2141720191';
        }
    public function article(Request $request, $id) {
        return 'Halaman Article' . $id;
        }
}
