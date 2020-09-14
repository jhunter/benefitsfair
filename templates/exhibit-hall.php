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
                <a href="<?= site_url() ?>/event-calendar" class="px-3 py-2 border border-teal-300 text-sm leading-4 font-medium rounded-md text-teal-800 bg-white hover:text-teal-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150">Event Calendar</a>
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
    <header class="py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl leading-9 font-bold text-white">
          Exhibit Hall
        </h1>
        <p class="mt-3 max-w-xl text-lg leading-6 text-gray-300">
          Browse these vendor booths to learn more about your benefits.
        </p>
      </div>
    </header>
  </div>

  <main class="-mt-32">
    <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8 space-y-8">
      <div class="bg-gray-100 shadow overflow-hidden rounded-lg md:flex">
        <div class="md:w-1/3 relative px-4 py-5 border-b md:border-none border-gray-200 bg-gray-900 sm:px-6 flex items-end overflow-hidden">
          <div class="hidden md:block absolute bg-cover bg-center inset-0 w-full h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/1641857584.jpg)"></div>
          <h3 class="relative md:w-64 md:ml-auto text-4xl leading-9 font-black md:text-right text-white text-shadow">
            Health Benefits
          </h3>
        </div>
        <div class="md:w-2/3 px-4 py-5 sm:px-6 min-h-65">
          <ul class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="<?= get_template_directory_uri() ?>/img/umr.png" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Medical</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">UMR</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/medimpact.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Pharmacy</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">MedImpact</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/cigna.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Dental</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Cigna</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/superiorvision.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Vision</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Superior Vision</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/amwins.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Dependent Eligibility</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Impact Interactive</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="bg-gray-100 shadow overflow-hidden rounded-lg md:flex">
        <div class="md:w-1/3 relative px-4 py-5 border-b md:border-none border-gray-200 bg-gray-900 sm:px-6 flex items-end overflow-hidden">
          <div class="hidden md:block absolute bg-cover bg-center inset-0 w-full h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/md-793872274.jpg)"></div>
          <h3 class="relative md:w-64 md:ml-auto text-4xl leading-9 font-black md:text-right text-white text-shadow">
            Protecting You &amp; Your Family
          </h3>
        </div>
        <div class="md:w-2/3 px-4 py-5 sm:px-6 min-h-65">
          <ul class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/securian.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Life and AD&amp;D</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Securian Financial</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/sedgwick.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Disability</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Sedgwick</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="bg-gray-100 shadow overflow-hidden rounded-lg md:flex">
        <div class="md:w-1/3 relative px-4 py-5 border-b md:border-none border-gray-200 bg-gray-900 sm:px-6 flex items-end overflow-hidden">
          <div class="hidden md:block absolute bg-cover bg-center inset-0 w-full h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/md-751465522.jpg)"></div>
          <h3 class="relative md:w-64 md:ml-auto text-4xl leading-9 font-black md:text-right text-white text-shadow">
            Flexible Spending Accounts
          </h3>
        </div>
        <div class="md:w-2/3 px-4 py-5 sm:px-6 min-h-65">
          <ul class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/payflex.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Health Care Spending Accounts</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">PayFlex</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/payflex.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Dependent Care Spending Accounts</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">PayFlex</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="bg-gray-100 shadow overflow-hidden rounded-lg md:flex">
        <div class="md:w-1/3 relative px-4 py-5 border-b md:border-none border-gray-200 bg-gray-900 sm:px-6 flex items-end overflow-hidden">
          <div class="hidden md:block absolute bg-cover bg-center inset-0 w-full h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/1683310141.jpg)"></div>
          <h3 class="relative md:w-64 md:ml-auto text-4xl leading-9 font-black md:text-right text-white text-shadow">
            Well-Being
          </h3>
        </div>
        <div class="md:w-2/3 px-4 py-5 sm:px-6 min-h-65">
          <ul class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/compsych.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">EAP</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">ComPsych Guidance Resources</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="<?= get_template_directory_uri() ?>/img/milliman.png" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Retirement</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Milliman</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="bg-gray-100 shadow overflow-hidden rounded-lg md:flex">
        <div class="md:w-1/3 relative px-4 py-5 border-b md:border-none border-gray-200 bg-gray-900 sm:px-6 flex items-end overflow-hidden">
          <div class="hidden md:block absolute bg-cover bg-center inset-0 w-full h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/md-669130018.jpg)"></div>
          <h3 class="relative md:w-64 md:ml-auto text-4xl leading-9 font-black md:text-right text-white text-shadow">
            Voluntary Benefits (Beneplace)
          </h3>
        </div>
        <div class="md:w-2/3 px-4 py-5 sm:px-6 min-h-65">
          <ul class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/aflac.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Illness and Accident Insurance</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Aflac</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/araglegalcenter.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Legal Program</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">ARAG Legal Center</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/nationwide.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Pet Insurance</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Nationwide</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page/?double=true" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <div class="flex relative overflow-hidden my-2 flex-shrink-0 -space-x-4">
                  <img class="relative inline-block w-12 h-12 rounded-full text-white group-hover:text-blue-50 shadow-solid border border-gray-300 object-cover" src="https://logo.clearbit.com/travelers.com" alt="">
                  <img class="relative inline-block w-12 h-12 rounded-full text-white group-hover:text-blue-50 shadow-solid border border-gray-300 object-cover" src="<?= get_template_directory_uri() ?>/img/libertymutual.jpg" alt="">
                </div>
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Home &amp; Auto</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Travelers and Liberty Mutual</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/beneplace.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Active & Fit Direct</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">10,000+ fitness centers</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/beneplace.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Cell Phone Discount</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Employee Discount Program</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="bg-gray-100 shadow overflow-hidden rounded-lg md:flex">
        <div class="md:w-1/3 relative px-4 py-5 border-b md:border-none border-gray-200 bg-gray-900 sm:px-6 flex items-end overflow-hidden">
          <div class="hidden md:block absolute bg-cover bg-center inset-0 w-full h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/md-pklbenefits.jpg)"></div>
          <h3 class="relative md:w-64 md:ml-auto text-4xl leading-9 font-black md:text-right text-white text-shadow">
            Parkland Benefits
          </h3>
        </div>
        <div class="md:w-2/3 px-4 py-5 sm:px-6 min-h-65">
          <ul class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="<?= get_template_directory_uri() ?>/img/parkland-icon.svg" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">2021 Open Enrollment</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Parkland</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/mmcu.com" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Credit Union</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Metro Medical Credit Union</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="<?= get_template_directory_uri() ?>/img/parkland-icon.svg" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Parkland Nicotine-Free Campus</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Parkland</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
            <li class="col-span-1">
              <a href="<?= site_url() ?>/test-vendor-page" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="https://logo.clearbit.com/istandforparkland.org" alt="">
                <div class="flex-1">
                  <div class="flex items-center space-x-3">
                    <h3 class="text-gray-900 text-lg leading-5 font-medium">Giving Back</h3>
                  </div>
                  <p class="mt-1 text-gray-500 text-sm leading-5">Parkland Foundation</p>
                </div>
                <div>
                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                  </svg>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </main>
