@extends('layouts.app')

@section('content')
    <div class="container  mx-auto px-2">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Roles</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="{{ route('home') }}" class="text-gray-500">Home</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Roles</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li><a href="{{ route('roles.index') }}" class="text-gray-500">Index</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Create</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
    <div class="card">
        <div class="card-header flex items-center  justify-between">
            <h4 class="card-title">Add Role</h4>
            <button type="button"
                class="px-3 py-2 text-xs font-medium text-center text-white bg-red-500 rounded hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                <a href="{{ route('roles.index') }}">Back</a>
            </button>
        </div>
        <div class="card-body">
            <div class="relative overflow-x-auto">
                <form action="{{ route('roles.store') }}" method="post">
                    @csrf
                    <div class="mb-6">
                        <label for="name" class="label">Role Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="Enter Role Name">
                    </div>
                    <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Save</button>
                </form>
            </div><!--end card-body-->
        </div> <!--end card-->
    </div>
@endsection
