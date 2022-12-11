<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $data = Todo::all();
        return view('index', ['data' =>$data]);
    }
}
