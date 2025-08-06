<x-app-layout title="La sélection EPL">
    <x-slot
        name="header"
        class="relative bg-universe"
        raw
    >
        <div>
            <div class="absolute inset-x-0 top-0 z-10">
                <div class="relative max-w-7xl mx-auto">
                    <x-navbar overlay />
                </div>
            </div>

            <main>
                <div class="relative bg-universe">
                    <div class="absolute inset-x-0 bottom-0 lg:top-0 lg:h-full">
                        <div class="h-full w-full lg:grid lg:grid-cols-2">
                            <div class="h-full lg:relative lg:col-start-2">
                                <img
                                    class="h-full w-full object-cover opacity-50 lg:absolute lg:inset-0"
                                    src="{{ asset('media/737-into-sunset.jpg') }}"
                                    alt="An airline jet seen from behind flying into the sunset"
                                />
                                <div aria-hidden="true" class="absolute inset-x-0 top-0 h-32 bg-linear-to-b from-universe lg:inset-y-0 lg:left-0 lg:h-full lg:w-32 xl:w-44 lg:bg-linear-to-r"></div>
                                <div aria-hidden="true" class="absolute inset-x-0 bottom-0 h-12 bg-linear-to-t from-universe"></div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-4xl mx-auto px-4 pt-20 lg:pt-24 sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-x-8">
                        <div class="relative pt-12 pb-64 md:pb-120 lg:col-start-1 lg:pb-24">
                            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                En hommage à nos EPL disparus
                            </h1>

                            <blockquote class="mt-6 sm:mt-8 md:grow md:flex md:flex-col">
                                <div class="relative font-medium text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl md:grow">
                                    <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gray-700" fill="currentColor" viewBox="0 0 32 32">
                                        <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                                    </svg>
                                    <p class="relative">
                                        Une fois que vous aurez goûté au vol, vous marcherez à jamais les yeux tournés
                                        vers le ciel, car c’est là que vous êtes allés, et c’est là que toujours vous
                                        désirerez ardemment retourner.
                                    </p>
                                </div>
                                <footer class="mt-2 text-base font-medium text-gray-400">
                                    — Léonard de Vinci
                                </footer>
                            </blockquote>

                            <ul class="mt-10 text-base text-gray-300 space-y-2">
                                @foreach(config('marketing.fallen_epls') as $fallenEpl)
                                    <li class="flex items-center">
                                        <x-fas-dove class="w-4 h-4 mr-2 text-gray-500" aria-hidden="true" />
                                        {{ $fallenEpl['name'] }} – {{ $fallenEpl['promotion'] }} – {{ $fallenEpl['death'] }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- More main page content here... -->
            </main>
        </div>
    </x-slot>
</x-app-layout>
