<?php
$title = 'L\'imprimerie n°1 des objets et calendriers sapeur-pompier';
ob_start();
?>

<main class="mt-16">

  <section class="py-16">
    <div class="container mx-auto px-5">
      <div class="grid grid-cols-3 gap-8">

        <div class="col-span-2 bg-white rounded-lg p-6 flex big-shadow">
          <img src="<?php assets('product/1.png') ?>" alt="Nom produit" class="m-auto" style="min-height: 500px;">
        </div>

        <div class="col-span-1 bg-white rounded-lg px-6 py-5 big-shadow">
          <h2 class="text-gray-800 font-bold text-2xl">Nom du produit</h2>
          <button class="w-full px-8 py-4 border-2 border-fire text-fire rounded-lg font-medium outline-none my-10">Faire un devis</button>
          <h3 class="text-gray-800 text-lg font-bold mb-4">Partager ce produit</h3>
          <div class="flex text-white justify-between mb-10">
            <div class="w-10 h-10 rounded bg-red-600 flex mr-4">
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
          <h3 class="text-gray-800 text-lg font-bold mb-2">Description</h3>
          <p class="text-gray-600 font-light">Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs
            perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus
            Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis
            illius domicilium Mopsi.</p>
        </div>

      </div>
    </div>
  </section>

</main>

<?php
$content = ob_get_clean();
$footer = 'bg-white';
require 'templates.php';

?>
