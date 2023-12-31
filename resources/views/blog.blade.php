<x-app-layout title="blog">
    <section class="py-10">
        <h1 class="mb-12 font-sans text-5xl font-bold text-center">Jatras</h1>
        <div class="grid justify-center max-w-screen-lg px-4 mx-auto sm:grid-cols-2 sm:gap-4 sm:px-8 md:grid-cols-3">
            @if($blogs)
            @foreach ($blogs as $item)
            <article
                class="flex flex-col w-full mx-auto my-4 overflow-hidden text-gray-900 transition bg-white border border-gray-300 rounded-2xl hover:translate-y-2 hover:shadow-lg">
                <a wire:navigate href="{{route('blog.show',['id'=> $item->id])}}">
                    <img src="{{ $item->getFirstMedia('blog-images')->getUrl() }}" class="object-cover w-full h-56"
                        alt="" />
                    <div class="flex-auto px-6 py-5">
                        <h3 class="mt-4 mb-3 text-xl font-semibold xl:text-2xl">{{str()->title($item->title)}}
                        </h3>
                        <div class="mb-4 text-base font-light">
                            {{str($item->title)->limit(25)}}
                        </div>
                        <span
                            class="inline-block px-2 py-1 text-sm font-semibold leading-normal text-center text-white no-underline align-middle bg-gray-800 border border-gray-800 rounded-full shadow-sm cursor-pointer select-none">Read
                            More</span>
                    </div>
                </a>
            </article>
            @endforeach
            @endif
        </div>
    </section>

</x-app-layout>