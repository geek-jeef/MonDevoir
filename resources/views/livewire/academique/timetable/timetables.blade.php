<section>
  <div wire:ignore class="intro-y flex flex-col sm:flex-row items-center mt-8 print:hidden">
    <h2 class="text-lg font-medium mr-auto">Emploi Du Temps</h2>
    {{--<div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <button class="btn btn-primary shadow-md mr-2">Print Schedule</button>
      <div class="dropdown ml-auto sm:ml-0">
        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
          <span class="w-5 h-5 flex items-center justify-center">
            <i class="w-4 h-4" data-feather="plus"></i>
          </span>
        </button>
        <div class="dropdown-menu w-40">
          <ul class="dropdown-content">
            <li>
              <a href="" class="dropdown-item">
                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
              </a>
            </li>
            <li>
              <a href="" class="dropdown-item">
                <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>--}}
  </div>
  <div class="grid grid-cols-12 gap-5 mt-5 print:hidden">
    <div class="col-span-12 xl:col-span-12 2xl:col-span-12">
      <div class="box p-2">
        <livewire:widget.picker.cycle-classe-salle-picker eventToFired="onChangementTimetables" />
      </div>
    </div>
  </div>

  <div wire:ignore class="mt-5 print:m-0 print:p-0 print:shadow-none">
    <!-- BEGIN: Calendar Content -->
    <div class="">
      <x-print.page-header titre="Emploi Du Temps" />
      <div class="box p-5 print:p-3 print:shadow-none">
        <div class="full-calendar" id="calendar"></div>
      </div>
      <x-print.page-footer />
    </div>
    <!-- END: Calendar Content -->
  </div> 

  <script wire:ignore type="text/javascript">
    document.addEventListener("livewire:load", function(event){
      (function () {
        if ($("#calendar").length) {
          var data = @this.events; 
          const WEEK_DAYS = ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'];
          var options = {
            locale: calendarFrLocale,
            allDaySlot : false,
            hiddenDays : @this.hiddenDays,
            plugins: [
              interactionPlugin,timeGridPlugin,
            ],
            headerToolbar: {
              left: "today",
              right: "timeGridWeek,timeGridDay",
            },
            navLinks: true,
            editable: true,
            selectable: true,
            events: JSON.parse(data) , //'http://mondevoir.school/api/timetables/enseignants/4' ,
            eventColor: 'rgb(var(--color-primary))',
            eventMinHeight : 'fit-content',
            slotEventOverlap : true,
            slotMinTime : "{{config('panel.calendar.start_time')}}",
            slotMaxTime : "{{config('panel.calendar.end_time')}}",
            slotDuration : '00:15:00' ,
            dayHeaderFormat : { weekday: 'long', omitCommas: true },
            /*dateClick: function(info) {
              console.log(info);
              alert('clicked ' + info.dateStr);
            },*/
            select: function(info) {
                window.$wireui.confirmNotification({
                  title: 'Ajouter un Cours?',
                  description: `Le ${ WEEK_DAYS[info.start.getDay()]} de ${ dayjs(info.startStr).format('HH:mm')} à ${ dayjs(info.endStr).format('HH:mm')}`,
                  icon: 'question',
                  timeout : 0 ,
                  accept: {
                      label: 'Oui',
                      execute: ( function(){
                        let record = { 
                          debut : dayjs(info.startStr).format('HH:mm'),
                          fin : dayjs(info.endStr).format('HH:mm'),
                          jour : info.start.getDay(),
                          cycle : @this.cycle_id,
                          classe : @this.classe_id,
                          salle : @this.salle_id,
                        }
                        Livewire.emitTo('forms.cours.add-cours-form', 'nouveauCours', record);
                      }),
                  },
                  reject: {
                      label: 'Non',
                  }
                }, @this.id);
              //alert('selected ' + info.startStr + ' to ' + info.endStr);
            },
            droppable: true, // this allows things to be dropped onto the calendar
            eventDrop: function(info) {
              console.log(info.event);
              console.log(info.oldEvent);

              window.$wireui.confirmDialog({
                  title: `Deplacer le cours: ${info.event.title} ?`,
                  description: `De ${ WEEK_DAYS[info.oldEvent.start.getDay()]} ( ${ dayjs(info.oldEvent.startStr).format('HH:mm')} / ${ dayjs(info.oldEvent.endStr).format('HH:mm')} ) vers ${ WEEK_DAYS[info.event.start.getDay()]} ( ${ dayjs(info.event.startStr).format('HH:mm')} / ${ dayjs(info.event.endStr).format('HH:mm')} )`,
                  icon: 'question',
                  timeout : 0 ,
                  accept: {
                      label: 'Oui',
                      execute: ( function(){
                        let record = { 
                          debut : (info.event.startStr) ? dayjs(info.event.startStr).format('HH:mm') : null,
                          fin : (info.event.endStr) ? dayjs(info.event.endStr).format('HH:mm') : null,
                          jour : info.event.start.getDay(),
                          id : info.event.id,
                        }
                        Livewire.emitTo('forms.cours.add-cours-form', 'ancienCours', record);
                      }),
                  },
                  reject: {
                      label: 'No, cancel',
                      execute: ( function(){
                        Livewire.emit('refreshTimetablesView');
                      }),
                  }
                }, @this.id);

              
              //info => .eventDrop(info.event, info.oldEvent , info),
              //Livewire.emitTo('academique.cours.show-cours', 'show-cours-modal', info.event);
            },
            eventClick: function(info) {
              info.jsEvent.preventDefault(); // don't let the browser navigate
              Livewire.emitTo('academique.cours.show-cours', 'show-cours-modal', info.event);
            },
            eventMaxStack : 1,
            dayPopoverFormat : { weekday: 'long', omitCommas: true },

          }

          var calendar = new Calendar($("#calendar")[0], options );
          calendar.render();

          window.addEventListener('refreshTimetables', info => {
              calendar.setOption('events',JSON.parse(info.detail));
          });

        }
      })();
    })

  </script>

  <div id="formulaire-ajout-cours" class="modal print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Formulaire Cours</h2>
        </div>
        <div class="modal-body bg-slate-100 dark:bg">
          <livewire:forms.cours.add-cours-form />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>

  <div id="modal-afficher-cours" class="modal print:hidden" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <a data-tw-dismiss="modal" href="javascript:;">
          <x-icon name="x" class="w-8 h-8 text-slate-400"/>
        </a>
        <div class="modal-header">
          <h2 class="font-medium text-base mr-auto">Cours</h2>
        </div>
        <div class="modal-body">
          <livewire:academique.cours.show-cours />
        </div>
        <div class="modal-footer w-full bottom-0">
          <button type="button" data-tw-dismiss="modal" class="btn btn-outline-danger w-20 mr-1">Fermer</button>
        </div>
      </div>
    </div>
  </div>

