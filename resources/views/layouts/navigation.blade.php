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
                @can('manage-users')
                <li>
                    <a class="block font-medium text-gray-400" href="{{route('users.index')}}">
                        Users
                    </a>
                </li>
                @endcan
                @can('manage-roles')
                <li>
                    <a class="block font-medium text-gray-400" href="{{route('roles.index')}}">
                        Roles
                    </a>
                </li>
                @endcan
                @can('manage-permissions')
                <li>
                    <a class="block font-medium text-gray-400" href="{{route('permissions.index')}}">
                        Permissions
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
                        <span class="block font-medium text-gray-400">{{Auth::user()->name ?? 'Guest' }}</span>
                        <!-- <span class="-mt-1 block text-sm font-medium text-gray-500"></span> -->
                    </span>
                </button>

                <div
                    class="dropdown-menu dropdown-menu-right z-50 my-1 hidden list-none divide-y divide-gray-100 rounded border-slate-700 md:border-white text-base shadow dark:divide-gray-600 bg-white dark:bg-slate-800"
                    id="navUserdata">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-medium text-gray-900 dark:text-white">{{Auth::user()->name ?? 'Guest'}}</span>
                        <span class="block truncate text-sm font-normal text-gray-500 dark:text-gray-400">{{Auth::user()->email ?? 'Guest'}}</span>
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

