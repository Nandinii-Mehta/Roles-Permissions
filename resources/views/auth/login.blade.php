@include('layouts.header')
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<body data-layout-mode="light"
    class="bg-gray-100 dark:bg-gray-800 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">
    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        <div
            class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
            <div class="text-center p-6 bg-slate-900 rounded-t">
                <a href="index.html"><img src="assets/images/logo-sm.png" alt="" class="w-14 h-14 mx-auto mb-2"></a>
                <!-- <h3 class="font-semibold text-white text-xl mb-1">Let's Get Started T-Wind</h3> -->
                <p class="text-xs text-slate-400">Sign in to continue</p>
            </div>

            <form class="p-6" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label for="email" class="label">Email</label>
                    <input type="email" id="email" name="email"
                        class="form-control dark:bg-slate-100 dark:border-slate-700/50" placeholder="Your Email"
                        required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <label for="password" class="label">Your password</label>
                    <input type="password" id="password" name="password"
                        class="form-control dark:bg-slate-100 dark:border-slate-200" placeholder="Password" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-xs text-gray-600 hover:underline">Forget
                        Password?</a>
                @endif
                <div class="block mt-3">
                    <label class="custom-label">
                        <div
                            class="bg-white dark:bg-slate-700 dark:border-slate-600 border border-slate-200 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                            <input type="checkbox" class="hidden" id="remember_me" name="remember">
                            <i class="fas fa-check hidden text-xs text-slate-700 dark:text-slate-300"></i>
                        </div>
                        <span class="text-sm text-slate-500 font-medium">Remember me</span>
                    </label>
                </div>
                <div class="mt-6">
                    <button
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Login
                    </button>
                </div>
            </form>
            <p class="mb-5 text-sm font-medium text-center text-slate-500"> Don't have an account? <a
                    href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline">Sign up</a>
            </p>
        </div>
    </div>

    <script src="assets/libs/simplebar/simplebar.min.js"></script>
</body>
<!-- <form method="POST" action="{{ route('login') }}">
        @csrf -->

<!-- Email Address -->
<!-- <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div> -->

<!-- Password -->
<!-- <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="current-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div> -->

<!-- Remember Me -->
<!-- <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div> -->

<!-- <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
@endif -->
