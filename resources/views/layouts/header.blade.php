<meta charset="utf-8" />
<title>Laravel App</title>
<meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta
    content="Tailwind Multipurpose Admin & Dashboard Template"
    name="description" />
<meta content="" name="Mannatthemes" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />

@vite(['resources/css/app.css', 'resources/js/app.js'])