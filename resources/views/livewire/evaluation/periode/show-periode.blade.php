<section>
  <div wire.ignore class="intro-y flex items-center mt-3">
    <h2 class="text-lg font-medium mr-auto">Periode</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
@if($periode)
  <div class="intro-y box px-5 pt-5 mt-5">
    <div wire.ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', [ \Hp::avatar($periode->nom_periode)] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 sm:whitespace-normal font-medium text-lg">{{ $periode->nom_periode }} </div>
          <div class="text-slate-500">{{ $periode->cycle->nom_cycle }} </div>
         
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div title="Année Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center">
            <x-icon name="calendar" class="w-4 h-4 mr-2" /> {{$periode->cycle->annee->nom_annee}}
          </div>

          <div title="Date" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <x-icon name="calendar" class="w-4 h-4 mr-2" /> De <span class="text-primary mx-1">{{$periode->debut}}</span> au <span class="text-primary mx-1">{{$periode->debut}}</span>
          </div>

        </div>
      </div>
    </div>
    
    <ul wire:ignore class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">

      @foreach($menus as $menu)
      <li id="menu-periode-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-periode-{{$menu['id']}}"
          aria-controls="menu-periode-{{$menu['id']}}"
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
      wire:key="menu-periode-pane-key-{{$menu['id']}}" 
      id="menu-periode-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-periode-{{$menu['id']}}-tab">

      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-periode-pane-content-key-{{$menu['id']}}">
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
                      <h2>La Periode séra modifié pour l'Année: <span class="text-primary"> {{$periode->cycle->annee->nom_annee}} </span> <span class="text-primary mx-1">({{$periode->cycle->nom_cycle}})</span> </h2>
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable label="Nom de la Periode" wire:model.defer="periode.nom_periode" placeholder="Trimestre , Semestre etc..." required />
                    </div>
                    <div class="mt-3">
                      <label  class="form-label">Date de Début</label>
                      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="periode.date_debut" required>
                    </div>
                    <div class="mt-3">
                      <label  class="form-label">Date de Fin</label>
                      <input type="date" class="form-control" data-single-mode="true" wire:model.defer="periode.date_fin" required>
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
            @php
              $examens = App\Models\Examen::where('periode_id',$this->periode->id)->orderByDesc('created_at')->get() ;
            @endphp
              <div class="intro-y tab-content mt-5">
                <div class="grid grid-cols-12 gap-6 mt-5">
                  <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                    <div class="hidden md:block mx-auto text-slate-500"> {{count($examens)}} Examens enregistées </div>
                  </div>
                  <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
                    <table class="table table-report -mt-2">
                    <thead>
                      <tr>
                      <th class="whitespace-nowrap">ID</th>
                      <th class="text-center whitespace-nowrap">Nom Examen</th>
                      <th class="text-center whitespace-nowrap">Periode</th>
                      <th class="text-center whitespace-nowrap">Cycle</th>
                      <th class="text-center whitespace-nowrap">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($examens as $examen)
                      <tr class="intro-x">
                        <td class="text-center">{{$examen->id}}</td>
                        <td>
                          <a href="javascript:;" class="font-medium whitespace-nowrap">{{ $examen->nom_examen}}</a>
                        </td>
                       
                        <td class="text-center">{{$periode->nom_periode}}</td>
                        <td class="text-center">{{$periode->cycle->nom_cycle}}</td>
                        <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                          <a class="flex items-center mr-3" href="javascript:;" onclick=" var ask = window.confirm('Afficher l\'Examen {{ $examen->nom_examen}} ?');if (ask) { window.location.href = '{{route('examen.show',[$examen->id])}}';};">
                          <x-icon name="eye" class="w-4 h-4 mr-1" />
                           afficher
                          </a>
                        </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
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