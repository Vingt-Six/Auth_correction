<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
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
                                    name
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="{{ $loop->iteration % 2 == 0 ? 'bg-white' : 'bg-gray-100' }} border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $user->id }}</td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <form action="/user/update/{{ $user->id }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <select name="role_id" id="">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : ''}}>{{ $role->role }}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2426 16.3137L6 12.071L7.41421 10.6568L10.2426 13.4853L15.8995 7.8284L17.3137 9.24262L10.2426 16.3137Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M1 5C1 2.79086 2.79086 1 5 1H19C21.2091 1 23 2.79086 23 5V19C23 21.2091 21.2091 23 19 23H5C2.79086 23 1 21.2091 1 19V5ZM5 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3Z" fill="currentColor" /></svg></button>
                                        </form>
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <form action="/user/delete/{{ $user->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M17 5V4C17 2.89543 16.1046 2 15 2H9C7.89543 2 7 2.89543 7 4V5H4C3.44772 5 3 5.44772 3 6C3 6.55228 3.44772 7 4 7H5V18C5 19.6569 6.34315 21 8 21H16C17.6569 21 19 19.6569 19 18V7H20C20.5523 7 21 6.55228 21 6C21 5.44772 20.5523 5 20 5H17ZM15 4H9V5H15V4ZM17 7H7V18C7 18.5523 7.44772 19 8 19H16C16.5523 19 17 18.5523 17 18V7Z" fill="currentColor" /><path d="M9 9H11V17H9V9Z" fill="currentColor" /><path d="M13 9H15V17H13V9Z" fill="currentColor" /></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
