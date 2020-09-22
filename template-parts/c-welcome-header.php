<div class="relative bg-white overflow-hidden">
  <div class="max-w-screen-xl mx-auto">
    <div class="relative z-10 bg-white lg:max-w-xl lg:w-full">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>
      <main class="py-10 mx-auto max-w-screen-xl px-4 sm:py-12 sm:px-6 md:py-16 lg:py-20 lg:px-8 xl:py-28">
        <div class="sm:text-center lg:text-left">

          <?php
            $logo = get_field('brand_logo');
            $logo_alt = $logo['alt'];
          ?>

          <img  x-bind:data-unbranded="unbranded"
                id="branding"
                class="lg:max-w-md"  
                src='<?= $logo["url"] ?>'
                alt='<?= $logo_alt ?>'
          /> 

          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            <?= the_field('welcome_subtitle') ?>
          </p>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-3/5">
    <div x-show="!newhero" class="h-56 w-full bg-cover bg-top sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image:url(<?php the_field('header_image'); ?>)"></div>
    <!-- <div x-show="newhero" class="h-56 w-full bg-cover bg-top sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/hero-masked.jpg)"></div> -->
  </div>
</div>