@extends('layouts.app')

@section('content')

<div class="max-w-full mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden p-4 shadow-sm sm:rounded-lg w-[calc(100%+8rem)]">
        <div class="card h-full min-w-full">
            <div class="card-header">
                <h4 class="card-title">Items</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <div class="justify-items-center relative overflow-x-auto sm:rounded">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-gray-400 text-center">
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">#</th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Item ID</th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Item Name</th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Purchase Code</th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">I.Version</th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Buyer</th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Activated Domain</th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Last Validate Request</th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dt)
                            <tr>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">{{ $dt->id }}</td>
                                <td class="text-center py-2 px-3 bg-white border-b">{{ $dt->item_id }}</td>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">{{ $dt->item_name }}</td>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">{{ $dt->purchase_code }}</td>
                                <td class="text-center py-2 px-3 bg-slate-50 border-b">
                                    <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $dt->installed_version }}</span>
                                </td>
                                <td class="text-center py-2 px-3 bg-white border-b">{{ $dt->buyer }}</td>
                                <td class="text-center py-2 px-3 bg-white border-b">{{ $dt->activated_domain }}</td>
                                <td class="text-center py-2 px-3 bg-white border-b">{{ $dt->last_validate_request }}</td>
                                <td class="text-center py-2 px-3 bg-white border-b">Edit|Delete</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection