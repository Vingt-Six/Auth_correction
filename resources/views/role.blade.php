<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role') }}
        </h2>
    </x-slot>

    <!-- component -->
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full">
                        <thead class="bg-white border-b">
                            <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    #
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Role
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-white' : 'bg-emerald-300' }} border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $role->id }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $role->role }}
                                    </td>
                                    @if ($role->id != 1)
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <form action="/role/{{ $role->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="{{ $loop->iteration % 2 == 0 ? 'bg-emerald-300 text-white' : 'bg-white text-emerald-800' }}">Delete</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- component -->
    <div class="flex items-center justify-center p-12">
        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <form action="/role" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Role
                    </label>
                    <input type="text" name="role" id="name" placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div>
                    <button
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
