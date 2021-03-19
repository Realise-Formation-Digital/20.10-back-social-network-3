<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;

class TutorialController extends Controller
{
    public function index()
   {
        $tutorials =Tutorial::orderBy('created_at','desc')->take(5)->get();
        
       return response()->json($tutorials);
   }
}
