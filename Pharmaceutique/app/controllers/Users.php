<?php

class users extends Controller
{
    private $user;


    function __construct()
    {
        $this->user = $this->model('User');
    }



    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
            if ($this->user->register($name, $hashed_pass) == true) {
                header('location:' . URLROOT . '/pages/login');
            }
        }
    }



    
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            if ($this->user->login($name, $pass) == true) {
                header('location:' . URLROOT . '/produits/getproduits');
            } else
            if ($this->user->login($name, $pass) == false) {
                header('location:' . URLROOT . '/pages/login');
            }
        }
    }
}
