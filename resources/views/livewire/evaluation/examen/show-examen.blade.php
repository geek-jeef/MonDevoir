<section>
  <div wire.ignore class="intro-y flex items-center mt-3">
    <h2 class="text-lg font-medium mr-auto">Examen</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
@if($examen)
  <div class="intro-y box px-5 pt-5 mt-5">
    <div wire.ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', [ \Hp::avatar($examen->nom_examen)] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 sm:whitespace-normal font-medium text-lg">{{ $examen->nom_examen }} </div>
          <div class="text-slate-500">{{ $examen->periode->nom_periode }}/{{ $examen->periode->cycle->nom_cycle }} </div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div title="Année Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center">
            <x-icon name="calendar" class="w-4 h-4 mr-2" /> {{$examen->annee->nom_annee}}
          </div>
          <div class="truncate sm:whitespace-normal flex items-center mt-3 {{ $examen->ouvert_pour_enregistrement ? 'text-success' : 'text-danger' }}">
            <x-icon name="pencil" class="w-4 h-4 mr-2" /> Enregistrement {{ $examen->ouvert_pour_enregistrement ? 'Ouvert' : 'fermé' }}
          </div>
        </div>
      </div>
    </div>
    
    <ul wire:ignore class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">

      @foreach($menus as $menu)
      <li id="menu-examen-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-examen-{{$menu['id']}}"
          aria-controls="menu-examen-{{$menu['id']}}"
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
      wire:key="menu-examen-pane-key-{{$menu['id']}}" 
      id="menu-examen-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-examen-{{$menu['id']}}-tab">

      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-examen-pane-content-key-{{$menu['id']}}">
          @if($currentMenu['id'] == 1)
            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">{{$menu['titre']}}</h2>
                </div>
              </div>
              <div class="p-5 wrapper">
                <x-errors class="mb-4"/>
                <div class=".flex flex-col-reverse xl:flex-row flex-col">
                  <form wire:submit.prevent="update">

                    <div class="mt-3">
                      <h2>L'Examen séra modifiée pour l'Année: <span class="text-primary">{{$examen->annee->nom_annee}}</span> </h2>
                      <h2>Periode: <span class="text-primary mx-1">{{ $examen->periode->nom_periode }}/{{ $examen->periode->cycle->nom_cycle }} </span> </h2>
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable label="Nom de l'Examen" wire:model.defer="examen.nom_examen" placeholder="example : Composition Trimestre" required />
                    </div>
                    <div class="mt-3">
                      <div class="form-check form-switch">
                          <input class="form-check-input" wire:model.defer="examen.ouvert_pour_enregistrement" type="checkbox">
                          <label class="form-check-label" >Ouvert Pour Enregistrment des Notes ?</label>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="submit">Enregister</button>
                    </div>                 
                  </form>
                </div>
              </div>
            </div> 
            <div wire:loading class="text-center w-full" >
              <x-loading />
            </div>
          @elseif($currentMenu['id'] == 2)
            2
          @endif
        </div>
      @else
      <x-loading />
      @endif

    </div>
    @endforeach
  </div>
  
@endif
</section>