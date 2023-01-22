<?php
use Illuminate\Support\Facades\Session;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(Request $request)
    {
        $users = config('users');
        $nombre = $request->input('nombre');
        $password = $request->input('password');

        foreach ($users as $user) {
            if ($nombre == $user['admin'] && $password == $user['admin']) {
                // Inicia la sesión y redirige al usuario a la página protegida
                session(['nombre' => $nombre]);
                return redirect('protegido');
            }
        }
       }
       }
        // Si
