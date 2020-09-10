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