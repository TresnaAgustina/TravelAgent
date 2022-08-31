<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('public/assets/css/app.css')
      <title>{{ $title }}</title>
</head>
<body class="bg-background">
<aside class="w-64 fixed z-50 sideCont top-0 left-50 duration-300" aria-label="Sidebar">
      <div class="overflow-y-auto py-4 px-3 h-screen bg-secondary">
            <div class="group flex justify-between align-middle px-2 mt-3 mb-6">
                  <a href="#" class="logo text-primary text-xl font-bold">Logo</a>
                  <button class="toogleSideNav"><i class="fa-solid fa-bars text-text text-lg"></i></button>
            </div>
         <ul class="space-y-2">
            <li>
               <a href="{{ url('/dashboard') }}" class="flex items-center p-2 text-base font-normal text-text rounded-lg hover:bg-gray-50 link">
                  <i class="fa-solid fa-chart-pie"></i>
                  <span class="ml-3"> Dashboard</span>
               </a>
            </li>
            <li>
               <button type="button" class="dropBtn flex items-center p-2 w-full text-base font-normal text-text rounded-lg transition duration-75 group hover:bg-gray-50 link" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                  <i class="fa-solid fa-list-check"></i>
                     <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item="">Manage Post</span>
                     <svg sidebar-toggle-item="" class="w-6 h-6 dropIcon hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
               </button>
               <ul id="dropdown-example" class="dropMenu hidden py-2 space-y-2">
                     <li>
                        <a href="{{ url('/main') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-text rounded-lg transition duration-75 group hover:bg-gray-50 dark:text-whit link"><i class="fa-solid fa-circle-plus mr-2"></i> Create Post</a>
                     </li>
                     <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-text rounded-lg transition duration-75 group hover:bg-gray-50 dark:text-whit link"><i class="fa-solid fa-pen-to-square mr-2"></i>Edit Post</a>
                     </li>
                     <li>
                        <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-text rounded-lg transition duration-75 group hover:bg-gray-50 dark:text-whit link"><i class="fa-solid fa-delete-left mr-2  "></i>Delete Post</a>
                     </li>
               </ul>
            </li>

            <li>
                  <a href="#" class="flex items-center p-2 text-base font-normal text-text rounded-lg hover:bg-gray-50 link">
                        <i class="fa-solid fa-comment"></i>
                     <span class="flex-1 ml-3 whitespace-nowrap">Comment</span>
                  </a>
               </li>
            
            <li>
               <a href="{{ url('/logout') }}" class="flex items-center p-2 text-base font-normal text-text rounded-lg hover:bg-gray-50 link">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                  <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
               </a>
            </li>
         </ul>
      </div>
   </aside>


      @yield('Create')
   
   <script src="{{ asset('assets/js/sidebar.js') }}"></script>
   <script src="https://kit.fontawesome.com/199bad1da3.js" crossorigin="anonymous"></script>
</body>
</html>
