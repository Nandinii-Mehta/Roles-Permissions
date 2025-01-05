@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header flex items-center justify-between">
            {{-- <h4 class="card-title"></h4> --}}
        </div>
        <div class="card-body">
            <form action="{{ route('items.store') }}" method="post">
                @csrf
                <div class="mb-6">
                    <label for="item_id" class="label">Item Id</label>
                    <input type="number" id="item_id" name="item_id" class="form-control" placeholder="Enter Item-Id">
                </div>
                <div class="mb-6">
                    <label for="item_name" class="label">Item Name</label>
                    <input type="text" id="item_name" class="form-control" name="item_name"
                        placeholder="Enter Item Name">
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
                    <input type="color" id="color" name="color" value="#ff0000" placeholder="Enter Color">
                </div>
                <div class="mb-6">
                    <label for="image_thumbnail_link" class="label">Image Thumbnail Link</label>
                    <input type="text" id="image_thumbnail_link" name="image_thumbnail_link" class="form-control"
                        placeholder="Enter Image Thumbnail Link">
                </div>
                <div class="mb-6">
                    <label for="license_update" class="label">License Update</label>
                    <input type="number" id="license_update" name="license_update" class="form-control"
                        placeholder="Enter License Update">
                </div>
                <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Add</button>
            </form>
        </div><!--end card-body-->
    </div><!--end card-->
@endsection
