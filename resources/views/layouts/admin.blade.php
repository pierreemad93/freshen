<!doctype html>
<html lang="en">
@php
    if (LaravelLocalization::getCurrentLocaleDirection() == 'rtl') {
        $rtlLinks = '-rtl';
        $rtlClass = 'rtl';
    } else {
        $rtlClass = '';
        $rtlLinks = '';
    }
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->

    {{-- <link rel="stylesheet" href="{{ asset('admin' . $rtlLinks) }}/css/simplebar.css"> --}}
    <link rel="stylesheet" href="{{ asset('admin' . $rtlLinks) }}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin' . $rtlLinks) }}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('admin' . $rtlLinks) }}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin' . $rtlLinks) }}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('admin' . $rtlLinks) }}/css/app-dark.css" id="darkTheme" disabled>
</head>

<body class="vertical  light {{ $rtlClass }}">
    <div class="wrapper">
        <x-admin.navbar />

        <x-admin.sidebar />
        <main role="main" class="main-content">
            <div class="container-fluid">
                {{ $content }}
            </div> <!-- .container-fluid -->

        </main> <!-- main -->
    </div> <!-- .wrapper -->
    <x-admin.scripts />
</body>

</html>
