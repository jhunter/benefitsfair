<div class="bg-gray-50">
  <div class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
    <div id="giveaway" class="relative overflow-hidden bg-pkl-700 rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 lg:flex lg:items-center">
      <div class="absolute inset-0 opacity-25 w-full h-full bg-cover" style="background-image:url(<?= the_field('prize_background')['url'] ?>)"></div>
      <div class="relative z-10 xl:w-0 xl:flex-1">
        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-white text-pkl-500">
           <?php echo file_get_contents(get_template_directory_uri().'/img/svg/gift.svg'); ?>
        </div>
        <h2 class="mt-6 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-3xl sm:leading-9">
         <?= the_field('prize_title') ?>
        </h2>
        <p class="max-w-2xl mt-2 text-lg leading-6 text-pkl-200" id="newsletter-headline">
          <?= the_field('prize_text') ?>
        </p>
      </div>
    </div>
  </div>
</div>