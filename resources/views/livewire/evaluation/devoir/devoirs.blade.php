<section>
    <div class="intro-y flex items-center mt-8 print:hidden">
        <h2 class="text-lg font-medium mr-auto">Devoirs</h2>
        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
            <a href="javascript:;" class="btn btn-outline-primary relative justify-start rounded-full pr-12 " data-tw-toggle="modal" data-tw-target="#formulaire-creation-devoir"> Créer Un Devoir
              <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
                <x-icon name="plus" class="w-6 h-6" solid />
              </span>
            </a>
        </div>
    </div>
    <livewire:evaluation.devoir.vue.liste-devoir />
    <div id="formulaire-creation-devoir" class="modal modal-slide-over print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <a data-tw-dismiss="modal" href="javascript:;">
                  <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
              </a>
              <div class="modal-header">
                  <h2 class="font-medium text-base mr-auto">Enregistrer Un Devoir</h2>
              </div>
              <div class="modal-body">
                <livewire:forms.devoir.create-devoir-form />
              </div>
              <div class="modal-footer w-full bottom-0">
                  <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
              </div>
          </div>
      </div>
    </div>
</section>