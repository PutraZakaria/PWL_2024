<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'NIM : 2241720220 <br> NAMA : PUTRA ZAKARIA MUZAKI';
    }

    public function articles($Id) {
        return 'Halaman Artikel dengan ID '.$Id;
    }
}
