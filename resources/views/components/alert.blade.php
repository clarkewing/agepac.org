@props(['type' => 'success'])

@php
    $icon = 'heroicon-s-' . match ($type) {
        'info' => 'information-circle',
        'success' => 'check-circle',
        'warning' => 'exclamation',
        'danger' => 'exclamation-circle',
        'error' => 'x-circle',
    };

    $color = match ($type) {
        'info' => 'blue',
        'success' => 'green',
        'warning' => 'yellow',
        'danger' => 'red',
        'error' => 'red',
    };
@endphp

<div {{ $attributes->merge(['class' => "rounded-md bg-$color-50 p-4"]) }}>
    <div class="flex">
        <div class="flex-shrink-0">
            <x-dynamic-component :component="$icon" class="h-5 w-5 text-{{ $color }}-400" />
        </div>
        <div class="ml-3 flex-1 md:flex md:justify-between">
            <div class="space-y-2">
                @isset($header)
                    <h3 class="text-sm font-medium text-{{ $color }}-800">
                        {{ $header }}
                    </h3>
                @endisset
                <p class="text-sm text-{{ $color }}-700">
                    {{ $slot }}
                </p>
            </div>
        </div>
    </div>
</div>
