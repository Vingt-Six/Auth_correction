<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- component -->
    <div
        class="flex flex-col items-center justify-center space-y-6 bg-gray-100 px-4 sm:flex-row sm:space-x-6 sm:space-y-0">
        @foreach ($admins as $admin)
            <div
                class="w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-md duration-300 hover:scale-105 hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mt-8 h-16 w-16 text-green-400" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                <h1 class="mt-2 text-center text-2xl font-bold text-gray-500">
                    {{ $admin->name . ' ' . $admin->lastName }}</h1>
                <p class="my-4 text-center text-sm text-gray-500">{{ $admin->adress }}</p>
                <div class="space-x-4 bg-gray-100 py-4 text-center">
                    <button
                        class="inline-block rounded-md bg-red-500 px-10 py-2 font-semibold text-red-100 shadow-md duration-75 hover:bg-red-400">{{ $admin->age }}</button>
                    <button
                        class="inline-block rounded-md bg-green-500 px-6 py-2 font-semibold text-green-100 shadow-md duration-75 hover:bg-green-400">{{ $admin->role->role }}</button>
                </div>
                @if (Auth::user()->id != $admin->id)
                    <div class="space-x-4 bg-gray-100 py-4 text-center">
                        <form action="/user/delete/{{ $admin->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                            class="inline-block rounded-md bg-red-500 px-10 py-2 font-semibold text-red-100 shadow-md duration-75 hover:bg-red-400">Delete</button>
                        </form>
                        <a href="/user/show/{{ $admin->id }}"
                            class="inline-block rounded-md bg-green-500 px-6 py-2 font-semibold text-green-100 shadow-md duration-75 hover:bg-green-400">Show</a>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</x-app-layout>
