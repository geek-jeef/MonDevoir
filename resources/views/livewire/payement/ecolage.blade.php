<section>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
      <h2 class="text-lg font-medium mr-auto">Payement Frais D'Ecolage</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
          <livewire:widget.picker.cycle-classe-salle-picker eventToFired="TrierElevePourEcolage" />
        </div>
    </div>
    <livewire:payement.ecolage.grid-ecolage />

    <div id="formulaire-payement-ecolage" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <a data-tw-dismiss="modal" href="javascript:;">
                  <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
              </a>
              <div class="modal-header">
                  <h2 class="font-medium text-base mr-auto">Enregistrer Un Payement</h2>
              </div>
              <div class="modal-body">
                  <livewire:forms.payement.enregistrer-payement-ecolage-form />
              </div>
              <div class="modal-footer w-full bottom-0">
                  <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
              </div>
          </div>
      </div>
    </div>
</section>