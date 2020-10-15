<div x-show="openTab === 'Handouts'">
  <div class="border border-gray-200 divide-y divide-gray-200 bg-white shadow overflow-hidden sm:rounded-lg">
  
    <?php

      $handouts = get_field('vendor_handouts');

      if($handouts): 

      foreach($handouts as $post):

        setup_postdata($post);
    ?>
  
    <a target="_blank" href="<?= wp_get_attachment_url()?>" onclick="ga('send', 'event', 'OpenVendorAsset', '<?= get_field('vendor_display_name'); ?>', 'Handout: <?= get_field('handout_display_name') ?>')" class="p-4 space-y-2 sm:space-y-0 flex flex-col sm:flex-row align-center items-center justify-between text-sm leading-5 hover:bg-blue-50 focus:outline-none focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
      <div class="flex-1 flex space-x-2">
      <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><title>attachment</title><path d="M21.843,3.455a6.961,6.961,0,0,0-9.846,0L1.619,13.832a5.128,5.128,0,0,0,7.252,7.252L17.3,12.653A3.293,3.293,0,1,0,12.646,8L7.457,13.184A1,1,0,1,0,8.871,14.6L14.06,9.409a1.294,1.294,0,0,1,1.829,1.83L7.457,19.67a3.128,3.128,0,0,1-4.424-4.424L13.411,4.869a4.962,4.962,0,1,1,7.018,7.018L12.646,19.67a1,1,0,1,0,1.414,1.414L21.843,13.3a6.96,6.96,0,0,0,0-9.846Z"></path></svg>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          <?= get_field('handout_display_name') ?>
        </h3>
      </div>
      <div class="w-full sm:w-auto pointer-events-none text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100">
        Open
      </div>
    </a>

<?php

    endforeach;
    wp_reset_postdata();
    endif;

  ?>

  </div>
</div>