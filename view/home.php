<?php
$title = 'L\'imprimerie n°1 des objets et calendriers sapeur-pompier';
ob_start();
?>

<main class="mt-16 pt-16">

  <section class="pt-4 pb-64" style="background: url('<?php assets('src/banner-calendar.png') ?>') bottom / cover;">
    <div class="container mx-auto px-8 text-center">
      <div class="mb-8">
        <h2 class="mb-4 text-5xl text-gray-800 font-bold leading-snug">
          <span>👨🏻‍🚒  L'imprimerie n°1 des objets</span>
          <br>
          <span>et calendriers sapeur-pompier</span>
        </h2>
        <p class="text-gray-600 text-xl font-light">Plus de 400 Casernes nous font Confiance !</p>
      </div>
      <div class="flex justify-center items-center mb-8">
        <a href="<?php page('product') ?>">
          <button class="px-8 py-4 bg-fire text-white rounded-lg font-medium outline-none">Voir nos produits</button>
        </a>
        <a href="">
          <button class="px-8 py-4 border-2 border-fire text-fire rounded-lg font-medium ml-5 outline-none">Nous contacter</button>
        </a>
      </div>
      <div>
        <p class="text-gray-600 text-lg font-light mb-4">Parlez-en autour de vous</p>
        <div class="flex text-white justify-center">
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
      </div>
    </div>
  </section>


  <div class="bg-white py-8">
    <div class="container mx-auto px-4"><!--
      <div class="grid grid-cols-5 items-center">
        <figure class="">
          <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/sap_2x_8d0771da-05fe-4321-a2e2-99a6c7cba7d9_300x.png?v=1589791627" alt="" class="mx-auto h-16">
        </figure>
        <figure class="">
          <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/delta_2x_ff0a102e-668b-4fae-a292-f0e607b312cc_300x.png?v=1589791648" alt="" class="mx-auto h-6">
        </figure>
        <figure class="">
          <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/apple_300x.png?v=1589791789" alt="" class="mx-auto h-16">
        </figure>
        <figure class="">
          <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/sony_2x_0128f68d-13de-4432-bd45-344289d1df81_300x.png?v=1589791676" alt="" class="mx-auto h-6">
        </figure>
        <figure class="">
          <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/cisco_2x_954dd286-aedb-452c-9d0d-3c929f211963_300x.png?v=1589791693" alt="" class="mx-auto h-16">
        </figure>
      </div>-->
      <div class="grid grid-cols-5 items-center">
        <figure class="flex">
          <img class="mx-auto h-10" src="<?php assets('src/imprimerie.png') ?>" alt="">
        </figure>
        <figure class="flex">
          <img class="mx-auto h-16" src="<?php assets('src/allo.png') ?>" alt="">
        </figure>
        <figure class="flex">
          <img class="mx-auto h-16" src="<?php assets('src/artisant.jpg') ?>" alt="">
        </figure>
        <figure class="flex">
          <img class="mx-auto h-16" src="<?php assets('src/pefc.png') ?>" alt="">
        </figure>
        <figure class="flex">
          <img class="mx-auto my-3 h-10" src="<?php assets('src/mag.png') ?>" alt="">
        </figure>
      </div>
    </div>
  </div>

  <section class="pt-20">
    <div class="container mx-auto px-4">
      <h2 class="text-gray-800 text-center text-4xl font-bold mb-10">Le Top des Ventes</h2>
      <div class="grid grid-cols-3 gap-8 pb-16">

        <?php foreach ($products as $product): ?>
        
        <a href="<?php page('single&product=' . $product['ID']) ?>">
          <div>
            <figure>
              <img src="<?php assets('product/' . $product['figure']) ?>" alt="<?= $product['nom'] ?>" class="mx-auto">
            </figure>
            <div class="text-center px-8">
              <h3 class="text-gray-800 text-xl font-semibold mb-2"><?= $product['nom'] ?></h3>
              <p class="text-gray-600 font-light mb-6"><?= $product['description'] ?></p>
            </div>
          </div>
        </a>

        <?php endforeach; ?>

      </div>
    </div>
  </section>

  <section class="pt-20 pb-40 bg-gray-900">
    <div class="container mx-auto px-5">
      <div class="text-center mb-8">
        <h2 class="text-white font-bold text-4xl mb-5">Cherchez par Catégorie</h2>
        <p class="text-gray-500 text-xl font-light">Une large gamme de Produits adaptés à vos Besoins</p>
      </div>
      <div class="grid grid-cols-4 gap-0 mb-16">
        <a href="<?php page('product&categorie=3') ?>">
          <div class="border border-white rounded-tl-lg px-4 py-8 text-center">
            <ion-icon name="calendar-outline" class="text-fire text-5xl mb-3"></ion-icon>
            <h3 class="text-white font-light">CALENDRIERS</h3>
          </div>
        </a>
        <a href="<?php page('product&categorie=19') ?>">
          <div class="border border-white px-4 py-8 text-center">
            <ion-icon name="pencil-outline" class="text-fire text-5xl mb-3"></ion-icon>
            <h3 class="text-white font-light">STYLOS</h3>
          </div>
        </a>
        <a href="<?php page('product&categorie=15') ?>">
          <div class="border border-white rounded-br-lg px-4 py-8 text-center">
            <ion-icon name="key-outline" class="text-fire text-5xl mb-3"></ion-icon>
            <h3 class="text-white font-light">PORTE-CLÉS</h3>
          </div>
        </a>
        <a href="<?php page('product&categorie=17') ?>">
          <div class="border border-white rounded-tr-lg px-4 py-8 text-center">
            <ion-icon name="briefcase-outline" class="text-fire text-5xl mb-3"></ion-icon>
            <h3 class="text-white font-light">SACS</h3>
          </div>
        </a>
        <a href="<?php page('product&categorie=12') ?>">
          <div class="border border-white rounded-bl-lg px-4 py-8 text-center">
            <ion-icon name="game-controller-outline" class="text-fire text-5xl mb-3"></ion-icon>
            <h3 class="text-white font-light">JEUX</h3>
          </div>
        </a>
        <a href="<?php page('product&categorie=6') ?>">
          <div class="border border-white px-4 py-8 text-center">
            <ion-icon name="color-filter-outline" class="text-fire text-5xl mb-3"></ion-icon>
            <h3 class="text-white font-light">COLORIAGES</h3>
          </div>
        </a>
        <a href="<?php page('product&categorie=11') ?>">
          <div class="border border-white px-4 py-8 text-center">
            <ion-icon name="pint-outline" class="text-fire text-5xl mb-3"></ion-icon>
            <h3 class="text-white font-light">GOBELETS</h3>
          </div>
        </a>
        <a href="<?php page('product&categorie=8') ?>">
          <div class="border border-white rounded-br-lg px-4 py-8 text-center">
            <ion-icon name="create-outline" class="text-fire text-5xl mb-3"></ion-icon>
            <h3 class="text-white font-light">CARNETS</h3>
          </div>
        </a>
      </div>
      <div class="flex">
        <button class="px-8 py-4 bg-fire text-white rounded-lg font-medium mx-auto outline-none">Toutes les Catégories</button>
      </div>
    </div>
  </section>

  <section class="overflow-hidden">
    <div class="grid grid-cols-2 gap-8">
      <div style="padding: 15% 20%;">
        <h2 class="text-gray-800 text-4xl font-bold mb-8">Notre imprimerie dispose d'un service graphique</h2>
        <p class="text-gray-600 text-lg font-light mb-10">Nous vous offrons la possibilité de retoucher, retravailler un fichier pour le rendre optimal. Un bon a tirer de ce fichier vous sera systématiquement remis afin que vous puissiez vérifier la conformité des fichiers numériques.</p>
        <button class="px-8 py-4 border-2 border-fire text-fire rounded-lg font-medium outline-none">En savoir plus</button>
      </div>
      <div style="transform: translateY(20%);">
        <img src="<?php assets('src/software.png') ?>" alt="Notre imprimerie dispose d'un service graphique">
      </div>
    </div>
  </section>

  <section class="overflow-hidden bg-white">
    <div class="grid grid-cols-2 gap-8">
      <div style="transform: translateY(20%);">
        <img src="<?php assets('src/wallpapers.png') ?>" alt="Julien Jopub Communication">
      </div>
      <div style="padding: 15% 20% 15% 3rem;">
        <h2 class="text-gray-800 text-4xl font-bold mb-8">Julien Jopub<br>Communication</h2>
        <p class="text-gray-600 text-lg font-light mb-10">En 70 ans d'existence, l'Imprimerie Julien-Jopub s'est imposée comme étant un excellent partenaire. Notre réussite n'étant fondée que sur la satisfaction de nos clients, nous vous offrons un travail de qualité, à des prix compétitifs et dans les meilleurs délais.</p>
        <button class="px-8 py-4 border-2 border-fire text-fire rounded-lg font-medium outline-none">En savoir plus</button>
      </div>
    </div>
  </section>

</main>

<?php
$content = ob_get_clean();
$footer = '';
require 'templates.php';

?>
