<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KasirController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:kasir']);
    }

    public function dashboard()
    {
        return view('kasir.dashboard'); // Buat file view ini juga
    }
}

?>