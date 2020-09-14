<?php

/*
 *    Projet Allographique 2020.
 *    Crée par @hugolgc.
 */

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


require 'model/sandbox.php';
require 'controller/handler.php';


switch ($page):

  case 'product':
    product();
    break;

  case 'single' && !empty($_GET['product']):
    single($_GET['product']);
    break;

  case 'home':
  default:
    home();
    break;

endswitch;
