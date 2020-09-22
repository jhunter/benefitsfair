<div class="rounded-lg shadow-lg bg-white p-4 sm:p-6 lg:px-8 lg:py-16">
  <div class="flex flex-col items-baseline max-w-lg mx-auto lg:max-w-none">
    <h4 x-text="cookied ? 'Welcome Back' : 'Register Your Attendance'" class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
      Register Your Attendance
    </h4>
    <p x-text="cookied ? 'Since you’re already registered, log in to proceed directly to the fair.' : 'By registering, you are automatically entered in a gift card giveaway.'" class="mt-4 text-base leading-6 text-gray-500">
      By registering, you are automatically entered in a gift card giveaway.
    </p>
    <a x-show="cookied" href="<?= site_url()?>/exhibit-hall" class="inline-flex justify-center mt-6 py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pkl-600 hover:bg-pkl-500 focus:outline-none focus:border-pkl-700 focus:shadow-outline-pkl active:bg-pkl-700 transition duration-150 ease-in-out">
      Log In
    </a>
    <form x-show="!cookied" action="#" method="POST" class="w-full flex flex-col space-y-6 mt-4">
      <div class="flex space-x-3">
        <div class="flex-1">
          <label for="first_name" class="sr-only">First Name</label>
          <div class="relative rounded-md shadow-sm">
            <input id="first_name" class="form-input rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="First Name">
          </div>
        </div>
        <div class="flex-1">
          <label for="last_name" class="sr-only">Last Name</label>
          <div class="relative rounded-md shadow-sm">
            <input id="last_name" class="form-input rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="Last Name">
          </div>
        </div>
      </div>
      <div>
        <label for="email" class="sr-only">Email</label>
        <div class="relative rounded-md shadow-sm">
          <input id="email" type="email" class="form-input rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="Email">
        </div>
      </div>
      <div>
        <label for="employeeID" class="sr-only">Employee ID Number</label>
        <div class="relative rounded-md shadow-sm">
          <input id="employeeID" class="form-input rounded block w-full py-3 px-4 placeholder-gray-600 transition ease-in-out duration-150" placeholder="Employee ID Number">
        </div>
      </div>
      <div>
        <span class="inline-flex rounded-md shadow-sm">
          <a href="<?= site_url() ?>/exhibit-hall" class="inline-flex justify-center py-3 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pkl-600 hover:bg-pkl-500 focus:outline-none focus:border-pkl-700 focus:shadow-outline-pkl active:bg-pkl-700 transition duration-150 ease-in-out">
            Register
          </a>
        </span>
      </div>
    </form>
  </div>
</div>