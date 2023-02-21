<div>
  <div class="font-medium text-base">Details Supplémentaires</div>
  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
    <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Information Médicale</div>
  </div>
  <div class="grid grid-cols-12 gap-4 gap-y-5 mt-2">
    <div class="intro-y col-span-12 sm:col-span-12">
      <textarea class="form-control" rows="2" wire:model.defer="state.data.medical" placeholder="Information Médicale: maladie chronique , Allergie etc..."></textarea>
    </div>
  </div>
  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
    <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Commentaires</div>
  </div>
  <div class="grid grid-cols-12 gap-4 gap-y-5 mt-2">
    <div class="intro-y col-span-12 sm:col-span-12">
      <textarea class="form-control" rows="2" wire:model.defer="state.data.commentaire" placeholder="commentaires ..."></textarea>
    </div>
  </div>
  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-5">
    <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Tuteurs</div>
  </div>
  <div class="grid grid-cols-12 gap-4 gap-y-5 mt-2">
    <div class="intro-y col-span-12 sm:col-span-12">
      <label  class="form-label">Tuteurs</label>
      <x-select placeholder="Choisir des Tuteurs" :async-data="route('api.tuteurs.index')" option-label="nom" option-value="id"
      option-description="phone_primaire" wire:model.defer="state.tuteurs" multiselect />
    </div>
  </div>
  <div class="mt-3">
    <a href="javascript:;" class="btn btn-outline-secondary relative justify-start rounded-full pr-12 " data-tw-toggle="modal" data-tw-target="#formulaire-creation-tuteur"> Enregistrer Un Tuteur
      <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
        <x-icon name="plus" class="w-6 h-6" solid />
      </span>
    </a>
  </div>
</div>