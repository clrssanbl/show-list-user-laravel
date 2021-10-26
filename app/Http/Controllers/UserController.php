<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    public function index()
    {
        $response = Http::get('https://reqres.in/api/users?page=2');
        $users = $response->json();
        //ddd($users);
        return view('users_list', ['users' => $users['data']]);
    }

    public function show()
    {
        $response = Http::get('https://reqres.in/api/users/2');
        $user = $response->json();
        //ddd($user);
        return view('users_detail', ['user' => $user['data']]);
    }
}
