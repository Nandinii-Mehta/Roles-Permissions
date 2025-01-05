@extends('layouts.app')

@section('content')
    <div class="container  mx-auto px-2">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Permissions</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="{{ route('home') }}" class="text-gray-500">Home</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Permissions</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li><a href="{{ route('permissions.index') }}" class="text-gray-500">Index</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Edit</li>
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
            <h4 class="card-title">Edit Permission</h4>
            <button type="button"
                class="px-3 py-2 text-xs font-medium text-center text-white bg-red-500 rounded hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300">
                <a href="{{ route('permissions.index') }}">Back</a>
            </button>
        </div>
        <div class="card-body">
            <form action="{{ route('permissions.update', $permission->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-6">
                    <label for="name" class="label">Permission Name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $permission->name }}"
                        placeholder="Enter Permission Name">
                </div>
                <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Update</button>
            </form>
        </div><!--end card-body-->
    </div> <!--end card-->
@endsection
