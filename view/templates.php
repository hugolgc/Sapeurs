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
        <div class="mx-6 flex items-center">
          <img src="public/src/logo.png" alt="Titre du site" class="h-8 pr-3">
          <h2 class="font-bold text-3xl leading-none text-gray-900">infograpify</h2>
        </div>
        <nav>
          <ul class="flex items-center font-light text-gray-600">
            <li class="px-3">ALL TEMPLATES</li>
            <li class="px-3">RECENT</li>
            <li class="px-3">ICONS</li>
          </ul>
        </nav>
        <div class="flex-auto">
          <div class="h-12 border border-gray-300 my-2 max-w-2xl mx-auto flex items-center text-gray-700">
            <ion-icon name="search" class="mx-3"></ion-icon>
            <input type="text" class="outline-none apparance-none text-sm font-light w-full pr-3" placeholder="Marketing, Process, Fishbone">
          </div>
        </div>
        <div class="flex items-center">
          <button class="h-16 px-5 text-green-400">LOG IN</button>
          <button class="h-16 px-5 text-white bg-green-400">SHOP NOW</button>
        </div>
      </div>
    </header>

    <?= $content ?>

    <footer class="py-20">
      <div class="container w-full mx-auto px-5">
        <div class="grid grid-cols-10 gap-10">
          <section class="col-span-5">
            <h3 class="text-xl text-gray-800 font-semibold mb-6">Catégories</h3>
            <ul class="flex flex-wrap text-gray-600 font-light leading-8">
              <li class="pr-5">Agendas</li>
              <li class="pr-5">Avis de passage</li>
              <li class="pr-5">Calendriers</li>
              <li class="pr-5">Bâche PVC</li>
              <li class="pr-5">Calendriers de poche</li>
              <li class="pr-5">Cahiers de coloriage</li>
              <li class="pr-5">Carnets de reçu</li>
              <li class="pr-5">Carnets de démarchage A5</li>
              <li class="pr-5">Cartes de message</li>
              <li class="pr-5">Cartes de vœux</li>
              <li class="pr-5">Gobelets réutilisables</li>
              <li class="pr-5">Jeux pour enfants</li>
              <li class="pr-5">Menus Sainte-Barbe</li>
              <li class="pr-5">Peluche Pince Panda</li>
              <li class="pr-5">Portes-clés personnalisés</li>
              <li class="pr-5">Pour vos manifestations</li>
              <li class="pr-5">Sacs cabas</li>
              <li class="pr-5">Sacoches</li>
              <li class="pr-5">Stylos</li>
              <li class="pr-5">Taches administratives</li>
            </ul>
          </section>
          <section class="col-span-2">
            <h3 class="text-xl text-gray-800 font-semibold mb-6">Menu</h3>
            <ul class="text-gray-600 font-light leading-8">
              <li class="pr-5">Accueil</li>
              <li class="pr-5">Photos</li>
              <li class="pr-5">Acheter</li>
              <li class="pr-5">Nos produits</li>
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
