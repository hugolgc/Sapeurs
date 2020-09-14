<?php

require_once 'Manager.php';

class ProductManager extends Manager
{
  public function getBestSells($limit = 100)
  {
    $db = $this->dbConnect();
    $request = $db->query("SELECT ID, figure, nom, description FROM produit ORDER BY purchase DESC LIMIT $limit");

    return $request;
  }

  public function getBestCategories($limit = 20)
  {
    $db = $this->dbConnect();
    $request = $db->query("SELECT ID, libelle FROM categorie ORDER BY RAND() DESC LIMIT $limit");

    return $request;
  }

  public function getRandom($categorie = 0, $limit = 100)
  {
    $db = $this->dbConnect();
    $request = ($categorie === 0) ? $db->query("SELECT ID, figure, nom FROM produit ORDER BY RAND() LIMIT $limit") : $db->query("SELECT ID, figure, nom FROM produit WHERE ID_categorie = $categorie LIMIT $limit");

    return $request;
  }

  public function getSearch($search)
  {
    $db = $this->dbConnect();
    $result = $db->query("SELECT ID, figure, nom FROM produit WHERE nom LIKE '%$search%'");
    $request = ($result->rowCount()) ? $result : false;

    return $request;
  }

  public function check($id)
  {
    $db = $this->dbConnect();
    $result = $db->query("SELECT COUNT(ID) FROM produit WHERE ID = $id");
    $request = ($result->rowCount() == 1) ? false : true;

    return $request;
  }

  public function getProduct($id)
  {
    $db = $this->dbConnect();
    $request = $db->query("SELECT * FROM produit WHERE ID = $id");

    return $request->fetchAll(PDO::FETCH_ASSOC);
  }
}
