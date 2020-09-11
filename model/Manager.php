<?php

class Manager
{
  protected function dbConnect()
  {
    //    new PDO('mysql:host={hôte};dbname={nom de la base};charset=utf8', '{identifiant}', '{mot de passe}');
    $db = new PDO('mysql:host=localhost;dbname=sapeurs;charset=utf8', 'root', 'root');
    return $db;
  }
}
