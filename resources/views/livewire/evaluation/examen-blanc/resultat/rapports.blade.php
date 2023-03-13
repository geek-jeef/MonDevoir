<div wire:init="Initialisation" class="intro-y box col-span-12">
  <div class="dark:border-darkmode-400 flex items-center border-b border-slate-200/60 px-5 py-5 sm:py-3">
    <h2 class="mr-auto text-base font-medium">{{$titre}}</h2>
    <div class="flex gap-6">
      <form wire:submit.prevent="scopeEtablissement" class="self-end col-span-12 grid grid-cols-12">
        <div class="col-span-10 self-end">
          <x-select placeholder="Choisir un Etablissement" wire:model.defer="filtre_etablissement">
            @foreach($examen->etablissements as $ecole)
              <x-select.option label="{{$ecole->nom_etablissement_court}}" value="{{$ecole->id}}" description="{{$ecole->nom_etablissement}}" />
            @endforeach
            <x-select.option label="Toutes les Ecoles" value="0" description="Afficher des eleves de toutes les ecoles" />
          </x-select>
        </div>
        <div class="col-span-2 self-end">
          <button wire:target="filtre_etablissement" wire:loading.attr="disabled" class="btn btn-primary ml-2">OK</button>
        </div>
      </form>
      <div class="dropdown ml-auto self-end sm:hidden">
        <a class="dropdown-toggle block h-5 w-5" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
          <x-icon name="dots-horizontal" class="h-5 w-5 text-slate-500" />
        </a>
        <div class="dropdown-menu w-40">
          <ul class="dropdown-content">
            <li>
              <a wire:click="importToExcel()" href="javascript:;" class="dropdown-item">
                <x-icon name="download" class="mr-2 h-4 w-4" /> Télécharger le Rapport
              </a>
            </li>
          </ul>
        </div>
      </div>
      <button wire:click="importToExcel()" class="self-end btn btn-outline-secondary hidden sm:flex">
        <x-icon name="download" class="mr-2 h-4 w-4" /> Télécharger le Rapport
      </button>
    </div>
  </div>
  <style type="text/css">
    #table th {
      border-bottom-width: 2px;
      padding-left: 0.5rem;
      padding-right: 0.5rem;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      font-weight: unset;
    }

    #table td {
      border-bottom-width: 1px;
      padding-left: 0.5rem;
      padding-right: 0.5rem;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }

    #table th.border-r-2,
    #table td.border-r-2 {
      border-right-width: 2px;
    }

    .module {
      background-image: url({{ asset('devoir.svg') }});
      ;
    }

    /*#table th, #table td {
          border-color : black;
      }*/
    #table[no-border] th,
    #table[no-border] td {
      border-bottom-width: 0;
    }
  </style>
  <div class=" p-5">
    <div class="w-full">
      <div class="mt-2">
        <div class="overflow-x-auto">
          @if($data_rapport)
          <table id="table" class="table-striped table-bordered table">
            <thead class="table-dark">
              <tr>
                @foreach ($data_rapport['header'] as $header)
                  <th class="whitespace-nowrap">{{ $header }}</th>
                @endforeach
              </tr>
            </thead>
            <tbody>
              @foreach ($data_rapport['data'] as $item)
                <tr>
                  @foreach ($item as $key => $value)
                    <td>{{ $value }}</td>
                  @endforeach
                </tr>
              @endforeach
            </tbody>
          </table>
          @endif
        </div>
      </div>
    </div>
    <div class="grid grid-cols-1 gap-6 2xl:grid-cols-4 mt-5">
      <div class="2xl:col-span-2 mt-2 p-2">
        <canvas wire:ignore id="stacked-radar-chart-matiere"  ></canvas>
      </div>
      <div class="2xl:col-span-2 mt-2">
        <canvas wire:ignore id="taux-reussite-bar-chart"></canvas>
      </div>
    </div>
  </div>
  <script wire:ignore type="text/javascript">
    function initGrapheAggregatMatiere(selector,info) {
      if ($(selector).length) {
        let ctx = $(selector)[0].getContext("2d");

        let myRadarChart = new chart(ctx, {
          type: "radar",
          data: {
            labels: info.labels,
            datasets: info.datasets,
          },
          options: {
            responsive: true,
            scale: {
              ticks: {
                  suggestedMin: 0,
                  suggestedMax: 20,
                  stepSize: 2
              }
            },
            /*plugins: {
              filler: {
                propagate: false
              },
              'samples-filler-analyser': {
                target: 'chart-analyser'
              }
            },
            interaction: {
              intersect: false
            }*/
          },
        });
        
      }
    }
    document.addEventListener("GrapheAggregatMatiereLoadData", function(event) { 
      initGrapheAggregatMatiere("#stacked-radar-chart-matiere",event.detail);
    });
  </script>
  <script wire:ignore type="text/javascript">
    function initGrapheTauxReussite(selector,info) {
      if ($(selector).length) {
        let ctx = $(selector)[0].getContext("2d");
        console.log(info);
        let myBarChart = new chart(ctx, {
          type: "horizontalBar",
          data: {
            labels: info.labels,
            datasets: info.datasets,
          },
          options: {
            responsive: true,
            scales: {
                xAxes: [{
                    ticks: {
                      suggestedMin: 0,
                      suggestedMax: 100,
                      beginAtZero: false
                    }
                }]
            },
            plugins: {
              legend: {
                display: 'false',
              },
            },
          },
        });
      }
    }
    document.addEventListener("GrapheTauxReussiteLoadData", function(event) { 
      initGrapheTauxReussite("#taux-reussite-bar-chart",event.detail);
    });
  </script>
</div>
