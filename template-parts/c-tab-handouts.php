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
        <?= file_get_contents(get_template_directory_uri().'/img/svg/paperclip.svg'); ?>
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