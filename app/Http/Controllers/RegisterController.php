<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        // return 'index';
        // return 'hola';
        return view('auth.register');
    }
    public function store(Request $request) {
        try {
            // return $request->all();
            // $this->validate($request, [
            //     'username' => 'required|unique:users',
            // ]);
                
            User::create([
                'username' => $request->username,
                'name' => $request->username,
                'email' => $request->username . '@gmail.com',
                'password' => Hash::make($request->password)
            ]);
            // return $request->all();
            return response()->json([
                'msj' => 'El registro se realizo correctamente',
                ]);

        } catch (\Throwable $th) {
            return response()->json([
                'msj' => $th,
            
                ]);

        }
        // return dd('registro');
    }
}
