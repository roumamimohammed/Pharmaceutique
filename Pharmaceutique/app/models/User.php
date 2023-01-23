<?php

class User extends database{
    function __construct() { }


    function register($nom,$mdp){
        $sql = "INSERT INTO `admin`(`username`, `password`) VALUES (:username,:pass)";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':username', $nom);
        $stmt->bindParam(':pass', $mdp);
        if($stmt->execute()){
            return true;
        }
    }

    public function login($nom,$pass){
        $sql = "SELECT `id_admin`, `username`, `password` FROM `admin` WHERE username=:username";
        $stmt=$this->openConnection()->prepare($sql);
        $stmt->bindParam(':username',$nom);
        $stmt->execute();
        if($stmt->rowCount()==1){
            $res=$stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($pass,$res['password'])){
                $_SESSION['id']=$res['id_admin'];
                $_SESSION['nom']=$res['username'];

                return true;
            }
            else{
                return false;
            } 
        }
        else{
            return false;
        }
    }


            
    
    
}


