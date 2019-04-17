<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /*
     function __construct($nome, $curso, $email)
    {
        $this->nome = $nome;
        $this->curso = $curso;
        $this->email = $email;
        
    }
    */

    /*

            public function validaCampo($email){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                         //Valid email!
}
                    //if(!$aluno->email() != null & )
            }

    */

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

    /* Function retorna dados populados em Json consumidos através do verbo "Get em requisições REST HTTP. */
    public function returnJson(\App\AlunoModel $aluno)
    {
        $aluno = \App\Alunos::select('select a.nome,a.curso,a.email from alunos as a'); //faz a chamada ao Model -> AlunoModel.

        return response()->json(array('nome'=> $aluno->nome,'curso'=> $aluno->curso, 'email' => $aluno->email));

    }


     public function show ($curso)
    {
        //return "Psicologia";
    }
}
