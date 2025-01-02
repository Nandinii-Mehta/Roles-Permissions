@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('status'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <span class="font-medium">{{session('status')}}</span>
        </div>
        @endif
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <a href="{{route('roles.create')}}" class="bg-gray-500 px-3 mb-2 py-2 text-sm text-white inline-block rounded hover:bg-gray-800 hover:text-white">
                Add Role
            </a>

            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Manage Roles</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="justify-items-center relative overflow-x-auto sm:rounded">
                        <table class="table-auto w-2/3 ">
                            <thead>
                                <tr class=" bg-gray-800 text-center">
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
                                @foreach ($roles as $role)
                                <tr>
                                    <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-l border-[#E8E8E8] dark:border-slate-900">
                                        {{$role->id}}
                                    </td>
                                    <td class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                        {{$role->name}}
                                    </td>
                                    <td class="flex space-x-2 justify-center text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                        <a href="{{route('roles.give-permissions',$role->id)}}" class="border border-gray-500 px-3 py-2 text-sm text-gray-500 inline-block rounded hover:bg-gray-500 hover:text-white">
                                            Add / Edit Role-Permission
                                        </a>
                                        <a href="{{route('roles.edit',$role->id)}}" class="border border-gray-500 px-3 py-2 text-sm text-gray-500 inline-block rounded hover:bg-gray-500 hover:text-white">
                                            Edit
                                        </a>
                                        <form method="post" action="{{route('roles.destroy',$role->id)}}">
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
</div>
@endsection