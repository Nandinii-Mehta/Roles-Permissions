<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.header')
</head>

<body data-layout-mode="light"
    class="bg-gray-100 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">
    <div class="min-h-screen">
        @include('layouts.navigation')


        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <div class="px-2 min-h-[calc(100vh-138px)]  mt-4">
            <div class="grid lg:grid-cols-12 gap-4">
                @can('view-dashboard')
                    <div class="col-span-10 lg:col-span-2 mb-4 min-h-[60.5rem]">
                        @include('layouts.sidebar')
                    </div>
                    <div class="col-span-10">
                        @yield('content')
                    </div>
                @else
                    <div class="col-span-12">
                        @yield('content')
                    </div>
                @endcan
            </div>
        </div>

        <!-- footer -->
        @include('layouts.footer')

</body>

</html>
