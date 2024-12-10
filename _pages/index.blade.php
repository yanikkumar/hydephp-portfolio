@php($title = 'Yanik Kumar')
@extends('hyde::layouts.app')
@section('content')
    <main id="content" class="px-8 py-8 mt-2 mx-auto max-w-7xl">
        <header class="">
            <div class="flex flex-wrap justify-center gap-6">
                <h1
                    class="my-auto py-8 text-3xl font-extrabold leading-10 tracking-tight text-left text-gray-700 sm:leading-none md:text-4xl md:text-left lg:text-5xl dark:text-gray-200">
                    <span class="text-black dark:text-gray-200"> Hey! I'</span>m <br>
                    <span class="text-black dark:text-gray-200"> Yanik</span> Kumar
                </h1>
                <!-- Icons -->
                <div class="flex items-center justify-center w-24 h-24 bg-blue-100 rounded-full dark:bg-blue-500/20">
                    <img src="./_media/CreativeImg.svg" alt="" width="600px" class="float-end">
                </div>
            </div>
        </header>
        <section id="about" class="container p-8 mx-auto">
            <div class="flex flex-wrap justify-center gap-6 mb-8">
                <div class="mx-8 mt-4 text-center">
                    <div
                        class="flex items-center justify-center w-16 h-16 mb-2 text-xl text-white bg-blue-500 rounded-full dark:bg-blue-700">
                        <img class="" src="../_media/DeveloperVector.svg" alt="" srcset="">
                    </div>
                    <h1
                        class="mx-auto text-2xl font-bold text-center text-slate-500 md:text-3xl lg:text-4xl dark:text-gray-300">
                        Developer <br>
                        <span>Profession</span>
                    </h1>
                </div>
                <div class="mx-8 mt-4 text-center">
                    <div
                        class="flex items-center justify-center w-16 h-16 mb-2 text-xl text-white bg-blue-500 rounded-full dark:bg-blue-700">
                        <img class="" src="../_media/Vlogger.svg" alt="" srcset="">
                    </div>
                    <h1
                        class="mx-auto text-2xl font-bold text-center text-slate-500 md:text-3xl lg:text-4xl dark:text-gray-300">
                        Vlogger <br>
                        <span>Fun</span>
                    </h1>
                </div>
                <div class="mx-8 mt-4 text-center">
                    <div
                        class="flex items-center justify-center w-16 h-16 mb-2 text-xl text-white bg-blue-500 rounded-full dark:bg-blue-700">
                        <img class="" src="../_media/SocialmediaGuy.svg" alt="" srcset="">
                    </div>
                    <h1
                        class="mx-auto text-2xl font-bold text-center text-slate-500 md:text-3xl lg:text-4xl dark:text-gray-300">
                        Digital <br>
                        <span>Nerd</span>
                    </h1>
                </div>
                <div class="mx-8 mt-4 text-center">
                    <div
                        class="flex items-center justify-center w-16 h-16 mb-2 text-xl text-white bg-blue-500 rounded-full dark:bg-blue-700">
                        <img class="" src="../_media/CreativeArtist.svg" alt="" srcset="">
                    </div>
                    <h1
                        class="mx-auto text-2xl font-bold text-center text-slate-500 md:text-3xl lg:text-4xl dark:text-gray-300">
                        Creative <br>
                        <span>Artist</span>
                    </h1>
                </div>
            </div>
        </section>
        <hr>
        <main>
            <h1 class="my-3 text-3xl font-extrabold text-center">About Me</h1>
        </main>

        <div id="post-feed" class="max-w-3xl mx-auto">
            @include('hyde::components.blog-post-feed')
        </div>
    </main>
@endsection
