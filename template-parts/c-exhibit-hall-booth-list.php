<main class="-mt-32">
    <div class="max-w-7xl mx-auto pb-12 px-4 sm:px-6 lg:px-8 space-y-8">
      
      <?php
      if( have_rows('booth_list') ): 
        while( have_rows('booth_list') ) : the_row();
          get_template_part( 'template-parts/c-exhibit-hall-booth');
        endwhile;
      endif;

      ?>


      <!-- <div class="bg-gray-100 shadow overflow-hidden rounded-lg md:flex">
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
      </div> -->

    </div>
  </main>
  