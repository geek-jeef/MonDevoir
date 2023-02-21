<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }}">
<head>
  <meta charset="utf-8">
  <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('head')
  <wireui:styles />
  <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}" />
  @livewireStyles
  <style type="text/css">
      [x-cloak] {
        display: none;
      }
  </style>
  @yield('styles')
  <wireui:scripts />
</head>
  <body class="login">
    <x-notifications z-index="z-[100]" />
    <x-dialog z-index="z-50" blur="md" align="center" />
    @yield('content')
    @include('components/mode-switcher')
    @livewireScripts
    <script src="{{ mix('dist/js/app.js') }}" defer ></script>
    <script src="{{ mix('dist/js/alpine.js') }}" defer ></script>
    @yield('script')
  </body>
</html>