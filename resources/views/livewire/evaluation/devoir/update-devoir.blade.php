<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>

  <div class="intro-y box mt-5">
    <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
      <h2 class="font-medium text-base mr-auto"> Information</h2>
      <div class="form-check form-switch">
        <input class="form-check-input" wire:model="editable" type="checkbox">
        <label class="form-check-label" >Modifier</label>
      </div>
    </div>
    <div class="p-5">
      <form wire:submit.prevent="save" {{ (!$editable) ? 'disabled' :''}} >
        <x-errors class="mt-3"/>
        <div class="mt-3">
          <x-input label="Nom du Devoir" wire:model.defer="devoir.nom_devoir" placeholder="example : devoir N° matiere .. " required :disabled="(!$editable)" />
        </div>
        <div class="mt-3">
          <x-input label="Ponderation" wire:model.defer="devoir.ponderation" type="number" required :disabled="(!$editable)" />
        </div>
        @if($editable)
        <div class="mt-3">
          <button class="btn btn-primary" type="submit">Enregister</button>
        </div>
        @endif
      </form>
    </div>
  </div>

  <div class="intro-y box mt-5 border-2 border-danger  dark:border-danger">
    <div class="flex items-center p-5 border-b border-danger/60 dark:border-darkmode-400">
        <h2 class="font-medium text-base mr-auto"> Supprimer le Devoir</h2>
    </div>
    <div class="p-5">
        <div class="text-sm ">
          Supprimer les devoirs et les notes Asscociées
        </div>
        <div class="mt-5">
            <button wire:loading.attr="disabled" class="btn btn-danger" 
              onclick="
                window.$wireui.confirmDialog({
                  title:`Confirmation`,
                  description: `Supprimer le Devoir : @js($devoir->nom_devoir) ?` ,
                  icon: 'warning',
                  accept: {
                      label: 'Oui, Supprimer',
                      execute: () => {  @this.deleteDevoir() ;}
                    },
                  reject: {
                    label: 'Non',
                  }
                });"
              >
                Supprimer Le Devoir
            </button>
        </div>
    </div>
  </div>

</div>