@extends('layouts.app')

@section('content')
<div class="container  mx-auto px-2">
    <div class="flex flex-wrap">
        <div class="flex items-center py-4 w-full">
            <div class="w-full">
                <div class="">
                    <div class="flex flex-wrap justify-between">
                        <div class="items-center ">
                            <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Purchase Code</h1>
                            <ol class="list-reset flex text-sm">
                                <li><a href="{{ route('home') }}" class="text-gray-500">Home</a></li>
                                <li><span class="text-gray-500 mx-2">/</span></li>
                                <li class="text-gray-500">Purchase Code</li>
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
                                Purchase Code
                                </t>
                            <th scope="col" class="px-6 py-3">
                                I.Version
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Buyer
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Activated Domain
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Last Validate Request
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
                                    {{ $data->firstItem() + $loop->index }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dt->item_id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dt->item_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dt->purchase_code }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($dt->installed_version == 0)
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $dt->installed_version }}
                                        </span>
                                    @else
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">{{ $dt->installed_version }}
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dt->buyer }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dt->activated_domain }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $dt->last_validate_request }}
                                </td>
                                <td class="px-6 py-4 flex space-x-2 justify-between">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="#"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="m-4 ">
                {{ $data->links() }}
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
