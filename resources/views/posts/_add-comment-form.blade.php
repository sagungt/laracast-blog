@auth
    <x-panel>
        <form action="/posts/{{ $post->slug }}/comments" method="post">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/59?u={{ auth()->id() }}" alt="" width="60" height="60" class="rounded-full">

                <h1 class="ml-4">Want to participate?</h2>
            </header>

            <x-form.textarea name="body" placeholder="Quick, thing of something to say!" />

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <x-form.button>
                    Post
                </x-form.button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log In</a> to leave a comment.
    </p>
@endauth