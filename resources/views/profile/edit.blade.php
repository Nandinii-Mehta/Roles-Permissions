@extends('layouts.app')

@section('content')
<div class="justify-between">
    <div class="items-center text-center mb-4 mt-4">
        <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Profile</h1>
    </div>
</div>
<div class="container mx-auto px-2 min-h-[calc(100vh-138px)] relative pb-14 ">
    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 ">
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
            <div class="card shadow-none bg-transparent">
                <div class="card-body p-0">
                    <div class="h-40 relative p-4 rounded overflow-hidden">
                        <div class="absolute inset-0 h-40 rounded">
                            <img src="assets/images/widgets/pro-img.png" alt="" class="w-full">
                        </div>
                    </div>
                    <div class="text-center relative  -mt-20 z-10 p-4">
                        <div class="bg-white rounded-full border-4 border-white w-32 mx-auto">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="rounded-full inline-block">
                        </div>
                        <h4 class="font-bold text-xl text-slate-700 mb-0 dark:text-slate-200">{{Auth::user()->name}}</h4>
                        <p class="text-slate-400 text-sm font-semibold"></p>
                    </div>
                </div><!--end card-body-->
            </div> <!--end card-->
        </div><!--end col-->
    </div><!--end inner-grid-->


    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
            @include('profile.partials.update-profile-information-form')
            @include('profile.partials.delete-user-form')
        </div><!--end col-->

        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6  ">
            @include('profile.partials.update-password-form')
        </div><!--end grid-->
    </div>
</div>
@endsection