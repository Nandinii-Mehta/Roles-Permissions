<div class="card h-full">
    <div class="card-body">
        <div id="EmailBox">
            <div id="Inbox" role="tabpanel" aria-labelledby="Inbox-tab" class="space-y-2">
                <!-- User Info -->
                <a href="javascript:void(0)"
                    class="list-group-item border-0 text-blue font-medium p-2 rounded-md bg-slate-50 dark:bg-slate-700 dark:text-slate-300 flex space-x-3 items-center">
                    <img class="h-9 w-9 rounded-full" src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                        alt="user photo" />
                    <span>Admin</span>
                </a>
                <!-- Navigation Links -->
                <a href="{{ route('items.home') }}"
                    class="list-group-item block border-0 p-2 text-slate-700 rounded-md hover:text-slate-600 dark:hover:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">
                    Dashboard
                </a>
                <a href="{{ route('items.index') }}"
                    class="list-group-item block border-0 p-2 text-slate-700 rounded-md hover:text-slate-600 dark:hover:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">
                    Items Management
                </a>
                <a href="{{ route('purchasecodes.index') }}"
                    class="list-group-item block border-0 p-2 text-slate-700 rounded-md hover:text-slate-600 dark:hover:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">
                    Purchase Code
                </a>
                <a href="javascript:void(0)"
                    class="list-group-item block border-0 p-2 text-slate-500 rounded-md hover:text-slate-700 dark:hover:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700">
                    <!-- Placeholder for additional links -->
                </a>
            </div>
        </div>
    </div><!-- end card-body -->
</div> <!-- end card -->
