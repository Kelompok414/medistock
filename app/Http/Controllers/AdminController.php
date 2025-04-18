<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function dashboard()
    {
        return view('admin.dashboard'); // Buat file view ini nanti
    }
}
?>