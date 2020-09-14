<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?= $title ?></title>
    <meta name="description" content="Projet calendriers sapeur-pompier 2020. Créé par @hugolgc.">
    <meta name="keywords" content="projet, calendriers sapeur-pompier, 2020, @hugolgc, mvc, poo, database, github">
    <link rel="shortcut icon" href="<?php assets('src/shortcut.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php assets('css/main.css') ?>">
    <link rel="stylesheet" href="<?php assets('css/tailwind.min.css') ?>">
  </head>
  <body class="bg-gray-100">

    <header class="bg-white fixed left-0 top-0 right-0 z-10">
      <div class="flex items-center">
        <a href="<?php page('home') ?>">
          <div class="mx-6 flex items-center">
            <img src="public/src/logo.png" alt="Titre du site" class="h-8 pr-3">
            <h2 class="font-bold text-3xl leading-none text-gray-800">Titre site</h2>
          </div>
        </a>
        <nav>
          <ul class="flex items-center font-light text-gray-600">
            <li class="px-3">
              <a href="<?php page('product') ?>">Nos Produits</a>
            </li>
            <li class="px-3">Photos</li>
            <li class="px-3">Contact</li>
          </ul>
        </nav>
        <div class="flex-auto px-16 py-2">
          <form action="<?php page('product') ?>" method="post" class="h-12 border border-gray-300 max-w-2xl mx-auto flex items-center text-gray-700 rounded-lg">
            <ion-icon name="search" class="mx-3"></ion-icon>
            <input required type="text" name="recherche" maxlength="30" class="outline-none appearance-none text-sm font-light w-full pr-3" placeholder="Agenda, Calendrier, Jeux">
          </form>
        </div>
        <div class="flex items-center">
          <button class="h-16 px-5 text-fire outline-none">Connexion</button>
          <button class="h-16 px-5 text-white bg-fire outline-none">Acheter</button>
        </div>
      </div>
    </header>

    <?= $content ?>

    <footer class="py-20 <?= $footer ?>">
      <div class="container w-full mx-auto px-5">
        <div class="grid grid-cols-10 gap-10">
          <section class="col-span-5">
            <h3 class="text-xl text-gray-800 font-semibold mb-6">Catégories</h3>
            <ul class="flex flex-wrap text-gray-600 font-light leading-8">
              <li class="pr-5">
                <a href="<?php page('product&categorie=1') ?>">Agenda</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=2') ?>">Avis de passage</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=3') ?>">Calendriers</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=4') ?>">Bâche PVC</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=5') ?>">Calendriers de poche</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=6') ?>">Cahiers de coloriage</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=7') ?>">Carnets de reçu</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=8') ?>">Carnets de démarchage A5</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=9') ?>">Cartes de message</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=10') ?>">Cartes de vœux</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=11') ?>">Gobelets réutilisables</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=12') ?>">Jeux pour enfants</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=13') ?>">Menus Sainte-Barbe</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=14') ?>">Peluche Pince Panda</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=15') ?>">Portes-clés personnalisés</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=16') ?>">Pour vos manifestations</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=17') ?>">Sacs cabas</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=18') ?>">Sacoches</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=19') ?>">Stylos</a>
              </li>
              <li class="pr-5">
                <a href="<?php page('product&categorie=20') ?>">Taches administratives</a>
              </li>
            </ul>
          </section>
          <section class="col-span-2">
            <h3 class="text-xl text-gray-800 font-semibold mb-6">Menu</h3>
            <ul class="text-gray-600 font-light leading-8">
              <li class="pr-5">
                <a href="<?php page('home') ?>">Accueil</a>
              </li>
              <li class="pr-5">Photos</li>
              <li class="pr-5">Acheter</li>
              <li class="pr-5">
                <a href="<?php page('product') ?>">Nos produits</a>
              </li>
              <li class="pr-5">Allographique</li>
              <li class="pr-5">Imprimerie Julien-Jopub</li>
            </ul>
          </section>
          <section class="col-span-3">
            <h3 class="text-xl text-gray-800 font-semibold mb-6">À propos</h3>
            <ul class="text-gray-600 font-light leading-8 mb-10">
              <li class="pr-5">Faire un devis</li>
              <li class="pr-5">Nous contacter</li>
              <li class="pr-5">Inscription | Connexion</li>
            </ul>
            <h3 class="text-xl text-gray-800 font-semibold mb-6">Partager</h3>
            <div class="flex text-white">
              <div class="w-10 h-10 rounded bg-red-600 flex mr-3">
                <ion-icon class="text-3xl m-auto" name="logo-pinterest"></ion-icon>
              </div>
              <div class="w-10 h-10 rounded bg-blue-600 flex mx-3">
                <ion-icon class="text-3xl m-auto" name="logo-facebook"></ion-icon>
              </div>
              <div class="w-10 h-10 rounded bg-yellow-500 flex mx-3">
                <ion-icon class="text-3xl m-auto" name="mail-open-outline"></ion-icon>
              </div>
              <div class="w-10 h-10 rounded bg-orange-500 flex mx-3">
                <ion-icon class="text-3xl m-auto" name="chatbubbles-outline"></ion-icon>
              </div>
              <div class="w-10 h-10 rounded bg-blue-400 flex mx-3">
                <ion-icon class="text-3xl m-auto" name="logo-twitter"></ion-icon>
              </div>
            </div>
          </section>
        </div>
        <address class="text-sm font-light text-center text-gray-400 mt-16 not-italic">Copyright © 2020 | allographique.fr</address>
      </div>
    </footer>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="<?php assets('js/jquery.min.js') ?>"></script>

  </body>
</html>
