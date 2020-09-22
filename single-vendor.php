<?php
/*
Template Name: Vendor Booth
Template Post Type: vendor
*/
?>

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
                <a href="<?= site_url()?>/event-calendar" class="px-3 py-2 border border-gray-300 text-sm leading-4 font-medium rounded-md text-gray-800 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150">Event Calendar</a>
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
          <a href="/exhibithall.html" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Exhibit Hall</a>
          <a href="/calendar.html" class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white bg-blue-500 hover:bg-blue-400 focus:outline-none focus:text-white focus:bg-gray-700">Event Calendar</a>
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
  <div class="fixed inset-0 transition-opacity">
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
        <form action="#" method="POST" class="flex flex-col space-y-6 mt-4">
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
        </form>
      </div>
    </div>
    <div class="p-4 sm:p-6 bg-gray-50 border-t-2 border-gray-200">
      <p class="text-xs leading-5 text-gray-500">Please do not include personal details in your message, such as Social Security number. This email is only active during live Virtual Benefits Fair days.</p>
    </div>
  </div>
</div>
<!-- video modal -->
<div class="fixed inset-0 px-4 pb-6 sm:p-0 sm:flex sm:items-center sm:justify-center z-50" x-show="showVideoModal" x-cloak>
  <div class="fixed inset-0 transition-opacity">
    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
  </div>
  <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-4xl sm:w-full" role="dialog" aria-modal="true" @click.away="showVideoModal = false">
    <div class="p-4 sm:p-6 ">
      <div class="relative">
        <div class="aspect-ratio-16/9"></div>
        <iframe src="https://www.youtube-nocookie.com/embed/ubUqtN9Kl4E" class="absolute left-0 top-0 w-full h-full" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div x-data="{ hideBanner: false }" :class="{'block': !hideBanner, 'hidden': hideBanner }" class="fixed bottom-0 inset-x-0 pb-2 sm:pb-5 z-50" >
  <div class="max-w-screen-xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="p-2 rounded-lg bg-pkl-600 shadow-lg sm:p-3">
      <div class="flex items-center justify-between flex-wrap">
        <div class="w-0 flex-1 flex items-center">
          <span class="flex p-2 rounded-lg bg-pkl-800">
            <svg class="h-6 w-6 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>alarm-bell-ring-1</title><path d="M4.5,7.5a1.015,1.015,0,0,0,.873-.505A5.372,5.372,0,0,1,7.457,4.9a1,1,0,1,0-.975-1.746A7.335,7.335,0,0,0,3.628,6.013a1,1,0,0,0,.384,1.361A.968.968,0,0,0,4.5,7.5Z"></path><path d="M6.432.711A1,1,0,0,0,5.186.044,7.492,7.492,0,0,0,.043,5.187,1,1,0,0,0,.711,6.434,1.038,1.038,0,0,0,1,6.477a1,1,0,0,0,.957-.712A5.5,5.5,0,0,1,5.764,1.958,1,1,0,0,0,6.432.711Z"></path><path d="M19.146,4.386a7.391,7.391,0,0,0-1.628-1.228A1,1,0,1,0,16.543,4.9a5.372,5.372,0,0,1,2.085,2.087,1.015,1.015,0,0,0,1.36.383,1,1,0,0,0,.384-1.361A7.438,7.438,0,0,0,19.146,4.386Z"></path><path d="M23.957,5.187A7.492,7.492,0,0,0,18.814.044a1,1,0,1,0-.578,1.914,5.5,5.5,0,0,1,3.807,3.807,1.018,1.018,0,0,0,1.246.669A1,1,0,0,0,23.957,5.187Z"></path><path d="M13.5,21.5h-3a.5.5,0,0,0-.5.5,2,2,0,1,0,4,0A.5.5,0,0,0,13.5,21.5Z"></path><path d="M18.5,13.647V13c0-3.493-2.079-6.479-5-7.27V4.5a1.5,1.5,0,0,0-3,0v1.23c-2.921.791-5,3.777-5,7.27v.646a13.771,13.771,0,0,1-1.447,6.13A.5.5,0,0,0,4.5,20.5h15a.5.5,0,0,0,.447-.724A13.771,13.771,0,0,1,18.5,13.647Z"></path></svg>
          </span>
          <p class="ml-3 font-bold text-white truncate">
            <span class="md:hidden">
              Open Enrollment Is Oct 19–Nov 2
            </span>
            <span class="hidden md:inline">
              Open Enrollment Is October 19 – November 2
            </span>
          </p>
        </div>
        <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
          <div class="rounded-md shadow-sm">
            <a href="#" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-pkl-800 bg-white hover:text-pkl-500 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
              Add a reminder to your calendar
            </a>
          </div>
        </div>
        <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-2">
          <button @click="hideBanner = !hideBanner" type="button" class="-mr-1 flex p-2 rounded-md hover:bg-pkl-500 focus:outline-none focus:bg-pkl-500 transition ease-in-out duration-150" aria-label="Dismiss">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>