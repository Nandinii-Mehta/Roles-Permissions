@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <a href="{{route('posts.create')}}" class="border border-gray-500 px-3 mb-2 py-2 text-sm text-gray-700 inline-block rounded hover:bg-gray-500 hover:text-white">
                Add Post
            </a>
           
            <div class="card h-full">
                <div class="card-header">
                    <h4 class="card-title">Manage Posts</h4>
                </div><!--end card-header-->
                <div class="card-body">
                    <div class="relative overflow-x-auto  sm:rounded">
                        <table class="table-auto w-full">
                            <thead>
                                <tr class=" bg-gray-800 text-center">
                                    <th class="text-sm font-medium text-white px-3 py-3 border-l border-transparent">
                                        ID
                                    </th>
                                    <th class="text-sm font-medium text-white px-3 py-3">
                                        Title
                                    </th>
                                    <th class="text-sm font-medium text-white px-3 py-3">
                                        Category
                                    </th>
                                    <th class="text-sm font-medium text-white px-3 py-3">
                                        Description
                                    </th>
                                    <th class="text-sm font-medium text-white px-3 py-3 border-r border-transparent">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-l border-[#E8E8E8] dark:border-slate-900">
                                        {{$post->id }}
                                    </td>
                                    <td class="text-center text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                        {{ $post->title}}
                                    </td>
                                    <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                        {{ $post->category}}
                                    </td>
                                    <td class="text-center text-dark py-2 px-3 bg-slate-50 dark:bg-slate-900/20 dark:text-slate-300 border-b border-[#E8E8E8] dark:border-slate-900">
                                        {{ $post->description}}
                                    </td>
                                    <td class="text-center justify-center flex space-x-3 text-dark py-2 px-3 bg-white dark:bg-slate-700 dark:text-slate-300 border-b border-r border-[#E8E8E8] dark:border-slate-900">
                                        <a href="{{route('posts.edit',$post->id)}}" class="border border-gray-500 px-3 py-2 text-sm text-gray-500 inline-block rounded hover:bg-gray-500 hover:text-white">
                                            Edit
                                        </a>
                                        <form method="post" action="{{route('posts.destroy',$post->id)}}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">
                                                <a href="javascript:void(0)" class="border border-red-500 px-3 py-2 text-sm text-red-500 inline-block rounded hover:bg-red-500 hover:text-white">
                                                    Delete
                                                </a>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div>
    </div>
</div>
@endsection