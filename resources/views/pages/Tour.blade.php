@extends('Master')


@section('Tour')
@vite('public/assets/css/app.css')
{{-- ===== page title ===== --}}
      <div class="section_title mt-32 text-center text-lg font-bold text-text xl:text-2xl">Tour Package
            <hr class="thin_line border-s opacity-70 w-4/5 m-auto md:w-1/2 border-primary xl:mt-1 xl:w-4/5">
            <hr class="bold_line m-auto w-36 opacity-70 border-l rounded-b-md border-primary xl:w-1/4">
      </div>
{{-- ===== end page title ===== --}}

      {{-- ===== dropdown button ===== --}}
      <section class="filter_box container mx-auto flex justify-center md:justify-start my-3 mb-5 h-20 relative">           
            <div class="drop_wraper w-32 md:w-40 bg-transparent my-5 absolute ml-0 md:ml-3 2xl:ml-0">
                  <label for="touch"><span class="p-2 text-text border-primary border-s rounded-sm text-sm md:text-base cursor-pointer block after:float-right after:right-2 after:content-['+'] select-none">Category</span></label>               
                  <input type="checkbox" id="touch" class="absolute opacity-0 h-0 focus:text-primary"> 

                  <ul class="slide flex flex-col clear-both w-full h-0 overflow-hidden ease-in-out duration-200 bg-primary shadow-lg" id="myBtnContainer">
                        <button class="btn select-none p-2 text-secondary hover:bg-secondary hover:text-primary text-sm md:text-base " onclick="filterSelection('all')"><a href="#">All</a></button>
                        <button class="btn select-none p-2 text-secondary hover:bg-secondary hover:text-primary text-sm md:text-base " onclick="filterSelection('oneDay')"><a href="#">One Day Tour</a></button> 
                        <button class="btn select-none p-2 text-secondary hover:bg-secondary hover:text-primary text-sm md:text-base " onclick="filterSelection('weekDay')"><a href="#">Week Days Tour</a></button>
                        <button class="btn select-none p-2 text-secondary hover:bg-secondary hover:text-primary text-sm md:text-base " onclick="filterSelection('weekEnd')"><a href="#">Weekend Tour</a></button>
                  </ul>
            </div>
      </section>
      {{-- ===== end dropdown button ===== --}}

{{-- ===== Top Package Section ===== --}}
<section class="container h-auto mt-5 mb-10 mx-auto">
      {{-- card section wraper --}}
      <div class="card_section mt-4 xl:px-5 2xl:px-0 flex flex-col h-auto">
       <div class="card_wrap flex justify-center xl:justify-start self-center container gap-4 flex-wrap">
          {{-- single card --}}      
          <div class="tour_card hidden max-w-xs rounded-lg  shadow-md bg-secondary onDay">
              <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('assets/img/slide1.svg') }}" alt="">
              </a>
              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">Package Name</h5>
                  </a>
                  <p class="mb-3 font-normal text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis et potenti dictum suscipit velit etiam.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                      Read more
                      <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>
  
          {{-- single card --}}      
          <div class="tour_card hidden max-w-xs rounded-lg  shadow-md bg-secondary weekDay">
              <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('assets/img/slide2.svg') }}" alt="">
              </a>
              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">Package Name</h5>
                  </a>
                  <p class="mb-3 font-normal text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis et potenti dictum suscipit velit etiam.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                      Read more
                      <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>
  
          {{-- single card --}}      
          <div class="tour_card hidden max-w-xs rounded-lg  shadow-md bg-secondary oneDay">
              <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('assets/img/img1.svg') }}" alt="">
              </a>
              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">Package Name</h5>
                  </a>
                  <p class="mb-3 font-normal text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis et potenti dictum suscipit velit etiam.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                      Read more
                      <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>
  
          {{-- single card --}}      
          <div class="tour_card hidden max-w-xs rounded-lg shadow-md bg-secondary weekEnd">
              <a href="#">
                  <img class="rounded-t-lg" src="{{ asset('assets/img/img3.svg') }}" alt="">
              </a>
              <div class="p-5">
                  <a href="#">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">Package Name</h5>
                  </a>
                  <p class="mb-3 font-normal text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis et potenti dictum suscipit velit etiam.</p>
                  <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                      Read more
                      <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </div>

           {{-- single card --}}      
           <div class="tour_card hidden max-w-xs rounded-lg  shadow-md bg-secondary weekDay">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/img/slide1.svg') }}" alt="">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">Package Name</h5>
                </a>
                <p class="mb-3 font-normal text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis et potenti dictum suscipit velit etiam.</p>
                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>

        {{-- single card --}}      
        <div class="tour_card hidden max-w-xs rounded-lg  shadow-md bg-secondary weekEnd">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/img/slide2.svg') }}" alt="">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">Package Name</h5>
                </a>
                <p class="mb-3 font-normal text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis et potenti dictum suscipit velit etiam.</p>
                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>

        {{-- single card --}}      
        <div class="tour_card hidden max-w-xs rounded-lg  shadow-md bg-secondary oneDay">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/img/img1.svg') }}" alt="">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">Package Name</h5>
                </a>
                <p class="mb-3 font-normal text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis et potenti dictum suscipit velit etiam.</p>
                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>

        {{-- single card --}}      
        <div class="tour_card hidden max-w-xs rounded-lg shadow-md bg-secondary weekDay">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('assets/img/img3.svg') }}" alt="">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">Package Name</h5>
                </a>
                <p class="mb-3 font-normal text-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis et potenti dictum suscipit velit etiam.</p>
                <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                    Read more
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
      </div>
    {{-- end card wrap --}}
      </div>
</section>
{{-- ===== End Top Package ===== --}}

@include('component.footer')

<script src="{{ asset('assets/js/filter.js') }}"></script>
@endsection

