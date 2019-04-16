<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
    	$alunos = DB::select('select * from alunos as a');

    	 return view('listagem', ['alunos' => $alunos]);
    }


    public function create(){
    	//$aluno = new AlunoModel();
    	//this->$aluno->nome = nome;

    }


     public function show ($curso)
    {
        return "Psicologia";
    }
}
