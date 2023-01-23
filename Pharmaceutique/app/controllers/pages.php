<?php

class Pages extends Controller
{

    private $produit;


    function __construct()
    {
        $this->produit = $this->model('Produit');
    }


    /*guest  ----------------------------------------*/
    public function index()
    {
        $this->view('index');
    }

    


    public function statistique()
    {
        $data = [

            'prixmax' => $this->produit->getmax(),
            'totalproduit' => $this->produit->getTotal()
        ];
        $this->view('admin/statistique', $data);
    }



    public function login()
    {
        $this->view('login');
    }



    public function inscrire()
    {
        $this->view('inscrire');
    }


    
    public function logout()
    {
        session_destroy();
        header('location:../pages/');
        exit();
    }
}
