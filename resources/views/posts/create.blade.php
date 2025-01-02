 @extends('layouts.app')

 @section('content')
 <div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="card overflow-hidden shadow-sm sm:rounded-lg">
             <div class="card-header">
                 <h4 class="card-title">Add Post</h4>
             </div>
             <div class="card-body">
                 <form action="{{route('posts.store')}}" method="post">
                    @csrf
                     <div class="mb-6">
                         <label for="title" class="label">Title</label>
                         <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title" >
                     </div>
                     <div class="mb-6">
                         <label for="category" class="label">Category</label>
                         <input type="text" id="category" class="form-control" name="category" placeholder="Enter Category" >
                     </div>
                     <div class="mb-6">
                         <label for="description" class="label">Description</label>
                         <input type="text" id="description" name="description" class="form-control" placeholder="Enter Description">
                     </div>
                     <button type="submit" class="btn bg-blue-500 text-white hover:bg-blue-600">Add</button>
                 </form>
             </div><!--end card-body-->
         </div>
     </div><!--end card-->
 </div>
 @endsection