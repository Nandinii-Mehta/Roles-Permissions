@extends('layouts.app')

@section('content')
<div>
    @if (session('status'))
    <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <span class="font-medium">{{session('status')}}</span>
    </div>
    @endif
    <div>
        <a href="{{route('permissions.create')}}" class="bg-blue-600 px-3 mb-2 py-2 text-sm text-white inline-block rounded hover:bg-blue-800 hover:text-white">
            Add Permission
        </a>

        <div class="card h-full">
            <div class="card-header">
                <h4 class="card-title">Manage Permissions</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <div class="relative overflow-x-auto sm:rounded">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class=" bg-gray-400 text-center">
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    ID
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3">
                                    Name
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-r border-transparent">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-l border-[#E8E8E8] dark:border-slate-900">
                                    {{$permission->id}}
                                </td>
                                <td class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                    {{$permission->name}}
                                </td>
                                <td class="flex space-x-2 justify-center text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                    <a href="{{route('permissions.edit',$permission->id)}}" class="border border-green-700 px-3 py-2 text-sm text-green-700 inline-block rounded hover:bg-green-800 hover:text-white">
                                        Edit
                                    </a>
                                    <form method="post" action="{{route('permissions.destroy',$permission->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button class="border border-red-500 px-3 py-2 text-sm text-red-500 inline-block rounded hover:bg-red-500 hover:text-white" type="submit">

                                            Delete

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
    </div>
</div>

@endsection