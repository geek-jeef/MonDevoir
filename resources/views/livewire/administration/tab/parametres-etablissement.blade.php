<div>
  <div wire:ignore class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Paramétres Etablissement</h2>
  </div>
  <div wire:ignore class="intro-y box px-5 mt-5">
    <ul class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist" >
      @foreach($menus as $menu)
      <li id="menu-param-eta-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-param-eta-{{$menu['id']}}"
          aria-controls="menu-param-eta-{{$menu['id']}}"
          aria-selected="{{($menu['id'] == $currentMenu['id'] )? 'true' : 'false'}}"
          role="tab"
        >
          <i class="w-4 h-4 mr-2" data-feather="{{$menu['icon']}}"></i> {{$menu['titre']}}
        </button>
      </li>
      @endforeach
    </ul>
  </div>

  <div class="tab-content mt-5">

    @foreach($menus as $menu)
    <div
      wire:key="menu-param-eta-pane-key-{{$menu['id']}}" 
      id="menu-param-eta-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-param-eta-{{$menu['id']}}-tab">

      {{--  if current menu content else loading --}}
      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-param-eta-pane-content-key-{{$menu['id']}}">

          @if($currentMenu['id'] == 1)
            <div class="intro-y box lg:mt-5">
              <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto"><i data-feather="pen-tool" class="w-4 h-4 float-left mr-2"></i> Information </h2>
              </div>
              <div class="p-5">
                <div>
                  <label class="form-label">Nom de L'établissement <span class="text-danger">**</span> </label>
                  <input type="text" class="form-control" disabled value="{{config('ecole.nom.long')}}">
                </div>
                <div class="mt-3">
                  <label class="form-label">Nom de L'établissement (Version Courte) <span class="text-danger">**</span> </label>
                  <input type="text" class="form-control" disabled value="{{config('ecole.nom.court')}}">
                </div>
                <div class="flex mt-3 gap-2">
                  <div class="text-danger self-middle">
                    **Ces Informations ne Peuvent Pas être modifiées
                  </div>
                </div>
                <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 my-2">
                  <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">information</div> 
                </div>
                <form wire:submit.prevent="saveInformation">
                  <div class="mt-3">
                    <x-input.input-lockable wire:model.defer="programme" label="Programme" placeholder="Primaire-Collège-Lycée" required />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable wire:model.defer="email" label="Email" placeholder="ecole@exemple.com" required />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable wire:model.defer="telephone1" label="Telephone 1" placeholder="+228 00000000" required />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable wire:model.defer="telephone2" label="Telephone 2" placeholder="00 00 00 00" />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable wire:model.defer="poste" label="Boite Postal" placeholder="00 BP 0000" />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable wire:model.defer="quartier" label="Quartier" placeholder="Quartier" />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable wire:model.defer="ville" label="Ville" placeholder="Ville" />
                  </div>
                  <div class="mt-3">
                    <x-input.input-lockable wire:model.defer="pays" label="Pays" placeholder="Pays" />
                  </div>


                  <div class="mt-3">
                    <button class="btn btn-primary" type="submit"> Enregistrer </button>
                  </div>
                </form>
              </div>
            </div>          
          @elseif($currentMenu['id'] == 2)
           {{--
            <div class="intro-y box lg:mt-5">
              <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto"><i data-feather="pen-tool" class="w-4 h-4 float-left mr-2"></i> Logos </h2>
              </div>
              <div class="p-5">
                <div class="grid grid-cols-12 gap-4">
                  <div class=" col-span-3 mb-3 xl:mr-0">
                    <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                      <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                        <img class="rounded-md" data-action="zoom" alt="" src="{{asset('assets/logo/icon3.png')}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-span-9">
                    <form wire:submit.prevent="saveLogo">
                      <x-image-cropper model="logo" width="200" height="200" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="intro-y box mt-5">
              <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                  <i data-feather="pen-tool" class="w-4 h-4 float-left mr-2"></i> Logos avec Texte 
                </h2>
              </div>
              <div class="p-5">
                <div class="grid grid-cols-12 gap-4">
                  <div class=" col-span-6 mb-3 xl:mr-0">
                    <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                      <div class="cursor-pointer flex justify-center mx-auto relative zoom-in">
                        <img class="rounded-md" data-action="zoom" alt="" src="data:image/png;base64,{{base64_encode(file_get_contents( public_path('assets/logo-ecole/logo1.png')))}}" style="max-height: 200px;width: auto;">
                      </div>
                    </div>
                  </div>
                  <div class="col-span-6">
                    <form wire:submit.prevent="saveLogo">
                      <x-image-cropper model="logo" width="600" height="150" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
            --}}
          @endif
          
        </div>
      @else
      <x-loading />
      @endif

    </div>
    @endforeach
    

  </div>
</div>
