<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Page;
use Illuminate\Support\Facades\Http;
use App\Models\comments;
use App\Models\agendas;
use Filament\Forms\Get;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout.index');
    }
    public function article()
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

    public function page() {
        $_GET = Page::get();
        $data = [
            'data' => $_GET,
        ];
        return view('page', $data);
    }

    public function comment() {
        $_GET = comments::get();

        $data = [
            'data' => $_GET,
        ];
        return view('comment', $data);
    }

    public function agendas() {
        $_GET = agendas::get();

        $data = [
            'data' => $_GET,
        ];
        return view('agendas', $data);
    }
}