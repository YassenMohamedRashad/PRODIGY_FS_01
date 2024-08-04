@extends("layouts.main")
@section("content")
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" data-aos="zoom-in" data-aos-duration="200">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="text-center text-indigo-800">
            <i class="material-icons" style="font-size: 35px;">login</i>
        </div>
        <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login to your Account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-4" action="{{route('login')}}" method="POST">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-800 sm:text-sm sm:leading-6">
                    @error('email')
                    <small class="text-red-500 mt-[-5px]">{{$message}}</small>
                    @enderror
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-800 sm:text-sm sm:leading-6">
                    @error('password')
                    <small class="text-red-500 mt-[-5px]">{{$message}}</small>
                    @enderror
                </div>
            </div>


            <div>
                <x-mainbtn type="submit" class="w-full">
                    Login
                </x-mainbtn>
            </div>
            
        </form>
        <div class="mt-3">
            Doesn't have an account ? <a class="text-indigo-800" href="{{route('register')}}">Register</a>
        </div>
    </div>
</div>
@endsection
