@extends('layouts.app')

@section('content')
    <div class="container  mx-auto px-2">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Users</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="{{ route('home') }}" class="text-gray-500">Home</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Users</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Index</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
    <div class="card">
        <div class="card-header flex items-center justify-between">
            <div class="card-title">User Details</div>
            <div class="">
                <button type="button"
                    class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-500 rounded hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                    <a href="{{ route('users.create') }}"> Add User</a>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="datatable_1">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <label class="custom-label">
                                    ID
                                </label>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Roles
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr
                                class="bg-white  dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-slate-700/50">
                                <td class="w-4 p-4">
                                    {{ $user->id }}
                                </td>
                                <td class="px-6 py-4">

                                    {{ $user->name }}
                                </td>
                                <td class="px-6 py-4">

                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4">
                                    @foreach ($user->roles as $role)
                                        <span>{{ $role->name }}</span><br>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 text-right flex space-x-2">
                                    <a href="{{ route('users.edit', $user->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                        Edit
                                    </a>
                                    <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            <a class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                                Delete
                                            </a>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div><!--end card-body-->
    </div> <!--end card-->
@endsection
