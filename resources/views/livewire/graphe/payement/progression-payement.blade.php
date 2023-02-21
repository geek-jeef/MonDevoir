<section wire:init="loadData">
  <div class="intro-y flex items-center h-10">
    <h2 class="text-lg font-medium truncate mr-5">Progression Des Ecolages</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
  <div class="intro-y box p-5 mt-5">
    <div class="mb-4 text-center">
      <h2 class="font-bold">Progression Ecolage - {{$this->academique->nom_academique}} </h2>
    </div>
    <div class="flex justify-center">
      <canvas wire:ignore class="mt-3" id="{{$this->eventCustom}}" height="400"></canvas>
    </div>
    <div class="mt-4">
      
        @if(isset($information['self']))
        <table class="table table-report--tabulator table-bordered table-striped">
          <thead>
            <th>{{$information['self']['nom_academique']}}</th>
            <th>Montant</th>
            <th>%</th>
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
            </tr>
            @endforeach
          </tbody>
        </table>
        @endif

        @if($this->academique->has_academique_children && isset($information['child']))
          <button class="ml-auto flex items-center text-primary my-1" data-tw-toggle="modal" data-tw-target="#progression-ecolage-academique-{{Str::slug($academique->nom_academique)}}">
            <x-icon name="view-grid-add" class="hover:animate-pulse w-4 h-4 mr-3" /> Voir les Details
          </button>

          <div id="progression-ecolage-academique-{{Str::slug($academique->nom_academique)}}" class="modal modal-slide-over" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <a data-tw-dismiss="modal" href="javascript:;">
                    <x-icon name="x" class="w-8 h-8 text-slate-400" />
                </a>
                <div class="modal-header p-5">
                  <h2 class="font-medium text-base mr-auto">Progression Ecolage - {{$this->academique->nom_academique}}</h2>
                </div>
                <div class="modal-body">
                  @if(isset($information['child']))
                    @foreach($information['child'] as $child)
                      <table class="table table-report--tabulator table-bordered table-striped mb-4">
                        <thead>
                          <th>{{$child['nom_academique']}}</th>
                          <th>Montant</th>
                          <th>%</th>
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

    </div>
  </div>
  <script wire:ignore type="text/javascript">
    function initGrapheProgressionEcolage(selector,info) {
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
                  colors.warning(0.8),
                ],
                hoverBackgroundColor: [
                  colors.primary(1.0),
                  colors.warning(1.0),
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
    document.addEventListener(@js($this->eventCustom), function(event) {
      console.log('event');
      console.log(event);
      initGrapheProgressionEcolage(@js('#'.$this->eventCustom),event.detail);
    });
  </script>
</section>
