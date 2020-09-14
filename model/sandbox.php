<?php

function model($file)
{
  require './model/' . $file;
}

function view($file)
{
  require './view/' . $file;
}

function assets($path)
{
  echo './public/' . $path;
}

function page($path)
{
  echo 'index.php?page=' . $path;
}

function secure($random)
{
  return htmlspecialchars(addslashes($random));
}

function redirect($path)
{
  header('Location: index.php?page=' . $path);
}