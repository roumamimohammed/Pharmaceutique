<?php

class Produit extends database
{
    function __construct()
    {
    }

    function getprodui($id_prod)
    {
        $sql = "SELECT p.`id_prod`, p.`Llibelle`, p.`quantite`, p.`prix`, p.`IMAGE`, p.`data_ajout` , c.`cat` FROM product p , category c WHERE p.`id_cat`= c.`id_cat` and p.`id_prod`=$id_prod ;";
        $stmt = $this->openConnection()->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    function getTotal()
    {
        $sql = "SELECT COUNT(`id_prod`) as 'count' FROM `product`";
        $stmt = $this->openConnection()->query($sql);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['count'];
    }


    function getmax()
    {
        $sql = "SELECT MAX(`prix`) as 'count' FROM `product`";
        $stmt = $this->openConnection()->query($sql);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res['count'];
    }


    function getproduitrech($lebelle)
    {
        $sql = "SELECT p.`id_prod`, p.`Llibelle`, p.`quantite`, p.`prix`, p.`IMAGE`, p.`data_ajout` , c.`cat` FROM product p , category c WHERE p.`id_cat`= c.`id_cat` and p.`Llibelle` LIKE '%$lebelle%' ;";
        $stmt = $this->openConnection()->query($sql);
        // $stmt->bindParam(':lebelle', $lebelle);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    function getproduit($id)
    {
        if ($id == 1) {
            $sql = "SELECT p.`id_prod`, p.`Llibelle`, p.`quantite`, p.`prix`, p.`IMAGE`, p.`data_ajout` , c.`cat` FROM product p , category c WHERE p.`id_cat`= c.`id_cat`;";
            $stmt = $this->openConnection()->query($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } else if ($id == 2) {
            $sql = "SELECT p.`id_prod`, p.`Llibelle`, p.`quantite`, p.`prix`, p.`IMAGE`, p.`data_ajout` , c.`cat` FROM product p , category c WHERE p.`id_cat`= c.`id_cat` ORDER BY prix";
            $stmt = $this->openConnection()->query($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } else {
            $sql = "SELECT p.`id_prod`, p.`Llibelle`, p.`quantite`, p.`prix`, p.`IMAGE`, p.`data_ajout` , c.`cat` FROM product p , category c WHERE p.`id_cat`= c.`id_cat` ORDER BY data_ajout";
            $stmt = $this->openConnection()->query($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $data;
        }
    }


    function addproduit($nom, $qantite, $prix, $image, $id_cat)
    {
        $date = date("Y") . "-" . date("m") . "-" . date("d");
        $sql = "INSERT INTO `product`(`Llibelle`, `quantite`, `prix`, `IMAGE`, `data_ajout`, `id_cat`) VALUES (:nom,:qte,:prix,:image,:date_ajout,:id_cat)";
        $conn = $this->openConnection();
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':qte', $qantite);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':date_ajout', $date);
        $stmt->bindParam(':id_cat', $id_cat);
        if ($stmt->execute()) {
            return true;
        }
    }

    
    function editproduit($id_produit, $qantite, $prix)

    {

        $sql = "UPDATE `product` SET `quantite`=:qantite,`prix`=:prix WHERE id_prod=:id_prod";
        $stmt = $this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_prod', $id_produit);
        $stmt->bindParam(':qantite', $qantite);
        $stmt->bindParam(':prix', $prix);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }



    function deleteproduit($id_produit)
    {
        $sql = "DELETE FROM `product` WHERE id_prod=:id_prod";
        $stmt = $this->openConnection()->prepare($sql);
        $stmt->bindParam(':id_prod', $id_produit);
        if ($stmt->execute()) {
            return true;
        }
    }
}
