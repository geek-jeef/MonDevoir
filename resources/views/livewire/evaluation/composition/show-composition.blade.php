<section >

  <div class="intro-y flex justify-between items-center mt-8 print:hidden">
    <h2 class="text-lg font-medium mr-auto">Composition</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>

  <!-- BEGIN: Profile Info -->
  <div class="intro-y box px-5 pt-5 mt-5 print:hidden">
    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="zoom-in" data-action="zoom" src="{{ route('qr',$composition->nom_composition) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $composition->nom_composition}}</div>
          <div class="text-slate-500">Composition</div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Details</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div class="truncate sm:whitespace-normal flex items-center">
            <i data-feather="book-open" class="w-4 h-4 mr-2"></i> {{$composition->matiere->nom_matiere}}
          </div>
          <div class="truncate sm:whitespace-normal flex items-center mt-3">
            <i data-feather="git-commit" class="w-4 h-4 mr-2"></i> {{$composition->classe->nom_classe}}
          </div>
          {{--<div class="truncate sm:whitespace-normal flex items-center mt-3">
            <i data-feather="git-merge" class="w-4 h-4 mr-2"></i> {{$composition->salle->nom_salle}}
          </div>--}}
          <div class="truncate sm:whitespace-normal flex items-center mt-3">
            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> {{$composition->annee->nom_annee}}
          </div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
        <div class="text-center rounded-md w-20 py-3">
          <div class="font-medium text-primary text-xl">{{ $composition->ponderation}}</div>
          <div class="text-slate-500">Ponderation</div>
        </div>
        <div class="text-center rounded-md w-20 py-3">
          <div class="font-medium text-primary text-xl">{{ count($composition->classe->eleves) }}</div>
          <div class="text-slate-500">Eleves</div>
        </div>
      </div>
    </div>
    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
      <li id="notes-tab" class="nav-item" role="presentation">
        <a
          href="javascript:;"
          class="nav-link py-4 flex items-center active"
          data-tw-target="#notes"
          aria-controls="notes"
          aria-selected="true"
          role="tab" >
          <i class="w-4 h-4 mr-2" data-feather="edit"></i> Notes
        </a>
      </li>
      <li id="Information-tab" class="nav-item" role="presentation">
        <a
          href="javascript:;"
          class="nav-link py-4 flex items-center"
          data-tw-target="#Information"
          aria-controls="Information"
          aria-selected="false"
          role="tab"
        >
          <i class="w-4 h-4 mr-2" data-feather="info"></i> Information
        </a>

        <li id="Soumettre-tab" class="nav-item" role="presentation">
        <a
          href="javascript:;"
          class="nav-link py-4 flex items-center"
          data-tw-target="#Soumettre"
          aria-controls="Soumettre"
          aria-selected="false"
          role="tab"
        >
          <i class="w-4 h-4 mr-2" data-feather="share"></i> Soumettre
        </a>
      </li>
    </ul>
  </div>
  <!-- END: Profile Info -->
  <div class="tab-content mt-5 print:m-0 print:p-0">
    <div id="notes" class="tab-pane active print:m-0 print:p-0" role="tabpanel" aria-labelledby="notes-tab">
      <livewire:evaluation.notable.modifier-notes :notable="$composition" />
    </div>
    <div id="Information" class="tab-pane print:hidden" role="tabpanel" aria-labelledby="Information-tab">
      <livewire:evaluation.composition.update-composition :composition="$composition->id" />
    </div>
    <div id="Soumettre" class="tab-pane print:hidden" role="tabpanel" aria-labelledby="Soumettre-tab">
      <livewire:evaluation.notable.soumettre-notable :notable="$composition" />
    </div>
  </div>
</section>