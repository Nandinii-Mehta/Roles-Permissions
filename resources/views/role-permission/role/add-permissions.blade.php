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
                                <li class="text-blue-600 hover:text-blue-700">Add-Edit Permission</li>
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
            @if (session('status'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                    role="alert">
                    <span class="font-medium">{{ session('status') }}</span>
                </div>
            @endif
            <h4 class="card-title">Role : {{ $role->name }}</h4>
            <button type="button"
                class="px-3 py-2 text-xs font-medium text-center text-white bg-red-500 rounded hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300">
                <a href="{{ route('roles.index') }}">Back</a>
            </button>
        </div><!--end card-header-->
        <div class="card-body">
            <div class="relative overflow-x-auto">
                <form action="{{ route('roles.give-permissions.update', $role->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-6">
                        @error('permission')
                            <span classs="font-medium text-red-500">{{ $message }}</span>
                        @enderror

                        <label for="name" class="label">Permissions</label>

                        @foreach ($permissions as $permission)
                            <ul class="list-inside">
                                <li class="mb-1 text-slate-700 dark:text-slate-400">
                                    <input type="checkbox" name="permission[]"
                                        class="custom w-5 h-5 text-blue-600 rounded border-gray-300 -mt-1 focus:ring-transparent dark:border-gray-600"
                                        value="{{ $permission->name }}" {{-- This checks if the $permission->id exists in the $rolePermissions array. --}}
                                        {{ in_array($permission->id, $rolePermissions) ? 'checked' : '' }}>

                                    {{ $permission->name }}
                                </li>
                            </ul>
                        @endforeach

                    </div>
                    <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Update</button>
                </form>
            </div><!--end card-body-->
        </div> <!--end card-->
    </div>
@endsection
