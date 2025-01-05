@extends('layouts.app')

@section('content')
    <div class="container  mx-auto px-2">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Index</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="{{ route('items.home') }}" class="text-gray-500">Home</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Items</li>
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
        <div class="card-header">
            <div class="card-title">Items Details</div>
        </div>
        <div class="card-body">
            <div class="relative">
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
                                class="bg-white  dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-slate-700/50">
                                <td class="w-4 p-4">
                                    {{ $items->firstItem() + $loop->index }}
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
                                <td class="px-6 py-4">
                                    <div class="relative inline-block">
                                        <button class="menu-button w-10 h-10 text-gray-700 hover:text-gray-900"
                                            data-id="{{ $item->id }}">
                                            <i class="ti ti-menu-2"></i>
                                        </button>

                                        <div id="dropdown-{{ $item->id }}"
                                            class="hidden bg-white border border-gray-200 dropdown-menu absolute left-auto right-2 rounded-md shadow-lg text-left text-nowrap text-xs z-50">
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
            {{ $items->links() }}
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
                    //dropdown.style.top = `${rect.bottom + window.scrollY}px`;
                    // dropdown.style.left = `${rect.left + window.scrollX}px`;
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
