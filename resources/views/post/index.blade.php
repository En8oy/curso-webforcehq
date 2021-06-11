<x-layout>
    <x-slot name="content">
        <main class="mx-auto mt-6 lg:mt-2">
            @if (count($posts) >= 1)
                <x-post :post="$posts[0]"></x-post>
            @endIf
            <div class="lg:grid lg:grid-cols-2">
                @foreach ($posts->skip(1) as $post)
                    <x-post :post="$post">
                    </x-post>
                @endforeach
            </div>
        </main>
        {{ $posts->links() }}
    </x-slot>
</x-layout>
