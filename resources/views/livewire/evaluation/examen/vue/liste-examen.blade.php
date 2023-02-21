<div>
  <div class="intro-y tab-content mt-5">
    <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <div class="hidden md:block mx-auto text-slate-500"> {{count($examens)}} Examens enregistées </div>
        <div class="w-full flex sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <div class="dropdown mr-2" style="position: relative;">
          <button class="dropdown-toggle btn box flex items-center" aria-expanded="false" data-tw-toggle="dropdown">
            @if($selected_cycle) {{$selected_cycle['nom_cycle']}} @else Choisir un cycle @endif<x-icon name="chevron-down" class=" w-4 h-4 ml-2" />
          </button>
          <div class="dropdown-menu w-40" id="" data-popper-placement="bottom-end">
            <ul class="dropdown-content">
              @foreach($cycles as $cycle)
              <li>
                <a href="javascript:;" wire:click="$set('selected_cycle', {{$cycle}})" class="dropdown-item">
                  <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                  <span class="truncate">{{$cycle->nom_cycle}}</span>
                </a>
              </li>
              @endforeach
              <li>
                <a href="javascript:;" wire:click="$set('selected_cycle', null)" class="dropdown-item">
                  <x-icon name="sparkles" class=" w-4 h-4 mr-2" />
                  <span class="truncate"> Afficher Tout </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropdown-toggle btn btn-primary px-2 " aria-expanded="false" data-tw-toggle="dropdown">
          <span class="w-5 h-5 flex items-center justify-center">
            <x-icon name="share" class=" w-4 h-4" />
          </span>
          </button>
          <div class="dropdown-menu w-40">
          <ul class="dropdown-content">
            <li>
            <a href="" class="dropdown-item">
              <i data-feather="printer" class="w-4 h-4 mr-2"></i> Imprimer
            </a>
            </li>
            <li>
            <a href="" class="dropdown-item">
              <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exporter vers Excel
            </a>
            </li>
            <li>
            <a href="" class="dropdown-item">
              <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exporter en PDF
            </a>
            </li>
          </ul>
          </div>
        </div>
        </div>
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
            <td><a href="javascript:;" class="font-medium whitespace-nowrap">{{ $examen->nom_examen}}</a></td>
            @php
                $periode = App\Models\Periode::find($examen->periode_id);
                $cycle = App\Models\CycleAcademique::find($periode->cycle_academique_id);
            @endphp
            <td class="text-center">{{$periode->nom_periode}}</td>
            <td class="text-center">{{$cycle->nom_cycle}}</td>
            <td class="table-report__action w-56">
            <div class="flex justify-center items-center">
              <a class="flex items-center mr-3" href="javascript:;" onclick=" var ask = window.confirm('Afficher l\'Examen {{ $examen->nom_examen}} ?');if (ask) { Livewire.emitTo('evaluation.examen.show-examen', 'show-examen-id' , {{$examen->id}} ); };">
              <x-icon name="eye" class="w-4 h-4 mr-1" />
               afficher
              </a>
              <a class="flex items-center mr-3 text-primary" href="{{route('resultat.examen',$examen->id)}}" target="_blank" >
                <x-icon name="eye" class="w-4 h-4 mr-1" />
               Resultats
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
</div>