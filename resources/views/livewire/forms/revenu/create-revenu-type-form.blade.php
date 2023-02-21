<div>
  <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
    <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
  </button>
  <div class="overflow-x-auto">
      <table class="table table-report mt-5">
          <tbody>
              @foreach($financeSettings->types_revenu as $type_revenu  )
              <tr>
                  <td class="w-0">{{$loop->iteration}}</td>
                  <td>{{$type_revenu}}</td>
                  <td class="table-report__action">
                    <div class="flex justify-center items-center">
                      <a class="flex items-center text-danger" href="javascript:;" wire:click="confirmSupprimerTypeRevenu('{{$type_revenu}}')">
                        <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Supprimer
                      </a>
                    </div>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <form wire:submit.prevent="enregistrerTypeRevenu">
        <x-errors class="mt-3"/>
        <div class="mt-3">
          <h2 class="text-primary">Enregister Un Type de Revenu</h2>
        </div>

        <div class="mt-3">
          <x-input label="Type de Revenu" wire:model.defer="create_type_revenu" type="text" required />
        </div>

        <div class="mt-3">
          <button class="btn btn-primary" type="submit">Enregister</button>
        </div>
      </form>
  </div>
</div>