<div id="banner" class="bg-pkl-600" x-bind:data-phase="phase">
  <div class="max-w-screen-xl mx-auto py-3 px-3">
    <div class="flex flex-wrap">
      <div class="flex-1 flex items-center">
        
        <span class="flex p-2 rounded-lg bg-pkl-800">
          <?php echo file_get_contents(get_template_directory_uri()."/img/svg/alarm-bell.svg"); ?>
        </span>
        
        <p class="ml-3 font-bold text-white truncate">
          
          <span class="md:hidden">
            <?php

              $enroll_start_date = DateTime::createFromFormat('Ymd', get_field('open_enrollment_start_date','options'));
              $enroll_end_date = DateTime::createFromFormat('Ymd', get_field('open_enrollment_end_date','options'));
             
            ?>
            Open Enrollment Is <?= $enroll_start_date->format( 'M j' ); ?>–<?= $enroll_end_date->format( 'M j' ); ?>
          </span>
          
          <span class="hidden md:inline">
            Open Enrollment Is <?= $enroll_start_date->format( 'F j' ); ?> – <?= $enroll_end_date->format( 'F j' ); ?>
          </span>

        </p>

      </div>
      <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
        
        <div class="rounded-md shadow-sm">
          <a href="#" class="flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-pkl-800 bg-white hover:text-pkl-500 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
            <?= the_field('calendar_button_label','options') ?>
          </a>
        </div>
        
      </div>
    </div>
  </div>
</div>