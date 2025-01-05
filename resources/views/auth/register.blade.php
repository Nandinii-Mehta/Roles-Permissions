@include('layouts.header')

<body data-layout-mode="light" class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">
    <div class="relative flex flex-col justify-center min-h-screen overflow-hidden">
        <div class="w-full  m-auto bg-white dark:bg-slate-800/60 rounded shadow-lg ring-2 ring-slate-300/50 dark:ring-slate-700/50 lg:max-w-md">
            <div class="text-center p-6 bg-slate-900 rounded-t">
                <a href="#"><img src="assets/images/logo-sm.png" alt="" class="w-14 h-14 mx-auto mb-2"></a>
                <h3 class="font-semibold text-white text-xl mb-1">Let's Get Started T-Wind</h3>
                <p class="text-xs text-slate-400">Sign in to continue.</p>
            </div>
            <form class="p-6" method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <label for="name" class="label">Name</label>
                    <input type="text" id="name" name="name" class="form-control dark:bg-slate-100 dark:border-slate-700/50" placeholder="Enter Name" required>
                </div>
                <div>
                    <label for="email" class="label">Email</label>
                    <input type="email" id="email" name="email" class="form-control  dark:bg-slate-100 dark:border-slate-700/50" placeholder="Enter Email" required>
                </div>
                <div class="mt-4">
                    <label for="password" class="label">Your password</label>
                    <input type="password" id="password" name="password" class="form-control  dark:bg-slate-100 dark:border-slate-700/50" placeholder="Enter Password" required>
                </div>
                <div class="mt-4">
                    <label for="password_confirmation" class="label">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control  dark:bg-slate-100 dark:border-slate-700/50" placeholder="Enter Confirm Password" required>
                </div>
                <div class="mt-6">
                    <button
                        class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Register
                    </button>
                </div>
            </form>
            <p class="mb-5 text-sm font-medium text-center text-slate-500"> Already have an account ? <a href="{{ route('login') }}"
                    class="font-medium text-blue-600 hover:underline">Log in</a>
            </p>
    </div>

    <script src="assets/libs/simplebar/simplebar.min.js"></script>
</body>
