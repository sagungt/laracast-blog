<x-layout>
    <x-setting heading="Publish New Post">
        <form action="/admin/posts/create" method="post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />

            <x-form.field>
                <x-form.label name="category" />
                <select name="category_id" id="category" class="w-full px-2 py-2 border border-gray-200 rounded-xl bg-white">
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>
                <x-form.error name="category" />
            </x-form.field>

            <div class="mt-6 flex justify-end">
                <x-form.button>Publish</x-form.button>
            </div>
        </form>
    </x-setting>
</x-layout>