<?php get_header(); ?>

<div class="relative bg-gray-200">
    <!-- banner -->
    <?php get_template_part( 'template-parts/c-date-banner'); ?>
    <!-- hero -->
    <?php get_template_part( 'template-parts/c-welcome-header'); ?>
    <!-- features -->
    <div class="pt-16 bg-gray-50 lg:pt-32">
      <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-screen-xl">
        <div class="relative lg:flex lg:space-x-16 lg:items-top space-y-10 lg:space-y-0">
          
          <div class="relative lg:flex-1">
            <?php get_template_part( 'template-parts/c-welcome-info'); ?>
          </div>
          
          <div class="relative lg:flex-1">
            <?php get_template_part( 'template-parts/c-welcome-registration-form'); ?>
          </div>

        </div>
      </div>
    </div>
    <!-- giveaway -->
    <?php if(get_field('display_prize_section'))
    {
      get_template_part( 'template-parts/c-registration-prize');
    }
    else
    {?>
      <div class="bg-gray-50">
        <div class="max-w-screen-xl mx-auto px-4 py-8 sm:px-4 lg:py-12 lg:px-6"></div>
      </div>
    <?php }
    ?>
    
<!-- footer -->
<?php get_footer(); ?>