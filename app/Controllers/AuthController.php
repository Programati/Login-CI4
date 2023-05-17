<?php namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends BaseController
{
    //Para usar el Formulario_helper, hay que definir un constructor

    public function __construct()
    {
        helper(['url','form']);
    }

    public function index()
    {
        $data = [];
        return view('Auth/login', $data);
    }

    public function formRegistro()
    {
        $data = [];
        return view('Auth/registrarse', $data);
    }

    public function guardarRegistro()
    {
        //Validaremos los inputs del POST recibido por Formulario Registro
        //Todos los campos son los NAME de cada INPUT del Formulario Registro
        //A la dereha pondremos las reglas o tipo de validaciones que tiene que seguir cada INPUT
        $validacionesFormulario = $this->validate([
            'nombre' => 'required|max_length[50]',
            'apellido' => 'required|max_length[50]',
            'email' => 'required|max_length[50]|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[3]|max_length[50]',
            'password_confirm' => 'required|min_length[3]|max_length[50]|matches[password]'
        ]);


        //Si el Formulario Registro no pasa las VALIDACIONES, mostraremos errores
        if(!$validacionesFormulario)
        {
            return view('Auth/registrarse', ['validation'=>$this->validator]);
        }else//De lo contrario, mostraremos un mensaje de EXITO
        {
            echo "Formulario cargado correctamente!";
        }
    }

}