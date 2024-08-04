@extends('layouts.main')

@section('content')
<section class="bg-gray-900 text-white">
    <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex h-screen lg:h-[90vh] lg:items-center">
        <div class="mx-auto max-w-3xl text-center">
            <h1 class="gradient-animation text-3xl font-extrabold text-transparent sm:text-5xl">
                Join to community,
                <span class="sm:block"> increase your knowledge </span>
            </h1>


            <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed text-gray-400">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                numquam ea!
            </p>

            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-mainlink href="{{route('blog')}}">
                    Get Started
                </x-mainlink>
            </div>
        </div>
    </div>

</section>

@endsection
