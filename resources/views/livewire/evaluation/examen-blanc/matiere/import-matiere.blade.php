<section>
  <div class="mb-5">
    <div class="flex items-center justify-between mb-3">
      <h3 class="text-2xl font-medium leading-none mt-3">Importer depuis fichier Excel</h3>
      <button wire:click="downloadModele()" class="btn btn-primary" >Modèle <i data-feather="download" class="w-5 h-5 ml-1"></i></button>
    </div>
    <form action="#" wire:submit.prevent="createFromExcel" x-data="{ files: null }">
      <x-errors class="mt-3"/>
      <div class="mt-3">
        <label class="bg-white dark:dark border-2 border-gray-200 p-3 w-full block rounded cursor-pointer my-2" for="customFile2">
          <input type="file" wire:model.defer="media" class="sr-only" id="customFile2" x-on:change="files = Object.values($event.target.files)">
          <span x-text="files ? files.map(file => file.name).join(', ') : 'Cliquez ici pour choisir un fichier | XLSX, CSV, TSV, ODS, XLS, SLK, XML, GNUMERIC, HTML | &lt; 4.00MB'"></span>
        </label>
        <button type="reset" @click="files = null" class="bg-gray-300 text-gray-800 px-3 py-1 rounded float-right	">Reset</button>
      </div>
      <div class="mt-3">
        <button class="btn btn-primary" type="submit">Importer le Fichier</button>
      </div>
    </form>
  </div>

  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 ">
    <div class=" px-5 -mt-3 text-slate-500">or</div>
  </div>
   
  <div class="mt-5">
    <div class="flex items-center justify-between mb-3">
      <h3 class="text-2xl font-medium leading-none mt-3">Importer depuis une classe</h3>
    </div>
    <div class="mt-3">
      <livewire:widget.picker.cycle-classe-salle-picker eventToFired="create-examen-blanc-matiere-from-classe"  />
    </div>
  </div>
</section>
