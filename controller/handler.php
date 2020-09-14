<?php

model('Manager.php');
model('ProductManager.php');

function home()
{
  $productManager = new ProductManager();
  $products = $productManager->getBestSells(6);

  require './view/home.php';
}

function product()
{
  $productManager = new ProductManager();
  $categories = $productManager->getBestCategories(5);

  if (!empty($_POST['recherche']))
  {
    $search = secure($_POST['recherche']);
    $products = $productManager->getSearch($search);
    if ($products === false) $error = $search;
  }
  elseif (!empty($_GET['categorie'])) $products = $productManager->getRandom(secure($_GET['categorie']));
  else $products = $productManager->getRandom(0);

  require './view/product.php';
}

function single($id)
{
  $productManager = new ProductManager();
  if ($productManager->check($id)) exit(redirect('home'));

  $info = $productManager->getProduct($id);

  require './view/single.php';
}
