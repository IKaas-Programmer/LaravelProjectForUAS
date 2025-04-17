<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $_GET = Articles::get();

        $data = [
            'data' => $_GET,
        ];

        return view('article', $data);
    }
}
