<x-layout>
    <x-slot name="content">
        <h1 class="text-center my-10 text-4xl font-bold">
            Total Users : {{count($users)}}
        </h1>
        <div class="lg:grid lg:grid-cols-4 text-center p-10 m-10 ">
            @foreach ($users as $user)
            <div class="flex items-center my-10 transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl p-15">
                <img class="m-10" src="{{ asset('images/lary-avatar.svg') }}" alt="Lary avatar">
                <div class="ml-3">
                    <a href="/users/">
                        <h5 class="text-sm font-bold">{{$user->name}}</h5>
                        <h5 class="text-sm font-bold">{{$user->username}}</h5>
                        <h5 class="text-sm font-bold">Count Post: {{$user->posts_count}}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </x-slot>
</x-layout>
