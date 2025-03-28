@props(['author', 'photo', 'alt' => ''])

<div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
    <img
        class="absolute inset-0 h-full w-full object-cover object-top"
        src="{{ $photo }}"
        alt="{{ $alt }}"
    />
    <div class="absolute inset-0 bg-wedgewood-500 mix-blend-multiply opacity-60"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-cyan-700 opacity-90"></div>
    <div class="relative px-8">
        <blockquote class="mt-16">
            <div class="relative text-lg font-medium text-white md:flex-grow">
                <!-- Left quote icon -->
                <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-cyan-400 opacity-50" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                </svg>
                <p class="relative">{{ $slot }}</p>
            </div>

            <footer class="mt-4">
                <p class="text-base font-semibold text-cyan-200">{!! $author !!}</p>
            </footer>
        </blockquote>
    </div>
</div>
