<?php
$title = 'L\'imprimerie n°1 des objets et calendriers sapeur-pompier';
ob_start();
?>

<main class="mt-16">
  
<section class="bg-gray-900 pt-20 pb-24">
  <div class="container mx-auto px-5">
    <div class="text-center mb-12">
      <h2 class="text-white text-4xl font-bold mb-4">Plus de 200 Produits Publicitaires</h2>
      <p class="text-gray-400 text-xl font-light">Une large gamme de Produits adaptés à vos Besoins</p>
    </div>
    <form action="<?php page('product') ?>" method="post" class="w-full max-w-screen-md mx-auto mb-12">
      <input required type="text" name="recherche" placeholder="Chercher un produit" maxlength="30"
        class="bg-white w-full h-12 px-6 font-light text-gray-700 rounded-lg outline-none appearance-none">
    </form>
    <div>
      <h3 class="text-xl text-center text-white font-semibold mb-4">Catégories populaires :</h3>
      <ul class="flex justify-center text-sm text-gray-400 font-light items-center">

        <?php foreach ($categories as $categorie): ?>

        <a href="<?php page('product&categorie=' . $categorie['ID']) ?>">
          <li class="m-2 px-2 py-1 border border-gray-400 rounded"><?= $categorie['libelle'] ?></li>
        </a>

        <?php endforeach; ?>

      </div>
    </div>
  </div>
</section>

<div class="py-20">
  <div class="container mx-auto px-5">

    <?php if (isset($error)): ?>

      <p class="text-gray-400 text-5xl font-light text-center">Aucun résultat pour <?= $error ?></p>

    <?php else: ?>

    <div class="grid grid-cols-4 gap-8">

      <?php foreach ($products as $product): ?>

      <a href="<?php page('single&product=' . $product['ID']) ?>">
        <div class="bg-white p-5 rounded-lg big-shadow">
          <img src="<?php assets('product/' . $product['figure']) ?>"
            alt="<?= $product['nom'] ?>" class="mb-5">
          <h3 class="font-semibold text-gray-800 text-center"><?= $product['nom'] ?></h3>
        </div>
      </a>

      <?php endforeach; ?>

    </div>

    <?php endif; ?>

  </div>
</div>

</main>

<?php
$content = ob_get_clean();
$footer = 'bg-white';
require 'templates.php';

?>
