@props(['align' => 'left', 'flyoutClasses' => 'max-w-xs'])

@php
    switch ($align) {
        case 'left':
            $alignmentClasses = '-ml-4';
            break;
        case 'center':
            $alignmentClasses = 'left-1/2 -translate-x-1/2';
            break;
        case 'right':
        default:
            $alignmentClasses = 'right-0 -mr-4';
            break;
    }
@endphp

<div
    class="relative"
    x-data="{ open: false }"
    @click.away="open = false"
    @close.stop="open = false"
>
    <button
        type="button"
        @click="open = ! open"
        class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        :class="{'text-gray-900': open, 'text-gray-500': ! open }"
        :aria-expanded="open.toString()"
    >
        {{ $trigger }}

        <x-heroicon-s-chevron-down
            class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
            ::class="{'text-gray-600': open, 'text-gray-400': ! open }"
        />
    </button>

    <div
        class="absolute z-10 {{ $alignmentClasses }} mt-3 w-screen {{ $flyoutClasses }} px-2 sm:px-0"
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-1"
        style="display: none;"
        @click="open = false"
    >
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
            {{ $slot }}
        </div>
    </div>
</div>
