@include('layouts.header')

<!-- leftbar-tab-menu -->
<nav class="border-gray-200 bg-gray-900 px-2.5 py-2.5 shadow-sm dark:bg-slate-800 sm:px-4 block print:hidden">
    <div class="container mx-0 flex max-w-full flex-wrap items-center lg:mx-auto">
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="flex items-center outline-none">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" class="h-6" />
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="ml-2 hidden xl:block mt-1" />
            </a>
        </div>

        <div class="order-2 hidden w-full items-center justify-between md:order-1 md:ml-5 md:flex md:w-auto"
            id="mobile-menu-2">
            <ul
                class="font-body mt-4 flex flex-col font-medium md:mt-0 md:flex-row md:text-sm md:font-medium space-x-0 md:space-x-4 lg:space-x-6 xl:space-x-8 navbar">
                <li class="dropdown">
                    <button id="navDashboardLink" data-dropdown-toggle="navDashboard"
                        class="dropdown-toggle flex w-full items-center border-b border-gray-800 py-2 px-3 font-medium md:border-0 md:p-0">
                        <a class="block font-medium text-gray-400" href="{{route('home')}}"> Home </a>
                    </button>
                </li>
                @can('manage users')
                <li>
                    <a class="block font-medium text-gray-400" href="{{route('dashboard')}}">
                        Users
                    </a>
                </li>
                @endcan

                <li>
                    <a class="block font-medium text-gray-400" href="{{route('posts.index')}}">
                        Posts
                    </a>
                </li>
            </ul>
        </div>

        <div class="order-1 ml-auto flex items-center md:order-2">
            <div class="mr-2 lg:mr-0 dropdown relative">
                <button type="button"
                    class="dropdown-toggle flex items-center rounded-full text-sm focus:bg-none focus:ring-0 dark:focus:ring-0 md:mr-0"
                    id="user-profile" aria-expanded="false" data-dropdown-toggle="navUserdata">
                    <img class="h-8 w-8 rounded-full" src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user photo" />
                    <span class="ml-2 hidden text-left xl:block">
                        <span class="block font-medium text-gray-400">{{Auth::user()->name }}</span>
                        <!-- <span class="-mt-1 block text-sm font-medium text-gray-500"></span> -->
                    </span>
                </button>

                <div
                    class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none divide-y divide-gray-100 rounded border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
                    id="navUserdata">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-medium text-gray-900 dark:text-white">{{Auth::user()->name }}</span>
                        <span class="block truncate text-sm font-normal text-gray-500 dark:text-gray-400">{{Auth::user()->email }}</span>
                    </div>
                    <ul class="py-1" aria-labelledby="navUserdata">
                        <li>
                            <a href="{{route('profile.edit')}}"
                                class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <form method="POST" action="{{route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left">
                                    <a class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100  dark:text-gray-200 dark:hover:bg-gray-900/20 dark:hover:text-white">Logout</a>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <button data-collapse-toggle="mobile-menu-2" type="button" id="toggle-menu"
                class="ml-1 inline-flex items-center rounded-lg text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-0 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="ti ti-menu-2 h-6 w-6 text-lg leading-6"></i>
                <i class="ti ti-X hidden h-6 w-6 text-lg leading-6"></i>
            </button>
        </div>
    </div>
</nav>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100"> -->
<!-- Primary Navigation Menu -->
<!-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> -->
<!-- <div class="flex justify-between h-16"> -->
<!-- <div class="flex"> -->
<!-- Logo -->
<!-- <div class="shrink-0 flex items-center">
                                            <a href="{{ route('dashboard') }}">
                                                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                                            </a>
                                        </div> -->

<!-- Navigation Links -->
<!-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                                {{ __('Dashboard') }}
                                            </x-nav-link>
                                        </div>
                                    </div> -->

<!-- Settings Dropdown -->
<!-- <div class="hidden sm:flex sm:items-center sm:ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div>

                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot> -->

<!-- <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link> -->

<!-- Authentication -->
<!-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div> -->

<!-- Hamburger -->
<!-- <div class="-me-2 flex items-center sm:hidden">
    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>
</div>
</div> -->

<!-- Responsive Navigation Menu -->
<!-- <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-responsive-nav-link>
    </div> -->

<!-- Responsive Settings Options -->
<!-- <div class="pt-4 pb-1 border-t border-gray-200">
        <div class="px-4">
            <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
        </div>

        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-responsive-nav-link> -->

<!-- Authentication -->
<!-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</div>
</nav> -->