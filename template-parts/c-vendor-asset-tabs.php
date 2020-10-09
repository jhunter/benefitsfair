 <?php 

      $events = get_field('vendor_events');
      $handouts = get_field('vendor_handouts');
      $videos = get_field('vendor_videos');

      $priority = 'Events';

      if(!$events && $handouts)
      {
        $priority = 'Handouts';
      }
      else if(!$events)
      {
        $priority = 'Videos';
      }


      ?>

<?php if($events || $handouts || $videos) {?>

<main class="lg:-mt-32 relative z-20">
    <div class="max-w-7xl mx-auto py-12 lg:pt-0 px-4 sm:px-6 lg:px-8 space-y-8">

      <div 
      x-data="{
        videoModal: false,
        videoModalSrc : '',
        openTab:'<?=$priority?>',
        activeClasses: 'border-blue-500 text-blue-600 focus:text-blue-800 focus:border-blue-700',
        inactiveClasses: 'border-transparent text-gray-500 focus:text-gray-700 focus:border-gray-300 hover:text-gray-700 hover:border-gray-300',
        activeIcon: 'text-blue-500 group-focus:text-blue-600',
        inactiveIcon: 'text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600'
      }"

      class="bg-gray-100 shadow overflow-hidden rounded-lg">
        <template @video-modal.window="videoModal = true; videoModalSrc = $event.detail.videoModalSrc;" x-if="videoModal">
          <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" x-on:click.away="videoModalSrc = ''" class="fixed inset-0 px-4 pb-6 sm:p-0 sm:flex sm:items-center sm:justify-center z-60">
            <div class="fixed inset-0 transition-opacity" style="z-index:-1;">
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div @click.away="videoModal = ''" class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-4xl sm:w-full z-50" role="dialog" aria-modal="true">
              <div class="p-4 sm:p-6 ">
                <div class="relative">
                  <div class="aspect-ratio-16/9"></div>
                  <iframe :src="videoModalSrc" class="absolute left-0 top-0 w-full h-full" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </template>
        <div id="tabs">
          <div class="sm:hidden">
            <select x-model="openTab" aria-label="Selected tab" class="form-select block w-full">
              <?php if($events) : ?><option>Events</option><?php endif; ?>
              <?php if($handouts) : ?><option>Handouts</option><?php endif; ?>
              <?php if($videos) : ?><option>Videos</option><?php endif; ?>
            </select>
          </div>
          <div class="hidden sm:block">
            <div class="border-b border-gray-200">
              <nav class="flex -mb-px space-x-1 px-6">
                <?php if($events) : ?>
                <button :class="openTab === 'Events' ? activeClasses : inactiveClasses" @click="openTab = 'Events'" class="group inline-flex items-center py-5 px-5 border-b-2 font-medium text-sm leading-5 focus:outline-none" aria-current="page">
                  <svg :class="openTab === 'Events' ? activeIcon : inactiveIcon"class="-ml-0.5 mr-2 h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>calendar-date</title><path d="M21.5,3H18.75a.25.25,0,0,1-.25-.25V1a1,1,0,0,0-2,0v4.75a.75.75,0,1,1-1.5,0V3.5a.5.5,0,0,0-.5-.5H8.25A.25.25,0,0,1,8,2.751V1A1,1,0,1,0,6,1v4.75a.75.75,0,1,1-1.5,0V3.5A.5.5,0,0,0,4,3H2.5a2,2,0,0,0-2,2V22a2,2,0,0,0,2,2h19a2,2,0,0,0,2-2V5A2,2,0,0,0,21.5,3Zm0,18.5a.5.5,0,0,1-.5.5H3a.5.5,0,0,1-.5-.5V9.5A.5.5,0,0,1,3,9H21a.5.5,0,0,1,.5.5Z"></path><path d="M9.653,11.151a1.5,1.5,0,0,0-1.59.179L6.375,12.68a1,1,0,0,0,1.25,1.562l.875-.7V19a1,1,0,0,0,2,0V12.5A1.51,1.51,0,0,0,9.653,11.151Z"></path><path d="M16,11H13a1,1,0,0,0,0,2h2.212L12.6,18.576a1,1,0,0,0,.48,1.33,1.016,1.016,0,0,0,1.33-.48l2.973-6.334A1.5,1.5,0,0,0,16,11Z"></path></svg>
                  <span>Events</span>
                </button>
                <?php endif; ?>
                <?php if($handouts) : ?>
                <button :class="openTab === 'Handouts' ? activeClasses : inactiveClasses" @click="openTab = 'Handouts'" class="group inline-flex items-center py-5 px-5 border-b-2 font-medium text-sm leading-5 focus:outline-none">
                  <svg :class="openTab === 'Handouts' ? activeIcon : inactiveIcon"class="-ml-0.5 mr-2 h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>book-flip-page</title><path d="M11.278,6.134a.25.25,0,0,0-.116-.247C9.9,5.1,7.033,3.859,1.507,3.787a.5.5,0,0,0-.507.5V20.052a.5.5,0,0,0,.493.5c5.151.066,7.994,1.15,9.385,1.932a.247.247,0,0,0,.248,0,.25.25,0,0,0,.124-.216V6.446A2.534,2.534,0,0,1,11.278,6.134Z"></path><path d="M19.25,17.446a.751.751,0,0,1-.624.739,8.419,8.419,0,0,0-4.292,2.258,8.007,8.007,0,0,0-1.027,1.429.25.25,0,0,0,.328.346,20.992,20.992,0,0,1,8.872-1.666.5.5,0,0,0,.493-.5V4.287a.5.5,0,0,0-.507-.5c-1.114.014-2.114.079-3.02.176a.25.25,0,0,0-.223.249Z"></path><path d="M17.568,16.9a.251.251,0,0,0,.182-.241V1.734a.25.25,0,0,0-.336-.235,7.679,7.679,0,0,0-3.08,1.945A5.455,5.455,0,0,0,12.75,6.458V19.31a.25.25,0,0,0,.438.165l.023-.026A9.322,9.322,0,0,1,17.568,16.9Z"></path></svg>
                  <span>Handouts</span>
                </button>
                <?php endif; ?>
                <?php if($videos) : ?>
                  <button :class="openTab === 'Videos' ? activeClasses : inactiveClasses" @click="openTab = 'Videos'" class="group inline-flex items-center py-5 px-5 border-b-2 font-medium text-sm leading-5 focus:outline-none">
                    <svg :class="openTab === 'Videos' ? activeIcon : inactiveIcon"class="-ml-0.5 mr-2 h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>video-player</title><path d="M19.5,2H4.5A4.505,4.505,0,0,0,0,6.5v11A4.505,4.505,0,0,0,4.5,22h15A4.505,4.505,0,0,0,24,17.5V6.5A4.505,4.505,0,0,0,19.5,2ZM15.935,13.342l-5.764,2.882A1.5,1.5,0,0,1,8,14.882V9.118a1.5,1.5,0,0,1,2.171-1.342l5.764,2.882A1.5,1.5,0,0,1,15.935,13.342Z"></path></svg>
                    <span>Videos</span>
                  </button>
                <?php endif; ?>
              </nav>
            </div>
          </div>
        </div>
        <div id="panels" class="px-4 py-5 sm:px-6">
          <?php get_template_part( 'template-parts/c-tab-events'); ?>
          <?php get_template_part( 'template-parts/c-tab-handouts'); ?>
          <?php get_template_part( 'template-parts/c-tab-videos'); ?>
        </div>
      </div>
    </div>
  </main>

<?php } ?>