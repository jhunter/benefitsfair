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

                <?php if ((wp_count_posts( 'event' )->publish) > 0 ) { ?>
                <a href="<?= site_url() ?>/event-calendar" class="px-3 py-2 border border-pkl-300 text-sm leading-4 font-medium rounded-md text-pkl-900 bg-white hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150">Event Calendar</a>
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
          <a href="<?= site_url() ?>/exhibit-hall" class="block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Exhibit Hall</a>
          <?php if ((wp_count_posts( 'event' )->publish) > 0 ) { ?>
          <a href="<?= site_url() ?>/event-calendar" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-900 focus:outline-none focus:text-white focus:bg-gray-700">Event Calendar</a>
          <?php } ?>
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
          <div class="h-56 w-full bg-cover bg-center bg-top sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image:url(<?= get_field('header_image')['url'] ?>"></div>
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
      $vendorname = get_field('vendor_display_name',$vendor[0]);

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
                      <a href="<?= get_sub_field('registration_link')['url'] ?>" target="_blank" onclick="ga('send', 'event', 'OpenVendorAsset', '<?= $vendorname; ?>', 'Event: <?= get_field('display_name') ?>')" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                        <?php 
                          if (get_sub_field('registration_link')['title'] != ''){
                            echo esc_html( get_sub_field('registration_link')['title'] );
                          }
                          else {
                            echo 'Register';
                          }
                        ?>
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

</div>
<!-- footer -->

<!-- banner -->

<?php get_template_part( 'template-parts/c-date-banner-foot'); ?>
<?php get_footer(); ?>