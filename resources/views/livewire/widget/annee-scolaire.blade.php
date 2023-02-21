<nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
  <ol class="breadcrumb breadcrumb-light">
    <li class="breadcrumb-item">
      <a href="javascript:;">
          Année en cours : {{$annee->nom_annee}}
      </a>
    </li>
    <li class="breadcrumb-item active" aria-current="page">
      <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#switch-year-modal">
        <x-icon name="refresh" class="w-4 h-4" />
      </a>
      <div id="switch-year-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="font-medium text-base mr-auto">Année Academique</h2>
            </div>
            <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
              <div class="col-span-12">
                Année en cours : {{$annee->nom_annee}}
              </div>
              <div class="col-span-12">
                <form wire:submit.prevent="changer">
                  <x-errors class="mt-3"/>
                  @php
                    $listeAnnee = App\Models\AnneeAcademique::orderByDesc('created_at')->get();
                  @endphp
                  <div class="mt-3">
                    <x-select label="Choisir Une Année" :options="$listeAnnee" option-value="id" option-label="nom_annee" wire:model.defer="new_annee_id" required />
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Changer</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" data-tw-dismiss="modal" class="btn btn-outline-warning w-20">Fermer</button>
            </div>
          </div>
        </div>
      </div>                  
    </li>
  </ol>
</nav>
