<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    /*Function Index retorna todos os dados da tabela alunos populada*/
    public function index(){
    	$alunos = DB::select('select * from alunos as a');

    	 return view('listagem', ['alunos' => $alunos]);
    }

    /*Function para criar novo aluno */
    public function create(){

        return view('form_add');/*->with()*/
    	//$aluno = insert('Insert into alunos(nome,curso,email')values(?,?,?);
    	//this->$aluno->nome = nome;

    }


     public function show ($curso)
    {
        //return "Psicologia";
    }
}
