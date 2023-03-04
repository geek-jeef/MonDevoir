<div wire:init="loadData" class="col-span-12 sm:col-span-6 lg:col-span-4 mt-8">
                      <div class="intro-y flex items-center h-10">
                          <h2 class="text-lg font-medium truncate mr-5">Repartition Coefficient</h2>
                          <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
                            <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
                          </button>
                      </div>
                      <div class="intro-y box py-2 mt-5">
                          <canvas wire:ignore class="my-2 w-full" height="400" id="repartition-coefficient-chart" ></canvas>
                      </div>
  <script wire:ignore type="text/javascript">
    function initGrapheRepartitionCoefficientMatiere(selector,info) {
      if ($(selector).length) {
        let ctx = $(selector)[0].getContext("2d");
        let myPieChart = new chart(ctx, {
          type: "pie",
          data: {
            labels: info.labels,
            datasets: [
              {
                data: info.data ,
                backgroundColor: info.color,
                hoverBackgroundColor: info.hover,
                borderWidth: 3,
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
                position: 'top',
              },
            },
          },
        });
      }
    }
    document.addEventListener("GrapheRepartitionCoefficientMatiereLoadData", function(event) { 
      initGrapheRepartitionCoefficientMatiere("#repartition-coefficient-chart",event.detail);
    });
  </script>
</div>
