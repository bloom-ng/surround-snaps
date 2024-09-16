@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

    <div class="flex flex-col h-screen w-full bg-[url('/images/decor.jpg')] bg-cover bg-center bg-no-repeat">
        {{-- <img src="/images/decor.jpg" alt="decor" class="w-full"> --}}

        <div class="flex flex-col items-center w-full my-4">
            <p class="lg:text-4xl text-3xl font-lato font-extrabold text-white my-3 lg:my-7">Gallery</p>
        </div>

        <div class="flex flex-col items-center w-full h-full">
            <div class="flex flex-col bg-[#1b998b] h-full w-full mx-20 py-10 lg:px-10 lg:py-10 md:px-10 md:py-10">
                <div
                    class="w-full py-20 px-8 lg:px-20 grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-16">
                    @foreach ($galleries as $gallery)
                        @if ($gallery->type == 1)
                            <img src="{{ Storage::url($gallery->url) }}" alt="{{ $gallery->title }}" class="h-[351px] w-full">
                        @elseif ($gallery->type == 2)
                            <div class="w-full h-[351px]">
                                <iframe class="w-full h-full" src="{{ $gallery->value }}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        @elseif ($gallery->type == 3)
                            <video src="{{ Storage::url($gallery->url) }}" controls class="h-[351px] w-full">
                                Your browser does not support the video tag.
                            </video>
                        @endif
                    @endforeach
                    {{ $galleries->links() }}
                </div>


            </div>
        </div>
    </div>
@endsection
