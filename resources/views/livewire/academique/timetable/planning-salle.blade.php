<section >
  <div class="intro-y flex flex-col sm:flex-row items-center mt-8 print:hidden">
    <h2 class="text-lg font-medium mr-auto">Emploi Du Temps Par Classe </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <div class="dropdown">
        <button class="dropdown-toggle btn btn-primary px-2 " aria-expanded="false" data-tw-toggle="dropdown">
          <span class="w-5 h-5 flex items-center justify-center">
           <x-icon class="w-4 h-4" name="share" /> 
          </span>
        </button>
        <div class="dropdown-menu w-40 print:hidden">
          <ul class="dropdown-content print:hidden">
            <li>
              <a  onclick="window.print()" href="javascript:;" class="dropdown-item">
                <x-icon name="printer" class="w-4 h-4 mr-2" /> Imprimer
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="grid grid-cols-12 gap-5 mt-5 print:hidden">
    <div class="col-span-12 xl:col-span-12 2xl:col-span-12">
      <div class="box p-2">
        <livewire:widget.picker.cycle-classe-salle-picker eventToFired="onChangementClasseForPlanning" />
      </div>
    </div>
  </div> 

  <style type="text/css">
    #planningClasseTable .fc-event{
      border-color: rgb(var(--color-primary));
      background-color: rgb(var(--color-primary));
    }
    #planningClasseTable .fc-event-main{
      font-weight: 600;
      color: white;
    }
    #planningClasseTable table{
      border-width: 2px;
    }
    @media print {
      #planningClasseTable > div.fc-header-toolbar.fc-toolbar.fc-toolbar-ltr {
        display: none;
        margin: 0px;
        padding: 0px;
        width: 0px;
      }
      #planningClasseTable .fc-event{
        border-color: rgb(var(--color-primary));
        background-color: rgb(var(--color-primary)/0.1);
      }
      #planningClasseTable .fc-event-main{
        font-weight: 600;
        color: black;
      }
    }
  </style>

  <div class="flex justify-center print:p-0 print:m-0">
    <div class="mt-5 print:mt-0 print:p-5 print:shadow-none" style="width:29.6cm">
      <div class="print:p-0 print:m-0">
        <x-print.page-header :titre="$titre" />
        <div wire:ignore class="box p-5 print:p-0 print:my-2 print:shadow-none">
          <div class="full-calendar" id="planningClasseTable"></div>
        </div>
        <x-print.page-footer />
      </div>
    </div>
  </div>




  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event){
      (function () {
        if ($("#planningClasseTable").length) {
           
          var options = {
            locale: calendarFrLocale,
            allDaySlot : false,
            hiddenDays : @this.hiddenDays,

            plugins: [
              timeGridPlugin,
            ],
            headerToolbar: {
              left: "today",
              right: "timeGridWeek,timeGridDay",
            },
            navLinks: true,
            editable: false,
            events: [] ,
            
            eventMinHeight : 'fit-content',
            height: 'auto',
            contentHeight: 'auto',
            expandRows: true,
            handleWindowResize : true,
            windowResizeDelay: 10,
            slotEventOverlap : true,
            slotMinTime : "{{config('panel.calendar.start_time')}}",
            slotMaxTime : "{{config('panel.calendar.end_time')}}",
            slotDuration : '00:15:00' ,
            dayHeaderFormat : { weekday: 'long', omitCommas: true },
            
          }

          let planningClasseTable = new Calendar($("#planningClasseTable")[0], options );

          planningClasseTable.render();

         

          window.addEventListener('onChangementClasseForPlanningBrowser', event => {
              planningClasseTable.setOption('events', event.detail);
          });

        }
      })();
    })
  </script>

</section>