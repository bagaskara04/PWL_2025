<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return 'Nama : Fachry Akbar Bagaskara <br> NIM : 2341760133 <br> Kelas : SIB 2F';
    }
}
