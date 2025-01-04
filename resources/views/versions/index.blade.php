@extends('layouts.app')

@section('content')
<div>
    <div>
        <div class="card h-full min-w-full">
            <div class="card-header">
                <h4 class="card-title">Items</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <div class="relative overflow-x-auto">
                    @if ($data->isEmpty())
                    <p>No version available</p>
                    @else
                    <table class="table-auto min-w-full">
                        <thead>
                            <tr class="bg-gray-400 text-center">
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    Version
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    Release Date
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    Notification/Summary
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    Status
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    Downloads
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                            <tr>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">{{ $dt->version }}</td>
                                <td class="text-center py-2 px-3 bg-white border-b">{{ $dt->release_date }}</td>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">{{ $dt->summary }}</td>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">
                                    @if ($dt->status==true)
                                    <span class="bg-green-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-xl dark:bg-green-300 dark:text-white">
                                        published
                                    </span>
                                    @else
                                    <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-xl dark:bg-red-300 dark:text-white">
                                        not-published
                                    </span>
                                    @endif
                                </td>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">
                                    <span class="bg-sky-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-xl dark:bg-sky-300 dark:text-white">
                                        0 downloads
                                    </span>
                                </td>
                                <td class="text-center py-2 px-3 bg-white border-b">
                                    <div class="relative inline-block">
                                        <button class="menu-button w-10 h-10 text-gray-700 hover:text-gray-900"
                                            data-id="{{ $dt->id }}">
                                            <i class="ti ti-menu-2"></i>
                                        </button>

                                        <div id="dropdown-{{ $dt->id }}"
                                            class="dropdown-menu hidden fixed z-50 bg-white border border-gray-200 rounded-md shadow-lg">
                                            <a href="#"
                                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Unpublish</a>
                                            <a href="#"
                                                class="block px-4 py-2 text-gray-700 hover:bg-blue-50 hover:text-blue-600">Download SQL file</a>
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