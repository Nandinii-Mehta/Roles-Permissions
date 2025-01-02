@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"></div>
        @role('admin')
        <p class="font-medium p-3">Welcome, Admin!</p>
        @endrole
        @can('manage users')
        <div class="card h-full">
            <div class="card-header">
                <h4 class="card-title">Manage Users</h4>
            </div><!--end card-header-->
            <div class="card-body">
                <div class="relative overflow-x-auto  sm:rounded">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class=" bg-gray-800 text-center">
                                <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                    ID
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3">
                                    Name
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3">
                                    Email
                                </th>
                                <th class="text-sm font-medium text-white px-3 py-3 border-r border-transparent">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-l border-[#E8E8E8] dark:border-slate-900">
                                    {{$user->id }}
                                </td>
                                <td class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                    {{ $user->name}}
                                </td>
                                <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                    {{ $user->email}}
                                </td>
                                <td class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-r border-[#E8E8E8] dark:border-slate-900">
                                    <form method="post" action="{{route('user.delete',$user->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            <a href="javascript:void(0)" class="border border-red-500 px-3 py-2 text-sm text-red-500 inline-block rounded hover:bg-red-500 hover:text-white">
                                                Delete
                                            </a>
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
        @endrole
    </div>
</div>

@endsection