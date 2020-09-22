<div class="relative bg-gray-800 overflow-hidden">
      <div class="max-w-screen-xl mx-auto">
        <div class="relative z-10 bg-gray-800 lg:max-w-xl lg:w-full">

          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-gray-800 transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>

          <main class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:pl-8 lg:pr-12 py-10 sm:py-12 md:py-16 lg:pt-16 lg:pb-48">

            <div class="justify-center">

              <div :class="{'-space-x-10':double}" class="flex relative overflow-hidden flex-shrink-0">

                <img x-show="!double" class="w-32 h-32 rounded-full flex-shrink-0 border-gray-800 border-4 object-cover" src="<?= esc_url(get_field('vendor_logo')['sizes']['square-med']) ?>" alt="">

<!-- 
                <img x-show="double" class="w-32 h-32 rounded-full flex-shrink-0 border-gray-800 border-4 object-cover" src="https://logo.clearbit.com/travelers.com" alt="">

                <img x-show="double" class="w-32 h-32 rounded-full flex-shrink-0 border-gray-800 border-4 object-cover" src="<?= get_template_directory_uri() ?>/img/libertymutual.jpg" alt=""> -->

                
              </div>

              <div class="flex-1 mt-2 ">
                <h1 class="text-4xl leading-9 font-bold text-white md:mt-0"> <?= get_field('vendor_display_name') ?>
                </h1>
                <p class="text-gray-300 mt-2">
                  <?= get_field('vendor_description')?>
                </p>
                <div class="inline-grid grid-cols-1 md:grid-cols-2 mt-4 gap-y-2 md:gap-x-4">

                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out"
                  href="<?= get_field('website')['url'] ?>"
                  target="_blank">
                    <?= file_get_contents(get_template_directory_uri().'/img/svg/website.svg'); ?>
                    <?= get_field('website')['title'] ?>
                  </a>

                  <?php if(get_field('phone_number')){ ?>

                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="<?= get_field('phone_number')['url'] ?>">
                    <?= file_get_contents(get_template_directory_uri().'/img/svg/phone.svg'); ?>
                    <?= get_field('phone_number')['title'] ?>
                  </a>
                   <?php }?>
                   
                </div>



                <!-- <div x-show="double" class="inline-grid grid-cols-1 md:grid-cols-2 mt-4 gap-y-2 md:gap-x-4">
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="https://www.travelers.com" target="_blank">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Website</title><path d="M32.0123,56.0206l-.0019,0-.0019,0a24,24,0,1,1,.0038,0Zm-10.467-8.0949a27.6451,27.6451,0,0,1-1.5314-3.57.4964.4964,0,0,0-.4661-.3348h-2.479a.4994.4994,0,0,0-.3921.8119,20.0893,20.0893,0,0,0,4.1545,3.7417A.4978.4978,0,0,0,21.5453,47.9257Zm-7.5119-7.905h4.1888a.4917.4917,0,0,0,.4854-.587,38.981,38.981,0,0,1-.613-4.9434.4957.4957,0,0,0-.4927-.47H12.68a.5069.5069,0,0,0-.5031.5654,19.8751,19.8751,0,0,0,1.3885,5.1263A.5071.5071,0,0,0,14.0334,40.0207Zm-1.3531-10h4.9216a.4957.4957,0,0,0,.4927-.4695,38.98,38.98,0,0,1,.613-4.9435.4917.4917,0,0,0-.4854-.5871H14.0334a.5071.5071,0,0,0-.4677.3084,19.8773,19.8773,0,0,0-1.3885,5.1263A.5069.5069,0,0,0,12.68,30.0207Zm4.3885-10h2.479a.4963.4963,0,0,0,.4661-.3347,27.6084,27.6084,0,0,1,1.5314-3.57.4978.4978,0,0,0-.7141-.6486,20.0906,20.0906,0,0,0-4.1545,3.7415A.4994.4994,0,0,0,17.0688,20.0207ZM29.25,12.7948c-1.97,1.1322-3.6857,3.4513-4.9542,6.5359a.5039.5039,0,0,0,.4669.69H29.51a.5.5,0,0,0,.5-.5V13.2293A.5057.5057,0,0,0,29.25,12.7948ZM29.51,24.0206H23.2576a.5017.5017,0,0,0-.4939.3977,36.6608,36.6608,0,0,0-.6726,5.0664.507.507,0,0,0,.5039.536H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,24.0206Zm0,10H22.595a.5071.5071,0,0,0-.5039.5361,36.6593,36.6593,0,0,0,.6726,5.0663.5017.5017,0,0,0,.4939.3976H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,34.0207Zm0,10H24.7624a.504.504,0,0,0-.4669.69c1.2685,3.0846,2.9843,5.4037,4.9542,6.5359a.5057.5057,0,0,0,.7607-.4345V44.5207A.5.5,0,0,0,29.51,44.0207Zm21.83-10H46.4189a.496.496,0,0,0-.4929.4695,38.9441,38.9441,0,0,1-.613,4.9435.4919.4919,0,0,0,.4856.587h4.1885a.5069.5069,0,0,0,.4678-.3083,19.862,19.862,0,0,0,1.3885-5.1263A.5068.5068,0,0,0,51.34,34.0207Zm-4.3883,10H44.473a.4965.4965,0,0,0-.4661.3348,27.6451,27.6451,0,0,1-1.5314,3.57.4977.4977,0,0,0,.7141.6485,20.088,20.088,0,0,0,4.1544-3.7416A.4994.4994,0,0,0,46.952,44.0207ZM34.771,51.2466c1.97-1.1322,3.6858-3.4512,4.9544-6.5358a.504.504,0,0,0-.4669-.69H34.51a.5.5,0,0,0-.5.5v6.2914A.5056.5056,0,0,0,34.771,51.2466ZM34.51,40.0207h6.2529a.5021.5021,0,0,0,.4941-.3976,36.6751,36.6751,0,0,0,.6724-5.0663.5068.5068,0,0,0-.5037-.5361H34.51a.5.5,0,0,0-.5.5v5A.5.5,0,0,0,34.51,40.0207Zm-.5-26.7914v6.2915a.5.5,0,0,0,.5.5h4.7482a.5039.5039,0,0,0,.4669-.69c-1.2684-3.0846-2.9843-5.4036-4.9544-6.5359A.5057.5057,0,0,0,34.01,13.2293Zm0,11.2913v5a.5.5,0,0,0,.5.5H41.426a.5068.5068,0,0,0,.5037-.536,36.7071,36.7071,0,0,0-.6724-5.0664.5021.5021,0,0,0-.4941-.3977H34.51A.5.5,0,0,0,34.01,24.5206Zm8.4651-8.4047a27.6377,27.6377,0,0,1,1.5314,3.57.4964.4964,0,0,0,.4661.3347h2.479a.4994.4994,0,0,0,.392-.8118A20.0909,20.0909,0,0,0,43.19,15.4673.4978.4978,0,0,0,42.4755,16.1159Zm2.8375,8.4918a38.9441,38.9441,0,0,1,.613,4.9435.496.496,0,0,0,.4929.4695H51.34a.5068.5068,0,0,0,.5031-.5654,19.8689,19.8689,0,0,0-1.3885-5.1265.5071.5071,0,0,0-.4678-.3082H45.7986A.4918.4918,0,0,0,45.313,24.6077Z" fill-rule="evenodd"></path></svg>              
                    travelers.com
                  </a>
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="tel:+18777540481">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Phone Number</title><path d="M50.1208,51.7221a1.8783,1.8783,0,0,1-1.8315,1.3009C44.6817,52.9491,34.6615,51.6371,23.5249,40.5,12.3867,29.3617,11.076,19.34,11.0023,15.7333a1.8777,1.8777,0,0,1,1.3009-1.83l8.5482-2.79a1.95,1.95,0,0,1,2.3833,1.0844l3.4128,7.905a1.906,1.906,0,0,1-.3909,2.1112L22.25,26.22a.9422.9422,0,0,0-.2192.9979,23.3385,23.3385,0,0,0,5.7682,9.0079,23.3412,23.3412,0,0,0,9.0064,5.768.9437.9437,0,0,0,.9994-.2194L41.81,37.7693a1.9085,1.9085,0,0,1,2.1141-.391l7.9035,3.4123a1.9483,1.9483,0,0,1,1.0845,2.3809Z" fill-rule="evenodd"></path></svg>
                    1-877-754-0481
                  </a>
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="https://www.libertymutual.com/" target="_blank">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Website</title><path d="M32.0123,56.0206l-.0019,0-.0019,0a24,24,0,1,1,.0038,0Zm-10.467-8.0949a27.6451,27.6451,0,0,1-1.5314-3.57.4964.4964,0,0,0-.4661-.3348h-2.479a.4994.4994,0,0,0-.3921.8119,20.0893,20.0893,0,0,0,4.1545,3.7417A.4978.4978,0,0,0,21.5453,47.9257Zm-7.5119-7.905h4.1888a.4917.4917,0,0,0,.4854-.587,38.981,38.981,0,0,1-.613-4.9434.4957.4957,0,0,0-.4927-.47H12.68a.5069.5069,0,0,0-.5031.5654,19.8751,19.8751,0,0,0,1.3885,5.1263A.5071.5071,0,0,0,14.0334,40.0207Zm-1.3531-10h4.9216a.4957.4957,0,0,0,.4927-.4695,38.98,38.98,0,0,1,.613-4.9435.4917.4917,0,0,0-.4854-.5871H14.0334a.5071.5071,0,0,0-.4677.3084,19.8773,19.8773,0,0,0-1.3885,5.1263A.5069.5069,0,0,0,12.68,30.0207Zm4.3885-10h2.479a.4963.4963,0,0,0,.4661-.3347,27.6084,27.6084,0,0,1,1.5314-3.57.4978.4978,0,0,0-.7141-.6486,20.0906,20.0906,0,0,0-4.1545,3.7415A.4994.4994,0,0,0,17.0688,20.0207ZM29.25,12.7948c-1.97,1.1322-3.6857,3.4513-4.9542,6.5359a.5039.5039,0,0,0,.4669.69H29.51a.5.5,0,0,0,.5-.5V13.2293A.5057.5057,0,0,0,29.25,12.7948ZM29.51,24.0206H23.2576a.5017.5017,0,0,0-.4939.3977,36.6608,36.6608,0,0,0-.6726,5.0664.507.507,0,0,0,.5039.536H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,24.0206Zm0,10H22.595a.5071.5071,0,0,0-.5039.5361,36.6593,36.6593,0,0,0,.6726,5.0663.5017.5017,0,0,0,.4939.3976H29.51a.5.5,0,0,0,.5-.5v-5A.5.5,0,0,0,29.51,34.0207Zm0,10H24.7624a.504.504,0,0,0-.4669.69c1.2685,3.0846,2.9843,5.4037,4.9542,6.5359a.5057.5057,0,0,0,.7607-.4345V44.5207A.5.5,0,0,0,29.51,44.0207Zm21.83-10H46.4189a.496.496,0,0,0-.4929.4695,38.9441,38.9441,0,0,1-.613,4.9435.4919.4919,0,0,0,.4856.587h4.1885a.5069.5069,0,0,0,.4678-.3083,19.862,19.862,0,0,0,1.3885-5.1263A.5068.5068,0,0,0,51.34,34.0207Zm-4.3883,10H44.473a.4965.4965,0,0,0-.4661.3348,27.6451,27.6451,0,0,1-1.5314,3.57.4977.4977,0,0,0,.7141.6485,20.088,20.088,0,0,0,4.1544-3.7416A.4994.4994,0,0,0,46.952,44.0207ZM34.771,51.2466c1.97-1.1322,3.6858-3.4512,4.9544-6.5358a.504.504,0,0,0-.4669-.69H34.51a.5.5,0,0,0-.5.5v6.2914A.5056.5056,0,0,0,34.771,51.2466ZM34.51,40.0207h6.2529a.5021.5021,0,0,0,.4941-.3976,36.6751,36.6751,0,0,0,.6724-5.0663.5068.5068,0,0,0-.5037-.5361H34.51a.5.5,0,0,0-.5.5v5A.5.5,0,0,0,34.51,40.0207Zm-.5-26.7914v6.2915a.5.5,0,0,0,.5.5h4.7482a.5039.5039,0,0,0,.4669-.69c-1.2684-3.0846-2.9843-5.4036-4.9544-6.5359A.5057.5057,0,0,0,34.01,13.2293Zm0,11.2913v5a.5.5,0,0,0,.5.5H41.426a.5068.5068,0,0,0,.5037-.536,36.7071,36.7071,0,0,0-.6724-5.0664.5021.5021,0,0,0-.4941-.3977H34.51A.5.5,0,0,0,34.01,24.5206Zm8.4651-8.4047a27.6377,27.6377,0,0,1,1.5314,3.57.4964.4964,0,0,0,.4661.3347h2.479a.4994.4994,0,0,0,.392-.8118A20.0909,20.0909,0,0,0,43.19,15.4673.4978.4978,0,0,0,42.4755,16.1159Zm2.8375,8.4918a38.9441,38.9441,0,0,1,.613,4.9435.496.496,0,0,0,.4929.4695H51.34a.5068.5068,0,0,0,.5031-.5654,19.8689,19.8689,0,0,0-1.3885-5.1265.5071.5071,0,0,0-.4678-.3082H45.7986A.4918.4918,0,0,0,45.313,24.6077Z" fill-rule="evenodd"></path></svg>              
                    libertymutual.com
                  </a>
                  <a class="flex nounderline hover:underline text-white hover:text-cool-gray-100 transition duration-150 ease-in-out" href="tel:+18002952723">
                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5" fill="currentColor" viewBox="0 0 64 64"><title>Phone Number</title><path d="M50.1208,51.7221a1.8783,1.8783,0,0,1-1.8315,1.3009C44.6817,52.9491,34.6615,51.6371,23.5249,40.5,12.3867,29.3617,11.076,19.34,11.0023,15.7333a1.8777,1.8777,0,0,1,1.3009-1.83l8.5482-2.79a1.95,1.95,0,0,1,2.3833,1.0844l3.4128,7.905a1.906,1.906,0,0,1-.3909,2.1112L22.25,26.22a.9422.9422,0,0,0-.2192.9979,23.3385,23.3385,0,0,0,5.7682,9.0079,23.3412,23.3412,0,0,0,9.0064,5.768.9437.9437,0,0,0,.9994-.2194L41.81,37.7693a1.9085,1.9085,0,0,1,2.1141-.391l7.9035,3.4123a1.9483,1.9483,0,0,1,1.0845,2.3809Z" fill-rule="evenodd"></path></svg>
                    1-800-295-2723
                  </a>
                </div> -->

                <button @click="openModal = true" class="mt-6 group w-full md:w-auto flex items-center text-left p-6 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
                  
                  <?php

                    $headshot = get_field('contact_headshot');

                  ?>

                  <?php if(get_field('contact_headshot')){?>
                    <img class="w-12 h-12 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="" alt="">
                  <?php } else { ?>
                    <img class="w-12 h-12 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="<?= get_template_directory_uri() ?>/img/blank-headshot.gif" alt="">
                  <?php } ?>

                  <div class="flex-1 truncate">
                    <div class="flex items-baseline space-x-3">
                      <h3 class="text-gray-900 text-lg leading-5 font-medium truncate"><?= get_field('contact_name') ?></h3>
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

        <div class="h-56 w-full bg-cover bg-center bg-top sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image:url(<?= get_field('category_image','category_'.get_the_category()[0]->term_id)['url'] ?>)"></div>

        <!-- <div x-show="double" class="h-56 w-full bg-cover bg-center bg-top sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/lg-669130018.jpg)"></div> -->
      </div>
    </div>