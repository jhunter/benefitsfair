<?php
/*
Template Name: Event Calendar
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
                <a href="<?= site_url() ?>/exhibit-hall" class="px-3 py-5 text-sm font-medium text-gray-300 hover:text-white border-b-2 border-transparent hover:border-white focus:border-white focus:outline-none focus:text-white focus:bg-pkl-700 transition duration-150 ease-in-out">Exhibit Hall</a>
                <a href="<?= site_url() ?>/event-calendar" class="px-3 py-2 border border-pkl-300 text-sm leading-4 font-medium rounded-md text-pkl-900 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150">Event Calendar</a>
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
          <a href="/exhibithall.html" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Exhibit Hall</a>
          <a href="/calendar.html" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Event Calendar</a>
        </div>
      </div>
    </nav>
    <!-- hero -->
    <div class="relative bg-gray-800 overflow-hidden">
        <div class="max-w-screen-xl mx-auto">
          <div class="relative z-10 bg-gray-800 lg:max-w-xl lg:w-full">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-gray-800 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon points="50,0 100,0 50,100 0,100"></polygon>
            </svg>
            <main class="py-10 mx-auto max-w-screen-xl px-4 sm:py-12 sm:px-6 md:py-16 lg:px-8 lg:pt-28 lg:pb-48">
              <div class="md:flex md:space-x-4 justify-center">
                <div class="flex-1">
                  <h1 class="text-3xl leading-9 font-bold text-white">
                    <?= the_title(); ?>
                  </h1>
                  <p class="mt-3 max-w-xl text-lg leading-6 text-gray-300">
                    <?= get_field('intro'); ?>
                  </p>
                </div>
              </div>
            </main>
          </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-3/5">
          <!-- <div x-show="newhero" class="h-56 w-full bg-cover bg-center bg-top sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/lg-1517141402.jpg)"></div> -->
          <div x-show="!newhero" class="h-56 w-full bg-cover bg-center bg-top sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image:url(<?= get_field('header_image')['url'] ?>"></div>
        </div>
      </div>
  </div>

  <main class="lg:-mt-32 relative z-20">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 space-y-8">

  <?php

    $events = get_field('event_order');

    if($events): 

    foreach($events as $post):

      setup_postdata($post);
  ?>

    <?php

      $vendor = get_field('associated_vendor');
      $logo = get_field('vendor_logo',$vendor[0]);

    ?>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 sm:px-6 py-5 border-b border-gray-200 flex items-center flex-wrap sm:space-x-4">
          <img class="w-12 h-12 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover self-start" src="<?= $logo['sizes']['square-med'] ?>" alt="">
          <div class="flex-1 ml-4 sm:ml-0">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              <?= get_field('display_name') ?>
            </h3>
          </div>
        </div>
        <div class="px-4 py-5 sm:p-0">
          <dl>
            <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Description
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <?= get_field('event_description')?>
              </dd>
            </div>
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Date
              </dt>

              <?php if( have_rows('event_details')) : ?>

              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">

                <?php while(have_rows('event_details')) : the_row(); ?>

                  <li class="p-4 flex items-center justify-between text-sm leading-5">
                    <div class="w-0 flex-1 flex items-center">
                        <?php

                          $event_start = DateTime::createFromFormat('d/m/Y g:i a', get_sub_field('start_time'));
                          echo $event_start->format( 'M j - g:i a' );
                        ?>
                        <!-- Nov 1 - 3:00 PM -->
                      </div>
                      <a href="<?= get_sub_field('registration_link')['url'] ?>" target="_blank" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                      Register
                    </a>
                    </li>

                <?php endwhile; ?>

                </ul>
              </dd>

            <?php endif; ?>

              
                  
            </div>
          </dl>
        </div>
      </div>

  <?php

    endforeach;
    wp_reset_postdata();
    endif;

  ?>
    </div>
  </main>
  <!-- <main class="lg:-mt-32 relative z-20">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 space-y-8">

      <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 sm:px-6 py-5 border-b border-gray-200 flex items-center flex-wrap sm:space-x-4">
          <img class="w-12 h-12 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover self-start" src="<?= get_template_directory_uri() ?>/img/umr.png" alt="">
          <div class="flex-1 ml-4 sm:ml-0">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Care Management
            </h3>
          </div>
        </div>
        <div class="px-4 py-5 sm:p-0">
          <dl>
            <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Description
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
              </dd>
            </div>
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Date
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                  <li class="p-4 flex items-center justify-between text-sm leading-5">
                    <div class="w-0 flex-1 flex items-center">
                      Nov 1 - 3:00 PM
                    </div>
                    <a href="https://global.gotowebinar.com/" target="_blank" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                    Register
                  </a>
                  </li>
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                    <div class="w-0 flex-1 flex items-center">
                      Nov 2 - 4:00 PM
                    </div>
                    <a href="https://global.gotowebinar.com/" target="_blank" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                    Register
                  </a>
                  </li>
                </ul>
              </dd>
            </div>
          </dl>
        </div>
      </div>
      <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 sm:px-6 py-5 border-b border-gray-200 flex items-center flex-wrap sm:space-x-4">
          <img class="w-12 h-12 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover self-start" src="<?= get_template_directory_uri() ?>/img/umr.png" alt="">
          <div class="flex-1 ml-4 sm:ml-0">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Medical Overview
            </h3>
          </div>
        </div>
        <div class="px-4 py-5 sm:p-0">
          <dl>
            <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Description
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
              </dd>
            </div>
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Date
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                  <li class="p-4 flex items-center justify-between text-sm leading-5">
                    <div class="w-0 flex-1 flex items-center">
                      Nov 1 - 3:00 PM
                    </div>
                    <a href="https://global.gotowebinar.com/" target="_blank" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                    Register
                  </a>
                  </li>
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                    <div class="w-0 flex-1 flex items-center">
                      Nov 2 - 4:00 PM
                    </div>
                    <a href="https://global.gotowebinar.com/" target="_blank" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                    Register
                  </a>
                  </li>
                </ul>
              </dd>
            </div>
          </dl>
        </div>
      </div>
      <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 sm:px-6 py-5 border-b border-gray-200 flex items-center flex-wrap sm:space-x-4">
          <img class="w-12 h-12 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover self-start" src="<?= get_template_directory_uri() ?>/img/milliman.png" alt="">
          <div class="flex-1 ml-4 sm:ml-0">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
              Retirement Program Overview
            </h3>
          </div>
        </div>
        <div class="px-4 py-5 sm:p-0">
          <dl>
            <div class="mt-8 sm:mt-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Description
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.
              </dd>
            </div>
            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
              <dt class="text-sm leading-5 font-medium text-gray-500">
                Date
              </dt>
              <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                  <li class="p-4 flex items-center justify-between text-sm leading-5">
                    <div class="w-0 flex-1 flex items-center">
                      Nov 1 - 3:00 PM
                    </div>
                    <a href="https://global.gotowebinar.com/" target="_blank" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                    Register
                  </a>
                  </li>
                  <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                    <div class="w-0 flex-1 flex items-center">
                      Nov 2 - 4:00 PM
                    </div>
                    <a href="https://global.gotowebinar.com/" target="_blank" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                    Register
                  </a>
                  </li>
                </ul>
              </dd>
            </div>
          </dl>
        </div>
      </div>

    </div>
  </main> -->
</div>
<!-- footer -->

<!-- banner -->
<div x-data="{ hideBanner: false }" :class="{'block': !hideBanner, 'hidden': hideBanner }" class="fixed bottom-0 inset-x-0 pb-2 sm:pb-5  z-50" >
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
            <a href="#" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-pkl-800 bg-white hover:text-pkl-800 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
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