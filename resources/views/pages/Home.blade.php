@extends('Master')

@section('Home')
@vite('public/assets/css/app.css')

{{-- ===== Image Slider ===== --}}
<div id="controls-carousel" class="relative -mt-3 md:mt-10 lg:mt-16 xl:mt-18" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden h-96 xl:h-coursel">
         <!-- Item 1 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
            <img src="{{ asset('assets/img/img1.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
            <img src="{{ asset('assets/img/img2.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
            <img src="{{ asset('assets/img/img3.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="{{ asset('assets/img/slide1.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
            <img src="{{ asset('assets/img/slide2.svg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
 {{-- ===== End Image Slider ===== --}}



  {{-- ===== Top Package Section ===== --}}
<section class="container h-auto m-auto mt-5">
    {{-- title --}}
    <div class="section_title text-center text-lg font-bold text-text xl:text-2xl">Tour Package
        <hr class="thin_line border-s w-4/5 m-auto md:w-1/2 border-primary xl:mt-1 xl:w-4/5 opacity-70">
        <hr class="bold_line m-auto w-36 border-l rounded-b-md border-primary xl:w-1/4 opacity-70">
    </div>

    {{-- card section wraper --}}
    <div class="card_section mt-4 xl:px-5 2xl:px-0 flex flex-col h-auto">
     <div class="card_wrap flex justify-center xl:justify-start self-center container gap-4 flex-wrap lg:flex-nowrap">
        
        {{-- single card --}}   
        @foreach ($posts as $p)
            <div class="max-w-xs rounded-lg  shadow-md bg-secondary">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('storage/'.$p-> image) }}" alt="">
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight color-text">{{ $p->name }}</h5>
                    </a>
                    <p class="mb-3 font-normal block h-14 text-paragraph break-all">{{ Str::limit("$p->description", 60, '...') }}</p>
                    <a href="#" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary ">
                        Read more
                        <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        @endforeach   
    </div>

    {{-- button view more --}}
    <a href="{{ url('/tour') }}" class="button text-base font-semibold text-text  mt-4 self-center md:text-lg">view more <i class="fa-solid fa-circle-arrow-right text-primary text-xs md:text-sm hover:text-hover"></i></a>
    </div>
</section>
 {{-- ===== End Top Package ===== --}}


 {{-- ===== About Us Section ===== --}}
<section class="about_section w-full mb-8 mt-32 mx-auto bg-secondary py-5 relative">
    <div class="about_wrap w-11/12 container m-auto flex relative">
        <div class="about_m_content md:w-1/2 xl:w-2/3">
            {{-- title --}}
            <h1 class="about_title text-text xl:text-2xl"><span class="font-bold">WHY </span>BOOK WITH US
                <hr class="thin_line border-s w-4/5 md:w-1/2 border-primary xl:mt-1 xl:w-4/5 opacity-70">
                <hr class="bold_line w-1/4 border-l rounded-br-md border-primary opacity-70">
            </h1>
            {{-- desc --}}
            <p class="about_desc text-paragraph font-medium text-sm mt-2 xl:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non in faucibus nunc augue amet morbi sed nam vitae. Amet massa etiam id ultricies morbi. Magnis ultricies lobortis tellus malesuada semper. Pulvinar id non nunc.</p>

            <a href="#" class="inline-flex items-center py-3 px-5 text-sm font-medium text-center text-white bg-primary rounded-md hover:bg-hover focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-primary mt-5">Contact Us</a>
        </div>
        {{-- travel image --}}
        <div class="about_img_content absolute right-0 -top-10 xl:-top-16 hidden md:block grow border-red-500">
            <img src="{{ asset('assets/img/travelIcon.svg') }}" alt="" class="travel_icon w-80 xl:w-96">
        </div>
    </div>
</section>
 {{-- ===== End About Us ===== --}}


 {{-- ===== Gallery Section ===== --}}
<section class="galery_section container flex flex-col justify-center h-auto mx-auto mt-32 mb-12">
    {{-- title --}}
    <div class="section_title text-center text-lg font-bold text-text xl:text-2xl">Gallery
        <hr class="thin_line border-s w-4/5 m-auto md:w-1/2 border-primary xl:mt-1 xl:w-4/5 opacity-70">
        <hr class="bold_line m-auto w-36 border-l rounded-b-md border-primary xl:w-1/4 opacity-70">
    </div>

    {{-- gallery wraper --}}
    <div class="photo_gallery mb-5 px-5 md:px-0 xl:px-5 2xl:px-0 grid grid-cols-2 xl:grid-cols-4 gap-4 mt-5">
        {{-- single Photo --}}
        <div class="photo_wrap overflow-hidden">
            <img src="{{ asset('assets/img/img1.svg') }}" alt="" class="gallery r w-86 h-72 rounded-sm object-cover">
        </div>

        {{-- single Photo --}}
        <div class="photo_wrap overflow-hidden">
            <img src="{{ asset('assets/img/img3.svg') }}" alt="" class="gallery r w-86 h-72 rounded-sm object-cover">
        </div>

        {{-- single Photo --}}
        <div class="photo_wrap overflow-hidden">
            <img src="{{ asset('assets/img/img2.svg') }}" alt="" class="gallery r w-86 h-72 rounded-sm object-cover">
        </div>

        {{-- single Photo --}}
        <div class="photo_wrap overflow-hidden">
            <img src="{{ asset('assets/img/img1.svg') }}" alt="" class="gallery r w-86 h-72 rounded-sm object-cover">
        </div>

        {{-- single Photo --}}
        <div class="photo_wrap overflow-hidden">
            <img src="{{ asset('assets/img/img3.svg') }}" alt="" class="gallery r w-86 h-72 rounded-sm object-cover">
        </div>

        {{-- single Photo --}}
        <div class="photo_wrap overflow-hidden">
            <img src="{{ asset('assets/img/slide1.svg') }}" alt="" class="gallery w-86 h-72 rounded-sm object-cover">
        </div>

        {{-- single Photo --}}
        <div class="photo_wrap overflow-hidden">
            <img src="{{ asset('assets/img/slide2.svg') }}" alt="" class="gallery w-86 h-72 rounded-sm object-cover">
        </div>

        {{-- single Photo --}}
        <div class="photo_wrap overflow-hidden">
            <img src="{{ asset('assets/img/img2.svg') }}" alt="" class="gallery r w-86 h-72 ounded-sm object-cover">
        </div>
    </div>

    {{-- button view more --}}
    <a href="#" class="button text-base font-semibold text-text self-center md:text-lg">view more <i class="fa-solid fa-circle-arrow-right text-primary text-xs md:text-sm hover:text-hover"></i></a>
</section>
 {{-- ===== End Gallery ===== --}}

  @include('component.footer')
  
<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
@endsection