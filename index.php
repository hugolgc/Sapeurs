<?php

/*
 *    Projet Genesis 2020.
 *    Crée par @hugolgc.
 */

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


require 'model/sandbox.php';
require 'controller/handler.php';


switch ($page):

  case 'home':
  default:
    home();
    break;

endswitch;
