<x-layout>
    <x-slot name="content">
        <h1 class="text-center my-10 text-4xl font-bold">
            {{$user->name}} - {{'@'.$user->username}}
        </h1>
        @if (count($user->posts) >= 1)
            <x-post :post="$user->posts[0]"></x-post>
        @endIf
        <div class="lg:grid lg:grid-cols-2">
            @foreach ($user->posts->skip(1) as $post)
                <x-post :post="$post">
                </x-post>
            @endforeach
        </div>
    </x-slot>
</x-layout>