
    <!-- partial:index.partial.html -->
    <div class="bg-gray-100 dark:bg-gray-900 dark:text-white text-gray-600 h-screen flex overflow-hidden text-sm">
        <div class="bg-white dark:bg-gray-900 dark:border-gray-800 w-20 flex-shrink-0 border-r border-gray-200 flex-col hidden sm:flex">
          <div class="h-16 text-blue-500 flex items-center justify-center">
            <img src="../asset/logo_Logo.png">
          </div>
      <div class="flex mx-auto flex-grow mt-4 flex-col text-gray-400 space-y-4">
          <a href="http://127.0.0.1:8000/admin" title="Blogs" class="h-10 w-12 dark:bg-gray-700 dark:text-white rounded-md flex items-center justify-center bg-blue-100 text-blue-500">
            <i class="material-icons  basket">description</i>
          </a>
          <a href="/admin/forms"  title="Forms" class="h-10 w-12 dark:text-gray-500 dark:text-white rounded-md flex items-center justify-center">
            <i class="material-icons  basket">list_alt</i>
          </a>
          <a href="/admin/camps"  title="Camps & Programs" class="h-10 w-12 dark:text-gray-500 dark:text-white rounded-md flex items-center justify-center ">
            <i class="material-icons basket">local_activity</i>
          </a>
          <a href="/admin/forms"  title="Users" class="h-10 w-12 dark:text-gray-500 rounded-md flex items-center justify-center">
            <i class="material-icons basket">perm_contact_calendar</i>
          </a>
          <a href="/academy" target="blank"  title="futuretakers.com/academy" class="h-10 w-12 dark:text-gray-500 rounded-md flex items-center justify-center">
            <i class="material-icons basket">home</i>
          </a>
        </div>
      </div>
      
    <div class=" flex-grow overflow-hidden h-full flex flex-col">
      <div class="h-16 lg:flex w-full border-b border-gray-200 dark:border-gray-800 hidden px-10">
        <div class="flex h-full text-gray-600 dark:text-gray-400">
          <a href="#" class="cursor-pointer h-full border-b-2 border-transparent inline-flex items-center mr-8">Training</a>
          <a href="#" class="cursor-pointer h-full border-b-2 border-blue-500 text-blue-500 dark:text-white dark:border-white inline-flex mr-8 items-center">LFT Academy</a>
        </div>
        <div class="ml-auto flex items-center space-x-7">
          {% if messages %}
          <p id="fdbck">{{ message }}</p>
          {% endif %}
          <div class="h-8 px-3 py-2 rounded-md shadow text-white bg-blue-500">Super-Admin</div>
  
          <button class="flex items-center">
            <span class="relative flex-shrink-0">
              <img class="w-7 h-7 rounded-full" src="https://images.unsplash.com/photo-1521587765099-8835e7201186?ixlib=rb-1.2.1&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="profile" />
              <span class="absolute right-0 -mb-0.5 bottom-0 w-2 h-2 rounded-full bg-green-500 border border-white dark:border-gray-900"></span>
            </span>
            <span class="ml-2">Sam Ayo</span>
            <svg viewBox="0 0 24 24" class="w-4 ml-1 flex-shrink-0" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
        </div>
      </div>