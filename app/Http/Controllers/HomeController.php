<?php

namespace App\Http\Controllers;

use Providers\AlunoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
	public function home(){

		return view('home');
	}
    
}
