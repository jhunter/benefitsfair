<div class="bg-gray-50">
  <div class="max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
    <div id="giveaway" class="relative overflow-hidden bg-pkl-700 rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 lg:flex lg:items-center">
      <div class="absolute inset-0 opacity-25 w-full h-full bg-cover" style="background-image:url(<?= the_field('prize_background')['url'] ?>)"></div>
      <div class="relative z-10 xl:w-0 xl:flex-1">
        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-white text-pkl-500">
           <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>gift-box</title><path d="M13,12a.5.5,0,0,0,.5.5H22a1.753,1.753,0,0,0,1.75-1.75v-2A1.752,1.752,0,0,0,22,7H13.5a.5.5,0,0,0-.5.5Z"></path><path d="M3.75,12.5H11a.5.5,0,0,0,.5-.5V7.5A.5.5,0,0,0,11,7H2A1.752,1.752,0,0,0,.25,8.75v2A1.753,1.753,0,0,0,2,12.5Z"></path><path d="M11.5,14.5A.5.5,0,0,0,11,14H2.75a.5.5,0,0,0-.5.5v7.75A1.753,1.753,0,0,0,4,24h7a.5.5,0,0,0,.5-.5Z"></path><path d="M13.5,14a.5.5,0,0,0-.5.5v9a.5.5,0,0,0,.5.5H20a1.753,1.753,0,0,0,1.75-1.75V14.5a.5.5,0,0,0-.5-.5Z"></path><path d="M13.043,6.707a1,1,0,0,0,.944.263c1.183-.289,4.03-1.054,4.9-1.924A2.957,2.957,0,0,0,14.7.865c-.757.757-1.479,3.077-1.924,4.9A1.041,1.041,0,0,0,13.043,6.707Zm3.074-4.428A.957.957,0,1,1,17.47,3.632a8.987,8.987,0,0,1-2.284.932A8.921,8.921,0,0,1,16.117,2.279Z"></path><path d="M11.721,5.761C11.277,3.944,10.555,1.623,9.8.865A2.957,2.957,0,0,0,5.615,5.046c.868.87,3.715,1.635,4.9,1.924a1,1,0,0,0,.944-.263A1.041,1.041,0,0,0,11.721,5.761ZM7.03,3.632h0A.956.956,0,1,1,8.382,2.279a8.883,8.883,0,0,1,.931,2.285A8.894,8.894,0,0,1,7.03,3.632Z"></path></svg>
        </div>
        <h2 class="mt-6 text-3xl leading-8 font-extrabold tracking-tight text-white sm:text-3xl sm:leading-9">
         <?= the_field('prize_title') ?>
        </h2>
        <p class="max-w-3xl mt-2 text-lg leading-6 text-pkl-200" id="newsletter-headline">
          <?= the_field('prize_text') ?>
        </p>
      </div>
    </div>
  </div>
</div>