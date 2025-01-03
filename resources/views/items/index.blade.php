@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
        <div class="card h-full">
            <a href="{{route('posts.create')}}" class="bg-blue-600 m-3 px-3 mb-2 py-2 text-md text-white inline-block rounded hover:bg-blue-800 hover:text-white">
                +Add New Item
            </a>
            <div class="card-header">

                <h4 class="card-title">Items</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <div class="justify-items-center relative overflow-x-auto sm:rounded">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class=" bg-gray-400 text-center">
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    #
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    Item ID
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3  border-l border-transparent">
                                    Item Name
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3  border-l border-transparent">
                                    Version
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3  border-l border-transparent">
                                    Category
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-r border-transparent">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-l border-[#E8E8E8] dark:border-slate-900">
                                    {{ $item->id }}
                                </td>
                                <td class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                    {{ $item->item_id }}
                                </td>
                                <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                    {{ $item->item_name }}
                                </td>
                                <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                    @empty( $item->version)
                                    <p>no-versions</p>
                                    @endempty
                                    {{ $item->version }}
                                </td>
                                <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                    {{ $item->category }}
                                </td>
                                <td class="text-center justify-center  text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-r border-[#E8E8E8] dark:border-slate-900">
                                    <div class="sm:col-span-12  md:col-span-6 lg:col-span-3 xl:col-span-3 dark:text-slate-400 group text-center">
                                        <i class="ti ti-menu-2 dark:text-slate-300 group-hover:text-blue-400"></i>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $items->links() }}
        </div>
    </div>
</div>

@endsection