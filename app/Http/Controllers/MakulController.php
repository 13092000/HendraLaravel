<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        return "halo saya index, dari Makul Controller";
    }

    public function create()
    {
        return "halo saya create, dari Makul controller";
    }
}
