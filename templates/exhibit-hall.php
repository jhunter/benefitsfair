<?php
/*
Template Name: Exhibit Hall
*/
?>
<?php get_header(); ?>

<div class="bg-gray-300">
  <div class="bg-teal-900 pb-32">
    <nav class="bg-teal-900" x-data="{ menuopen: false }">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="border-b border-teal-700">
          <div class="-mb-px flex items-center justify-between h-16 px-4 sm:px-0">
            <a href="<?php echo home_url(); ?>" class="flex-shrink-0 text-white font-bold">
              <img class="w-32" src="<?= get_template_directory_uri() ?>/img/parkland.svg" alt="Parkland">
            </a>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <a href="<?= site_url() ?>/exhibit-hall" class="px-3 py-5 text-sm font-medium text-white hover:text-white border-b-2 focus:bg-teal-700 focus:outline-none transition duration-150 ease-in-out">Exhibit Hall</a>
                
                <?php if ((wp_count_posts( 'event' )->publish) > 0 ) { ?>

                <a href="<?= site_url() ?>/event-calendar" class="px-3 py-2 border border-teal-300 text-sm leading-4 font-medium rounded-md text-teal-800 bg-white hover:text-teal-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150">Event Calendar</a>

                <?php } ?>

              </div>
            </div>
            <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button @click="menuopen = !menuopen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white">
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{'hidden': menuopen, 'block': !menuopen }" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{'block': menuopen, 'hidden': !menuopen }"  class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!--
        Mobile menu, toggle classes based on menu state.

        Open: "block", closed: "hidden"
      -->
      <div :class="{'block': menuopen, 'hidden': !menuopen }" class="border-b border-gray-700 md:hidden">
        <div class="px-2 py-3 sm:px-3 space-y-1">
          <a href="<?= site_url() ?>/exhibit-hall" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Exhibit Hall</a>
          <a href="<?= site_url() ?>/event-calendar" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white bg-blue-500 hover:bg-blue-400 focus:outline-none focus:text-white focus:bg-gray-700">Event Calendar</a>
        </div>
      </div>
    </nav>
    <header class="py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl leading-9 font-bold text-white">
          <?= the_title(); ?>
        </h1>
        <p class="mt-3 max-w-xl text-lg leading-6 text-gray-300">
          <?= get_field('intro'); ?>
        </p>
      </div>
    </header>
  </div>

  <?php get_template_part( 'template-parts/c-exhibit-hall-booth-list'); ?>

</div>
<!-- footer -->
<?php get_template_part( 'template-parts/c-date-banner-foot'); ?>
<!-- banner -->

<?php get_footer(); ?>