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
              ADD NEW Blogpost
            </div>      
          </div>
        </div>
        <div class="body-box">
            <style>
                form{
                    display: block;

                }
                form .form-group{
                    margin-bottom: 2px;

                }
                form .form-group .targ{
                 color:#000;
   

                }
                form .form-group input{
                    font-size:18px;
   padding:5px 10px 10px 5px;
   display:block;
   width:780px;
   border:none;margin-left:120px;
   

                }
                
               
 
 /* LABEL ======================================= */
 form .form-group label 				 {
   color:rgb(255, 255, 255); 
   padding:10px 10px 10px 5px;
   font-size:18px;font-weight: 500;
   position: relative;
   top: 28px;
      transition:0.2s ease all; 
   -moz-transition:0.2s ease all; 
   -webkit-transition:0.2s ease all;
 }
 .ck.ck-editor__editable_inline{
  min-height: 400px;max-height: 400px;
  color: #000;min-width:73vw; overflow:visible;
}
input[type=submit]{
  margin-top: 5px;
  background-color: rgb(1, 1, 68);padding: 5px 10px;border-radius: 5px;font-weight: 600;cursor:pointer
} 
form .form-group input:focus 		{ outline:none; }
            </style>
          <div class="flex w-full items-center mb-7">
              <form method="POST" enctype="multipart/form-data" action="">
                {% csrf_token %}
               
            <div class="form-group">
               <label>Title:</label>
                <input type="text" class="targ" name="title">
                
            </div>
            <div class="form-group">
                <label>Featured Image:</label>
                 <input type="file" style="margin-left:180px;" name="image">
                 
             </div>
             <div class="form-group">
               <textarea id="editor" name="body"></textarea>
               
           </div>
           <input type="submit" value="Upload">
            </form>
          </div>
        </div>
      </div>
<script>
  ClassicEditor
  .create(document.querySelector('#editor'),)
  .catch(error =>{
    console.error(error);
  });
</script>




        </div>
      </div>
      </div>
      </body>
      </html>
        