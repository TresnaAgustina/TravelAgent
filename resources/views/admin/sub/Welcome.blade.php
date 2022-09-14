@extends('admin.Dashboard')

@section('Welcome')
<section class="container m-auto h-screen flex justify-center align-middle">
      <div class="header m-auto">
         <h1 class="text-2xl">Welcome Back <span class="font-bold">{{ auth()->user()->name }}</span></h1>
      </div>
</section>
@endsection