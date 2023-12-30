<x-app-layout title="details">
    <article>
        <header class="max-w-screen-xl mx-auto text-center pt-28">
            <p class="text-gray-500">Published {{ $post->created_at->format('F j, Y') }}</p>
            <h1 class="mt-2 text-3xl font-bold text-gray-900 sm:text-5xl">{{str()->title($post->title)}}</h1>

            <div class="w-full carousel sm:h-[34rem] mt-10">
                @foreach($post->getMedia('*') as $key => $media)
                <div id="slide-{{$key}}" class="relative w-full carousel-item">
                    <img src="{{ $media->getUrl() }}" class="w-full" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        {{-- You might want to adjust the links based on your requirements --}}
                        <a href="#slide-{{$key - 1}}" class="btn btn-circle">❮</a>
                        <a href="#slide-{{$key + 1}}" class="btn btn-circle">❯</a>
                    </div>
                </div>
                @endforeach
            </div>
        </header>

        <div
            class="max-w-screen-md px-4 py-10 mx-auto mt-10 space-y-12 font-serif text-lg tracking-wide prose text-gray-700">
            {!! $post->description !!}
        </div>
    </article>

    <div class="flex mx-auto mt-10 space-x-2 w-fit">
        <div class="h-0.5 w-2 bg-gray-600"></div>
        <div class="h-0.5 w-32 bg-gray-600"></div>
        <div class="h-0.5 w-2 bg-gray-600"></div>
    </div>
</x-app-layout>