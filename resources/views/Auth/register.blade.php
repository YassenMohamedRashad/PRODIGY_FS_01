@extends("layouts.main")
@section("content")
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" data-aos="zoom-in" data-aos-duration="500">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="text-center text-indigo-800">
            <i class="material-icons" style="font-size: 35px;">login</i>
        </div>
        <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-4" action="{{route('register')}}" method="POST">
            @csrf
            <div class="flex space-x-5">
                <div>
                    <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                    <div class="mt-2">
                        <input id="first_name" name="first_name" type="text" autocomplete="first_name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-800 sm:text-sm sm:leading-6">
                        @error('first_name')
                        <small class="text-red-500 mt-[-5px]">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                    <div class="mt-2">
                        <input id="last_name" name="last_name" type="text" autocomplete="last_name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-800 sm:text-sm sm:leading-6">
                        @error('last_name')
                        <small class="text-red-500 mt-[-5px]">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>

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
                <div class="flex items-center justify-between">
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm password</label>
                </div>
                <div class="mt-2">
                    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="password_confirmation" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-800 sm:text-sm sm:leading-6">
                    @error('password_confirmation')
                    <small class="text-red-500 mt-[-5px]">{{$message}}</small>
                    @enderror
                </div>
            </div>


            <div>
                <x-mainbtn type="submit" class="w-full">
                    Register
                </x-mainbtn>
            </div>
            <div class="w-full">
                <a href="/google" class="w-full flex border border-indigo-800 p-2 rounded-xl hover:bg-indigo-100 place-content-center">
                    <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" viewBox="0 0 48 48">
                        <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                        <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                        <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                        <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                    </svg>
                    <span class="ms-2">Continue with Google</span>
                </a>
            </div>
        </form>
        <div class="mt-3">
            Already have an account ? <a class="text-indigo-800" href="{{route('login')}}">Login</a>
        </div>
    </div>
</div>
@endsection
