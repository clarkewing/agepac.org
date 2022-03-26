<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if($attributes->has('title'))
            <title>{{ $attributes->get('title') . ' | AGEPAC' }}</title>
        @else
            <title>AGEPAC – The ENAC Pilot Association</title>
        @endif

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @if($header->attributes->has('raw'))
                <header {{ $header->attributes->merge(['class' => 'bg-white']) }}>
                    {{ $header }}
                </header>
            @elseif($header->attributes->has('backdrop'))
                <header class="relative pb-24 bg-wedgewood sm:pb-32">
                    <div class="absolute inset-0">
                        <img
                            class="w-full h-full object-cover saturate-0"
                            src="{{ $header->attributes->get('backdrop') }}"
                            alt="{{ $header->attributes->get('alt') }}"
                        />
                        <div class="absolute inset-0 bg-gradient-to-l from-wedgewood to-cyan-700 mix-blend-multiply" aria-hidden="true"></div>
                    </div>

                    <!-- Navigation bar -->
                    <x-navbar overlay />

                    <!-- Page Heading -->
                    <div class="relative mt-24 max-w-md mx-auto px-4 sm:max-w-3xl sm:mt-32 sm:px-6 lg:max-w-7xl lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @else
                <header class="bg-white">
                    <!-- Navigation bar -->
                    <x-navbar />

                    <!-- Page Heading -->
                    <div {{ $header->attributes->merge(['class' => 'max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8']) }}>
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main {{ $attributes }}>
                {{ $slot }}
            </main>

            <x-footer />
        </div>
    </body>
</html>
