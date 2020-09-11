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
  require './view/product.php';
}
