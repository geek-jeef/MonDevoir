<div wire:init="setLoadingState()">
 {{-- }} @if($readyToLoad)
    <div id="accordion-cycle-{{$cycle->id}}" class="accordion accordion-boxed">
    @foreach($classes as $classe)
    <div class="accordion-item rounded-t-md " style="margin: 0px 0px 15px 0px; padding: 0;">
      <div id="accordion-header-cycle-{{$cycle->id}}-classe-{{$classe->id}}" class="accordion-header box rounded-t-md rounded-b-none">
        <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
          <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#accordion-collapse-cycle-{{$cycle->id}}-classe-{{$classe->id}}" aria-expanded="true" aria-controls="accordion-collapse-cycle-{{$cycle->id}}-classe-{{$classe->id}}">
            <h2 class="flex font-medium text-base mr-auto"><x-icon name="sparkles" class="w-5 h-5 mr-2" /> {{$classe->nom_classe}}</h2>
          </button>
        </div>
      </div>
      <div id="accordion-collapse-cycle-{{$cycle->id}}-classe-{{$classe->id}}" class="accordion-collapse collapse .show" aria-labelledby="accordion-header-cycle-{{$cycle->id}}-classe-{{$classe->id}}" data-tw-parent="#accordion-cycle-{{$cycle->id}}">
        <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
          <div class=" p-5">
            <livewire:academique.section.salle-par-classe :classe="$classe" />
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @else
  <x-loading />
  @endif
  --}}
</div>