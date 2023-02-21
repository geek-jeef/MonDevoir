@props([
  'lien' => false,
  'text' => 'Aller',
  'titre' => '',
  'message' => 'Aucune Donnée',
  'details' => ''
])
<div {{$attributes}} >
  <div class="container">
    <div class="error-page flex flex-col lg:flex-row items-center justify-center p-5 text-center lg:text-left bg-primary">
      <div class="lg:mr-20">
        <img alt="" class="h-48 lg:h-auto" src="{{ asset('dist/images/error-illustration.svg') }}" style="box-shadow: 0px 0px 0px 0px #fff, 0px 0px 0px rgb(0 0 0 / 32%);">
      </div>
      <div class="text-white mt-10 lg:mt-0">
        <div class="intro-x text-8xl font-medium"></div>
        <div class="intro-x text-xl lg:text-3xl font-medium mt-5">{{$titre}}</div>
        <div class="intro-x text-lg mt-3">{{$message}}</div>
        <div class="intro-x text-base mt-3">{{$details}}</div>
        @if($lien)
          <a href="{{$lien}}" class="intro-x btn py-3 px-4 text-white border-white dark:border-darkmode-400 dark:text-slate-200 mt-10">{{$text}}</a>
        @endif
      </div>
    </div>
  </div>  
</div>
