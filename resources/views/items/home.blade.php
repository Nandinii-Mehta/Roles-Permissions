@extends('layouts.app')

@section('content')
    <div class="container  mx-auto px-2">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Dashboard</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="{{url('/home')}}" class="text-gray-500">Home</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Items</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->
    
    <div class="card">
        {{-- <h4 class="card-title"></h4> --}}
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                <div
                    class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                    <div class="flex justify-between xl:gap-x-2 items-center">
                        <div class="absolute text-blue-500 p-3 text-center inline-flex items-center justify-center  ">
                            <i class="ti ti-database dark:text-slate-300 group-hover:text-blue-400 text-5xl "></i>
                        </div>
                        <div class="self-center ml-auto">
                            <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $items->count() }}</h3>
                            <p class="text-gray-400 mb-0 font-medium">Products</p>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                <div
                    class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                    <div class="flex justify-between xl:gap-x-2 items-center">
                        <div
                            class="absolute text-blue-500 p-6 text-center inline-flex items-center justify-center text-4xl ">
                            <i class="fas fa-key dark:text-slate-300 group-hover:text-blue-400"></i>
                        </div>
                        <div class="self-center ml-auto">
                            <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $license->count() }}</h3>
                            <p class="text-gray-400 mb-0 font-medium">Licenses</p>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                <div
                    class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                    <div class="flex justify-between xl:gap-x-2 items-center">
                        <div class="absolute  text-blue-500 p-3 text-center inline-flex items-center justify-center ">
                            <i class="far fa-id-card dark:text-slate-300 group-hover:text-blue-400 text-4xl"></i>
                        </div>
                        <div class="self-center ml-auto">
                            <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">{{ $val_lic->count() }}</h3>
                            <p class="text-gray-400 mb-0 font-medium">Validate License</p>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="md:col-span-2 lg:col-span-2 xl:col-span-1">
                <div
                    class="bg-white dark:bg-slate-800 shadow  rounded-md w-full p-4 relative overflow-hidden bg-[url('../images/widgets/p-1.png')] bg-no-repeat bg-contain">
                    <div class="flex justify-between xl:gap-x-2 items-center">
                        <div
                            class="absolute  text-blue-500 p-3 text-center inline-flex items-center justify-center w-32 h-32 ">
                            <i class="fas fa-download dark:text-slate-300 group-hover:text-blue-400 text-4xl"></i>
                        </div>
                        <div class="self-center ml-auto">
                            <h3 class="my-1 font-semibold text-2xl dark:text-slate-200">12</h3>
                            <p class="text-gray-400 mb-0 font-medium">Downloads</p>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
        </div>



        <div class="grid grid-cols-1 md:grid-cols-12 gap-4  mb-4">
            @foreach ($items as $item)
                <div class="md:col-span-6 lg:col-span-6 xl:col-span-3  ">
                    <div
                        class="h-full bg-white dark:bg-slate-800 shadow rounded-md w-full p-4 relative overflow-hidden grid md:gap-4 lg:gap-2 xl:gap-4 md:grid-cols-1 lg:grid-cols-4">

                        <div class="md:col-span-4 lg:col-span-4 xl:col-span-4 self-center">
                            <div class="w-full h-36 rounded-md bg-gray-500 text-center text-wrap text-xs">
                                <p class="text-white font-semibold p-3">{{ $item->item_name }}</p>
                            </div>
                            <img src="{{ $item->image_thumbnail_link }}" alt=""
                                class="p-1 mb-2 mx-auto rounded-full h-32 -mt-20">
                            <div class="grid grid-cols-6 my-3 border border-dashed rounded-md dark:border-slate-700">
                                <div class="col-span-2 border-r border-dashed border-slate-300 dark:border-slate-700">
                                    <div
                                        class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">

                                        <h6 class="text-lg font-medium text-slate-700 dark:text-slate-400">
                                            {{ $item->license_update }}</h6>
                                        <p class="text-xs text-slate-400">License</p>
                                    </div>
                                </div>
                                <div class="col-span-2 border-r border-dashed border-slate-300 dark:border-slate-700">
                                    <div
                                        class="text-center text-slate-400 text-base md:text-base lg:text-sm xl:text-base font-medium py-3">
                                        <h6 class="text-md font-medium dark:text-slate-400">
                                            @if (empty($item->version))
                                                <p class=" text-red-500">no-version</p>
                                            @else
                                                <p class="text-blue-500"> {{ $item->version }}</p>
                                            @endif
                                        </h6>
                                        <p class="text-xs text-green-500">Latest Version</p>
                                    </div>
                                </div>
                                <div class="col-span-2 text-center py-2 self-center">
                                    <h6 class="text-lg font-medium text-slate-700 dark:text-slate-400">
                                        1</h6>
                                    <p class="text-xs text-slate-400 font-medium">Validate</p>

                                </div>
                            </div>
                        </div>
                    </div> <!--end inner-grid-->
                </div>
            @endforeach
        </div><!--end card-->
    </div>
@endsection
