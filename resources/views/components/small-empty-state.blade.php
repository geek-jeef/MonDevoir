@props([
  'lien' => false,
  'text' => 'Aller',
  'message' => 'Aucune Donnée'
])
<div class=" flex items-center justify-center gap-6 p-4 text-center bg-primary my-10">
  <div class="">
    <img alt="" class="h-16" src="{{ asset('dist/images/error-illustration.svg') }}">
  </div>
  <div class="text-white">
    <div class="intro-x text-lg mt-3">{{$message}}</div>
  </div>
  <div class="text-white">
    @if($lien)
      <a href="{{$lien}}" class="intro-x btn btn-sm py-3 px-4 text-white border-white dark:border-darkmode-400 dark:text-slate-200 ">{{$text}}</a>
    @endif
  </div>
</div>