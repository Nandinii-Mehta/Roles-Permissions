@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <a href="{{route('items.index')}}" class="bg-red-500 px-3 mb-2 py-2 text-sm text-white inline-block rounded hover:bg-red-800 hover:text-white">
                Back
            </a>
            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Add Item</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('posts.store')}}" method="post">
                        @csrf
                        <div class="mb-6">
                            <label for="item_id" class="label">Item Id</label>
                            <input type="number" id="item_id" name="item_id" class="form-control" placeholder="Enter Item-Id">
                        </div>
                        <div class="mb-6">
                            <label for="item_name" class="label">Item Name</label>
                            <input type="text" id="item_name" class="form-control" name="item_name" placeholder="Enter Item Name">
                        </div>
                        <div class="mb-6">
                            <label for="version" class="label">Version</label>
                            <input type="text" id="version" name="version" class="form-control" placeholder="Enter Version">
                        </div>
                        <div class="mb-6">
                            <label for="category" class="label">Category</label>
                            <input type="text" id="category" name="category" class="form-control" placeholder="Enter Category">
                        </div>
                        <div class="mb-6">
                            <label for="color" class="label">Color</label>
                            <input type="text" id="color" name="color" class="form-control" placeholder="Enter Color">
                        </div>
                        <div class="mb-6">
                            <label for="image_thumbnail_link" class="label">Image Thumbnail Link</label>
                            <input type="text" id="image_thumbnail_link" name="image_thumbnail_link" class="form-control" placeholder="Enter Description">
                        </div>
                        <div class="mb-6">
                            <label for="license_update" class="label">License Update</label>
                            <input type="number" id="license_update" name="license_update" class="form-control" placeholder="Enter License Update">
                        </div>
                        <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Add</button>
                    </form>
                </div><!--end card-body-->
            </div>
        </div><!--end card-->
    </div>
</div>
@endsection
