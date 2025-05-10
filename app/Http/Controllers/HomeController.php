<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Get;
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

    public function api() {
        $response = Http::get('https://api.escuelajs.co/api/v1/users');

        if ($response->successful()) {
            $data = $response->object();
        } else {
        $data = [ 'message' => 'Error fetching data from API'];
        };
        return view('api',compact('data'));
    }
}