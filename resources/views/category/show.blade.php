<x-layout>
    <x-slot name="content">
        <h1 class="text-center my-10 text-4xl font-bold">
            {{$category->category}}
        </h1>
        <p class="text-center">
            {{$category->description}}
        </p>
        @if (count($category->posts) >= 1)
            <x-post :post="$category->posts[0]"></x-post>
        @endIf
        <div class="lg:grid lg:grid-cols-2">
            @foreach ($category->posts->skip(1) as $post)
                <x-post :post="$post">
                </x-post>
            @endforeach
        </div>
    </x-slot>
</x-layout>
