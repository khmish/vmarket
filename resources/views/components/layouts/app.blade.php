<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="antialiased">
    @livewire('components.popup-banner')
    <x-header />

    @if (session()->has('message'))
        <div class="p-4 mb-10 text-center text-2xl text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            {{ session('message') }}
        </div>
    @endif
    </div>
    @livewire('database-notifications')
    {{ $slot }}
    <x-footer />
    @filamentScripts
    @livewireScripts
    @vite('resources/js/app.js')
</body>

</html>
