@extends('layouts.app')

@section('content')
<div class="max-w-full mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden p-4 shadow-sm sm:rounded-lg">
        <div class="card h-full min-w-full">
            <div class="card-header">
                <h4 class="card-title">Items</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <!-- Responsive wrapper for the table -->
                <div class="relative overflow-x-auto">

                    @if ($data->isEmpty())
                    <p>No versions available</p>
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
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">@if ($dt->status==true)
                                    <span class="bg-green-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-xl dark:bg-green-300 dark:text-white">
                                        published
                                    </span>
                                    @else
                                    <span class="bg-red-500 text-white text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-300 dark:text-white">
                                        not-published
                                    </span>
                                    @endif
                                </td>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">0 Download</td>
                                <td class="text-center py-2 px-3 bg-white border-b">
                                    <a href="#" class="text-blue-500 hover:underline">Edit</a> |
                                    <a href="#" class="text-red-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif

                </div>
            </div>
            <div class="mt-4">
                {{-- {{ $data->links() }} --}}
            </div>
        </div>
    </div>
</div>
@endsection