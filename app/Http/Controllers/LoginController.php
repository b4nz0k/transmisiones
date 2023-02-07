<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request) {
        // dd ($request->remember);
        // return $request->all();
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        // return 'login des';

        if (!auth()->attempt($request->only('username', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }

        // return redirect()->route('post.index', auth()->user()->username);
        return redirect()->route('home', auth()->user()->username);
    }
}
