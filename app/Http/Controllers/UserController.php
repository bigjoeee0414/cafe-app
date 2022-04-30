<?php

namespace App\Http\Controllers;

use App\Models\User;
//use App\Http\Requests\PostRequest;
//use App\Category;

class UserController extends Controller
{
    public function index(User $user)
    {
        return $user->get();
    }
}
