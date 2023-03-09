<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $data = User::get();
        return view('profile.users', compact('data'));
    }
}
