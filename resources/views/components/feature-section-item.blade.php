<div class="relative">
    <dt>
        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-2xl text-white font-bold">
            {{ $icon }}
        </div>
        <div class="ml-16 flex items-center justify-between">
            <p class="text-lg leading-6 font-medium text-gray-900">
                {{ $title }}
            </p>
            @isset($badge)
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                    {{ $badge }}
                </span>
            @endisset
        </div>
    </dt>
    <dd class="mt-2 ml-16 text-base text-gray-500">
        {{ $description }}
    </dd>
</div>
