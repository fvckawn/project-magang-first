<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BookController extends Controller
{
    public function home() {
        $data = "Data All Book";
        return view('rent_book');
    }
}