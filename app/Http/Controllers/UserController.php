<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(Recruitment $recruitment)
    {
        return view('recruitments.profile');
    }
}
