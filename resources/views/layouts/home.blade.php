<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <link rel="icon" href=" {{url('assets/health-care.png')}} ">
        <meta name="author" content="" />
        <title>@yield('title')</title>
        @include('includes.style')
    </head>

    <body>
        @include('includes.navbar')
        @yield('content')
       
        @stack('prepend-script')
        @include('includes.script-home')
        @stack('addon-script')
    </body>