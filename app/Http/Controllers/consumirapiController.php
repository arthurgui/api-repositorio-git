<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class consumirapiController extends Controller
{
    //
    public function index()
    {
        $response = Http::get('https://api.github.com/users/arthurgui/repos');

        dd($response->json());
    }
}
