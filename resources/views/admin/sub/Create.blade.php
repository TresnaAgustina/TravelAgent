@extends('admin.Dashboard')


@section('Create')
@vite('public/assets/css/app.css')

<section class="container m-auto h-screen flex align-middle justify-center">
      <form action="/store" method="post" class="create_post mt-12 w-full px-2 flex items-start justify-center" enctype="multipart/form-data">
            @csrf
            <div class="wrapper w-4/5 flex flex-col justify-center gap-5">
                  <div class="group title">
                        <h1 class="text-center text-xl font-bold text-primary">Create New Post</h1>
                  </div>

                  <div class="group">
                        <h1 class="text-text text-lg font-semibold">Basic Information</h1>
                  </div>

                  <div class="group flex items-center gap-3">
                        <label for="image">Upload Image</label>
                        <input type="file" name="image" accept="image/*">
                        @error('image')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="group h-auto flex gap-5 mt-2">
                        <div class="group1">
                              <label for="code" class="label mr-2 text-text">Package Code:</label>
                              <input type="text" name="code" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package code">
                              @error('code')
                                    <div class="error text-red-500 mt-1">*{{ $message }}</div>
                              @enderror
                        </div>

                        <div class="group2">
                              <label for="name" class="label mr-2 text-text">Package Name:</label>
                              <input type="text" name="name" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package name">
                              @error('name')
                                    <div class="error text-red-500 mt-1">*{{ $message }}</div>
                              @enderror
                        </div>
                  </div>

                  <div class="group">
                        <label for="desc" class="label mr-2 text-text">Package Description:</label>
                        {{-- <input type="textfield" name="package_desc" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package description"> --}}
                        <textarea name="description" id="package_desc" cols="10" rows="2" class="border-b-s border-primary w-full p-3 focus:outline-primary"></textarea>
                        @error('description')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="group">
                        <label for="price" class="label mr-2 text-text">Package Price/Person:</label>
                        <input type="text" name="price" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package price">
                        @error('price')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="group h-auto flex gap-10">
                        <div class="group1">
                              <label for="price_include" class="label mr-2 text-text">Price Include:</label>
                              <input type="text" name="price_include" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="price include">
                              @error('price_include')
                                    <div class="error text-red-500 mt-1">*{{ $message }}</div>
                              @enderror
                        </div>

                        <div class="group2">
                              <label for="price_exlude" class="label mr-2 text-text">Price Exlude:</label>
                              <input type="text" name="price_exlude" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="price exlude">
                              @error('price_exlude')
                                    <div class="error text-red-500 mt-1">*{{ $message }}</div>
                              @enderror
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
                        @error('category')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>


                  <div class="group mt-5">
                        <h1 class="text-text text-lg font-semibold">Detail Information</h1>
                  </div>

                  <div class="group">
                        <label for="destination1" class="label mr-2 text-text">Destination 1:</label>
                        <textarea name="destination1" id="destination" cols="10" rows="1" class="border-b-s border-primary w-full p-3 focus:outline-primary"></textarea>
                        @error('destination1')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="group">
                        <label for="destination2" class="label mr-2 text-text">Destination 2:</label>
                        <textarea name="destination2" id="destination" cols="10" rows="1" class="border-b-s border-primary w-full p-3 focus:outline-primary"></textarea>
                        @error('destination2')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="group">
                        <label for="destination3" class="label mr-2 text-text">Destination 3:</label>
                        <textarea name="destination3" id="destination" cols="10" rows="1" class="border-b-s border-primary w-full p-3 focus:outline-primary"></textarea>
                        @error('destination3')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="group">
                        <label for="destination4" class="label mr-2 text-text">Destination 4:</label>
                        <textarea name="destination4" id="destination" cols="10" rows="1" class="border-b-s border-primary w-full p-3 focus:outline-primary"></textarea>
                        @error('destination4')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="group">
                        <label for="destination5" class="label mr-2 text-text">Destination 5:</label>
                        <textarea name="destination5" id="destination" cols="10" rows="1" class="border-b-s border-primary w-full p-3 focus:outline-primary"></textarea>
                        @error('destination5')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>

                  <div class="group">
                        <label for="destination6" class="label mr-2 text-text">Destination 6:</label>
                        <textarea name="destination6" id="destination" cols="10" rows="1" class="border-b-s border-primary w-full p-3 focus:outline-primary"></textarea>
                        @error('destination6')
                              <div class="error text-red-500 mt-1">*{{ $message }}</div>
                        @enderror
                  </div>


                  <input type="submit" value="Submit" class="w-32 h-12 rounded-md self-center my-5 bg-primary text-secondary">
            </div>
      </form>
</section>
@endsection
   