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
   {{-- ===== Navigaion Bar ===== --}}
      <nav class="bg-primary fixed z-50 top-0 right-0 w-screen border-gray-200 px-2 sm:px-4 py-2.5">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
              {{-- our logo --}}
              <a href="#" class="flex items-center">
                  <span class="self-center text-xl font-semibold whitespace-nowrap text-white ">Our Logo</span>
              </a>
              {{-- mobile toggle --}}
              <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden hover:bg-gray-100 hover:text-primary focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
              </button>
              {{-- nav menu link --}}
              <div class="hidden absolute bg-primary right-0 top-14 md:top-0 w-full md:block md:relative z-30 md:w-auto" id="navbar-default">
                <ul class="flex flex-col md:items-center p-4 mt-4  border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
                  <li>
                    <a href="/" class="block py-2 pr-4 pl-3 text-white rounded hover:text-primary hover:bg-white md:bg-transparent md:p-0 md:hover:underline md:hover:underline-offset-2 md:hover:text-secondary md:hover:bg-transparent {{ ( $title === "Home") ? 'font-bold, underline' : '' }}" aria-current="page">Home</a>
                  </li>
                  <li>
                    <a href="/tour" class="block py-2 pr-4 pl-3 text-white rounded hover:text-primary hover:bg-white md:border-0 md:hover:underline md:hover:underline-offset-2 md:hover:text-secondary md:hover:bg-transparent md:p-0 {{ ( $title === "Tour List") ? 'font-bold, underline' : '' }}">Tour</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white rounded hover:text-primary hover:bg-white md:border-0 md:hover:underline md:hover:underline-offset-2 md:hover:text-secondary md:hover:bg-transparent md:p-0">Gallery</a>
                  </li>
                  <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-white rounded hover:text-primary hover:bg-white md:border-0 md:hover:underline md:hover:underline-offset-2 md:hover:text-secondary md:hover:bg-transparent md:p-0">Contact</a>
                  </li>

                  <li>
                    <a href="{{ url('/login') }}" class="block py-2 pr-4 pl-3 text-text w-full rounded hover:text-primary hover:bg-white md:border-0 md:hover:text-primary duration-100 md:py-2 font-bold bg-secondary"><i class="fa-solid fa-arrow-right-to-bracket mr-1"></i> Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          {{-- end navigation bar --}}

          {{-- page view Home --}}
          @yield('Home')
          {{-- page view Tour --}}
          @yield('Tour')
          {{-- page detail tour --}}
          @yield('Detail')


      <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
      <script src="https://kit.fontawesome.com/199bad1da3.js" crossorigin="anonymous"></script>
</body>
</html>