@extends('admin.Dashboard')

@section('Welcome')
<section class="container m-auto flex justify-center">
      <div class="overflow-x-auto w-full relative shadow-md sm:rounded-lg mt-14">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                        <th scope="col" class="py-3 px-6">Image</th>
                        <th scope="col" class="py-3 px-6">Code</th>
                        <th scope="col" class="py-3 px-6">Name</th>
                        <th scope="col" class="py-3 px-6">Category</th>
                        <th scope="col" class="py-3 px-6">Price</th>
                        <th scope="col" class="py-3 px-6">Action</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($posts as $p)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                              <td class="py-4 px-6"><div class="img_box w-28 h-20 bg-primary"><img src="{{ asset('storage/'.$p-> image) }}" alt=""></div></td>
                              <td class="py-4 px-6">{{ $p->code }}</td>
                              <td class="py-4 px-6 text-secondary">{{ $p->name }}</td>
                              <td class="py-4 px-6">{{ $p->category }}</td>
                              <td class="py-4 px-6">{{ $p->price }}</td>
                              <td class="py-4 px-6"><a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a></td>
                        </tr>
                  @endforeach
            </tbody>
            </table>
      </div>
</section>
@endsection