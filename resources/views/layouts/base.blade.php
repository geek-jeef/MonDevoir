<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $dark_mode ? 'dark' : '' }}{{ $color_scheme != 'default' ? ' ' . $color_scheme : '' }} print:m-0 print:p-0 print:bg-white">
<head>
  <meta charset="utf-8">
  <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> {{( isset($titrePage)) ? $titrePage.' - ': ''}} {{config('app.name')}} </title>

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
  <body class="main soft-scrollbar print:shadow-none print:m-0 print:p-0 print:bg-white">
    <x-notifications z-index="z-[12000]" />
    <x-dialog z-index="z-[12000]" blur="md" align="center" />

    @yield('content')

    @include('components/mode-switcher')
    
    @livewireScripts
    <script src="{{ mix('dist/js/app.js') }}" defer ></script>
    <script src="{{ mix('dist/js/alpine.js') }}" defer ></script>
    <script>
      document.addEventListener("DOMContentLoaded", function(event) { 
          Livewire.on('CloseModal', ModalSelector => {
            const el = document.querySelector(ModalSelector);
            const modal = tailwind.Modal.getOrCreateInstance(el);
            modal.hide();
          }) ;
          Livewire.on('ShowModal', ModalSelector => {
            const el = document.querySelector(ModalSelector);
            const modal = tailwind.Modal.getOrCreateInstance(el);
            modal.show();
          }) ;
          Livewire.on('confetti', () => {
            confetti({
              particleCount: 80,
              spread: 200,
              origin: {y: 0.6}
            });
          })
      });
    </script>
    @yield('scripts')
    @yield('script')
  </body>
</html>
