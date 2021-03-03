<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MainController extends Controller
{
   public function index()
   {
       $title = 'welcome';
       $users = User::where('ban', '=', 0)->paginate(7);
      // dd($users);
      return view('main.index', compact('title', 'users'));
   }
   public function getProfile($slag)
   {
     
     
      return view('layouts.profile', compact('users'));
   }
}
