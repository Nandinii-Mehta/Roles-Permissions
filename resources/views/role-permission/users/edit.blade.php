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
                    <h4 class="card-title">Edit Users</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <form action="{{route('users.update',$user->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-6">
                            <label for="name" class="label">Name</label>
                            <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="mb-6">
                            <label for="email" class="label">Email</label>
                            <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Enter Email">
                        </div>
                        <!-- <div class="mb-6">
                            <label for="password" class="label">Password</label>
                            <input type="password" id="password" name="password"  value="{{$user->email}}" class="form-control" placeholder="Enter Password ">
                        </div> -->
                        <div class="mb-6">
                            <label for="role" class="label">Permission Name</label>
                            <select name="'roles[]"  value="{{$user->role}}" class="form-control">
                                @foreach ($roles as $role)
                                <option>{{$role}}</option>
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