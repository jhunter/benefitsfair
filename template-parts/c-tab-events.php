<div x-show="openTab === 'Events'" class="space-y-8">

	<?php

		$events = get_field('vendor_events');

		if($events): 

		foreach($events as $post):

			setup_postdata($post);
	?>

	<div class="bg-white shadow overflow-hidden sm:rounded-lg">
	  <div class="px-4 sm:px-6 py-5 border-b border-gray-200 flex items-center flex-wrap sm:space-x-4">
	    <div class="flex-1 sm:ml-0">
	      <h3 class="text-lg leading-6 font-medium text-gray-900">
	        <?= get_field('display_name') ?>
	      </h3>
	    </div>
	  </div>
	  <div class="px-4 py-5 sm:p-0">
	    <dl class="space-y-8 sm:space-y-0">
	      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:px-6 sm:py-5">
	        <dt class="text-sm leading-5 font-medium text-gray-500">
	          Description
	        </dt>
	        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
	          <?= get_field('event_description')?>
	        </dd>
	      </div>
	      <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 sm:py-5">
	        <dt class="text-sm leading-5 font-medium text-gray-500">
	          Date
	        </dt>

	        <?php if( have_rows('event_details'))	: ?>

	        	<dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
	         		<ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">

	        		<?php while(have_rows('event_details')) : the_row(); ?>

	        			<li class="p-4 flex items-center justify-between text-sm leading-5">
			              <div class="w-0 flex-1 flex items-center">
			              	<?php

			              		$event_start = DateTime::createFromFormat('d/m/Y g:i a', get_sub_field('start_time'));
			              		echo $event_start->format( 'M j - g:i a' );
			              	?>
			                <!-- Nov 1 - 3:00 PM -->
			              </div>
			              <a href="<?= get_sub_field('registration_link')['url'] ?>" target="_blank" class="text-center block px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-50 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-blue-200 transition ease-in-out duration-150">
			              <?php 
							if (get_sub_field('registration_link')['title'] != ''){
								echo esc_html( get_sub_field('registration_link')['title'] );
							}
							else {
								echo 'Register';
							}
						  ?>
			            </a>
			            </li>

	        		<?php endwhile; ?>

		        	</ul>
		        </dd>

	        <?php endif; ?>

	      </div>
	    </dl>
	  </div>
	</div>

	<?php

		endforeach;
		wp_reset_postdata();
		endif;

	?>

</div>