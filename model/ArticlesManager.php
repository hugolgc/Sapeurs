<?php

require_once 'Manager.php';

class ArticlesManager extends Manager
{
  public function getArticles()
  {
    $db = $this->dbConnect();
    $request = $db->query('SELECT title, content, publication, DATE_FORMAT(publication, "%d/%m/%y • %H:%i") AS date_format FROM Articles');

    return $request;
  }
}
