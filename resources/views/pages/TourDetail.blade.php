@extends('Master')


@section('Detail')
@vite('public/assets/css/app.css')
{{-- ===== page title ===== --}}
      <div class="section_title mt-32 text-center text-lg font-bold text-text xl:text-2xl">Tour Package Name
            <hr class="thin_line border-s opacity-70 w-4/5 m-auto md:w-1/2 border-primary xl:mt-1 xl:w-4/5">
            <hr class="bold_line m-auto w-36 opacity-70 border-l rounded-b-md border-primary xl:w-1/4">
      </div>
{{-- ===== end page title ===== --}}

{{-- ===== detail tour section ===== --}}
      <section class="detail_tour">
            <div class="global_wraper container w-full mx-auto h-auto mt-5 mb-10 rounded-md bg-secondary shadow-md outline-none flex flex-col align-top justify-center">
                  <div class="img_wraper px-5 md:px-0 md:w-1/2 md:h-1/2 mx-auto mt-10">
                        <img src="{{ asset('assets/img/img1.svg') }}" alt="" class="tour_img">
                  </div>

                  <div class="package_desc px-5 md:px-0 mt-12 w-full md:w-4/5 lg:w-2/3 mx-auto">
                        {{-- sub title --}}
                        <div class="section_title text-center text-md md:text-lg font-bold text-text xl:text-xl">Detail Package
                              <hr class="thin_line border-s opacity-70 w-4/5 m-auto md:w-1/2 border-primary xl:mt-1 xl:w-4/5">
                              <hr class="bold_line m-auto w-36 opacity-70 border-l rounded-b-md border-primary xl:w-1/4">
                        </div>

                        {{-- description --}}
                        <div class="desc_wrap mt-5">
                              {{-- desc text --}}
                              <p class="text-paragraph text-md lg:text-lg"><span class="font-bold text-text">Description</span> : Lorem Ipsum dolor sit amet, consectetur adipiscing elit. Ultrices mauris duis sed nulla ut donec iaculis turpis. Non neque neque vel quis. Facilisis donec urna sit sapien habitant. Nibh cursus leo metus elit. Massa vitae mi metus tellus augue sed diam tortor viverra sit in.</p>

                              {{-- destination1 --}}
                              <div class="info_1 mt-5">
                                    <h5 class="title font-bold text-md lg:text-lg text-text">Destination 1</h5>
                                    <ul class="activit mt-2 pl-8">
                                          <li class="list text-sm lg:text-lg list-disc">Activity 1</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 2</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 3</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 4</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 5</li>
                                    </ul>
                              </div>

                              {{-- destination2 --}}
                              <div class="info_1 mt-5">
                                    <h5 class="title font-bold text-md lg:text-lg text-text">Destination 2</h5>
                                    <ul class="activit mt-2 pl-8">
                                          <li class="list text-sm lg:text-lg list-disc">Activity 1</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 2</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 3</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 4</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 5</li>
                                    </ul>
                              </div>

                              {{-- destination3 --}}
                              <div class="info_1 mt-5">
                                    <h5 class="title font-bold text-md lg:text-lg text-text">Destination 3</h5>
                                    <ul class="activit mt-2 pl-8">
                                          <li class="list text-sm lg:text-lg list-disc">Activity 1</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 2</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 3</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 4</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 5</li>
                                    </ul>
                              </div>

                              {{-- price table --}}
                              {{-- start table --}}
                              <div class="table_wrap rounded-sm overflow-scroll border-primary border-s mt-5">
                                    <table class="w-full text-sm text-left text-text">
                                    <thead class="text-xs text-text uppercase">
                                          <tr class="bg-primary text-secondary">
                                                <th scope="col" class="py-3 px-6">2 Person</th>
                                                <th scope="col" class="py-3 px-6">4 Person</th>
                                                <th scope="col" class="py-3 px-6">6 Person</th>
                                                <th scope="col" class="py-3 px-6">8 Person</th>
                                                <th scope="col" class="py-3 px-6">10/up</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          <tr>
                                                <td class="py-4 px-6">$2999</td>
                                                <td class="py-4 px-6">$2999</td>
                                                <td class="py-4 px-6">$2999</td>
                                                <td class="py-4 px-6">$2999</td>
                                                <td class="py-4 px-6">$2999</td>
                                          </tr>
                                    </tbody>
                                    </table>
                              </div>
                              {{-- end table --}}

                              {{-- price include --}}
                              <div class="info_1 mt-5">
                                    <h5 class="title font-bold text-md lg:text-lg text-text">Price Include :</h5>
                                    <ul class="activit mt-2 pl-8">
                                          <li class="list text-sm lg:text-lg list-disc">Activity 1</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 2</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 3</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 4</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 5</li>
                                    </ul>
                              </div>

                              {{-- price exlude --}}
                              <div class="info_1 mt-5 mb-10">
                                    <h5 class="title font-bold text-md lg:text-lg text-text">Price Exlude :</h5>
                                    <ul class="activit mt-2 pl-8">
                                          <li class="list text-sm lg:text-lg list-disc">Activity 1</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 2</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 3</li>
                                          <li class="list text-sm lg:text-lg list-disc my-1">Activity 4</li>
                                          <li class="list text-sm lg:text-lg list-disc">Activity 5</li>
                                    </ul>
                              </div>

                              {{-- button group --}}
                              <div class="btn_group">
                                    <a href="#" class="gform"><button class="btn_gform w-full h-10 rounded-sm bg-primary text-secondary font-medium md:font-bold text-sm md:text-base hover:bg-hover">Book Now (Via Google Form)</button></a>
                                    <p class="text-center font-bold text-base lg:text-lg text-paragraph my-2">Or</p>
                                    <a href="#" class="wa"><button class="btn_wa mb-10 w-full h-10 rounded-sm border-s border-primary hover:text-primary font-medium text-sm md:text-base md:font-semibold text-paragraph">Chat Via Whatsapp</button></a>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
{{-- ===== end detail tour section ===== --}}
@endsection