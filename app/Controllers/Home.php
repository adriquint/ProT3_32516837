<?php

namespace App\Controllers;

class Home extends BaseController
{
    /*public function index(): string
    {
        return view('front/principal.php');
    }*/

    public function index()
    {
        $data['titulo']='Página principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function quienes_somos()
    {
        $data['titulo']='Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    
    public function que_es()
    {
        $data['titulo']='Que es un Bonsai';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/que_es');
        echo view('front/footer_view');
    }

    public function tiposdebonsai()
    {
        $data['titulo']='Tipos de Bonsai';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/tiposdebonsai');
        echo view('front/footer_view');
    }

    public function registrarse()
    {
        $data['titulo']='Registrarse';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registrarse');
        echo view('front/footer_view');
    }

    public function login()
    {
        $data['titulo']='Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
}
