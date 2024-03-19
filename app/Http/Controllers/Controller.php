<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
{
    $users = User::all();
    return view('users.index', compact('users'));
}

    public function create()
{
    return view('users.create');
}

}
