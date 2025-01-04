@extends('layouts.app')

@section('content')
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="datatable_1">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="p-4">
                        <label class="custom-label">
                            #
                        </label>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Item ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Item Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Version
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-slate-700/50">
                        <td class="w-4 p-4">
                            {{ $item->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->item_id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->item_name }}
                        </td>
                        <td class="px-6 py-4">
                            @if (empty($item->version))
                                <p class=" text-gray-500">no-version</p>
                            @else
                                {{ $item->version }}
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->category }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="relative inline-block">
                                <button class="menu-button w-10 h-10 text-gray-700 hover:text-gray-900"
                                    data-id="{{ $item->id }}">
                                    <i class="ti ti-menu-2"></i>
                                </button>

                                <div id="dropdown-{{ $item->id }}"
                                    class="dropdown-menu hidden fixed z-50 bg-white border border-gray-200 rounded-md shadow-lg">
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Add
                                        Version</a>
                                    <a href="{{ route('version.index', ['id' => $item->item_id]) }}"
                                        class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Manage
                                        Version</a>
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
