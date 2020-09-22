<div class="bg-gray-100 shadow overflow-hidden rounded-lg md:flex">
        <div class="md:w-1/3 relative px-4 py-5 border-b md:border-none border-gray-200 bg-gray-900 sm:px-6 flex items-end overflow-hidden">
          <div class="hidden md:block absolute bg-cover bg-center inset-0 w-full h-full" 
          style="background-image:url(<?= get_field('category_image','category_'.get_sub_field('booth_category')->term_id)['url'] ?>"></div>
          
          <h3 class="relative md:w-64 md:ml-auto text-4xl leading-9 font-black md:text-right text-white text-shadow">
            <?= get_sub_field('booth_category')->name ?>
          </h3>
        </div>
        <div class="md:w-2/3 px-4 py-5 sm:px-6 min-h-65">
        	<ul class="flex flex-wrap flex-col space-y-6 lg:flex-row lg:justify-between lg:items-baseline lg:-mt-6">

        		<?php

					$vendors = get_sub_field('vendor_select');

					if($vendors): 

					foreach($vendors as $post):

						setup_postdata($post);
				?>

		            <li class="w-full lg:flex-vendor">
		              
		              <a href="<?= get_permalink() ?>" class="group w-full flex items-center justify-between px-6 py-4 space-x-4 bg-white border border-gray-300 rounded-md hover:bg-blue-50 hover:border-blue-500 focus:outline-none focus:bg-blue-50 focus:border-blue-500 transition duration-150 ease-in-out">
		                <img class="w-12 h-12 my-2 bg-blue-300 rounded-full flex-shrink-0 border border-gray-300 object-cover" src="<?= esc_url(get_field('vendor_logo')['sizes']['square-med']) ?>" alt="">
		                <div class="flex-1">
		                  <div class="flex items-center space-x-3">
		                    <h3 class="text-gray-900 text-lg leading-5 font-medium"><?= get_field('benefit_type') ?></h3>
		                  </div>
		                  <p class="mt-1 text-gray-500 text-sm leading-5"><?= get_field('vendor_display_name')?></p>
		                </div>
		                <div>
		                  <svg class="h-5 w-5 text-gray-400 group-hover:text-blue-600" viewBox="0 0 20 20" fill="currentColor">
		                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
		                  </svg>
		                </div>
		              </a>
		            </li>

	           	<?php

					endforeach;
					wp_reset_postdata();
					endif;

				?>
          </ul>
        </div>
      </div>