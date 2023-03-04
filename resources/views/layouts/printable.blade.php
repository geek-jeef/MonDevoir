<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }} print:bg-white">
<head>
  <meta charset="utf-8">
  <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('head')
  <wireui:styles />
  <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}" />
  <link rel="stylesheet" href="{{ asset('dist/css/spatie.css') }}" />
  @livewireStyles
  <style type="text/css">
      [x-cloak] {
        display: none;
      }
  </style>
  @yield('styles')
  <wireui:scripts />
</head>
  <body class="main soft-scrollbar printable print:m-0 print:p-0 print:bg-white">
    <x-notifications z-index="z-[12000]"  class="print:hidden" />
    <x-dialog z-index="z-[12000]" blur="md" align="center" class="print:hidden"  />

    @include('components/page-printer')

    @yield('content')
    {{ (isset($slot)) ? $slot : ''}}

    @livewireScripts
    <script src="{{ mix('dist/js/app.js') }}" defer ></script>
    <script src="{{ mix('dist/js/alpine.js') }}" defer ></script>
    @yield('script')
  </body>
</html>
