@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <a href="{{route('users.index')}}" class="bg-red-500 px-3 mb-2 py-2 text-sm text-white inline-block rounded hover:bg-red-800 hover:text-white">
                Back
            </a>

            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Create Users</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('users.store')}}" method="post">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="label">Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="mb-6">
                            <label for="password" class="label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password ">
                        </div>
                        <div class="mb-6">
                            <label for="role" class="label">Role Name</label>
                            <select name="'role[]" class="form-control">
                                @foreach ($roles as $role)
                                <option value="{{$role}}">{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Save</button>
                    </form>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div>
    </div>
</div>
@endsection