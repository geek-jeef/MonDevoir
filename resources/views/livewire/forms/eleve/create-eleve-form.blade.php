<div>
  <form wire:submit.prevent="save">
    <div class="intro-y box py-10 sm:py-20 mt-5">
      @include('components.wizard.steps-header')
      <div class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400">
        <!--div class="font-medium text-base">Profile Settings</div-->
        <x-errors class="mb-4"/>
        {{ $this->getCurrentStep() }}
        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
          @include('components.wizard.steps-footer')
        </div>
      </div>
    </div>
  </form>
               
  <div id="formulaire-creation-tuteur" class="modal modal-slide-over" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <a data-tw-dismiss="modal" href="javascript:;">
                  <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
              </a>
              <div class="modal-header">
                  <h2 class="font-medium text-base mr-auto">Enregistrer un Tuteur</h2>
              </div>
              <div class="modal-body">
                  <livewire:forms.tuteur.create-tuteur-form />
              </div>
              <div class="modal-footer w-full bottom-0">
                  <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
              </div>
          </div>
      </div>
  </div>
  <script>
          if (document.readyState === "complete" || document.readyState === "loaded") {
               Livewire.on('inscriptionInitialClasse', academiqueData => {
                const element = document.getElementById('academiqueDataInput'); 
                element.value = JSON.stringify(academiqueData);
                element.addEventListener('change', () => console.log('change'))  
                const event = new Event('change');  
                element.dispatchEvent(event);
                document.getElementById('MyChangeButton').click();
                console.log('clicked');
              });
          }else{
            document.addEventListener("DOMContentLoaded", function(event) { 
              Livewire.on('inscriptionInitialClasse', academiqueData => {
                const element = document.getElementById('academiqueDataInput'); 
                element.value = JSON.stringify(academiqueData);
                element.addEventListener('change', () => console.log('change'))  
                const event = new Event('change');  
                element.dispatchEvent(event);
                document.getElementById('MyChangeButton').click();
                console.log('clicked');
              })
            });
          }
  </script>
  
  
</div>