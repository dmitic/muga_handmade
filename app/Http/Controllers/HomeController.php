<?php

namespace App\Http\Controllers;

use App\User;
use App\Proizvod;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){

        $proizvodi = Proizvod::with('slike')->orderBy('created_at', 'desc')->get();
        return view('index', compact('proizvodi'));
    }

}
