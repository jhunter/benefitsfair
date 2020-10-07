
<div id="form" style="display:none" class="rounded-lg shadow-lg bg-white p-4 sm:p-6 lg:px-8 lg:py-16">
  <div class="">
      
    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
      Register Your Attendance
    </h4>
    <p class="mt-4 text-base leading-6 text-gray-500">
      By registering, you are automatically entered in a gift card giveaway.
    </p>

    <?= do_shortcode('[ninja_form id=2]'); ?>
  </div>
</div>



<div id="return" style="display:none" class="rounded-lg shadow-lg bg-white p-4 sm:p-6 lg:px-8 lg:py-16">
  <div class="">
      
    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
      Welcome Back
    </h4>
    <p class="mt-4 text-base leading-6 text-gray-500">
      Since you’re already registered, log in to proceed directly to the fair.
    </p>

     <a onClick="gaTrackLogin()"
        href="<?= site_url()?>/exhibit-hall"
        class="inline-flex justify-center mt-6 py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pkl-600 hover:bg-pkl-500 focus:outline-none focus:border-pkl-700 focus:shadow-outline-pkl active:bg-pkl-700 transition duration-150 ease-in-out">
      Log In
    </a>
  </div>
</div>

<script>
function gaTrackLogin() {
    ga('send', 'event', 'VisitorAccess', 'Login');
}
</script>