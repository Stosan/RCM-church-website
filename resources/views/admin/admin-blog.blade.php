
{% load static %}
{% include "bases/admin-header.html" %} 
</head>

{% include "bases/admin-nav.html" %} 


<!-----Side menus-->
<div class="flex-grow flex overflow-x-hidden">
    <div class="xl:w-72 w-48 flex-shrink-0 border-r border-gray-200 dark:border-gray-800 h-full overflow-y-auto lg:block hidden p-5">
      <div class="text-xs text-gray-400 tracking-wider">BLOG ACTIONS</div>
      <div class="space-y-4 mt-3">
        <a href="/admin/create" class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
          <div class="flex xl:flex-row flex-col items-center font-medium text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
            <i class="material-icons  basket">post_add</i>&nbsp;
             ADD POST
          </div>
          <div class="flex items-center w-full">
           
          </div>
        </a>
        <a href="/admin" class="bg-white p-3 w-full flex flex-col rounded-md dark:bg-gray-800 shadow">
          <div class="flex xl:flex-row flex-col items-center font-medium text-gray-900 dark:text-white pb-2 mb-2 xl:border-b border-gray-200 border-opacity-75 dark:border-gray-700 w-full">
            <i class="material-icons  basket">notes</i>&nbsp;
             All Blogs
          </div>
          <div class="flex items-center w-full">
            <div class="text-xs py-1 px-2 leading-none dark:bg-gray-900 bg-green-100 text-green-600 rounded-md">LFT academy</div>
            <div class="ml-auto text-xs text-gray-500">24</div>
          </div>
        </a>
      </div>
    </div>


    <div class="flex-grow bg-white dark:bg-gray-900 overflow-y-auto">
        <div class="sm:px-7 sm:pt-7 px-4 pt-4 flex flex-col w-full border-b border-gray-200 bg-white dark:bg-gray-900 dark:text-white dark:border-gray-800 sticky top-0">
          <div class="flex w-full items-center">
            <div class="flex items-center text-3xl text-gray-900 dark:text-white ">
              ALL Blogposts
            </div>      
          </div>
        </div>
<div class="sm:p-7 p-4">
        <div class="flex w-full items-center mb-7">
          <button class="inline-flex mr-3 items-center h-8 pl-2.5 pr-2 rounded-md shadow text-gray-700 dark:text-gray-400 dark:border-gray-800 border border-gray-200 leading-none py-0">
            <svg viewBox="0 0 24 24" class="w-4 mr-2 text-gray-400 dark:text-gray-600" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
            Last 30 days
            <svg viewBox="0 0 24 24" class="w-4 ml-1.5 text-gray-400 dark:text-gray-600" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <button class="inline-flex items-center h-8 pl-2.5 pr-2 rounded-md shadow text-gray-700 dark:text-gray-400 dark:border-gray-800 border border-gray-200 leading-none py-0">
            Filter by
            <svg viewBox="0 0 24 24" class="w-4 ml-1.5 text-gray-400 dark:text-gray-600" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
          <div class="ml-auto text-gray-500 text-xs sm:inline-flex hidden items-center">
            <span class="mr-3">Page 2 of 4</span>
            <button class="inline-flex mr-2 items-center h-8 w-8 justify-center text-gray-400 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none py-0">
              <svg class="w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>
            <button class="inline-flex items-center h-8 w-8 justify-center text-gray-400 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none py-0">
              <svg class="w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
          </div>
        </div>
        <table class="w-full text-left">
          <thead>
            <tr class="text-gray-400">
              <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Topic</th>
              <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 hidden md:table-cell">Description</th>
             
              <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800">Author</th> 
              <th class="font-normal px-3 pt-0 pb-3 border-b border-gray-200 dark:border-gray-800 sm:text-gray-400 text-white">Date</th>
            </tr>
          </thead>
          <tbody class="text-gray-600 dark:text-gray-100">
            {% for object in object_list %}


            <tr>
              <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                <div class="flex items-center">
                  {{object.title}}
                </div>
              </td> 
               <td class=" py-2 px-1 border-b border-gray-200 dark:border-gray-800" 
               style="width: 10px;"><p class="elips">{{object.body}}</p></td>
             
              <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                <div class="flex items-center">
                  <img src="../../../asset/logo_Logo.png">
                  {{object.author.id}}
                </div>
              </td>
            
              <td class="sm:p-3 py-2 px-1 border-b border-gray-200 dark:border-gray-800">
                <div class="flex items-center">
                  <div class="sm:flex hidden flex-col">
                    {{object.updated_at}}
                    <div class="text-gray-400 text-xs"></div>
                  </div>
                  <button class="w-8 h-8 inline-flex items-center justify-center text-gray-400 ml-auto">
                    <i class="material-icons  basket">edit</i>
                  </button>

                  <button class="w-8 h-8 inline-flex items-center justify-center text-gray-400 ml-auto">
                    <i class="material-icons  basket">delete</i>
                  </button>
                </div>
              </td>
            </tr>
{% endfor %}

          </tbody>
        </table>
        <div class="flex w-full mt-5 space-x-2 justify-end">
          <button class="inline-flex items-center h-8 w-8 justify-center text-gray-400 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none">
            <svg class="w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </button>
          <button class="inline-flex items-center h-8 w-8 justify-center text-gray-500 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none">1</button>
          <button class="inline-flex items-center h-8 w-8 justify-center text-gray-500 rounded-md shadow border border-gray-200 dark:border-gray-800 bg-gray-100 dark:bg-gray-800 dark:text-white leading-none">2</button>
          <button class="inline-flex items-center h-8 w-8 justify-center text-gray-500 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none">3</button>
          <button class="inline-flex items-center h-8 w-8 justify-center text-gray-500 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none">4</button>
          <button class="inline-flex items-center h-8 w-8 justify-center text-gray-400 rounded-md shadow border border-gray-200 dark:border-gray-800 leading-none">
            <svg class="w-4" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        </div>
      </div>
       </div>




        </div>
      </div>
      </div>
      </body>
      </html>
        