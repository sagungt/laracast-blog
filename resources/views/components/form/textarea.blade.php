@props(['name', 'placeholder' => ''])

<x-form.field>
    <x-form.label :name="$name" />

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="4"
        class="border border-gray-200 w-full text-sm focus:outline-none focus:ring rounded"
        placeholder="{{ $placeholder }}"
        required>{{ $slot ?? old($name) }}</textarea>

    <x-form.error :name="$name" />
</x-form.field>