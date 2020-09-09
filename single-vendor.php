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
    <div class="relative bg-gray-800 overflow-hidden">
      <div class="max-w-screen-xl mx-auto">
        <div class="relative z-10 bg-gray-800 lg:max-w-xl lg:w-full">
          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-gray-800 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>
          <main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:pl-8 lg:pr-12 py-10 sm:py-12 md:py-16 lg:pt-16 lg:pb-48">
            <div class="justify-center">
              <div :class="{'-space-x-10':double}" class="flex relative overflow-hidden flex-shrink-0">
                <img x-show="double" class="w-32 h-32 rounded-full flex-shrink-0 border-gray-800 border-4 object-cover" src="https://logo.clearbit.com/travelers.com" alt="">
                <img x-show="double" class="w-32 h-32 rounded-full flex-shrink-0 border-gray-800 border-4 object-cover" src="<?= get_template_directory_uri() ?>/img/libertymutual.jpg" alt="">
                <img x-show="!double" class="w-32 h-32 rounded-full flex-shrink-0 border-gray-800 border-4 object-cover" src="<?= get_template_directory_uri() ?>/img/milliman.png" alt="">
              </div>
              <div class="flex-1 mt-2 ">
                <h1 x-text="double ? 'Travelers & Liberty&nbsp;Mutual' : 'Milliman'" class="text-4xl leading-9 font-bold text-white md:mt-0">
                  Milliman
                </h1>
                <p class="text-gray-300 mt-2">As visions of retirement have changed, so have retirement plans. Our experts can help you navigate your options.</p>
                <div x-show="!double" class="inline-grid grid-cols-1 md:grid-cols-2 mt-4 gap-y-2 md:gap-x-4">
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="https://millimanBenefits.com" target="_blank">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Website</title><path d="M32.0123,56.0206l-.0019,0-.0019,0a24,24,0,1,1,.0038,0Zm-10.467-8.0949a27.6451,27.6451,0,0,1-1.5314-3.57.4964.4964,0,0,0-.4661-.3348h-2.479a.4994.4994,0,0,0-.3921.8119,20.0893,20.0893,0,0,0,4.1545,3.7417A.4978.4978,0,0,0,21.5453,47.9257Zm-7.5119-7.905h4.1888a.4917.4917,0,0,0,.4854-.587,38.981,38.981,0,0,1-.613-4.9434.4957.4957,0,0,0-.4927-.47H12.68a.5069.5069,0,0,0-.5031.5654,19.8751,19.8751,0,0,0,1.3885,5.1263A.5071.5071,0,0,0,14.0334,40.0207Zm-1.3531-10h4.9216a.4957.4957,0,0,0,.4927-.4695,38.98,38.98,0,0,1,.613-4.9435.4917.4917,0,0,0-.4854-.5871H14.0334a.5071.5071,0,0,0-.4677.3084,19.8773,19.8773,0,0,0-1.3885,5.1263A.5069.5069,0,0,0,12.68,30.0207Zm4.3885-10h2.479a.4963.4963,0,0,0,.4661-.3347,27.6084,27.6084,0,0,1,1.5314-3.57.4978.4978,0,0,0-.7141-.6486,20.0906,20.0906,0,0,0-4.1545,3.7415A.4994.4994,0,0,0,17.0688,20.0207ZM29.25,12.7948c-1.97,1.1322-3.6857,3.4513-4.9542,6.5359a.5039.5039,0,0,0,.4669.69H29.51a.5.5,0,0,0,.5-.5V13.2293A.5057.5057,0,0,0,29.25,12.7948ZM29.51,24.0206H23.2576a.5017.5017,0,0,0-.4939.3977,36.6608,36.6608,0,0,0-.6726,5.0664.507.507,0,0,0,.5039.536H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,24.0206Zm0,10H22.595a.5071.5071,0,0,0-.5039.5361,36.6593,36.6593,0,0,0,.6726,5.0663.5017.5017,0,0,0,.4939.3976H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,34.0207Zm0,10H24.7624a.504.504,0,0,0-.4669.69c1.2685,3.0846,2.9843,5.4037,4.9542,6.5359a.5057.5057,0,0,0,.7607-.4345V44.5207A.5.5,0,0,0,29.51,44.0207Zm21.83-10H46.4189a.496.496,0,0,0-.4929.4695,38.9441,38.9441,0,0,1-.613,4.9435.4919.4919,0,0,0,.4856.587h4.1885a.5069.5069,0,0,0,.4678-.3083,19.862,19.862,0,0,0,1.3885-5.1263A.5068.5068,0,0,0,51.34,34.0207Zm-4.3883,10H44.473a.4965.4965,0,0,0-.4661.3348,27.6451,27.6451,0,0,1-1.5314,3.57.4977.4977,0,0,0,.7141.6485,20.088,20.088,0,0,0,4.1544-3.7416A.4994.4994,0,0,0,46.952,44.0207ZM34.771,51.2466c1.97-1.1322,3.6858-3.4512,4.9544-6.5358a.504.504,0,0,0-.4669-.69H34.51a.5.5,0,0,0-.5.5v6.2914A.5056.5056,0,0,0,34.771,51.2466ZM34.51,40.0207h6.2529a.5021.5021,0,0,0,.4941-.3976,36.6751,36.6751,0,0,0,.6724-5.0663.5068.5068,0,0,0-.5037-.5361H34.51a.5.5,0,0,0-.5.5v5A.5.5,0,0,0,34.51,40.0207Zm-.5-26.7914v6.2915a.5.5,0,0,0,.5.5h4.7482a.5039.5039,0,0,0,.4669-.69c-1.2684-3.0846-2.9843-5.4036-4.9544-6.5359A.5057.5057,0,0,0,34.01,13.2293Zm0,11.2913v5a.5.5,0,0,0,.5.5H41.426a.5068.5068,0,0,0,.5037-.536,36.7071,36.7071,0,0,0-.6724-5.0664.5021.5021,0,0,0-.4941-.3977H34.51A.5.5,0,0,0,34.01,24.5206Zm8.4651-8.4047a27.6377,27.6377,0,0,1,1.5314,3.57.4964.4964,0,0,0,.4661.3347h2.479a.4994.4994,0,0,0,.392-.8118A20.0909,20.0909,0,0,0,43.19,15.4673.4978.4978,0,0,0,42.4755,16.1159Zm2.8375,8.4918a38.9441,38.9441,0,0,1,.613,4.9435.496.496,0,0,0,.4929.4695H51.34a.5068.5068,0,0,0,.5031-.5654,19.8689,19.8689,0,0,0-1.3885-5.1265.5071.5071,0,0,0-.4678-.3082H45.7986A.4918.4918,0,0,0,45.313,24.6077Z" fill-rule="evenodd"></path></svg>              
                    millimanbenefits.com
                  </a>
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="tel:+18009952608" target="_blank">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Phone Number</title><path d="M50.1208,51.7221a1.8783,1.8783,0,0,1-1.8315,1.3009C44.6817,52.9491,34.6615,51.6371,23.5249,40.5,12.3867,29.3617,11.076,19.34,11.0023,15.7333a1.8777,1.8777,0,0,1,1.3009-1.83l8.5482-2.79a1.95,1.95,0,0,1,2.3833,1.0844l3.4128,7.905a1.906,1.906,0,0,1-.3909,2.1112L22.25,26.22a.9422.9422,0,0,0-.2192.9979,23.3385,23.3385,0,0,0,5.7682,9.0079,23.3412,23.3412,0,0,0,9.0064,5.768.9437.9437,0,0,0,.9994-.2194L41.81,37.7693a1.9085,1.9085,0,0,1,2.1141-.391l7.9035,3.4123a1.9483,1.9483,0,0,1,1.0845,2.3809Z" fill-rule="evenodd"></path></svg>
                    1.800.995.2608
                  </a>
                </div>
                <div x-show="double" class="inline-grid grid-cols-1 md:grid-cols-2 mt-4 gap-y-2 md:gap-x-4">
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="https://www.travelers.com" target="_blank">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Website</title><path d="M32.0123,56.0206l-.0019,0-.0019,0a24,24,0,1,1,.0038,0Zm-10.467-8.0949a27.6451,27.6451,0,0,1-1.5314-3.57.4964.4964,0,0,0-.4661-.3348h-2.479a.4994.4994,0,0,0-.3921.8119,20.0893,20.0893,0,0,0,4.1545,3.7417A.4978.4978,0,0,0,21.5453,47.9257Zm-7.5119-7.905h4.1888a.4917.4917,0,0,0,.4854-.587,38.981,38.981,0,0,1-.613-4.9434.4957.4957,0,0,0-.4927-.47H12.68a.5069.5069,0,0,0-.5031.5654,19.8751,19.8751,0,0,0,1.3885,5.1263A.5071.5071,0,0,0,14.0334,40.0207Zm-1.3531-10h4.9216a.4957.4957,0,0,0,.4927-.4695,38.98,38.98,0,0,1,.613-4.9435.4917.4917,0,0,0-.4854-.5871H14.0334a.5071.5071,0,0,0-.4677.3084,19.8773,19.8773,0,0,0-1.3885,5.1263A.5069.5069,0,0,0,12.68,30.0207Zm4.3885-10h2.479a.4963.4963,0,0,0,.4661-.3347,27.6084,27.6084,0,0,1,1.5314-3.57.4978.4978,0,0,0-.7141-.6486,20.0906,20.0906,0,0,0-4.1545,3.7415A.4994.4994,0,0,0,17.0688,20.0207ZM29.25,12.7948c-1.97,1.1322-3.6857,3.4513-4.9542,6.5359a.5039.5039,0,0,0,.4669.69H29.51a.5.5,0,0,0,.5-.5V13.2293A.5057.5057,0,0,0,29.25,12.7948ZM29.51,24.0206H23.2576a.5017.5017,0,0,0-.4939.3977,36.6608,36.6608,0,0,0-.6726,5.0664.507.507,0,0,0,.5039.536H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,24.0206Zm0,10H22.595a.5071.5071,0,0,0-.5039.5361,36.6593,36.6593,0,0,0,.6726,5.0663.5017.5017,0,0,0,.4939.3976H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,34.0207Zm0,10H24.7624a.504.504,0,0,0-.4669.69c1.2685,3.0846,2.9843,5.4037,4.9542,6.5359a.5057.5057,0,0,0,.7607-.4345V44.5207A.5.5,0,0,0,29.51,44.0207Zm21.83-10H46.4189a.496.496,0,0,0-.4929.4695,38.9441,38.9441,0,0,1-.613,4.9435.4919.4919,0,0,0,.4856.587h4.1885a.5069.5069,0,0,0,.4678-.3083,19.862,19.862,0,0,0,1.3885-5.1263A.5068.5068,0,0,0,51.34,34.0207Zm-4.3883,10H44.473a.4965.4965,0,0,0-.4661.3348,27.6451,27.6451,0,0,1-1.5314,3.57.4977.4977,0,0,0,.7141.6485,20.088,20.088,0,0,0,4.1544-3.7416A.4994.4994,0,0,0,46.952,44.0207ZM34.771,51.2466c1.97-1.1322,3.6858-3.4512,4.9544-6.5358a.504.504,0,0,0-.4669-.69H34.51a.5.5,0,0,0-.5.5v6.2914A.5056.5056,0,0,0,34.771,51.2466ZM34.51,40.0207h6.2529a.5021.5021,0,0,0,.4941-.3976,36.6751,36.6751,0,0,0,.6724-5.0663.5068.5068,0,0,0-.5037-.5361H34.51a.5.5,0,0,0-.5.5v5A.5.5,0,0,0,34.51,40.0207Zm-.5-26.7914v6.2915a.5.5,0,0,0,.5.5h4.7482a.5039.5039,0,0,0,.4669-.69c-1.2684-3.0846-2.9843-5.4036-4.9544-6.5359A.5057.5057,0,0,0,34.01,13.2293Zm0,11.2913v5a.5.5,0,0,0,.5.5H41.426a.5068.5068,0,0,0,.5037-.536,36.7071,36.7071,0,0,0-.6724-5.0664.5021.5021,0,0,0-.4941-.3977H34.51A.5.5,0,0,0,34.01,24.5206Zm8.4651-8.4047a27.6377,27.6377,0,0,1,1.5314,3.57.4964.4964,0,0,0,.4661.3347h2.479a.4994.4994,0,0,0,.392-.8118A20.0909,20.0909,0,0,0,43.19,15.4673.4978.4978,0,0,0,42.4755,16.1159Zm2.8375,8.4918a38.9441,38.9441,0,0,1,.613,4.9435.496.496,0,0,0,.4929.4695H51.34a.5068.5068,0,0,0,.5031-.5654,19.8689,19.8689,0,0,0-1.3885-5.1265.5071.5071,0,0,0-.4678-.3082H45.7986A.4918.4918,0,0,0,45.313,24.6077Z" fill-rule="evenodd"></path></svg>              
                    travelers.com
                  </a>
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="tel:+18777540481" target="_blank">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Phone Number</title><path d="M50.1208,51.7221a1.8783,1.8783,0,0,1-1.8315,1.3009C44.6817,52.9491,34.6615,51.6371,23.5249,40.5,12.3867,29.3617,11.076,19.34,11.0023,15.7333a1.8777,1.8777,0,0,1,1.3009-1.83l8.5482-2.79a1.95,1.95,0,0,1,2.3833,1.0844l3.4128,7.905a1.906,1.906,0,0,1-.3909,2.1112L22.25,26.22a.9422.9422,0,0,0-.2192.9979,23.3385,23.3385,0,0,0,5.7682,9.0079,23.3412,23.3412,0,0,0,9.0064,5.768.9437.9437,0,0,0,.9994-.2194L41.81,37.7693a1.9085,1.9085,0,0,1,2.1141-.391l7.9035,3.4123a1.9483,1.9483,0,0,1,1.0845,2.3809Z" fill-rule="evenodd"></path></svg>
                    1-877-754-0481
                  </a>
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="https://www.libertymutual.com/" target="_blank">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Website</title><path d="M32.0123,56.0206l-.0019,0-.0019,0a24,24,0,1,1,.0038,0Zm-10.467-8.0949a27.6451,27.6451,0,0,1-1.5314-3.57.4964.4964,0,0,0-.4661-.3348h-2.479a.4994.4994,0,0,0-.3921.8119,20.0893,20.0893,0,0,0,4.1545,3.7417A.4978.4978,0,0,0,21.5453,47.9257Zm-7.5119-7.905h4.1888a.4917.4917,0,0,0,.4854-.587,38.981,38.981,0,0,1-.613-4.9434.4957.4957,0,0,0-.4927-.47H12.68a.5069.5069,0,0,0-.5031.5654,19.8751,19.8751,0,0,0,1.3885,5.1263A.5071.5071,0,0,0,14.0334,40.0207Zm-1.3531-10h4.9216a.4957.4957,0,0,0,.4927-.4695,38.98,38.98,0,0,1,.613-4.9435.4917.4917,0,0,0-.4854-.5871H14.0334a.5071.5071,0,0,0-.4677.3084,19.8773,19.8773,0,0,0-1.3885,5.1263A.5069.5069,0,0,0,12.68,30.0207Zm4.3885-10h2.479a.4963.4963,0,0,0,.4661-.3347,27.6084,27.6084,0,0,1,1.5314-3.57.4978.4978,0,0,0-.7141-.6486,20.0906,20.0906,0,0,0-4.1545,3.7415A.4994.4994,0,0,0,17.0688,20.0207ZM29.25,12.7948c-1.97,1.1322-3.6857,3.4513-4.9542,6.5359a.5039.5039,0,0,0,.4669.69H29.51a.5.5,0,0,0,.5-.5V13.2293A.5057.5057,0,0,0,29.25,12.7948ZM29.51,24.0206H23.2576a.5017.5017,0,0,0-.4939.3977,36.6608,36.6608,0,0,0-.6726,5.0664.507.507,0,0,0,.5039.536H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,24.0206Zm0,10H22.595a.5071.5071,0,0,0-.5039.5361,36.6593,36.6593,0,0,0,.6726,5.0663.5017.5017,0,0,0,.4939.3976H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,34.0207Zm0,10H24.7624a.504.504,0,0,0-.4669.69c1.2685,3.0846,2.9843,5.4037,4.9542,6.5359a.5057.5057,0,0,0,.7607-.4345V44.5207A.5.5,0,0,0,29.51,44.0207Zm21.83-10H46.4189a.496.496,0,0,0-.4929.4695,38.9441,38.9441,0,0,1-.613,4.9435.4919.4919,0,0,0,.4856.587h4.1885a.5069.5069,0,0,0,.4678-.3083,19.862,19.862,0,0,0,1.3885-5.1263A.5068.5068,0,0,0,51.34,34.0207Zm-4.3883,10H44.473a.4965.4965,0,0,0-.4661.3348,27.6451,27.6451,0,0,1-1.5314,3.57.4977.4977,0,0,0,.7141.6485,20.088,20.088,0,0,0,4.1544-3.7416A.4994.4994,0,0,0,46.952,44.0207ZM34.771,51.2466c1.97-1.1322,3.6858-3.4512,4.9544-6.5358a.504.504,0,0,0-.4669-.69H34.51a.5.5,0,0,0-.5.5v6.2914A.5056.5056,0,0,0,34.771,51.2466ZM34.51,40.0207h6.2529a.5021.5021,0,0,0,.4941-.3976,36.6751,36.6751,0,0,0,.6724-5.0663.5068.5068,0,0,0-.5037-.5361H34.51a.5.5,0,0,0-.5.5v5A.5.5,0,0,0,34.51,40.0207Zm-.5-26.7914v6.2915a.5.5,0,0,0,.5.5h4.7482a.5039.5039,0,0,0,.4669-.69c-1.2684-3.0846-2.9843-5.4036-4.9544-6.5359A.5057.5057,0,0,0,34.01,13.2293Zm0,11.2913v5a.5.5,0,0,0,.5.5H41.426a.5068.5068,0,0,0,.5037-.536,36.7071,36.7071,0,0,0-.6724-5.0664.5021.5021,0,0,0-.4941-.3977H34.51A.5.5,0,0,0,34.01,24.5206Zm8.4651-8.4047a27.6377,27.6377,0,0,1,1.5314,3.57.4964.4964,0,0,0,.4661.3347h2.479a.4994.4994,0,0,0,.392-.8118A20.0909,20.0909,0,0,0,43.19,15.4673.4978.4978,0,0,0,42.4755,16.1159Zm2.8375,8.4918a38.9441,38.9441,0,0,1,.613,4.9435.496.496,0,0,0,.4929.4695H51.34a.5068.5068,0,0,0,.5031-.5654,19.8689,19.8689,0,0,0-1.3885-5.1265.5071.5071,0,0,0-.4678-.3082H45.7986A.4918.4918,0,0,0,45.313,24.6077Z" fill-rule="evenodd"></path></svg>              
                    libertymutual.com
                  </a>
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="tel:+18002952723" target="_blank">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Phone Number</title><path d="M50.1208,51.7221a1.8783,1.8783,0,0,1-1.8315,1.3009C44.6817,52.9491,34.6615,51.6371,23.5249,40.5,12.3867,29.3617,11.076,19.34,11.0023,15.7333a1.8777,1.8777,0,0,1,1.3009-1.83l8.5482-2.79a1.95,1.95,0,0,1,2.3833,1.0844l3.4128,7.905a1.906,1.906,0,0,1-.3909,2.1112L22.25,26.22a.9422.9422,0,0,0-.2192.9979,23.3385,23.3385,0,0,0,5.7682,9.0079,23.3412,23.3412,0,0,0,9.0064,5.768.9437.9437,0,0,0,.9994-.2194L41.81,37.7693a1.9085,1.9085,0,0,1,2.1141-.391l7.9035,3.4123a1.9483,1.9483,0,0,1,1.0845,2.3809Z" fill-rule="evenodd"></path></svg>
                    1-800-295-2723
                  </a>
                </div>
                <button x-show="!double" @click="openModal = true" class="mt-6 group w-full md:w-auto flex items-center text-left p-6 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                  <img class="w-12 h-12 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="<?= get_template_directory_uri() ?>/img/lamar.png" alt="">
                  <div class="flex-1 truncate">
                    <div class="flex items-baseline space-x-3">
                      <h3 class="text-gray-900 text-lg leading-5 font-medium truncate">Lamar Hernandez</h3>
                    </div>
                    <p class="mt-1 text-gray-500 text-sm leading-5 truncate">Ask me a question!</p>
                  </div>
                  <div>
                    <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                </button>
              </div>
            </div>
          </main>
        </div>
      </div>
      <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-3/5">
        <img class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="<?= get_template_directory_uri() ?>/img/lg-1091044655.jpg" alt="">
      </div>
    </div>
  </div>

  <main class="lg:-mt-32 relative z-20">
    <div class="max-w-7xl mx-auto py-12 lg:pt-0 px-4 sm:px-6 lg:px-8 space-y-8">
      <div 
      x-data="{
        openTab: 'Events',
        activeClasses: 'border-blue-500 text-blue-600 focus:text-blue-800 focus:border-blue-700',
        inactiveClasses: 'border-transparent text-gray-500 focus:text-gray-700 focus:border-gray-300 hover:text-gray-700 hover:border-gray-300',
        activeIcon: 'text-blue-500 group-focus:text-blue-600',
        inactiveIcon: 'text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600'
      }"
      class="bg-gray-100 shadow overflow-hidden rounded-lg">
        <div id="tabs">
          <div class="sm:hidden">
            <select aria-label="Selected tab" class="form-select block w-full">
              <option selected>Events</option>
              <option>Handouts</option>
              <option>Videos</option>
            </select>
          </div>
          <div class="hidden sm:block">
            <div class="border-b border-gray-200">
              <nav class="flex -mb-px space-x-1 px-6">
                <button :class="openTab === 'Events' ? activeClasses : inactiveClasses" @click="openTab = 'Events'" class="group inline-flex items-center py-5 px-5 border-b-2 font-medium text-sm leading-5 focus:outline-none" aria-current="page">
                  <svg :class="openTab === 'Events' ? activeIcon : inactiveIcon"class="-ml-0.5 mr-2 h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>calendar-date</title><path d="M21.5,3H18.75a.25.25,0,0,1-.25-.25V1a1,1,0,0,0-2,0v4.75a.75.75,0,1,1-1.5,0V3.5a.5.5,0,0,0-.5-.5H8.25A.25.25,0,0,1,8,2.751V1A1,1,0,1,0,6,1v4.75a.75.75,0,1,1-1.5,0V3.5A.5.5,0,0,0,4,3H2.5a2,2,0,0,0-2,2V22a2,2,0,0,0,2,2h19a2,2,0,0,0,2-2V5A2,2,0,0,0,21.5,3Zm0,18.5a.5.5,0,0,1-.5.5H3a.5.5,0,0,1-.5-.5V9.5A.5.5,0,0,1,3,9H21a.5.5,0,0,1,.5.5Z"></path><path d="M9.653,11.151a1.5,1.5,0,0,0-1.59.179L6.375,12.68a1,1,0,0,0,1.25,1.562l.875-.7V19a1,1,0,0,0,2,0V12.5A1.51,1.51,0,0,0,9.653,11.151Z"></path><path d="M16,11H13a1,1,0,0,0,0,2h2.212L12.6,18.576a1,1,0,0,0,.48,1.33,1.016,1.016,0,0,0,1.33-.48l2.973-6.334A1.5,1.5,0,0,0,16,11Z"></path></svg>
                  <span>Events</span>
                </button>
                <button :class="openTab === 'Handouts' ? activeClasses : inactiveClasses" @click="openTab = 'Handouts'" class="group inline-flex items-center py-5 px-5 border-b-2 font-medium text-sm leading-5 focus:outline-none">
                  <svg :class="openTab === 'Handouts' ? activeIcon : inactiveIcon"class="-ml-0.5 mr-2 h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>book-flip-page</title><path d="M11.278,6.134a.25.25,0,0,0-.116-.247C9.9,5.1,7.033,3.859,1.507,3.787a.5.5,0,0,0-.507.5V20.052a.5.5,0,0,0,.493.5c5.151.066,7.994,1.15,9.385,1.932a.247.247,0,0,0,.248,0,.25.25,0,0,0,.124-.216V6.446A2.534,2.534,0,0,1,11.278,6.134Z"></path><path d="M19.25,17.446a.751.751,0,0,1-.624.739,8.419,8.419,0,0,0-4.292,2.258,8.007,8.007,0,0,0-1.027,1.429.25.25,0,0,0,.328.346,20.992,20.992,0,0,1,8.872-1.666.5.5,0,0,0,.493-.5V4.287a.5.5,0,0,0-.507-.5c-1.114.014-2.114.079-3.02.176a.25.25,0,0,0-.223.249Z"></path><path d="M17.568,16.9a.251.251,0,0,0,.182-.241V1.734a.25.25,0,0,0-.336-.235,7.679,7.679,0,0,0-3.08,1.945A5.455,5.455,0,0,0,12.75,6.458V19.31a.25.25,0,0,0,.438.165l.023-.026A9.322,9.322,0,0,1,17.568,16.9Z"></path></svg>
                  <span>Handouts</span>
                </button>
                <button :class="openTab === 'Videos' ? activeClasses : inactiveClasses" @click="openTab = 'Videos'" class="group inline-flex items-center py-5 px-5 border-b-2 font-medium text-sm leading-5 focus:outline-none">
                  <svg :class="openTab === 'Videos' ? activeIcon : inactiveIcon"class="-ml-0.5 mr-2 h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>video-player</title><path d="M19.5,2H4.5A4.505,4.505,0,0,0,0,6.5v11A4.505,4.505,0,0,0,4.5,22h15A4.505,4.505,0,0,0,24,17.5V6.5A4.505,4.505,0,0,0,19.5,2ZM15.935,13.342l-5.764,2.882A1.5,1.5,0,0,1,8,14.882V9.118a1.5,1.5,0,0,1,2.171-1.342l5.764,2.882A1.5,1.5,0,0,1,15.935,13.342Z"></path></svg>
                  <span>Videos</span>
                </button>
              </nav>
            </div>
          </div>
        </div>
        <div id="panels" class="px-4 py-5 sm:px-6">
          <div x-show="openTab === 'Events'" class="space-y-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
              <div class="px-4 sm:px-6 py-5 border-b border-gray-200 flex items-center flex-wrap sm:space-x-4">
                <div class="flex-1 ml-4 sm:ml-0">
                  <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Retirement Program Overview
                  </h3>
                  <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    Presented by Lamar Hernandez from Milliman
                  </p>
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
                          <a href="https://global.gotowebinar.com/" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                          Register
                        </a>
                        </li>
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                          <div class="w-0 flex-1 flex items-center">
                            Nov 2 - 4:00 PM
                          </div>
                          <a href="https://global.gotowebinar.com/" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
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
                <div class="flex-1 ml-4 sm:ml-0">
                  <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Retirement Program Overview
                  </h3>
                  <p class="mt-1 max-w-2xl text-sm leading-5 text-gray-500">
                    Presented by Lamar Hernandez from Milliman
                  </p>
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
                          <a href="https://global.gotowebinar.com/" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
                          Register
                        </a>
                        </li>
                        <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                          <div class="w-0 flex-1 flex items-center">
                            Nov 2 - 4:00 PM
                          </div>
                          <a href="https://global.gotowebinar.com/" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
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
          <div x-show="openTab === 'Handouts'"></div>
          <div x-show="openTab === 'Videos'"></div>
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
        <div class="max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
          <div class="py-8 px-6 text-left bg-white lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
            <img class="block max-w-sm" src="<?= get_template_directory_uri() ?>/img/otm.svg" alt="Office of Talent Management" srcset="">
            <p class="mt-2 text-base leading-6 text-gray-500">
              People first, for the health of our community
            </p>
          </div>
          <div class="bg-white px-6 pb-8 lg:pt-8 lg:p-12 lg:flex-1">
            <div class="flex items-center">
              <h4 class="flex-shrink-0 pr-4 bg-white text-sm leading-5 tracking-wider font-semibold uppercase text-blue-600">
                For Enrollment Help
              </h4>
              <div class="flex-1 border-t-2 border-gray-200"></div>
            </div>
            <div class="mt-8 space-y-2 xl:space-y-0 xl:space-x-2 flex flex-col xl:flex-row">
              <a href="tel:+1469.419.3000,73000" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out">
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Phone Number</title><path d="M50.1208,51.7221a1.8783,1.8783,0,0,1-1.8315,1.3009C44.6817,52.9491,34.6615,51.6371,23.5249,40.5,12.3867,29.3617,11.076,19.34,11.0023,15.7333a1.8777,1.8777,0,0,1,1.3009-1.83l8.5482-2.79a1.95,1.95,0,0,1,2.3833,1.0844l3.4128,7.905a1.906,1.906,0,0,1-.3909,2.1112L22.25,26.22a.9422.9422,0,0,0-.2192.9979,23.3385,23.3385,0,0,0,5.7682,9.0079,23.3412,23.3412,0,0,0,9.0064,5.768.9437.9437,0,0,0,.9994-.2194L41.81,37.7693a1.9085,1.9085,0,0,1,2.1141-.391l7.9035,3.4123a1.9483,1.9483,0,0,1,1.0845,2.3809Z" fill-rule="evenodd"></path></svg>
                469.419.3000 (ext.&nbsp;7&#8209;3000)
              </a>
              <a href="https://parkland.service-now.com/otm" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out">
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Website</title><path d="M32.0123,56.0206l-.0019,0-.0019,0a24,24,0,1,1,.0038,0Zm-10.467-8.0949a27.6451,27.6451,0,0,1-1.5314-3.57.4964.4964,0,0,0-.4661-.3348h-2.479a.4994.4994,0,0,0-.3921.8119,20.0893,20.0893,0,0,0,4.1545,3.7417A.4978.4978,0,0,0,21.5453,47.9257Zm-7.5119-7.905h4.1888a.4917.4917,0,0,0,.4854-.587,38.981,38.981,0,0,1-.613-4.9434.4957.4957,0,0,0-.4927-.47H12.68a.5069.5069,0,0,0-.5031.5654,19.8751,19.8751,0,0,0,1.3885,5.1263A.5071.5071,0,0,0,14.0334,40.0207Zm-1.3531-10h4.9216a.4957.4957,0,0,0,.4927-.4695,38.98,38.98,0,0,1,.613-4.9435.4917.4917,0,0,0-.4854-.5871H14.0334a.5071.5071,0,0,0-.4677.3084,19.8773,19.8773,0,0,0-1.3885,5.1263A.5069.5069,0,0,0,12.68,30.0207Zm4.3885-10h2.479a.4963.4963,0,0,0,.4661-.3347,27.6084,27.6084,0,0,1,1.5314-3.57.4978.4978,0,0,0-.7141-.6486,20.0906,20.0906,0,0,0-4.1545,3.7415A.4994.4994,0,0,0,17.0688,20.0207ZM29.25,12.7948c-1.97,1.1322-3.6857,3.4513-4.9542,6.5359a.5039.5039,0,0,0,.4669.69H29.51a.5.5,0,0,0,.5-.5V13.2293A.5057.5057,0,0,0,29.25,12.7948ZM29.51,24.0206H23.2576a.5017.5017,0,0,0-.4939.3977,36.6608,36.6608,0,0,0-.6726,5.0664.507.507,0,0,0,.5039.536H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,24.0206Zm0,10H22.595a.5071.5071,0,0,0-.5039.5361,36.6593,36.6593,0,0,0,.6726,5.0663.5017.5017,0,0,0,.4939.3976H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,34.0207Zm0,10H24.7624a.504.504,0,0,0-.4669.69c1.2685,3.0846,2.9843,5.4037,4.9542,6.5359a.5057.5057,0,0,0,.7607-.4345V44.5207A.5.5,0,0,0,29.51,44.0207Zm21.83-10H46.4189a.496.496,0,0,0-.4929.4695,38.9441,38.9441,0,0,1-.613,4.9435.4919.4919,0,0,0,.4856.587h4.1885a.5069.5069,0,0,0,.4678-.3083,19.862,19.862,0,0,0,1.3885-5.1263A.5068.5068,0,0,0,51.34,34.0207Zm-4.3883,10H44.473a.4965.4965,0,0,0-.4661.3348,27.6451,27.6451,0,0,1-1.5314,3.57.4977.4977,0,0,0,.7141.6485,20.088,20.088,0,0,0,4.1544-3.7416A.4994.4994,0,0,0,46.952,44.0207ZM34.771,51.2466c1.97-1.1322,3.6858-3.4512,4.9544-6.5358a.504.504,0,0,0-.4669-.69H34.51a.5.5,0,0,0-.5.5v6.2914A.5056.5056,0,0,0,34.771,51.2466ZM34.51,40.0207h6.2529a.5021.5021,0,0,0,.4941-.3976,36.6751,36.6751,0,0,0,.6724-5.0663.5068.5068,0,0,0-.5037-.5361H34.51a.5.5,0,0,0-.5.5v5A.5.5,0,0,0,34.51,40.0207Zm-.5-26.7914v6.2915a.5.5,0,0,0,.5.5h4.7482a.5039.5039,0,0,0,.4669-.69c-1.2684-3.0846-2.9843-5.4036-4.9544-6.5359A.5057.5057,0,0,0,34.01,13.2293Zm0,11.2913v5a.5.5,0,0,0,.5.5H41.426a.5068.5068,0,0,0,.5037-.536,36.7071,36.7071,0,0,0-.6724-5.0664.5021.5021,0,0,0-.4941-.3977H34.51A.5.5,0,0,0,34.01,24.5206Zm8.4651-8.4047a27.6377,27.6377,0,0,1,1.5314,3.57.4964.4964,0,0,0,.4661.3347h2.479a.4994.4994,0,0,0,.392-.8118A20.0909,20.0909,0,0,0,43.19,15.4673.4978.4978,0,0,0,42.4755,16.1159Zm2.8375,8.4918a38.9441,38.9441,0,0,1,.613,4.9435.496.496,0,0,0,.4929.4695H51.34a.5068.5068,0,0,0,.5031-.5654,19.8689,19.8689,0,0,0-1.3885-5.1265.5071.5071,0,0,0-.4678-.3082H45.7986A.4918.4918,0,0,0,45.313,24.6077Z" fill-rule="evenodd"></path></svg>              
                OTM Portal
              </a>
              <a href="https://phhs.sharepoint.com/" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out">
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Website</title><path d="M32.0123,56.0206l-.0019,0-.0019,0a24,24,0,1,1,.0038,0Zm-10.467-8.0949a27.6451,27.6451,0,0,1-1.5314-3.57.4964.4964,0,0,0-.4661-.3348h-2.479a.4994.4994,0,0,0-.3921.8119,20.0893,20.0893,0,0,0,4.1545,3.7417A.4978.4978,0,0,0,21.5453,47.9257Zm-7.5119-7.905h4.1888a.4917.4917,0,0,0,.4854-.587,38.981,38.981,0,0,1-.613-4.9434.4957.4957,0,0,0-.4927-.47H12.68a.5069.5069,0,0,0-.5031.5654,19.8751,19.8751,0,0,0,1.3885,5.1263A.5071.5071,0,0,0,14.0334,40.0207Zm-1.3531-10h4.9216a.4957.4957,0,0,0,.4927-.4695,38.98,38.98,0,0,1,.613-4.9435.4917.4917,0,0,0-.4854-.5871H14.0334a.5071.5071,0,0,0-.4677.3084,19.8773,19.8773,0,0,0-1.3885,5.1263A.5069.5069,0,0,0,12.68,30.0207Zm4.3885-10h2.479a.4963.4963,0,0,0,.4661-.3347,27.6084,27.6084,0,0,1,1.5314-3.57.4978.4978,0,0,0-.7141-.6486,20.0906,20.0906,0,0,0-4.1545,3.7415A.4994.4994,0,0,0,17.0688,20.0207ZM29.25,12.7948c-1.97,1.1322-3.6857,3.4513-4.9542,6.5359a.5039.5039,0,0,0,.4669.69H29.51a.5.5,0,0,0,.5-.5V13.2293A.5057.5057,0,0,0,29.25,12.7948ZM29.51,24.0206H23.2576a.5017.5017,0,0,0-.4939.3977,36.6608,36.6608,0,0,0-.6726,5.0664.507.507,0,0,0,.5039.536H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,24.0206Zm0,10H22.595a.5071.5071,0,0,0-.5039.5361,36.6593,36.6593,0,0,0,.6726,5.0663.5017.5017,0,0,0,.4939.3976H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,34.0207Zm0,10H24.7624a.504.504,0,0,0-.4669.69c1.2685,3.0846,2.9843,5.4037,4.9542,6.5359a.5057.5057,0,0,0,.7607-.4345V44.5207A.5.5,0,0,0,29.51,44.0207Zm21.83-10H46.4189a.496.496,0,0,0-.4929.4695,38.9441,38.9441,0,0,1-.613,4.9435.4919.4919,0,0,0,.4856.587h4.1885a.5069.5069,0,0,0,.4678-.3083,19.862,19.862,0,0,0,1.3885-5.1263A.5068.5068,0,0,0,51.34,34.0207Zm-4.3883,10H44.473a.4965.4965,0,0,0-.4661.3348,27.6451,27.6451,0,0,1-1.5314,3.57.4977.4977,0,0,0,.7141.6485,20.088,20.088,0,0,0,4.1544-3.7416A.4994.4994,0,0,0,46.952,44.0207ZM34.771,51.2466c1.97-1.1322,3.6858-3.4512,4.9544-6.5358a.504.504,0,0,0-.4669-.69H34.51a.5.5,0,0,0-.5.5v6.2914A.5056.5056,0,0,0,34.771,51.2466ZM34.51,40.0207h6.2529a.5021.5021,0,0,0,.4941-.3976,36.6751,36.6751,0,0,0,.6724-5.0663.5068.5068,0,0,0-.5037-.5361H34.51a.5.5,0,0,0-.5.5v5A.5.5,0,0,0,34.51,40.0207Zm-.5-26.7914v6.2915a.5.5,0,0,0,.5.5h4.7482a.5039.5039,0,0,0,.4669-.69c-1.2684-3.0846-2.9843-5.4036-4.9544-6.5359A.5057.5057,0,0,0,34.01,13.2293Zm0,11.2913v5a.5.5,0,0,0,.5.5H41.426a.5068.5068,0,0,0,.5037-.536,36.7071,36.7071,0,0,0-.6724-5.0664.5021.5021,0,0,0-.4941-.3977H34.51A.5.5,0,0,0,34.01,24.5206Zm8.4651-8.4047a27.6377,27.6377,0,0,1,1.5314,3.57.4964.4964,0,0,0,.4661.3347h2.479a.4994.4994,0,0,0,.392-.8118A20.0909,20.0909,0,0,0,43.19,15.4673.4978.4978,0,0,0,42.4755,16.1159Zm2.8375,8.4918a38.9441,38.9441,0,0,1,.613,4.9435.496.496,0,0,0,.4929.4695H51.34a.5068.5068,0,0,0,.5031-.5654,19.8689,19.8689,0,0,0-1.3885-5.1265.5071.5071,0,0,0-.4678-.3082H45.7986A.4918.4918,0,0,0,45.313,24.6077Z" fill-rule="evenodd"></path></svg>              
                SharePoint
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
  <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-md sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline" @click.away="openModal = false">
    <div class="p-4 sm:p-6 ">
      <div class="text-center">
        <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
          Ask a question
        </h4>
        <p class="mt-4 text-base leading-6 text-gray-500">
          Representatives will answer your general plan questions within one business day.
        </p>
        <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 mt-4">
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
      <p class="text-xs leading-5 text-gray-500">Please do not include personal details in your message, such as Social Security number. This email is only active during Live Virtual Benefits Fair days. This email is only active during Live Virtual Benefits Fair days.</p>
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