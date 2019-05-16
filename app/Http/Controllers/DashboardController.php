<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{

    public function getIndex() {
        $users = User::select("*")->get();

        $threeUsers = User::select("*")->limit(3)->get();

        $countUser = User::get()->count();

        // $lastUser = User::select('*')->orderBy('created_at', 'desc')->first();

        // return view('dashboard', ['users' => $users, 'threeUsers' => $threeUsers, 'lastUser' => $lastUser]);
        return view('dashboard', ['users' => $users, 'threeUsers' => $threeUsers, 'countUser' => $countUser]);
    }
}
