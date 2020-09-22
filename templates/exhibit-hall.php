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
          <ul class="flex flex-wrap flex-col space-y-6 lg:flex-row lg:justify-between lg:items-baseline lg:-mt-6">
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
          <ul class="flex flex-wrap flex-col space-y-6 lg:flex-row lg:justify-between lg:items-baseline lg:-mt-6">
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
          <ul class="flex flex-wrap flex-col space-y-6 lg:flex-row lg:justify-between lg:items-baseline lg:-mt-6">
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
          <ul class="flex flex-wrap flex-col space-y-6 lg:flex-row lg:justify-between lg:items-baseline lg:-mt-6">
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
          <ul class="flex flex-wrap flex-col space-y-6 lg:flex-row lg:justify-between lg:items-baseline lg:-mt-6">
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
          <ul class="flex flex-wrap flex-col space-y-6 lg:flex-row lg:justify-between lg:items-baseline lg:-mt-6">
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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
            <li class="w-full lg:flex-vendor">
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