</div>
<!-- footer -->
<div class="bg-gray-300">
  <div class="bg-gray-800 pb-16 sm:pb-20 lg:pb-28 relative">
    <div class="relative">
      <div class="absolute inset-0 h-1/2 bg-gray-300"></div>
      <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white max-w-lg py-8 px-6 lg:p-12 space-y-8 lg:space-y-0 lg:space-x-8 mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
          <div class="text-left lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center">
            <img class="block max-w-full w-64" src="<?= get_template_directory_uri() ?>/img/otm.svg" alt="Office of Talent Management" srcset="">
            <p class="mt-2 text-base leading-6 text-gray-500">
              People first, for the health of our community
            </p>
          </div>
          <div class="lg:flex-1">
            <div class="flex items-center">
              <h4 class="flex-shrink-0 pr-4 text-sm leading-5 tracking-wider font-semibold uppercase text-blue-600">
                For Enrollment Help
              </h4>
              <div class="flex-1 border-t-2 border-gray-200"></div>
            </div>
            <div class="mt-8 space-y-2 xl:space-y-0 xl:space-x-2 flex flex-col xl:flex-row">
              <a href="tel:+14694193000,73000" class="inline-flex items-center whitespace-no-wrap px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out">
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Phone Number</title><path d="M50.1208,51.7221a1.8783,1.8783,0,0,1-1.8315,1.3009C44.6817,52.9491,34.6615,51.6371,23.5249,40.5,12.3867,29.3617,11.076,19.34,11.0023,15.7333a1.8777,1.8777,0,0,1,1.3009-1.83l8.5482-2.79a1.95,1.95,0,0,1,2.3833,1.0844l3.4128,7.905a1.906,1.906,0,0,1-.3909,2.1112L22.25,26.22a.9422.9422,0,0,0-.2192.9979,23.3385,23.3385,0,0,0,5.7682,9.0079,23.3412,23.3412,0,0,0,9.0064,5.768.9437.9437,0,0,0,.9994-.2194L41.81,37.7693a1.9085,1.9085,0,0,1,2.1141-.391l7.9035,3.4123a1.9483,1.9483,0,0,1,1.0845,2.3809Z" fill-rule="evenodd"></path></svg>
                Shared Services<br/>469.419.3000 (ext.&nbsp;7&#8209;3000)
              </a>
              <a href="tel:+12145905999" class="inline-flex items-center whitespace-no-wrap px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out">
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Phone Number</title><path d="M50.1208,51.7221a1.8783,1.8783,0,0,1-1.8315,1.3009C44.6817,52.9491,34.6615,51.6371,23.5249,40.5,12.3867,29.3617,11.076,19.34,11.0023,15.7333a1.8777,1.8777,0,0,1,1.3009-1.83l8.5482-2.79a1.95,1.95,0,0,1,2.3833,1.0844l3.4128,7.905a1.906,1.906,0,0,1-.3909,2.1112L22.25,26.22a.9422.9422,0,0,0-.2192.9979,23.3385,23.3385,0,0,0,5.7682,9.0079,23.3412,23.3412,0,0,0,9.0064,5.768.9437.9437,0,0,0,.9994-.2194L41.81,37.7693a1.9085,1.9085,0,0,1,2.1141-.391l7.9035,3.4123a1.9483,1.9483,0,0,1,1.0845,2.3809Z" fill-rule="evenodd"></path></svg>
                IT Login Support<br/> 214.590.5999
              </a>
              <a href="https://parkland.service-now.com/otm" target="_blank" class="inline-flex items-center whitespace-no-wrap px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out">
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Website</title><path d="M32.0123,56.0206l-.0019,0-.0019,0a24,24,0,1,1,.0038,0Zm-10.467-8.0949a27.6451,27.6451,0,0,1-1.5314-3.57.4964.4964,0,0,0-.4661-.3348h-2.479a.4994.4994,0,0,0-.3921.8119,20.0893,20.0893,0,0,0,4.1545,3.7417A.4978.4978,0,0,0,21.5453,47.9257Zm-7.5119-7.905h4.1888a.4917.4917,0,0,0,.4854-.587,38.981,38.981,0,0,1-.613-4.9434.4957.4957,0,0,0-.4927-.47H12.68a.5069.5069,0,0,0-.5031.5654,19.8751,19.8751,0,0,0,1.3885,5.1263A.5071.5071,0,0,0,14.0334,40.0207Zm-1.3531-10h4.9216a.4957.4957,0,0,0,.4927-.4695,38.98,38.98,0,0,1,.613-4.9435.4917.4917,0,0,0-.4854-.5871H14.0334a.5071.5071,0,0,0-.4677.3084,19.8773,19.8773,0,0,0-1.3885,5.1263A.5069.5069,0,0,0,12.68,30.0207Zm4.3885-10h2.479a.4963.4963,0,0,0,.4661-.3347,27.6084,27.6084,0,0,1,1.5314-3.57.4978.4978,0,0,0-.7141-.6486,20.0906,20.0906,0,0,0-4.1545,3.7415A.4994.4994,0,0,0,17.0688,20.0207ZM29.25,12.7948c-1.97,1.1322-3.6857,3.4513-4.9542,6.5359a.5039.5039,0,0,0,.4669.69H29.51a.5.5,0,0,0,.5-.5V13.2293A.5057.5057,0,0,0,29.25,12.7948ZM29.51,24.0206H23.2576a.5017.5017,0,0,0-.4939.3977,36.6608,36.6608,0,0,0-.6726,5.0664.507.507,0,0,0,.5039.536H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,24.0206Zm0,10H22.595a.5071.5071,0,0,0-.5039.5361,36.6593,36.6593,0,0,0,.6726,5.0663.5017.5017,0,0,0,.4939.3976H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,34.0207Zm0,10H24.7624a.504.504,0,0,0-.4669.69c1.2685,3.0846,2.9843,5.4037,4.9542,6.5359a.5057.5057,0,0,0,.7607-.4345V44.5207A.5.5,0,0,0,29.51,44.0207Zm21.83-10H46.4189a.496.496,0,0,0-.4929.4695,38.9441,38.9441,0,0,1-.613,4.9435.4919.4919,0,0,0,.4856.587h4.1885a.5069.5069,0,0,0,.4678-.3083,19.862,19.862,0,0,0,1.3885-5.1263A.5068.5068,0,0,0,51.34,34.0207Zm-4.3883,10H44.473a.4965.4965,0,0,0-.4661.3348,27.6451,27.6451,0,0,1-1.5314,3.57.4977.4977,0,0,0,.7141.6485,20.088,20.088,0,0,0,4.1544-3.7416A.4994.4994,0,0,0,46.952,44.0207ZM34.771,51.2466c1.97-1.1322,3.6858-3.4512,4.9544-6.5358a.504.504,0,0,0-.4669-.69H34.51a.5.5,0,0,0-.5.5v6.2914A.5056.5056,0,0,0,34.771,51.2466ZM34.51,40.0207h6.2529a.5021.5021,0,0,0,.4941-.3976,36.6751,36.6751,0,0,0,.6724-5.0663.5068.5068,0,0,0-.5037-.5361H34.51a.5.5,0,0,0-.5.5v5A.5.5,0,0,0,34.51,40.0207Zm-.5-26.7914v6.2915a.5.5,0,0,0,.5.5h4.7482a.5039.5039,0,0,0,.4669-.69c-1.2684-3.0846-2.9843-5.4036-4.9544-6.5359A.5057.5057,0,0,0,34.01,13.2293Zm0,11.2913v5a.5.5,0,0,0,.5.5H41.426a.5068.5068,0,0,0,.5037-.536,36.7071,36.7071,0,0,0-.6724-5.0664.5021.5021,0,0,0-.4941-.3977H34.51A.5.5,0,0,0,34.01,24.5206Zm8.4651-8.4047a27.6377,27.6377,0,0,1,1.5314,3.57.4964.4964,0,0,0,.4661.3347h2.479a.4994.4994,0,0,0,.392-.8118A20.0909,20.0909,0,0,0,43.19,15.4673.4978.4978,0,0,0,42.4755,16.1159Zm2.8375,8.4918a38.9441,38.9441,0,0,1,.613,4.9435.496.496,0,0,0,.4929.4695H51.34a.5068.5068,0,0,0,.5031-.5654,19.8689,19.8689,0,0,0-1.3885-5.1265.5071.5071,0,0,0-.4678-.3082H45.7986A.4918.4918,0,0,0,45.313,24.6077Z" fill-rule="evenodd"></path></svg>              
                OTM Portal<br/> parkland.service-now.com
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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