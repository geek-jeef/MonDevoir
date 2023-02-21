<section wire:init="loadData">
  <div class="intro-y flex items-center h-10">
    <h2 class="text-lg font-medium truncate mr-5">Progression Des Inscriptions</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
  <div class="intro-y box p-5 mt-5">
    <div class="mb-4 text-center">
      <h2 class="font-bold">Progression Inscription - {{$this->academique->nom_academique}} </h2>
    </div>
    <div class="flex justify-center">
      <canvas wire:ignore class="mt-3" id="report-pie-chart" height="400"></canvas>
    </div>
    <div class="mt-4">
      @if(!$this->academique->has_academique_children)
        @if($information)
        <table class="table table-report--tabulator table-bordered table-striped">
          <thead>
            <th>Information</th>
            <th>Montant</th>
            <th>%</th>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                  <span class="truncate">{{$information['labels'][0]}}</span>
                </div>
              </td>
              <td><span class="font-medium">{{$information['data'][0]}}</span> FCFA</td>
              @if( ($information['data'][0]+$information['data'][1]) != 0)
              <td>{{round( (($information['data'][0]/($information['data'][0]+$information['data'][1]) *100) ), 2)}}%</td>
              @else
              <td></td>
              @endif
            </tr>
            <tr>
              <td>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-danger rounded-full mr-3"></div>
                  <span class="truncate">{{$information['labels'][1]}}</span>
                </div>
              </td>
              <td><span class="font-medium">{{$information['data'][1]}}</span> FCFA</td>
              @if( ($information['data'][0]+$information['data'][1]) != 0)
              <td>{{round( (($information['data'][1]/($information['data'][0]+$information['data'][1]) *100) ), 2)}}%</td>
              @else
              <td></td>
              @endif
            </tr>
          </tbody>
        </table>
        @endif
      @else
        @if(isset($information['self']))
        <table class="table table-report--tabulator table-bordered table-striped">
          <thead>
            <th>{{$information['self']['nom_academique']}}</th>
            <th>Montant</th>
            <th>%</th>
            <th>Effectif</th>
          </thead>
          <tbody>
            @foreach($information['self']['data'] as $info)
            <tr>
              <td>
                <div class="flex items-center">
                  <div class="w-2 h-2 bg-{{$info['color']}} rounded-full mr-3"></div>
                  <span class="truncate">{{$info['label']}}</span>
                </div>
              </td>
              <td><span class="font-medium">{{$info['value']}}</span> FCFA</td>
              <td>{{$info['percent']}}%</td>
              <td class="whitespace-nowrap">{{$info['count']}} Eleves</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        @endif

        @if(isset($information['child']))

        <button class="ml-auto flex items-center text-primary my-1" data-tw-toggle="modal" data-tw-target="#progression-inscription-academique-{{Str::slug($academique->nom_academique)}}">
          <x-icon name="view-grid-add" class="hover:animate-pulse w-4 h-4 mr-3" /> Voir les Details
        </button>

        <div id="progression-inscription-academique-{{Str::slug($academique->nom_academique)}}" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <a data-tw-dismiss="modal" href="javascript:;">
                  <x-icon name="x" class="w-8 h-8 text-slate-400" />
              </a>
              <div class="modal-header p-5">
                <h2 class="font-medium text-base mr-auto">Progression Inscription - {{$this->academique->nom_academique}}</h2>
              </div>
              <div class="modal-body">
                @if(isset($information['child']))
                  @foreach($information['child'] as $child)
                    <table class="table table-report--tabulator table-bordered table-striped mb-4">
                      <thead>
                        <th>{{$child['nom_academique']}}</th>
                        <th>Montant</th>
                        <th>%</th>
                        <th>Effectif</th>
                      </thead>
                      <tbody>
                        @foreach($child['data'] as $info)
                        <tr>
                          <td>
                            <div class="flex items-center">
                              <div class="w-2 h-2 bg-{{$info['color']}} rounded-full mr-3"></div>
                              <span class="truncate">{{$info['label']}}</span>
                            </div>
                          </td>
                          <td><span class="font-medium">{{$info['value']}}</span> FCFA</td>
                          <td>{{$info['percent']}}%</td>
                          <td class="whitespace-nowrap">{{$info['count']}} Eleves</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  @endforeach
                @endif
              </div>
            </div>
          </div>
        </div>
        @endif

      @endif
    </div>
  </div>
  <script wire:ignore type="text/javascript">
    function initGrapheProgressionInscription(selector,info) {
      if ($(selector).length) {
        let ctx = $(selector)[0].getContext("2d");
        let myPieChart = new chart(ctx, {
          type: "pie",
          data: {
            labels: info.labels,
            datasets: [
              {
                data: info.data ,
                backgroundColor: [
                  colors.primary(0.8),
                  colors.danger(0.8),
                ],
                hoverBackgroundColor: [
                  colors.primary(1.0),
                  colors.danger(1.0),
                ],
                borderWidth: 5,
                borderColor: $("html").hasClass("dark")
                  ? colors.darkmode[700]()
                  : colors.white,
              },
            ],
          },
          options: {
            responsive: false,
            plugins: {
              legend: {
                position: 'bottom',
              },
            },
          },
        });
      }
    }
    document.addEventListener("GrapheProgressionInscriptionLoadData", function(event) { 
      initGrapheProgressionInscription("#report-pie-chart",event.detail);
    });
  </script>
</section>
