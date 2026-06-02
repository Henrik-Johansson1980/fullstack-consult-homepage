@props([
    'sidebar' => false,
    'href' => route('dashboard'),
])

@if($sidebar)
    <a
        href="{{ $href }}"
        {{ $attributes->except(['wire:navigate'])->class(['h-10 flex items-center px-2']) }}
        @if($attributes->has('wire:navigate')) wire:navigate @endif
        data-flux-sidebar-brand
    >
        <span class="text-lg font-semibold tracking-tight text-zinc-900 dark:text-white">
            Henrik<span class="text-zinc-400 dark:text-zinc-500">.</span>
        </span>
    </a>
@else
    <a
        href="{{ $href }}"
        {{ $attributes->except(['wire:navigate'])->class(['h-10 flex items-center me-4']) }}
        @if($attributes->has('wire:navigate')) wire:navigate @endif
        data-flux-brand
    >
        <span class="text-lg font-semibold tracking-tight text-zinc-900 dark:text-white">
            Henrik<span class="text-zinc-400 dark:text-zinc-500">.</span>
        </span>
    </a>
@endif
