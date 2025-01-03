@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden p-4 shadow-sm sm:rounded-lg">
            <div class="card h-full">
                <a href="{{ route('items.create') }}"
                    class="bg-blue-600 m-3 px-4 py-2 text-md text-white inline-block rounded hover:bg-blue-800">
                    + Add New Item
                </a>
                <div class="card-header">
                    <h4 class="card-title">Items</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="relative overflow-x-hidden">
                        <table class="table-auto min-w-full">
                            <thead>
                                <tr class="bg-gray-400 text-center">
                                    <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">#</th>
                                    <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Item ID
                                    </th>
                                    <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Item
                                        Name</th>
                                    <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Version
                                    </th>
                                    <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                        Category</th>
                                    <th class="text-sm font-medium text-white px-3 py-3 border-r border-transparent">Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td class="text-center py-2 px-3 bg-slate-50 border-b">{{ $item->id }}</td>
                                        <td class="text-center py-2 px-3 bg-white border-b">{{ $item->item_id }}</td>
                                        <td class="text-center py-2 px-3 bg-slate-50 border-b">{{ $item->item_name }}</td>
                                        <td class="text-center py-2 px-3 bg-slate-50 border-b">
                                            @if (empty($item->version))
                                                <p class=" text-gray-500">no-version</p>
                                            @else
                                                {{ $item->version }}
                                            @endif
                                        </td>
                                        <td class="text-center py-2 px-3 bg-slate-50 border-b">{{ $item->category }}</td>
                                        <td class="text-center py-2 px-3 bg-white border-b">
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
                                                    <a href="{{ route('version.index', ['item_id' => $item->item_id]) }}"
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
                </div>
                <div class="mt-4">
                    {{ $items->links() }}
                </div>
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
