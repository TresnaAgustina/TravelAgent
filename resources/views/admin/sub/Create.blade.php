@extends('admin.Dashboard')


@section('Create')
@vite('public/assets/css/app.css')

<section class="container m-auto h-screen w-full flex align-middle justify-center">
      <form class="mt-12 flex flex-col gap-5">
            <div class="group title">
                  <h1 class="text-center text-xl font-bold text-primary">Create New Post</h1>
            </div>

            <div class="group">
                  <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                  <label for="file-upload" id="file-drag">
                  <img id="file-image" src="#" alt="Preview" class="hidden">
                  <div id="start">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        <div>Select a file or drag here</div>
                        <div id="notimage" class="hidden">Please select an image</div>
                        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                  </div>
                  <div id="response" class="hidden">
                        <div id="messages"></div>
                        <progress class="progress" id="file-progress" value="0">
                        <span>0</span>%
                        </progress>
                  </div>
                  </label>
            </div>

            <div class="group w-full h-auto flex gap-10 justify-center mt-2">
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
                  <input type="text" name="package_desc" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package description">
            </div>

            <div class="group">
                  <label for="package_price" class="label mr-2 text-text">Package Price/Person:</label>
                  <input type="text" name="package_price" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="package price">
            </div>

            <div class="group w-full h-auto flex gap-10 justify-between">
                  <div class="group1">
                        <label for="price_include" class="label mr-2 text-text">Price Include:</label>
                        <input type="text" name="price_include" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="price include">
                  </div>

                  <div class="group2">
                        <label for="price_exlude" class="label mr-2 text-text">Price Exlude:</label>
                        <input type="text" name="price_exlude" class="w-full input_field bg-transparent border-b-s border-primary placeholder:text-sm focus:outline-none focus:bg-none" placeholder="price exlude">
                  </div>
            </div>
      </form>
</section>
@endsection
   