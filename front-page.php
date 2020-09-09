<?php get_header(); ?>
<div class="relative bg-gray-200">
    <!-- banner -->
    <div id="banner" class="bg-pkl-600" x-bind:data-phase="phase">
      <div class="max-w-screen-xl mx-auto py-3 px-3">
        <div class="flex flex-wrap">
          <div class="flex-1 flex items-center">
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
          <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
            <div class="rounded-md shadow-sm">
              <a href="#" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-pkl-800 bg-white hover:text-pkl-500 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
                Add a reminder to your calendar
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- hero -->
    <div class="relative bg-white overflow-hidden">
      <div class="max-w-screen-xl mx-auto">
        <div class="relative z-10 bg-white lg:max-w-xl lg:w-full">
          <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>
          <main class="py-10 mx-auto max-w-screen-xl px-4 sm:py-12 sm:px-6 md:py-16 lg:py-20 lg:px-8 xl:py-28">
            <div class="sm:text-center lg:text-left">
              <img x-bind:data-unbranded="unbranded" id="branding" class="lg:max-w-md" src="<?= get_template_directory_uri() ?>/img/benefits-from-the-heart.svg" alt="Parkland: Benefits from the heart">
              <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Take a stroll through the Virtual Benefits Fair
              </p>
            </div>
          </main>
        </div>
      </div>
      <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-3/5">
        <div class="h-56 w-full bg-cover bg-top sm:h-72 md:h-96 lg:w-full lg:h-full" style="background-image:url(<?= get_template_directory_uri() ?>/img/hero.jpg)"></div>
      </div>
    </div>
    <!-- features -->
    <div class="pt-16 bg-gray-50 lg:pt-32">
      <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-screen-xl">
        <div class="relative lg:flex lg:space-x-16 lg:items-center space-y-10 lg:space-y-0">
          <div class="relative lg:flex-1">
            <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
              24/7 Benefits Info
            </h4>
            <p class="mt-3 text-lg leading-7 text-gray-600">
              Our Benefits Fair may look a little different this year. But one thing hasn’t changed ― you’ve still got a wealth of benefits information at your fingertips. Even better, you can access the fair anytime, anywhere. 
            </p>
            <ul class="mt-10 space-y-10">
              <li>
                <div class="flex">
                  <div class="flex-shrink-0">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pkl-500 text-white">
                      <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><circle cx="8" cy="3.275" r="3"/><path d="M12,9.776a2,2,0,0,0-2-2H9.467a.25.25,0,0,0-.208.111L8.208,9.464a.25.25,0,0,1-.416,0L6.741,7.887a.25.25,0,0,0-.208-.111H6a2,2,0,0,0-2,2v1a.5.5,0,0,0,.5.5h7a.5.5,0,0,0,.5-.5Z"/><path d="M.5,23.225a.5.5,0,0,0,.5.5H23a.5.5,0,0,0,.5-.5v-8.5a2.5,2.5,0,0,0-2.5-2.5H3a2.5,2.5,0,0,0-2.5,2.5ZM12,14.276a4,4,0,1,1-4,4,4,4,0,0,1,4-4Z"/><path d="M12,18.025a.75.75,0,0,0-.75.75v1.5a.75.75,0,0,0,1.5,0v-1.5A.75.75,0,0,0,12,18.025Z"/><circle cx="12" cy="16.276" r="1"/></svg>
                    </div>
                  </div>
                  <div class="ml-4">
                    <p class="text-lg leading-6 text-gray-600">
                      <strong class="font-bold text-gray-900">Visit each booth</strong>
                      to learn more about your benefits. You can download brochures and watch videos.
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="flex">
                  <div class="flex-shrink-0">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pkl-500 text-white">
                      <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><title>messages-bubble-square-question</title><path d="M22,1.5H2A1.5,1.5,0,0,0,.5,3V16.552A1.459,1.459,0,0,0,2,18H5v4a.5.5,0,0,0,.785.411L12.156,18H22a1.5,1.5,0,0,0,1.5-1.5V3A1.5,1.5,0,0,0,22,1.5Zm-8.75,9.056V11a.75.75,0,0,1-1.5,0v-.444A2.085,2.085,0,0,1,13,8.646,1.25,1.25,0,1,0,11.25,7.5a.75.75,0,0,1-1.5,0,2.75,2.75,0,1,1,3.85,2.521A.584.584,0,0,0,13.25,10.556ZM13.5,13.5a1,1,0,1,1-1-1A1,1,0,0,1,13.5,13.5Z"></path></svg>
                    </div>
                  </div>
                  <div class="ml-4">
                    <p class="text-lg leading-6 text-gray-600">
                      <strong class="font-bold text-gray-900">Ask questions</strong>
                      about your benefits ― representatives will email you back with answers. 
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="flex">
                  <div class="flex-shrink-0">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pkl-500 text-white">
                      <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>family-home</title><path d="M23.488,6.127,12.926.226A2.009,2.009,0,0,0,11.05.239L.512,6.125a1,1,0,0,0,.976,1.746L11.853,2.053a.252.252,0,0,1,.244,0l10.415,5.82a1,1,0,0,0,.976-1.746Z"></path><circle cx="12" cy="10" r="2.5"></circle><path d="M12,13a3.5,3.5,0,0,0-3.5,3.5v2A.5.5,0,0,0,9,19h.594a.5.5,0,0,1,.5.451l.41,4.1A.5.5,0,0,0,11,24h2a.5.5,0,0,0,.5-.45l.41-4.1a.5.5,0,0,1,.5-.451H15a.5.5,0,0,0,.5-.5v-2A3.5,3.5,0,0,0,12,13Z"></path><circle cx="20.25" cy="11.25" r="2.25"></circle><path d="M20.25,14A3.254,3.254,0,0,0,17,17.25V19a.5.5,0,0,0,.5.5h.471a.5.5,0,0,1,.5.45l.367,3.6a.5.5,0,0,0,.5.449h1.834a.5.5,0,0,0,.5-.449l.367-3.6a.5.5,0,0,1,.5-.45H23a.5.5,0,0,0,.5-.5V17.25A3.254,3.254,0,0,0,20.25,14Z"></path><circle cx="3.75" cy="11.25" r="2.25"></circle><path d="M3.75,14A3.254,3.254,0,0,0,.5,17.25V19a.5.5,0,0,0,.5.5h.471a.5.5,0,0,1,.5.45l.367,3.6a.5.5,0,0,0,.5.449H4.667a.5.5,0,0,0,.5-.449l.367-3.6a.5.5,0,0,1,.5-.45H6.5A.5.5,0,0,0,7,19V17.25A3.254,3.254,0,0,0,3.75,14Z"></path></svg>
                    </div>
                  </div>
                  <div class="ml-4">
                    <p class="text-lg leading-6 text-gray-600">
                      <strong class="font-bold text-gray-900">Encourage your spouse and dependents</strong>
                      to check out the Benefits Fair resources.
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="flex">
                  <div class="flex-shrink-0">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pkl-500 text-white">
                      <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>calendar-date</title><path d="M21.5,3H18.75a.25.25,0,0,1-.25-.25V1a1,1,0,0,0-2,0v4.75a.75.75,0,1,1-1.5,0V3.5a.5.5,0,0,0-.5-.5H8.25A.25.25,0,0,1,8,2.751V1A1,1,0,1,0,6,1v4.75a.75.75,0,1,1-1.5,0V3.5A.5.5,0,0,0,4,3H2.5a2,2,0,0,0-2,2V22a2,2,0,0,0,2,2h19a2,2,0,0,0,2-2V5A2,2,0,0,0,21.5,3Zm0,18.5a.5.5,0,0,1-.5.5H3a.5.5,0,0,1-.5-.5V9.5A.5.5,0,0,1,3,9H21a.5.5,0,0,1,.5.5Z"></path><path d="M9.653,11.151a1.5,1.5,0,0,0-1.59.179L6.375,12.68a1,1,0,0,0,1.25,1.562l.875-.7V19a1,1,0,0,0,2,0V12.5A1.51,1.51,0,0,0,9.653,11.151Z"></path><path d="M16,11H13a1,1,0,0,0,0,2h2.212L12.6,18.576a1,1,0,0,0,.48,1.33,1.016,1.016,0,0,0,1.33-.48l2.973-6.334A1.5,1.5,0,0,0,16,11Z"></path></svg>                    </div>
                    </div>
                  <div class="ml-4">
                    <p class="text-lg leading-6 text-gray-600">
                      <strong class="font-bold text-gray-900">Attend webinars</strong>
                      to hear representatives explain the ins and outs of your benefits.
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="relative lg:flex-1">
            <div class="rounded-lg shadow-lg bg-white p-4 sm:p-6 lg:px-8 lg:py-16">
              <div class="flex flex-col items-baseline max-w-lg mx-auto lg:max-w-none">
                <h4 x-text="cookied ? 'Welcome Back' : 'Register Your Attendence'" class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                  Register Your Attendence
                </h4>
                <p x-text="cookied ? 'Since you’re already registered, log in to proceed directly to the fair.' : 'By registering you are automatically entered in a gift card giveaway.'" class="mt-4 text-base leading-6 text-gray-500">
                  By registering you are automatically entered in a gift card giveaway.
                </p>
                <a x-show="cookied" href="<?= site_url()?>/exhibit-hall" class="inline-flex justify-center mt-6 py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pkl-600 hover:bg-pkl-500 focus:outline-none focus:border-pkl-700 focus:shadow-outline-pkl active:bg-pkl-700 transition duration-150 ease-in-out">
                  Log In
                </a>
                <form x-show="!cookied" action="#" method="POST" class="w-full flex flex-col space-y-6 mt-4">
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
                    <label for="employeeID" class="sr-only">Employee ID Number</label>
                    <div class="relative rounded-md shadow-sm">
                      <input id="employeeID" class="form-input rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="Employee ID Number">
                    </div>
                  </div>
                  <div>
                    <span class="inline-flex rounded-md shadow-sm">
                      <a href="<?= site_url() ?>/exhibit-hall" class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pkl-600 hover:bg-pkl-500 focus:outline-none focus:border-pkl-700 focus:shadow-outline-pkl active:bg-pkl-700 transition duration-150 ease-in-out">
                        Register
                      </a>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- giveaway -->
    <div class="bg-gray-50">
      <div class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
        <div id="giveaway" class="relative overflow-hidden bg-pkl-700 rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 lg:flex lg:items-center">
          <img class="absolute inset-0 opacity-25 w-full h-full object-cover" src="https://source.unsplash.com/Xaanw0s0pMk/1600x900" alt="">
          <div class="relative z-10 xl:w-0 xl:flex-1">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-white text-pkl-500">
              <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>gift-box</title><path d="M13,12a.5.5,0,0,0,.5.5H22a1.753,1.753,0,0,0,1.75-1.75v-2A1.752,1.752,0,0,0,22,7H13.5a.5.5,0,0,0-.5.5Z"></path><path d="M3.75,12.5H11a.5.5,0,0,0,.5-.5V7.5A.5.5,0,0,0,11,7H2A1.752,1.752,0,0,0,.25,8.75v2A1.753,1.753,0,0,0,2,12.5Z"></path><path d="M11.5,14.5A.5.5,0,0,0,11,14H2.75a.5.5,0,0,0-.5.5v7.75A1.753,1.753,0,0,0,4,24h7a.5.5,0,0,0,.5-.5Z"></path><path d="M13.5,14a.5.5,0,0,0-.5.5v9a.5.5,0,0,0,.5.5H20a1.753,1.753,0,0,0,1.75-1.75V14.5a.5.5,0,0,0-.5-.5Z"></path><path d="M13.043,6.707a1,1,0,0,0,.944.263c1.183-.289,4.03-1.054,4.9-1.924A2.957,2.957,0,0,0,14.7.865c-.757.757-1.479,3.077-1.924,4.9A1.041,1.041,0,0,0,13.043,6.707Zm3.074-4.428A.957.957,0,1,1,17.47,3.632a8.987,8.987,0,0,1-2.284.932A8.921,8.921,0,0,1,16.117,2.279Z"></path><path d="M11.721,5.761C11.277,3.944,10.555,1.623,9.8.865A2.957,2.957,0,0,0,5.615,5.046c.868.87,3.715,1.635,4.9,1.924a1,1,0,0,0,.944-.263A1.041,1.041,0,0,0,11.721,5.761ZM7.03,3.632h0A.956.956,0,1,1,8.382,2.279a8.883,8.883,0,0,1,.931,2.285A8.894,8.894,0,0,1,7.03,3.632Z"></path></svg>
            </div>
            <h2 class="mt-6 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-3xl sm:leading-9">
              Register, Learn, Win!
            </h2>
            <p class="max-w-2xl mt-2 text-lg leading-6 text-pkl-200" id="newsletter-headline">
              When you register for the Benefits Fair, you are automatically entered in a random drawing. Prizes include gift cards donated by Parkland's benefits vendors.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <div class="bg-gray-50">
      <div class="bg-gray-800 pb-16 sm:pb-20 lg:pb-28 relative">
        <div class="relative">
          <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
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
  </div>
<?php get_footer(); ?>