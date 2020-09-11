<?php

require_once 'Manager.php';

class ProductManager extends Manager
{
  public function getBestSells($limit = 100)
  {
    $db = $this->dbConnect();
    $request = $db->query("SELECT figure, nom, description FROM produit ORDER BY purchase DESC LIMIT $limit");

    return $request;
  }
}
