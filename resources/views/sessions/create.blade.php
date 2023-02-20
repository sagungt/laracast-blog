<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 p-6 rounded-xl">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Log In</h1>
                <form action="/sessions" method="post" class="mt-10">
                    @csrf
                    <x-form.input name="email" type="email" autocomplete="username" />
                    <x-form.input name="password" type="password" autocomplete="new-password" />
    
                    <div class="mt-6">
                        <x-form.button>Log In</x-form.button>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>