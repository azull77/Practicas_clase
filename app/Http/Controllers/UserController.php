<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
       // return'Usuarios Registrados ';
       
        //aca cambiamos el titulo que anteriorment teniamos en user.php

        if (request()->has('empty')){
            $users= [];
        }else{

            $users =[
                'Leyla Mariselda',
                'Jose Antonio',
                'Katherine Hernandez',
                'Pedro Florez',
            ];
    

        }

        
        $titulo= ' Informe de Usuarios ';

//aca le decimos que nos va a mostrar, en la vista..
       return view ('users.index', 
       [
           'users' => $users,
           'title'=> $titulo
        ]);
//Esto es lo mismo de arriba pero usando compact ->
       // return view ('users.users', compact('title','users'));

       dd(compact('users','title'));
    }

    public function show($id){
        return view ('users.show', compact('id'));
        
    }
    
    


    public function create(){
        return'Crear nuevo Usuario controlador';
    }
}