@extends('layouts.app')

@section('content')
    <div>
        <div>
            <a href="{{ route('posts.create') }}"
                class="bg-blue-600 px-3 mb-2 py-2 text-sm text-white inline-block rounded hover:bg-blue-800 hover:text-white">
                Add Post
            </a>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="datatable_1">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-slate-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <label class="custom-label">
                                    ID
                                </label>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-slate-700/50">
                                <td class="w-4 p-4">
                                    {{ $post->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->title }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->category }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->description }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="border border-green-700 px-3 py-2 text-sm text-green-700 inline-block rounded hover:bg-green-800 hover:text-white">
                                        Edit
                                    </a>
                                    <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            <a href="javascript:void(0)"
                                                class="border border-red-500 px-3 py-2 text-sm text-red-500 inline-block rounded hover:bg-red-500 hover:text-white">
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


