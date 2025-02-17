<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama : Fachry Akbar Bagaskara <br> NIM : 2341760133';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}
