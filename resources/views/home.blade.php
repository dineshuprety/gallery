<x-app-layout title="home"> 
    <div class="relative px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full md:px-8 lg:py-32 xl:px-20">
        <div class="max-w-xl mx-auto lg:max-w-screen-xl">
            <div class="mb-16 text-center lg:mb-0 lg:max-w-lg lg:text-left">
                <div class="max-w-xl mb-6">
                    <h2
                        class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-slate-700 sm:text-5xl sm:leading-snug">
                        Jatras of
                        <span class="inline-block text-green-500">Pharping</span>
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">Pharping is a small Newar town on the southern rim of the Kathmandu valley, about 23 kilometers from the city. It is presently incorporated into the Dakshinkali Municipality. Pharping has a sizable Newar community. 
                        The Newar community has affected several historical and cultural sites in and around Pharping.  The existence of the Newar population adds to the village's cultural diversity and historical value. People living in Pharping celebrates different jatras which are vibrant and colorful celebrations that frequently include religious rites, processions, dances, music, and communal gatherings.</p>
                </div>
            </div>
            <div
                class="justify-center hidden h-full overflow-hidden lg:absolute lg:bottom-0 lg:right-0 lg:flex lg:w-1/2 lg:items-end lg:justify-start">
                <svg class="w-full h-full" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="img1" x="0" y="0" width="1" height="1">
                            <image x="0" y="0" width="100%" height="100%" preserveAspectRatio="xMaxYMax slice"
                                href="{{asset('/images/sadichha_in_newari_dress.jpg')}}" />
                        </pattern>
                    </defs>

                    <path fill="url(#img1)"
                        d="M40,-62.6C52.2,-54.5,62.5,-43.9,66.9,-31.4C71.3,-18.9,69.6,-4.6,65.9,8.3C62.2,21.1,56.4,32.5,49.2,45.2C42.1,57.9,33.7,72.1,22.2,75.3C10.7,78.5,-3.9,70.7,-14.8,62.1C-25.7,53.5,-32.8,44.1,-44.9,35.8C-57,27.5,-74,20.3,-82.1,7.7C-90.3,-4.8,-89.5,-22.7,-80.8,-34.8C-72,-46.9,-55.2,-53.3,-40.4,-60.2C-25.6,-67,-12.8,-74.3,0.6,-75.2C13.9,-76.1,27.9,-70.6,40,-62.6Z"
                        transform="translate(100 100)" />
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>