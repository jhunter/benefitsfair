<?php get_header(); ?>

<div class="bg-gray-300">
  <!-- navbar -->
  <div class="bg-pkl-800 relative">
    <nav class="relative" x-data="{ menuopen: false }">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="">
          <div class="-mb-px flex items-center justify-between h-16 px-4 sm:px-0">
            <a href="<?php echo home_url(); ?>" class="flex-shrink-0 text-white font-bold">
              <img class="w-32" src="<?= get_template_directory_uri() ?>/img/parkland.svg" alt="Parkland">
            </a>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <a href="<?= site_url()?>/exhibit-hall" class="px-3 py-5 text-sm font-medium text-gray-300 hover:text-white border-b-2 border-transparent hover:border-white focus:border-white focus:outline-none focus:text-white focus:bg-pkl-700 transition duration-150 ease-in-out">Exhibit Hall</a>

                <?php if ((wp_count_posts( 'event' )->publish) > 0 ) { ?>

                <a href="<?= site_url()?>/event-calendar" class="px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-800 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150">Event Calendar</a>

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
          <a href="<?= site_url()?>/exhibit-hall" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Exhibit Hall</a>
          <?php if ((wp_count_posts( 'event' )->publish) > 0 ) { ?>
          <a href="<?= site_url() ?>/event-calendar" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white bg-blue-500 hover:bg-blue-400 focus:outline-none focus:text-white focus:bg-gray-700">Event Calendar</a>
          <?php } ?>
        </div>
      </div>
    </nav>


    <!-- hero -->
     <?php get_template_part( 'template-parts/c-vendor-header'); ?>

  </div>

     <?php get_template_part( 'template-parts/c-vendor-asset-tabs'); ?>
  
</div>

<!-- better modal -->
<div class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center z-50" x-show="openModal" x-cloak>
  <!--
    Background overlay, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 transition-opacity" style="z-index: -1;">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
  </div>

  <!--
    Modal panel, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      To: "opacity-100 translate-y-0 sm:scale-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100 translate-y-0 sm:scale-100"
      To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
  -->
  <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-md sm:w-full z-50" role="dialog" aria-modal="true" aria-labelledby="modal-headline" @click.away="openModal = false">
    <div class="p-4 sm:p-6 ">
      <div class="text-center">
        <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
          Ask a question
        </h4>
        <p class="mt-4 text-base leading-6 text-gray-500">
          Representatives will answer your general plan questions within one business day.
        </p>
        <?= do_shortcode('[ninja_form id=3]'); ?>
        <!-- <form action="#" method="POST" class="flex flex-col space-y-6 mt-4">
          <div class="flex space-x-3">
            <div class="flex-1">
              <label for="first_name" class="sr-only">First Name</label>
              <div class="relative rounded-md shadow-sm">
                <input id="first_name" class="form-input rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="First Name">
              </div>
            </div>
            <div class="flex-1">
              <label for="last_name" class="sr-only">Last Name</label>
              <div class="relative rounded-md shadow-sm">
                <input id="last_name" class="form-input rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div>
            <label for="email" class="sr-only">Email</label>
            <div class="relative rounded-md shadow-sm">
              <input id="email" type="email" class="form-input rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="Email">
            </div>
          </div>
          <div>
            <label for="message" class="sr-only">Message</label>
            <div class="relative rounded-md shadow-sm">
              <textarea id="message" rows="4" class="form-textarea rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="Message"></textarea>
            </div>
          </div>
          <div>
            <span class="flex w-full rounded-md shadow-sm">
              <button type="submit" class="inline-flex justify-center w-full py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pkl-600 hover:bg-pkl-500 focus:outline-none focus:border-pkl-700 focus:shadow-outline-pkl active:bg-pkl-700 transition duration-150 ease-in-out">
                Send
              </button>
            </span>
          </div>
        </form> -->
      </div>
    </div>
    <div class="p-4 sm:p-6 bg-gray-50 border-t-2 border-gray-200">
      <p class="text-xs leading-5 text-gray-500">Please do not include personal details in your message, such as Social Security number. This email is only active during live Virtual Benefits Fair days.</p>
    </div>
  </div>
</div>
<!-- banner -->

<?php get_template_part( 'template-parts/c-date-banner-foot'); ?>
<?php get_footer(); ?>