<?php

class   Produits extends Controller
{

    private $produit;




    function __construct()
    {
        $this->produit = $this->model('Produit');
    }



    public function index()
    {
        $this->view('admin/index');
    }


    public function getproduits()
    {
        if (isset($_SESSION['id'])) {
            $data = $this->produit->getproduit(1);
            $this->view('admin/index', $data);
        } else {
            header('location:../pages/login');
            exit();
        }
    }



    function getproduitrech()
    {
        $input = $_POST['search'];
        $data = $this->produit->getproduitrech($input);
        $this->view('admin/index', $data);
    }



    function triproduitparprix()
    {
        $data = $this->produit->getproduit(2);
        $this->view('admin/index', $data);
    }




    function triproduitpardate()
    {
        $data = $this->produit->getproduit(3);
        $this->view('admin/index', $data);
    }



    
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST);
            for ($i = 0; $i < count($_POST['Name']); $i++) {
                $nom = $_POST['Name'][$i];
                $prix = $_POST['Prix'][$i];
                $qantite = $_POST['Quantity'][$i];
                $category = $_POST['category'][$i];
                $image = $_FILES['Image']['name'][$i];
                $this->produit->addproduit($nom, $qantite, $prix, $image, $category);
                header('location:../produits/getproduits');
            }
        } else {
            $this->view('admin/add');
        }
    }



    public function edit($id_prod)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            extract($_POST);
            $req = $this->produit->editproduit($id_prod, $quantite, $prix);
            if ($req == true) {
                header('location:../getproduits');
                exit();
            } else {
                die('no');
            }
        }
        $data = $this->produit->getprodui($id_prod);
        $this->view('admin/edit', $data);
    }





    function deleteproduit($id_produit)
    {
        if ($this->produit->deleteproduit($id_produit)) {
            header('location:../getproduits');

            exit();
        }
    }
}
