@extends("layouts.main")
@section("content")
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8" data-aos="zoom-in" data-aos-duration="500">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <div class="text-center text-indigo-800">
            <i class="material-icons" style="font-size: 35px;">login</i>
        </div>
        <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register</h2>
    </div>

    <div class="mt-3 sm:mx-auto sm:w-full sm:max-w-sm">
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
        </form>
        <div class="mt-3">
            Already have an account ? <a class="text-indigo-800" href="{{route('login')}}">Login</a>
        </div>
    </div>
</div>
@endsection
