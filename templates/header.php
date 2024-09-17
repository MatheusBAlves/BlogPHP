<?php

include_once("helpers/url.php");
include_once("data/categorias.php");
include_once("data/posts.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <a href="<?= $BASE_URL ?>" class="logo">
      <img src="<?= $BASE_URL ?>img/logo.svg" alt="Blog Matheus Alves">
    </a>
    <nav>
      <ul class="navbar">
        <li>
          <a href="<?= $BASE_URL ?>"
            class="nav-link <?php $_SERVER['REQUEST_URI'] == '/' ? print_r('active')  : '' ?>">
            Início
          </a>
        </li>
        <li>
          <a href="#" class="nav-link">Sobre</a>
        </li>
        <li>
          <a href="<?= $BASE_URL ?>contato.php"
            class="nav-link <?php $_SERVER['REQUEST_URI'] == '/contato.php' ? print_r('active')  : '' ?>">
            Contato
          </a>
        </li>
      </ul>
    </nav>
  </header>