{{--  @push('scripts')    
    <script>
        document.addEventListener('livewire:load', function() {
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;
            var calendarEl = document.getElementById('calendar');
            var checkbox = document.getElementById('drop-remove');
            var data =   @this.events;
            var calendar = new Calendar(calendarEl, {
            events: JSON.parse(data),
            dateClick(info)  {
               var title = prompt('Enter Event Title');
               var date = new Date(info.dateStr + 'T00:00:00');
               if(title != null && title != ''){
                 calendar.addEvent({
                    title: title,
                    start: date,
                    allDay: true
                  });
                 var eventAdd = {title: title,start: date};
                 @this.addevent(eventAdd);
                 alert('Great. Now, update your database...');
               }else{
                alert('Event Title Is Required');
               }
            },
            editable: true,
            selectable: true,
            displayEventTime: false,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            },
            eventDrop: info => @this.eventDrop(info.event, info.oldEvent),
            loading: function(isLoading) {
                    if (!isLoading) {
                        // Reset custom events
                        this.getEvents().forEach(function(e){
                            if (e.source === null) {
                                e.remove();
                            }
                        });
                    }
                }
            });
            calendar.render();
            @this.on(`refreshCalendar`, () => {
                calendar.refetchEvents()
            });
        });
    </script>
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css' rel='stylesheet' />
@endpush
--}}
</section>
