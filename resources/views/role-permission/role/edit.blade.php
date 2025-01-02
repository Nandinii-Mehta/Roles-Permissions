@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <a href="{{route('roles.index')}}" class="bg-red-500 px-3 mb-2 py-2 text-sm text-white inline-block rounded hover:bg-red-800 hover:text-white">
                Back
            </a>

            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Edit Role</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('roles.update',$role->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-6">
                            <label for="name" class="label">Role Name</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{$role->name}}" placeholder="Enter Role Name">
                        </div>
                        <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Update</button>
                    </form>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div>
    </div>
</div>
@endsection