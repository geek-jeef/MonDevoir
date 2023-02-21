    <div>
      <div class="font-medium text-base">Academique</div>
      <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
        <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Attribuer un classe </div>
      </div>

      <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
        <div class="intro-y col-span-12">
          <livewire:widget.picker.cycle-classe-salle-picker eventToFired="inscriptionInitialClasse"  />
        </div>
        <div style="display: none; height: 0; width: 0;">
          <textarea id="academiqueDataInput" class="w-full" type="text" wire:model="state.academique"></textarea>
          <div x-data>
            <a id="MyChangeButton" x-on:click="$wire.set('state.academique', document.getElementById('academiqueDataInput').value )">Hidden</a>
          </div>
        </div>
      </div>



      <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
        <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Attribuer un Marquage </div>
      </div>

      <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
        <div class="intro-y col-span-12">
          {{debug(Tag::getWithType('Eleves')->toArray())}}
          <x-select
            label="Choisir un Marquage"
            placeholder="Boursier , Enfant d'enseignant etc..."
            :options="Tag::getWithType('Eleves')->toArray()"
            option-label="name.fr"
            option-value="id"
            wire:model.defer="state.tags"
            multiselect
          />

        </div>
        
      </div>





    </div>