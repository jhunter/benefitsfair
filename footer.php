		<div class="bg-gray-50">
	      <div class="bg-gray-800 pb-16 sm:pb-20 lg:pb-28 relative">
	        <div class="relative">
        	
        	<?php if(is_front_page()){ ?>
        		<div class="absolute inset-0 h-1/2 bg-gray-50"></div>
        	<?php } else { ?>
        		<div class="absolute inset-0 h-1/2 bg-gray-300"></div>
        	<?php } ?>
	          
	          <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
	            <div class="bg-white max-w-lg py-8 px-6 mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
	              <div class="text-left lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center">

	              	<?php
			            $logo = get_field('contact_logo','options');
			            $logo_alt = $logo['alt'];
			          ?>

			          <div  class="block max-w-full bg-no-repeat w-64 h-16" 
			                style="background-image:url(<?= $logo['url'] ?>)"
			          ></div>

	                <p class="mt-2 text-xs leading-6 text-gray-500">
	                  <?= the_field('contact_subhead','options') ?>
	                </p>
	              </div>
	              <div class="lg:flex-1 mt-8 lg:mt-0 lg:ml-8">
	                <div class="flex items-center">
	                  <h4 class="flex-shrink-0 pr-4 text-sm leading-5 tracking-wider font-semibold uppercase text-blue-600">
	                    For Enrollment Help
	                  </h4>
	                  <div class="flex-1 border-t-2 border-gray-200"></div>
	                </div>
	                
	                <?php if( have_rows('help_info','options') ): ?>
	                	<div class="mt-4 space-y-2 xl:space-y-0 xl:space-x-2 flex flex-col xl:flex-row">

	                		<?php while( have_rows('help_info','options') ) : the_row();?>

	                			<?php

	                				$link = get_sub_field('contact_link')

	                			?>
	                			<a href="<?= $link['url'] ?>" target="href="<?= $link['target'] ?>"" class="flex-grow inline-flex items-center whitespace-no-wrap px-3 py-2 space-x-1 border border-transparent text-sm leading-6 font-medium rounded-md text-blue-700 bg-blue-100 hover:text-blue-600 hover:bg-blue-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out">
								<div>
									<?= get_sub_field('contact_label') ?>
									<br/>
									<?= $link['title'] ?>
								</div>
			                  </a>

	                		<?php endwhile; ?>

	                	</div>
	                <?php endif; ?>
					<?php if( get_field('support','options') ): ?>
						<div class="mt-4 flex items-center">
							<h4 class="flex-shrink-0 pr-4 text-sm leading-5 tracking-wider font-semibold uppercase text-blue-600">
								For Technical Support
							</h4>
						<div class="flex-1 border-t-2 border-gray-200"></div>
						</div>
						<div class="mt-4 text-sm text-gray-400">
							<?= the_field('support','options') ?>
						</div>
					<?php endif; ?>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /wrapper -->

	<?php wp_footer(); ?>

	<!-- analytics -->
	<script>
	(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
	(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
	l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', '<?php the_field('tracking_code','option') ?>', '<?php the_field('tracking_domain','option') ?>');
	ga('send', 'pageview');
	</script>

	</body>
</html>
