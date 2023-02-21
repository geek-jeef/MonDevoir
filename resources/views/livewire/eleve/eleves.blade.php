<section>
  <div wire:ignore class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Elèves</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <a href="{{ route('eleve.create') }}" class="btn btn-primary shadow-md mr-2">Enregistrer Un Elève</a>
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
                  
                  <form wire:submit.prevent="scopeEleve" class="col-span-12 grid grid-cols-12 pb-3 border-b">
                    <div class="col-span-10">
                      <x-select label="Liste d'Eleves à Afficher" placeholder="Choisir" wire:model.defer="filtre_type">
                        <x-select.option label="Inscrit" value="Inscrit" description="Eleves inscrits cette année Uniquement" />
                        <x-select.option label="Non-Inscrit" value="Non-Inscrit" description="Anciens Eleves" />
                        <x-select.option label="Tous" value="Tous" description="Tous les Elèves enregistrés" />
                        <x-select.option label="Supprimé" value="Supprimé" description="Tous les Elèves supprimés" />


                      </x-select>
                    </div>
                    <div class="col-span-2 self-end">
                      <button class="btn btn-primary ml-2">OK</button>
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
                      <input class="form-check-input" wire:model="filtre_column_image" type="checkbox">
                      <label class="form-check-label" >Afficher Image</label>
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
                      <input class="form-check-input" wire:model="filtre_column_nationalite" type="checkbox">
                      <label class="form-check-label" >Afficher La Nationalité</label>
                    </div>
                  </div>

                  <div class="col-span-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" wire:model="filtre_column_adresse" type="checkbox">
                      <label class="form-check-label" >Afficher Adresse</label>
                    </div>
                  </div>
                  <div class="col-span-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" wire:model="filtre_column_description" type="checkbox">
                      <label class="form-check-label" >Afficher Information d'Inscription</label>
                    </div>
                  </div>

                  {{--<div class="col-span-12 flex items-center mt-3">
                    <button class="btn btn-secondary w-32 ml-auto">Réinitialiser</button>
                    <button class="btn btn-primary w-32 ml-2">Valider</button>
                  </div>
                  --}}

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <form id="EleveTabulator-html-filter-form" class="xl:flex" >
        @if( (!$filtre_type) || ($filtre_type == 'Inscrit' ) )
          <livewire:widget.picker.cycle-classe-salle-picker eventToFired="changeEleveTableSetting"  />
        @else
          <div class="font-semibold text-base uppercase">
            {{$titre}}
          </div>
        @endif
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
          <div class="uppercase underline text-xl font-bold whitespace-nowrap decoration-1 decoration-double underline-offset-4"> {{$titre}} </div>
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

  <script type="text/javascript">
    var elevesTablesOptions = {
      ajaxURL: "{{route('data.eleves')}}",
    };
  </script>

  <script wire:ignore type="text/javascript" id="eleve-tables-tabulator-option">
  document.addEventListener("DOMContentLoaded", function(event) { 
    (function () {
      "use strict";

      if ($("#EleveTabulator").length) {
        // Setup Tabulator
        let myUrl = window.location.origin + "/datatables/eleves";
        let myData = {cycle:null,classe:null,salle:null};

        if (typeof elevesTablesOptions !== 'undefined') {
          myUrl = elevesTablesOptions['ajaxURL'];
        }


        var excelAccessor = function(value, data, type, params, column, row){
          return data[column._column.definition.title]?? undefined;
        }

        let table = new Tabulator("#EleveTabulator", {
          ajaxURL: myUrl,
          ajaxParams: myData,
          ajaxFiltering: false,
          ajaxSorting: false,
          printAsHtml: true,
          printStyled: true,
          printHeader: document.getElementById("header_for_print"), // set header content on printed table
          printFooter: document.getElementById("footer_for_print"), // set header content on printed table

          pagination: "local",
          paginationSize: 40,
          paginationSizeSelector: [10, 20, 30 ,40, 70, 100,200],
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
          columns: [
            {
              formatter: "responsiveCollapse",
              width: 40,
              minWidth: 30,
              hozAlign: "center",
              resizable: true,
              headerSort: true,
            },

            // For HTML table
              {
                title: "id",
                field: "download-id",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return cell.getData().id;
                },
              },
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
                title: "Image",
                minWidth: 50,
                maxWidth: 100,
                field: "image",
                hozAlign: "center",
                vertAlign: "middle",
                visible: @js($filtre_column_image),
                download: false,
                formatter(cell, formatterParams) {
                    return `
                    <div class="flex lg:justify-center">
                      <div class="intro-x w-10 h-10 image-fit">
                        <img alt="" data-action="zoom" class="rounded-full" src="${cell.getData().image}">
                      </div>
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
                title: "Nationalité",
                minWidth: 60,
                field: "nationalite",
                hozAlign: "center",
                vertAlign: "middle",
                visible: @js($filtre_column_nationalite),
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `<div class="flex items-center lg:justify-center"> ${cell.getData().nationalite}
                  </div>`;
                },
              },
              {
                title: "nationalite",
                field: "download-nationalite",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return cell.getData().nationalite;
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
                        ${new Date(cell.getData().date_de_naissance).toLocaleDateString('en-GB')}
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
                    return cell.getData().date_de_naissance;
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
                title: "Adresse",
                minWidth: 200,
                field: "adresse",
                hozAlign: "center",
                vertAlign: "middle",
                visible: @js($filtre_column_adresse),
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `<div class="flex items-center lg:justify-center whitespace-normal"> ${cell.getData().adresse}
                  </div>`;
                },
              },
              {
                title: "adresse",
                field: "download-adresse",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return cell.getData().adresse;
                },
              },

              {
                title: "Inscription",
                minWidth: 50,
                field: "description",
                hozAlign: "center",
                vertAlign: "middle",
                print: function(column){
                  return column.isVisible();
                },
                download: false,
                headerFilter:true,
                formatter(cell, formatterParams) {
                  return `<div class="flex items-center font-medium lg:justify-center whitespace-normal"> ${cell.getData().description}
                  </div>`;
                },
              },
              {
                title: "description",
                titleDownload:"inscription",
                field: "download-description",
                visible: false,
                print: false,
                download: true,
                accessorDownload:excelAccessor,
                formatter(cell, formatterParams) {
                    return cell.getData().description;
                },
              },

              {{--,
              {
                title: "Inscription",
                minWidth: 50,
                field: "description",
                hozAlign: "center",
                vertAlign: "middle",
                print: false,
                download: false,
                formatter(cell, formatterParams) {
                  return `<div class="flex items-center lg:justify-center ${
                    cell.getData().active
                      ? "text-success"
                      : "text-danger"
                  }">
                    <i data-feather="check-square" class="w-4 h-4 mr-2"></i> ${
                      cell.getData().active ? "Active" : "Inactive"
                    }
                  </div>`;
                },
              }
              --}}


              {
                title: "Actions",
                minWidth: 100,
                field: "actions",
                responsive: 1,
                hozAlign: "center",
                vertAlign: "middle",
                print: false,
                download: false,
                formatter(cell, formatterParams) {
                  let profil_url = window.location.origin + "/eleve/"+cell.getData().id ;
                  let a =
                    $(`<div class="flex lg:justify-center items-center">
                    <a class="edit flex items-center mr-3" href="${profil_url}">
                      <i data-feather="eye" class="w-4 h-4 mr-1"></i> Profil
                    </a>
                    
                  </div>`);

                  return a[0];
                },
              },

          ],
          renderComplete() {
            feather.replace({
              "stroke-width": 1.5,
            });
          },
          ajaxResponse:function(url, params, response){
              return response.data; //return the tableData property of a response json object
          },
        });
        
        // Redraw table onresize
        window.addEventListener("resize", () => {
          table.redraw();
          feather.replace({
            "stroke-width": 1.5,
          });
        });

        window.addEventListener("EleveTabulator-Data-Change", event => {
          
          table.setData(event.detail);
        });

        window.addEventListener("EleveTabulator-Data-Change-Array", event => {
          table.replaceData(event.detail.data);
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



        

        /*

        // Filter function
        

        function filterHTMLForm() {
          let field = $("#EleveTabulator-html-filter-field").val();
          let type = $("#EleveTabulator-html-filter-type").val();
          let value = $("#EleveTabulator-html-filter-value").val();
          table.setFilter(field, type, value);
        }

        // On submit filter form
        $("#EleveTabulator-html-filter-form")[0].addEventListener(
          "keypress",
          function (event) {
            let keycode = event.keyCode ? event.keyCode : event.which;
            if (keycode == "13") {
              event.preventDefault();
              filterHTMLForm();
            }
          }
        );

        // On click go button
        $("#EleveTabulator-html-filter-go").on("click", function (event) {
          filterHTMLForm();
        });

        // On reset filter form
        $("#EleveTabulator-html-filter-reset").on("click", function (event) {
          $("#EleveTabulator-html-filter-field").val("name");
          $("#EleveTabulator-html-filter-type").val("like");
          $("#EleveTabulator-html-filter-value").val("");
          filterHTMLForm();
        });

        */

        // Export
        /*$("#EleveTabulator-export-csv").on("click", function (event) {
          table.download("csv", "Liste-Eleve.csv");
        });

        $("#EleveTabulator-export-json").on("click", function (event) {
          table.download("json", "Liste-Eleve.json");
        });*/

        $("#EleveTabulator-export-xlsx").on("click", function (event) {
          window.XLSX = xlsx;
          table.download("xlsx", "Liste-Eleve.xlsx", {
            sheetName: "Eleves",
          });
        });

        /*$("#EleveTabulator-export-html").on("click", function (event) {
          table.download("html", "Liste-Eleve.html", {
            style: true,
          });
        });*/

        // Print
        $("#EleveTabulator-print").on("click", function (event) {
          table.print();
        });
      }


    })();
  });
  </script>
</section>
