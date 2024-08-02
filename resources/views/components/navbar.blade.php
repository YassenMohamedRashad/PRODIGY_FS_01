<nav class="bg-white border-gray-200 dark:bg-gray-900 shadow sticky top-0 z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('home')}}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white font-Rubik text-indigo-800">UserAuth</span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @auth
            <button type="button" class="flex text-sm bg-indigo-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <div class="w-[40px] h-[40px] rounded-full place-content-center">
                    <span class="text-white text-xl font-extrabold">{{auth()->user()->first_name[0]}}</span>
                </div>
            </button>
            @endauth
            @guest
            <x-mainlink href="{{route('login')}}">
                Login
            </x-mainlink>

            <x-mainlink href="{{route('register')}}">
                Register
            </x-mainlink>
            @endguest

            <!-- Dropdown menu -->
            @auth
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-200 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</span>
                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{auth()->user()->email}}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit" href="#" class="block w-full px-4 py-2 text-sm text-red-700 hover:bg-red-100 dark:hover:bg-gray-600 dark:text-red-200 dark:hover:text-red-600">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth

            <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{route('home')}}" class="block py-2 px-3 text-white bg-indigo-800 rounded md:bg-transparent md:text-indigo-800 md:p-0 md:dark:text-indigo-800" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-indigo-800 md:p-0 dark:text-white md:dark:hover:text-indigo-800 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
