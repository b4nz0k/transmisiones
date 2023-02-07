<?php

namespace App\Http\Controllers;

// use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        return 'Pagina Principal';
    }
    public function reg() {
        return 'registro';
    }
}
