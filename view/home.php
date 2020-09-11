<?php
$title = 'L\'imprimerie n°1 des objets et calendriers sapeur-pompier';
ob_start();
?>

<main class="mt-16 pt-16">

      <section class="pt-4 pb-64" style="background: url('<?php assets('src/banner.png') ?>') bottom / cover;">
        <div class="container mx-auto px-8 text-center">
          <div class="mb-8">
            <h2 class="mb-4 text-5xl text-gray-800 font-bold leading-snug">
              <span>👑 The #1 Place for</span>
              <br>
              <span>World-Class Infographics</span>
            </h2>
            <p class="text-gray-600 text-xl font-light">Join Over 80,000+ Brands that are making Awesome Presentations</p>
          </div>
          <div class="flex justify-center mb-8">
            <button class="px-8 py-4 bg-green-400 text-white rounded-lg font-medium">Get Full Access</button>
            <button class="px-8 py-4 border-2 border-green-400 text-green-400 rounded-lg font-medium ml-5">Try Demo</button>
          </div>
          <div>
            <p class="text-gray-600 text-lg font-light mb-4">Compatible With</p>
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
        <div class="container mx-auto px-4">
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
          </div>
        </div>
      </div>

      <section class="pt-20">
        <div class="container mx-auto px-4">
          <h2 class="text-gray-800 text-center text-4xl font-bold mb-10">Why You Need Infograpify?</h2>
          <div class="grid grid-cols-3 gap-8 pb-16">

            <?php foreach ($products as $product): ?>
            
            <div>
              <figure>
                <img src="<?php assets('product/' . $product['figure']) ?>" alt="<?= $product['nom'] ?>" class="mx-auto">
              </figure>
              <div class="text-center px-8">
                <h3 class="text-gray-800 text-xl font-semibold mb-2"><?= $product['nom'] ?></h3>
                <p class="text-gray-600 font-light mb-6"><?= $product['description'] ?>.</p>
              </div>
            </div>

            <?php endforeach; ?>

            <!--<div>
              <figure>
                <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/feature-illustration-1_2x_78e55e8a-a195-44ac-bfb0-672c5c897c2f_430x.png?v=1580895692" alt="" class="mx-auto">
              </figure>
              <div class="text-center px-8">
                <h3 class="text-gray-800 text-xl font-semibold mb-2">🔥 Modern Layouts and Infographics</h3>
                <p class="text-gray-600 font-light mb-6">Captivate your audience with clear, compelling visuals.</p>
              </div>
            </div>-->

          </div>
        </div>
      </section>

      <section class="pt-20 pb-40 bg-blue-900">
        <div class="container mx-auto px-5">
          <div class="text-center mb-8">
            <h2 class="text-white font-medium text-4xl mb-5">80+ Popular Categories Available</h2>
            <p class="text-gray-500 text-xl font-light">Thousands of Easy-to-Edit and Well-Organized Infographics</p>
          </div>
          <div class="grid grid-cols-4 gap-0 mb-16">
            <div class="border border-white px-4 py-8">
              <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/icon-feature-table-1_2x_0ba8e094-749c-4e46-ad5e-d58074966a89_50x.png?v=1572914596" alt="" class="mx-auto mb-4">
              <h3 class="text-white font-light text-center">3000+ SLIDES</h3>
            </div>
            <div class="border border-white px-4 py-8">
              <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/icon-feature-table-1_2x_0ba8e094-749c-4e46-ad5e-d58074966a89_50x.png?v=1572914596" alt="" class="mx-auto mb-4">
              <h3 class="text-white font-light text-center">3000+ SLIDES</h3>
            </div>
            <div class="border border-white px-4 py-8">
              <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/icon-feature-table-1_2x_0ba8e094-749c-4e46-ad5e-d58074966a89_50x.png?v=1572914596" alt="" class="mx-auto mb-4">
              <h3 class="text-white font-light text-center">3000+ SLIDES</h3>
            </div>
            <div class="border border-white px-4 py-8">
              <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/icon-feature-table-1_2x_0ba8e094-749c-4e46-ad5e-d58074966a89_50x.png?v=1572914596" alt="" class="mx-auto mb-4">
              <h3 class="text-white font-light text-center">3000+ SLIDES</h3>
            </div>
            <div class="border border-white px-4 py-8">
              <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/icon-feature-table-1_2x_0ba8e094-749c-4e46-ad5e-d58074966a89_50x.png?v=1572914596" alt="" class="mx-auto mb-4">
              <h3 class="text-white font-light text-center">3000+ SLIDES</h3>
            </div>
            <div class="border border-white px-4 py-8">
              <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/icon-feature-table-1_2x_0ba8e094-749c-4e46-ad5e-d58074966a89_50x.png?v=1572914596" alt="" class="mx-auto mb-4">
              <h3 class="text-white font-light text-center">3000+ SLIDES</h3>
            </div>
            <div class="border border-white px-4 py-8">
              <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/icon-feature-table-1_2x_0ba8e094-749c-4e46-ad5e-d58074966a89_50x.png?v=1572914596" alt="" class="mx-auto mb-4">
              <h3 class="text-white font-light text-center">3000+ SLIDES</h3>
            </div>
            <div class="border border-white px-4 py-8">
              <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/files/icon-feature-table-1_2x_0ba8e094-749c-4e46-ad5e-d58074966a89_50x.png?v=1572914596" alt="" class="mx-auto mb-4">
              <h3 class="text-white font-light text-center">3000+ SLIDES</h3>
            </div>
          </div>
          <div class="flex">
            <button class="px-8 py-4 bg-green-400 text-white rounded-lg font-medium mx-auto">View All Templates</button>
          </div>
        </div>
      </section>

      <section class="overflow-hidden">
        <div class="grid grid-cols-2 gap-8">
          <div style="padding: 15% 20%;">
            <h2 class="text-gray-800 text-4xl font-bold mb-8">
              <span>100% Vector Infographic</span>
              <br>
              <span>Files Easy to edit</span>
            </h2>
            <p class="text-gray-600 text-lg font-light mb-10">All of the infographics included in the package are full vector files, meaning that they are extremely high quality, remain editable at all times and any element can be changed, at any time.</p>
            <button class="px-8 py-4 bg-green-400 text-white rounded-lg font-medium">Get Full Access</button>
          </div>
          <div style="transform: translateY(20%);">
            <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/t/2/assets/mockup4.png?v=8714681554903230350" alt="">
          </div>
        </div>
      </section>

      <section class="overflow-hidden bg-white">
        <div class="grid grid-cols-2 gap-8">
          <div style="transform: translateY(20%);">
            <img src="https://cdn.shopify.com/s/files/1/0268/0094/7253/t/2/assets/mockup4.png?v=8714681554903230350" alt="">
          </div>
          <div style="padding: 15% 20% 15% 3rem;">
            <h2 class="text-gray-800 text-4xl font-bold mb-8">
              <span>100% Vector Infographic</span>
              <br>
              <span>Files Easy to edit</span>
            </h2>
            <p class="text-gray-600 text-lg font-light mb-10">All of the infographics included in the package are full vector files, meaning that they are extremely high quality, remain editable at all times and any element can be changed, at any time.</p>
            <button class="px-8 py-4 bg-green-400 text-white rounded-lg font-medium">Get Full Access</button>
          </div>
        </div>
      </section>

    </main>

<?php
$content = ob_get_clean();
require 'templates.php';

?>
