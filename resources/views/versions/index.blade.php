@extends('layouts.app')

@section('content')
<div class="container  mx-auto px-2">
    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Versions</h1>
                            <ol class="list-reset flex text-sm">
                                <li><a href="{{ route('home') }}" class="text-gray-500">Home</a></li>
                                <li><span class="text-gray-500 mx-2">/</span></li>
                                <li class="text-gray-500">Versions</li>
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
            <h4 class="card-title">Manage Versions</h4>
        </div>
        <div class="card-body">
            <div class="relative overflow-x-auto">
                @if ($data->isEmpty())
                    <p>No version available</p>
                @else
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="datatable_1">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    Version
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Release Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Notification/Summary
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Downloads
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                                <tr
                                    class="bg-white  dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-slate-700/50">
                                    <td class="w-4 p-4">
                                        {{ $dt->version }}
                                    </td>
                                    <td class="w-4 p-4">
                                        {{ $dt->release_date }}
                                    </td>
                                    <td class="w-4 p-4">
                                        {{ $dt->summary }}
                                    </td>
                                    <td class="w-4 p-4">
                                        @if ($dt->status == true)
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                                published
                                            </span>
                                        @else
                                            <span
                                                class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-300 dark:text-white">
                                                not-published
                                            </span>
                                        @endif
                                    </td>
                                    <td class="w-4 p-4">
                                        <span
                                            class="bg-indigo-100 text-indigo-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-indigo-200 dark:text-indigo-900">
                                            0 downloads
                                        </span>
                                    </td>
                                    <td class="w-4 p-4">
                                        <div class="relative inline-block">
                                            <button class="menu-button w-10 h-10 text-gray-700 hover:text-gray-900"
                                                data-id="{{ $dt->id }}">
                                                <i class="ti ti-menu-2"></i>
                                            </button>

                                            <div id="dropdown-{{ $dt->id }}"
                                                class="dropdown-menu hidden text-sm text-left fixed z-50 bg-white border border-gray-200 rounded-md shadow-lg">
                                                <a href="#"
                                                    class="block px-4 py-2  text-gray-700 hover:bg-blue-50 hover:text-blue-600">Unpublish</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Download
                                                    SQL file</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Edit</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dropdownButtons = document.querySelectorAll('.menu-button');

            function toggleDropdown(button) {
                const id = button.getAttribute('data-id');
                const dropdown = document.getElementById(`dropdown-${id}`);
                const isHidden = dropdown.classList.contains('hidden');

                // Hide all dropdowns first
                document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.add('hidden'));

                if (isHidden) {
                    const rect = button.getBoundingClientRect(); // Get button's position
                    dropdown.style.top = `${rect.bottom + window.scrollY}px`;
                    dropdown.style.left = `${rect.left + window.scrollX}px`;
                    dropdown.classList.remove('hidden');
                }
            }

            dropdownButtons.forEach(button => {
                button.addEventListener('click', (event) => {
                    event.stopPropagation(); // Prevent propagation
                    toggleDropdown(button);
                });
            });

            document.addEventListener('click', () => {
                document.querySelectorAll('.dropdown-menu').forEach(menu => menu.classList.add('hidden'));
            });
        });
    </script>
@endsection
