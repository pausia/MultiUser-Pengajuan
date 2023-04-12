<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.component.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.component.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.component.header')
        <!-- partial -->

    <!-- container-scroller -->
    @include('admin.component.body')
    <!-- plugins:js -->
    @include('admin.component.script')
    <!-- End custom js for this page -->
  </body>
</html>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>
    <div>
        <form action="{{ url('addseller') }}" method="POST">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" name="name" required="">
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="email" required="">
            </div>
            <div>
                <label for="">Password</label>
                <input type="password" name="password" required="">
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
    </div>

</x-app-layout>

