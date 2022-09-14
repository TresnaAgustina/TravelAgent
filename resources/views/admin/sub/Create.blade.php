@extends('admin.Dashboard')


@section('Create')
@vite('public/assets/css/app.css')

<section class="container m-auto h-screen flex align-middle justify-center">
      <form action="/create" method="POST" class="create_postmt-12 w-full px-2 flex items-start justify-center">
            @csrf
            <div class="wrapper w-4/5 flex flex-col justify-center gap-5">
                  <div class="group title">
                        <h1 class="text-center text-xl font-bold text-primary">Create New Post</h1>
                  </div>

                  <div class="group">
                        <h1 class="text-text text-lg font-semibold">Basic Information</h1>
                  </div>

                  <div class="group flex items-center gap-3">
                        <label for="package_img">
                              <div class="preview w-32 h-24 border-s border-dashed rounded-sm border-primary">
                                    <p></p>
                              </div>
                        </label>
                        <input type="file" name="package_img" class="text-transparent">
                  </div>

                  <div class="group h-auto flex gap-5 mt-2">
                        <div class="group1">
                              <label for="package_code" class="label mr-2 text-text">Package Code:</label>
                              <input type="text" name="package_code" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package code">
                        </div>

                        <div class="group2">
                              <label for="package_name" class="label mr-2 text-text">Package Name:</label>
                              <input type="text" name="package_name" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package name">
                        </div>
                  </div>

                  <div class="group">
                        <label for="package_desc" class="label mr-2 text-text">Package Description:</label>
                        {{-- <input type="textfield" name="package_desc" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package description"> --}}
                        <textarea name="package_desc" id="package_desc" cols="10" rows="2" class="border-b-s border-primary w-full p-3 focus:outline-primary"></textarea>
                  </div>

                  <div class="group">
                        <label for="package_price" class="label mr-2 text-text">Package Price/Person:</label>
                        <input type="text" name="package_price" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package price">
                  </div>

                  <div class="group h-auto flex gap-10">
                        <div class="group1">
                              <label for="price_include" class="label mr-2 text-text">Price Include:</label>
                              <input type="text" name="price_include" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="price include">
                        </div>

                        <div class="group2">
                              <label for="price_exlude" class="label mr-2 text-text">Price Exlude:</label>
                              <input type="text" name="price_exlude" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="price exlude">
                        </div>
                  </div>

                  <div class="group">
                        <label for="category">Package Category</label>
                        <div class="option_group mt-3 flex flex-col gap-1 md:flex-row md:gap-5">
                              <div class="option_btn flex gap-2">
                                    <input type="radio" name="category" id="one_day" value="one_day">
                                    <label for="one_day" class="text-paragraph">One Day</label>
                              </div>

                              <div class="option_btn flex gap-2">
                                    <input type="radio" name="category" id="week_day" value="week_day">
                                    <label for="week_day" class="text-paragraph">Week Day</label>
                              </div>

                              <div class="option_btn flex gap-2">
                                    <input type="radio" name="category" id="weekend" value="week_end">
                                    <label for="weekend" class="text-paragraph">Weekend</label>
                              </div>
                        </div>
                  </div>
            </div>
            <input type="submit" value="Submit" class="w-32 h-12 rounded-md self-center mt-5 bg-primary text-secondary">
      </form>
</section>
@endsection
   