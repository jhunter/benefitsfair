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
              <!-- <?php echo file_get_contents(get_template_directory_uri().'/img/svg/'.get_sub_field('info_icon').'.svg'); ?> -->

              <?php

              switch(get_sub_field('info_icon'))
              {
                case 'booth':
                  echo '<svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><circle cx="8" cy="3.275" r="3"/><path d="M12,9.776a2,2,0,0,0-2-2H9.467a.25.25,0,0,0-.208.111L8.208,9.464a.25.25,0,0,1-.416,0L6.741,7.887a.25.25,0,0,0-.208-.111H6a2,2,0,0,0-2,2v1a.5.5,0,0,0,.5.5h7a.5.5,0,0,0,.5-.5Z"/><path d="M.5,23.225a.5.5,0,0,0,.5.5H23a.5.5,0,0,0,.5-.5v-8.5a2.5,2.5,0,0,0-2.5-2.5H3a2.5,2.5,0,0,0-2.5,2.5ZM12,14.276a4,4,0,1,1-4,4,4,4,0,0,1,4-4Z"/><path d="M12,18.025a.75.75,0,0,0-.75.75v1.5a.75.75,0,0,0,1.5,0v-1.5A.75.75,0,0,0,12,18.025Z"/><circle cx="12" cy="16.276" r="1"/></svg>';
                break;
                case 'questions':
                  echo '<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><title>messages-bubble-square-question</title><path d="M22,1.5H2A1.5,1.5,0,0,0,.5,3V16.552A1.459,1.459,0,0,0,2,18H5v4a.5.5,0,0,0,.785.411L12.156,18H22a1.5,1.5,0,0,0,1.5-1.5V3A1.5,1.5,0,0,0,22,1.5Zm-8.75,9.056V11a.75.75,0,0,1-1.5,0v-.444A2.085,2.085,0,0,1,13,8.646,1.25,1.25,0,1,0,11.25,7.5a.75.75,0,0,1-1.5,0,2.75,2.75,0,1,1,3.85,2.521A.584.584,0,0,0,13.25,10.556ZM13.5,13.5a1,1,0,1,1-1-1A1,1,0,0,1,13.5,13.5Z"></path></svg>';
                break;
                case 'dependents':
                  echo '<svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>family-home</title><path d="M23.488,6.127,12.926.226A2.009,2.009,0,0,0,11.05.239L.512,6.125a1,1,0,0,0,.976,1.746L11.853,2.053a.252.252,0,0,1,.244,0l10.415,5.82a1,1,0,0,0,.976-1.746Z"></path><circle cx="12" cy="10" r="2.5"></circle><path d="M12,13a3.5,3.5,0,0,0-3.5,3.5v2A.5.5,0,0,0,9,19h.594a.5.5,0,0,1,.5.451l.41,4.1A.5.5,0,0,0,11,24h2a.5.5,0,0,0,.5-.45l.41-4.1a.5.5,0,0,1,.5-.451H15a.5.5,0,0,0,.5-.5v-2A3.5,3.5,0,0,0,12,13Z"></path><circle cx="20.25" cy="11.25" r="2.25"></circle><path d="M20.25,14A3.254,3.254,0,0,0,17,17.25V19a.5.5,0,0,0,.5.5h.471a.5.5,0,0,1,.5.45l.367,3.6a.5.5,0,0,0,.5.449h1.834a.5.5,0,0,0,.5-.449l.367-3.6a.5.5,0,0,1,.5-.45H23a.5.5,0,0,0,.5-.5V17.25A3.254,3.254,0,0,0,20.25,14Z"></path><circle cx="3.75" cy="11.25" r="2.25"></circle><path d="M3.75,14A3.254,3.254,0,0,0,.5,17.25V19a.5.5,0,0,0,.5.5h.471a.5.5,0,0,1,.5.45l.367,3.6a.5.5,0,0,0,.5.449H4.667a.5.5,0,0,0,.5-.449l.367-3.6a.5.5,0,0,1,.5-.45H6.5A.5.5,0,0,0,7,19V17.25A3.254,3.254,0,0,0,3.75,14Z"></path></svg>';
                break;
                case 'calendar':
                  echo '<svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>calendar-date</title><path d="M21.5,3H18.75a.25.25,0,0,1-.25-.25V1a1,1,0,0,0-2,0v4.75a.75.75,0,1,1-1.5,0V3.5a.5.5,0,0,0-.5-.5H8.25A.25.25,0,0,1,8,2.751V1A1,1,0,1,0,6,1v4.75a.75.75,0,1,1-1.5,0V3.5A.5.5,0,0,0,4,3H2.5a2,2,0,0,0-2,2V22a2,2,0,0,0,2,2h19a2,2,0,0,0,2-2V5A2,2,0,0,0,21.5,3Zm0,18.5a.5.5,0,0,1-.5.5H3a.5.5,0,0,1-.5-.5V9.5A.5.5,0,0,1,3,9H21a.5.5,0,0,1,.5.5Z"></path><path d="M9.653,11.151a1.5,1.5,0,0,0-1.59.179L6.375,12.68a1,1,0,0,0,1.25,1.562l.875-.7V19a1,1,0,0,0,2,0V12.5A1.51,1.51,0,0,0,9.653,11.151Z"></path><path d="M16,11H13a1,1,0,0,0,0,2h2.212L12.6,18.576a1,1,0,0,0,.48,1.33,1.016,1.016,0,0,0,1.33-.48l2.973-6.334A1.5,1.5,0,0,0,16,11Z"></path></svg>';
                break;
              }

              ?>

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