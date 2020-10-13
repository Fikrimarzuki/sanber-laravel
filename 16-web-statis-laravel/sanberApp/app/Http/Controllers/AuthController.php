<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showWelcome()
    {
        return view('welcome');
    }

    public function submitForm(Request $request)
    {
        $firstName = $request->firstName;
        $lastName = $request->lastName;
        $gender = $request->gender;
        $nationality = $request->nationality;
        $languange = $request->language;
        $bio = $request->bio;
        return view("welcome", compact("firstName", "lastName"));
    }
}
