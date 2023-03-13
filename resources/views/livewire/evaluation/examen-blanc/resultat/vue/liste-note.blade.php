<section wire:init="loadListeData" class="col-span-12">
  <div wire:ignore class="intro-y flex flex-col sm:flex-row items-center mt-4">
    <h2 class="text-lg font-medium mr-auto">Liste des Notes</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <button wire:click="loadListeData()" class="ml-auto flex items-center">
        <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
      </button>
    </div>
  </div>

  <div class="intro-y box p-5 mt-5 z-[45]">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start justify-between print:hidden">
      <div class="intro-y flex flex-col-reverse sm:flex-row items-center self-end">
        <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">          
          <div class=" dropdown" data-tw-placement="bottom-start">
            <button class="dropdown-toggle items-center w-full btn btn-outline-secondary sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown">
              Options <x-icon name="chevron-down" class="w-4 h-4 ml-2" />
            </button>
            <div class="w-96 dropdown-menu pt-2">
              <div class="dropdown-content">
                <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                  <form wire:submit.prevent="scopeEtablissement" class="col-span-12 grid grid-cols-12 pb-3 border-b">
                    <div class="col-span-10">
                      <x-select label="Liste d'Eleves à Afficher" placeholder="Choisir" wire:model.defer="filtre_etablissement">
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
                  <div class="col-span-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" wire:model="filtre_column_id" type="checkbox">
                      <label class="form-check-label" >Afficher Numero Matricule</label>
                    </div>
                  </div>
                  <div class="col-span-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" wire:model="filtre_column_nom_prenoms" type="checkbox">
                      <label class="form-check-label" >Combiner les Nom et Prénoms</label>
                    </div>
                  </div>
                  <div class="col-span-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" wire:model="filtre_column_genre" type="checkbox">
                      <label class="form-check-label" >Afficher Sexe des Eleves</label>
                    </div>
                  </div>
                  <div class="col-span-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" wire:model="filtre_column_naissance" type="checkbox">
                      <label class="form-check-label" >Afficher Date/Lieu de Naissance</label>
                    </div>
                  </div>
                  <div class="col-span-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" wire:model="filtre_column_etablissement" type="checkbox">
                      <label class="form-check-label" >Afficher L'ecole de provenance</label>
                    </div>
                  </div>
                  <div class="col-span-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" wire:model="filtre_column_salle" type="checkbox">
                      <label class="form-check-label" >Afficher La Salle</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <form id="EleveTabulator-html-filter-form" class="xl:flex" >
        <div class="font-semibold text-base uppercase">
          {{$examen->nom_examen}} - {{$titre}}
        </div>
      </form>
      <div class="flex mt-5 sm:mt-0 self-end">
        <button id="EleveTabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2">
          <x-icon  name="printer" class="w-4 h-4 mr-2" /> Imprimer
        </button>
        <div class="dropdown w-1/2 sm:w-auto">
          <button class="dropdown-toggle items-center w-full btn btn-outline-secondary sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown">
            <x-icon name="share" class="w-4 h-4 mr-2" />Export
          </button>
          <div class="dropdown-menu w-40">
            <ul class="dropdown-content">
              <li>
                <a id="EleveTabulator-export-xlsx" href="javascript:;" class="dropdown-item">
                  <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exporter Excel
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="" >
      <div id="header_for_print" class="hidden print:block print:p-0">
        <header wire:ignore class="grid grid-cols-12 gap-3 pt-4 px-4 hidden print:grid print:p-0">
          <div class="col-span-4  place-self-center">
            <div class="flex justify-center">
              <img src="{{asset('assets/logo-ecole/logo1.png')}}" class="h-12 w-auto">
            </div>
          </div>
          <div class="col-span-8 flex-col justify-center">
            <div>
              <div class="flex justify-center">
                <span class="whitespace-nowrap text-base font-semibold" data-nom_ecole >{{$parametres_generaux->nom_ecole}}</span>
              </div>
              <div class="text-center text-xs">
                <span class="whitespace-nowrap" data-programme >{{$parametres_generaux->programme}}</span>
              </div>
              <div class=" flex justify-center">
                <div class="text-center text-xs">
                  <span class="whitespace-nowrap mx-2" data-postal >{{$parametres_generaux->poste}} - {{$parametres_generaux->ville}}</span>
                  <span class="whitespace-nowrap mx-2" data-phones > Tel: {{$parametres_generaux->telephone1}} {{ ($parametres_generaux->telephone2)? ' / '.$parametres_generaux->telephone2 : '' }} </span>
                  <span class="whitespace-nowrap mx-2" data-mail >Email: <a href="mailto:{{$parametres_generaux->email}}">{{$parametres_generaux->email}}</a></span>
                </div>
              </div>
            </div>
          </div>
        </header>
        <div class="whitespace-nowrap text-center">
          <div class="uppercase underline text-xl font-bold whitespace-nowrap decoration-1 decoration-double underline-offset-4"> {{$examen->nom_examen}} - {{$titre}} </div>
        </div>
      </div>
      <div wire:ignore>
        <div id="EleveTabulator" class="mt-5 soft-scrollbar table-report table-report--tabulator print:p-4"></div>
        <x-empty-state id="EleveTabulatorEmpty"  />
      </div>
      <div id="footer_for_print" class="hidden print:flex justify-between print:py-2">
        <div class="p-2 font-bold text-xs hidden print:block"> {{ \Hp::annee()->nom_annee }} </div>
        <div class="p-2 font-bold text-xs hidden print:block"> {{ $parametres_generaux->nom_ecole }} </div>
        <div class="p-2 font-bold text-xs hidden print:block"> {{ now() }} </div>
      </div>
    </div>
  </div>

  <script wire:ignore type="text/javascript">
    function initListeEleveExamenBlanc(selector,info) {
      if ($(selector).length) {
        var excelAccessor = function(value, data, type, params, column, row){
          return data[column._column.definition.title]?? undefined;
        }
        var arrayAccessor = function(value, data, type, params, column, row){
          const getEntries = (o, prefix = '') => 
            Object.entries(o).flatMap(([k, v]) => 
              Object(v) === v  ? getEntries(v, `${prefix}${k}.`) : [ [`${prefix}${k}`, v] ]
            );
          return Object.fromEntries(getEntries(data))[params['target']] ;
        }
        var nestedColumnCreator = function(data,index){
          definition = [];

          data.forEach(function callback(element, key) {
            definition.push(
              {title: element, field:`${index}.${key}.note`, hozAlign:"right", sorter:"number",}
            );
          });

          return definition;
        }

        let table = new Tabulator("#EleveTabulator", {
          data: info.data,
          printAsHtml: true,
          printStyled: true,
          printHeader: document.getElementById("header_for_print"), // set header content on printed table
          printFooter: document.getElementById("footer_for_print"), // set header content on printed table
          pagination: "local",
          paginationSize: 20,
          paginationSizeSelector: [10, 20, 30 ,50, 70, 100,200],
          layout: "fitColumns",
          responsiveLayout: "collapse",
          placeholder: document.getElementById("EleveTabulatorEmpty"),
          locale: "fr",
          langs:{
            "fr":{
                  "groups": {
                    "item": "élément",
                    "items": "éléments"
                  },
                  "columns": {},
                  "ajax": {
                    "loading": "Chargement",
                    "error": "Erreur"
                  },
                  "pagination": {
                    "page_size": "Nombre d'element",
                    "page_title": "Page ",
                    "first": "Premier",
                    "first_title": "Première page",
                    "last": "Dernier",
                    "last_title": "Dernière page",
                    "prev": "Précedent",
                    "prev_title": "Page Précedent",
                    "next": "Suivant",
                    "next_title": "Page Suivante",
                    "all": "Tout"
                  },
                  "headerFilters": {
                    "default": "filtrer...",
                    "columns": {}
                  }
                },
          },
          //autoColumns:true,
          columns: [
            {
              formatter: "responsiveCollapse",
              width: 40,
              minWidth: 30,
              hozAlign: "center",
              resizable: true,
              headerSort: true,
            },
            // BEGIN For HTML table //
              {
                title: "ID",
                minWidth: 50,
                maxWidth: 100,
                field: "id",
                hozAlign: "center",
                vertAlign: "middle",
                visible: @js($filtre_column_id),
                download: false,
                formatter(cell, formatterParams) {
                    return `
                    <div class="flex font-medium">
                      ${cell.getData().id}
                    </div>`;
                },
              },
              {
                title: "Nom et Prénoms",
                minWidth: 120,
                responsive: 0,
                field: "nom_complet",
                vertAlign: "middle",
                visible: @js($filtre_column_nom_prenoms),
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `<div>
                    <div class="font-medium whitespace-nowrap ${ (cell.getData().genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"} ">${
                      cell.getData().nom
                    }</div>
                    <div class="text-slate-500 text-xs whitespace-nowrap">${
                      cell.getData().prenoms
                    }</div>
                  </div>`;
                },
              },           
              {
                title: "Nom",
                minWidth: 60,
                responsive: 0,
                field: "nom",
                vertAlign: "middle",
                visible: @js(!$filtre_column_nom_prenoms),
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `
                  <div>
                    <div class="font-medium whitespace-nowrap ${ (cell.getData().genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"} ">${
                      cell.getData().nom
                    }</div>
                  </div>`;
                },
              },
              {
                title: "Prénoms",
                minWidth: 60,
                responsive: 0,
                field: "prenoms",
                vertAlign: "middle",
                visible: @js(!$filtre_column_nom_prenoms),
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `
                  <div>
                    <div class="font-medium whitespace-nowrap ${ (cell.getData().genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"} ">${
                      cell.getData().prenoms
                    }</div>
                  </div>`;
                },
              },
              {
                title: "nom",
                field: "download-nom",
                vertAlign: "middle",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return cell.getData().nom;
                },
              },
              {
                title: "prenoms",
                field: "download-prenoms",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return cell.getData().prenoms;
                },
              },
              {
                title: "Genre",
                minWidth: 50,
                field: "genre",
                hozAlign: "center",
                vertAlign: "middle",
                visible: @js($filtre_column_genre),
                download: false,
                headerFilter:'select',
                headerFilterParams:{
                  values:["Masculin", "Feminin"], //an array of values or value/label objects
                  clearable:true,
                },
                formatter(cell, formatterParams) {
                  return `<div class="flex items-center lg:justify-center ${ (cell.getData().genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"}"> ${cell.getData().genre}
                  </div>`;
                },
              },
              {
                title: "genre",
                field: "download-genre",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return cell.getData().genre;
                },
              },
              {
                title: "Naissance",
                minWidth: 75,
                field: "info_naissance",
                hozAlign: "center",
                vertAlign: "middle",
                visible: @js($filtre_column_naissance),
                print: function(column){
                  return column.isVisible();
                },
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `
                  <div>
                    <div class="font-medium whitespace-nowrap">
                        ${new Date(cell.getData().date_de_naissance).toLocaleDateString('fr-FR')}
                    </div>
                    <div class="text-slate-500  whitespace-nowrap">${
                      cell.getData().lieu_de_naissance
                    }</div>
                  </div>`;
                },
              },
              {
                title: "date_de_naissance",
                field: "download-date_de_naissance",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return  new Date(cell.getData().date_de_naissance).toLocaleDateString('fr-FR');
                },
              },
              {
                title: "lieu_de_naissance",
                field: "download-lieu_de_naissance",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return cell.getData().lieu_de_naissance;
                },
              },
              {
                title: "Etablissements",
                minWidth: 120,
                responsive: 0,
                field: "etablissement",
                vertAlign: "middle",
                visible: @js($filtre_column_etablissement),
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `<div>
                    <div class="font-medium whitespace-nowrap">${
                      cell.getData().etablissement.nom_etablissement_court
                    } ${ (cell.getData().data.salle)? '| '+ cell.getData().data.salle : '' } </div>
                    <div class="text-slate-500 text-xs whitespace-nowrap">${
                      cell.getData().etablissement.nom_etablissement
                    }</div>
                  </div>`;
                },
              },           
              {
                title: "nom_etablissement",
                field: "download-nom_etablissement",
                vertAlign: "middle",
                visible: false,
                print: false,
                download: true,
                accessorDownload:arrayAccessor,
                accessorDownloadParams:{target:'etablissement.nom_etablissement'},
                formatter(cell, formatterParams) {
                    return cell.getData().etablissement.nom_etablissement;
                },
              },
              {
                title: "nom_etablissement_court",
                field: "download-nom_etablissement_court",
                visible: false,
                print: false,
                download: true,
                accessorDownload:arrayAccessor,
                accessorDownloadParams:{target:'etablissement.nom_etablissement_court'},
                formatter(cell, formatterParams) {
                    return cell.getData().etablissement.nom_etablissement_court;
                },
              },
              {
                title: "Salle",
                field: "data.salle",
                hozAlign: "center",
                vertAlign: "middle",
                visible: @js($filtre_column_salle),
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `<div class="flex items-center lg:justify-center whitespace-normal"> ${cell.getData().data.salle}
                  </div>`;
                },
              },
              {
                title: "data.salle",
                field: "download-data.salle",
                visible: false,
                print: false,
                download: true,
                accessorDownload:arrayAccessor,
                accessorDownloadParams:{target:'data.salle'},
                formatter(cell, formatterParams) {
                    return cell.getData().data.salle;
                },
              },
              {
                title: "Moyenne",
                field: "moyenne.valeur",
                hozAlign: "center",
                vertAlign: "middle",
                visible: true,
                download: true,
                headerFilter:true,
                accessorDownload:arrayAccessor,
                accessorDownloadParams:{target:'moyenne.valeur'},
                formatter(cell, formatterParams) {
                  return `<div class="flex items-center lg:justify-center whitespace-normal font-bold"> ${ parseFloat(cell.getData().moyenne.valeur).toFixed(2) }
                  </div>`;
                },
              },
              {
                title: "Rang",
                field: "moyenne.rang",
                hozAlign: "center",
                vertAlign: "middle",
                visible: true,
                download: true,
                headerFilter:true,
                accessorDownload:arrayAccessor,
                accessorDownloadParams:{target:'moyenne.rang'},
                formatter(cell, formatterParams) {
                  return `<div class="flex items-center lg:justify-center whitespace-normal font-bold"> ${cell.getData().moyenne.rang}
                  </div>`;
                },
              },
              {//create column group
                title:"Matieres",
                columns: nestedColumnCreator(info.matieres,'matieres'),
              }
            // END For HTML table //
          ],

          renderComplete() {
            feather.replace({
              "stroke-width": 1.5,
            });
          },
        });
        
        // Redraw table onresize
        window.addEventListener("resize", () => {
          table.redraw();
          feather.replace({
            "stroke-width": 1.5,
          });
        });

        window.addEventListener("EleveTabulator-ToggleColumn-Visibility", event => {
          var name_of_column = event.detail ;
          table.toggleColumn(name_of_column);
          table.redraw();
          feather.replace({
            "stroke-width": 1.5,
          });
        });

        window.addEventListener("EleveTabulator-hideColumn-Visibility", event => {
          var name_of_column = event.detail ;
          table.hideColumn(name_of_column);
          table.redraw();
          feather.replace({
            "stroke-width": 1.5,
          });
        });

        window.addEventListener("EleveTabulator-showColumn-Visibility", event => {
          var name_of_column = event.detail ;
          table.showColumn(name_of_column);
          table.redraw();
          feather.replace({
            "stroke-width": 1.5,
          });
        });
        
        $("#EleveTabulator-export-xlsx").on("click", function (event) {
          window.XLSX = xlsx;
          table.download("xlsx", "Liste-Notes-Examen-Blanc.xlsx", {
            sheetName: "Notes - Examen Blanc",
          });
        });

        // Print
        $("#EleveTabulator-print").on("click", function (event) {
          table.print();
        });
      }
    }
    document.addEventListener("ListeEleveExamenBlancLoadData", function(event) { 
      initListeEleveExamenBlanc("#EleveTabulator",event.detail);
    });
  </script>
</section>
