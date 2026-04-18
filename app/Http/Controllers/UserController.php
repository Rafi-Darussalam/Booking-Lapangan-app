<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        if (Auth::check() && Auth::user()->role == "admin") {
            return redirect('admin');
        } elseif (Auth::check() && Auth::user()->role == "user") {
            return view('dashboard');
        } else {
            return redirect('/');
        }
    }
}
