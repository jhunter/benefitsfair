<h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
  <?= the_field('fair_info_title') ?>
</h4>

<p class="mt-3 text-lg leading-7 text-gray-600"><?= the_field('fair_info_text') ?></p>

<?php if( have_rows('fair_info_list') ): ?>
  
  <ul class="mt-10 space-y-10">
  
    <?php while( have_rows('fair_info_list') ) : the_row();?>
    
      <li>
        <div class="flex">
          <div class="flex-shrink-0">
            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pkl-500 text-white">
              <?php echo file_get_contents(get_template_directory_uri().'/img/svg/'.get_sub_field('info_icon').'.svg'); ?>
            </div>
          </div>
          <div class="ml-4">
            <p class="text-lg leading-6 text-gray-600">
              <strong class="font-bold text-gray-900"><?= the_sub_field('info_item_description_starter') ?></strong>
              <?= the_sub_field('info_item_description') ?>
            </p>
          </div>
        </div>
      </li>  
    
    <?php endwhile; ?>
  
  </ul>

<?php endif; ?>