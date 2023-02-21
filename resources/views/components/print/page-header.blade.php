@props([
  'titre' => null
])
<div id="header_for_print" class="hidden print:block print:p-0">
  <header wire:ignore class="grid grid-cols-12 gap-3 pt-4 px-4 hidden print:grid print:p-0">
    <div class="col-span-4  place-self-center">
      <div class="flex justify-center">
        <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-12 w-auto">
      </div>
    </div>
    <div class="col-span-8 flex-col justify-center">
      <div>
        <div class="flex justify-center">
          <span class="whitespace-nowrap text-base font-semibold" data-nom_ecole >{{$parametres_generaux->nom_ecole}}</span>
        </div>
        <div class="text-center text-xs">
          <span class="whitespace-nowrap" data-programme >{{$parametres_generaux->programme}}</span>
        </div>
        <div class=" flex justify-center">
          <div class="text-center text-xs">
            <span class="whitespace-nowrap mx-2" data-postal >{{$parametres_generaux->poste}} - {{$parametres_generaux->ville}}</span>
            <span class="whitespace-nowrap mx-2" data-phones > Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }} </span>
            <span class="whitespace-nowrap mx-2" data-mail >Email: <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  @if($titre)
  <div class="whitespace-nowrap text-center">
    <div class="uppercase underline text-xl font-bold whitespace-nowrap decoration-1 decoration-double underline-offset-4"> {{$titre}} </div>
  </div>
  @endif
</div>