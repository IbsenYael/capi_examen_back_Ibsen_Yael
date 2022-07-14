<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\user_domicilio;
use \App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class UserController extends Controller
{
    public function getAllUserAddress(){


        $users = User::join('user_domicilios', "user_domicilios.user_id", "=", "users.id")->get();
        foreach ($users as $user) {
            $edad = Carbon::parse($user->fecha_nacimiento)->age;
            $user->edad = $edad;
        }
        return $users;
    }
}
