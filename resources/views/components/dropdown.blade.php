@props(['trigger'])

<div x-data="{ show: false }" x-on:click.away="show = false" class="relative">
    {{-- Trigger --}}
    <div x-on:click="show = !show">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" x-transition class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-32 z-50 max-h-52 overflow-auto" style="display: none;">
        {{ $slot }}
    </div>
</div>