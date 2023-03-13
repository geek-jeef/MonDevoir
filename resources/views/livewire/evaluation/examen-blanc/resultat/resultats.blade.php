<section>
  <div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 mt-8">
      <div class="intro-y flex h-10 items-center">
        <h2 class="mr-5 truncate text-lg font-medium">Resultats : {{ $examen->nom_examen }}</h2>
        <button wire:click="$refresh" class="text-primary ml-auto flex items-center">
          <x-icon name="refresh" class="mr-3 h-4 w-4 hover:animate-spin" /> Actualiser
        </button>
      </div>
    </div>

    <livewire:evaluation.examen-blanc.resultat.vue.liste-note :examen="$examen" :collection="$collection" />
    <livewire:evaluation.examen-blanc.resultat.rapports :examen="$examen" :collection="$collection" />
  </div>
</section>
