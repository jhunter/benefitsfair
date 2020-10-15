<div x-show="openTab === 'Videos'">
  <div class="border border-gray-200 divide-y divide-gray-200 bg-white shadow overflow-hidden sm:rounded-lg">

<?php

    $videos = get_field('vendor_videos');

    if($videos): 

    foreach($videos as $post):

      setup_postdata($post);
      $vendor = get_field('associated_vendor');
      $vendorname = get_field('vendor_display_name',$vendor[0]);
  ?>

    <button @click="$dispatch('video-modal', {  videoModalSrc: '<?= get_field('video_url') ?>' })" onclick="ga('send', 'event', 'OpenVendorAsset', '<?= $vendorname ?>', 'Video: <?= get_field('display_name') ?>')" class="w-full p-4 space-y-2 sm:space-y-0 flex flex-col sm:flex-row align-center items-center justify-between text-sm leading-5 hover:bg-blue-50 focus:outline-none focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
      <div class="flex-1 flex space-x-2">
        
        <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><title>button-play</title><path d="M12,24A12,12,0,1,0,0,12,12.013,12.013,0,0,0,12,24Zm4.812-11.5a.939.939,0,0,1-.587.824L10.14,16.366a1.185,1.185,0,0,1-.531.133.919.919,0,0,1-.488-.136,1.032,1.032,0,0,1-.459-.911V9.546a.974.974,0,0,1,1.478-.914l6.085,3.043A.939.939,0,0,1,16.812,12.5Z"></path></svg>

        <h3 class="text-lg leading-6 font-medium text-gray-900">
          <?= get_field('display_name')?> (<?= get_field('video_length') ?>)
        </h3>
      </div>
      <div class="w-full sm:w-auto text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100">
        Watch
      </div>
    </button>

    <?php

    endforeach;
    wp_reset_postdata();
    endif;

  ?>

  </div>
</div>