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
            <a href="{{route('roles.index')}}" class="bg-red-500 px-3 mb-2 py-2 text-sm text-white inline-block rounded hover:bg-red-800 hover:text-white">
                Back
            </a>

            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Role : {{$role->name}}</h4>
                </div><!--end card-header-->
                <div class="card-body">

                    <form action="{{route('roles.give-permissions.update',$role->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-6">
                            @error('permission')
                            <span classs="font-medium text-red-500">{{$message}}</span>
                            @enderror

                            <label for="name" class="label">Permissions</label>

                            @foreach ($permissions as $permission)
                            <ul class="list-inside">
                                <li class="mb-1 text-slate-700 dark:text-slate-400">
                                    <input type="checkbox" name="permission[]" class="custom w-5 h-5 text-blue-600 rounded border-gray-300 -mt-1 focus:ring-transparent dark:border-gray-600"
                                        value="{{$permission->name}}"
                                        {{--This checks if the $permission->id exists in the $rolePermissions array.--}}
                                        {{in_array($permission->id,$rolePermissions) ? 'checked':''}}>

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
    </div>
</div>
@endsection