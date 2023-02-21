<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
    <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <div class="overflow-x-auto">
      <table class="table table-report mt-5">
          <tbody>
              @foreach($financeSettings->types_depense as $type_depense  )
              <tr>
                  <td class="w-0">{{$loop->iteration}}</td>
                  <td>{{$type_depense}}</td>
                  <td class="table-report__action">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center text-danger" href="javascript:;" wire:click="confirmSupprimerTypeDepense('{{$type_depense}}')">
                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Supprimer
                      </a>
                    </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <form wire:submit.prevent="enregistrerTypeDepense">
        <x-errors class="mt-3"/>
        <div class="mt-3">
          <h2 class="text-primary">Enregister Un Type de Dépense</h2>
        </div>

        <div class="mt-3">
          <x-input label="Type de Depense" wire:model.defer="create_type_depense" type="text" required />
        </div>

        <div class="mt-3">
          <button class="btn btn-primary" type="submit">Enregister</button>
        </div>
      </form>
  </div>
</div>