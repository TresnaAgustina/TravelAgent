<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite('public/assets/css/app.css')
      <title>{{ $title }}</title>
</head>
<body>

  @if(session()->has('loginError'))
  <div id="popup-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
      <div class="relative p-4 w-full max-w-md h-full md:h-auto">
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="p-6 text-center">
                  <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                  <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">{{session('loginError')}}!!</h3>

                  <button type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Back</button>
              </div>
          </div>
      </div>
  </div>
  @endif  
      <section class="container h-screen flex flex-col gap-2 justify-center items-center m-auto">
        

            <div class="block p-6 rounded-lg shadow-lg bg-white w-96">
              <h1 class="title font-bold text-lg text-center text-primary my-3 tracking-wide">Login Admin</h1>
                  <form action="/login" method="POST" class="LoginForm">
                    @csrf
                    <div class="form-group mb-6">
                      <label for="name" class="form-label inline-block mb-2 text-gray-700">Username</label>
                      <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none @error('name') is-invalid @enderror" id="name" placeholder="Enter Username" name="name">
                      @error('name')
                           <div class="error text-red-500 mt-1">*{{ $message }}</div>
                      @enderror
                    </div>

                    <div class="form-group mb-6">
                      <label for="password" class="form-label inline-block mb-2 text-gray-700">Password</label>
                      <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputPassword2 @error('password') is-invalid @enderror" placeholder="Password" name="password">
                      @error('password')
                           <div class="error">*{{ $message }}</div>
                      @enderror
                    </div>

                    <input type="submit" value="Login" class="w-full px-6 py-2.5 bg-primary text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-hover hover:shadow-lg focus:bg-primary focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                  </form>
                </div>
      </section>

{{-- sweet alert --}}
</body>
</html>