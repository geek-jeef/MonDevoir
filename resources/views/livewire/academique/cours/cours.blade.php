<section>
  <div class="intro-y flex flex-col sm:flex-row items-center mt-8 print:hidden">
    <h2 class="text-lg font-medium mr-auto">Cours</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <a
        class="btn btn-outline-primary relative justify-start rounded-full pr-12" 
        data-tw-toggle="modal" 
        data-tw-target="#formulaire-creation-cours" > 
        Enregistrer Une Cours
        <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5 text-xl font-bold ">
          <x-icon name="plus" class="hover:animate-pulse w-6 h-6" solid />
        </span>
      </a>
    </div>
  </div>
  <div class="intro-y box p-5 mt-5 z-[45]">
    <div class="flex flex-col sm:flex-row sm:items-end xl:items-start print:hidden" >
      <form id="CoursTabulator-html-filter-form" class="xl:flex sm:mr-auto" >
        <livewire:widget.picker.cycle-classe-salle-picker eventToFired="changeCoursTableSetting"  />
      </form>
      <div class="flex mt-5 sm:mt-0 self-end">
        <button id="CoursTabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2">
          <x-icon  name="printer" class="w-4 h-4 mr-2" /> Imprimer
        </button>
        <div class="dropdown w-1/2 sm:w-auto">
          <button class="dropdown-toggle items-center w-full btn btn-outline-secondary sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown">
            <x-icon name="share" class="w-4 h-4 mr-2" />Export
          </button>
          <div class="dropdown-menu w-40">
            <ul class="dropdown-content">
              <li>
                <a id="CoursTabulator-export-xlsx" href="javascript:;" class="dropdown-item">
                  <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Exporter Excel
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="" >
      <x-print.page-header :titre="$titre" />
      <div wire:ignore>
        <div id="CoursTabulator" class="mt-5 soft-scrollbar table-report table-report--tabulator print:p-4"></div>
        <x-empty-state id="CoursTabulatorEmpty"  />
      </div>
      <x-print.page-footer />
    </div>
  </div>

  <script type="text/javascript" id="cours-tables-tabulator-option">
    var coursTablesOptions = {
        ajaxURL: "{{route('data.cours')}}",
        ajaxData : "{{json_encode(array('cycle' => $cycle , 'classe' => $classe , 'salle' => $salle ))}}"
    };
  </script>

  <script wire:ignore type="text/javascript" id="eleve-tables-tabulator-option">
  document.addEventListener("DOMContentLoaded", function(event) { 

    if ($("#CoursTabulator").length) {
      /*
          {
            "id":1,
            "jour":"Lundi",
            "heure_debut":"07:00:00",
            "heure_fin":"08:00:00",
            "nom_du_cours":"Anglais Avec Paucek Schroeder",
            "salle":{
              "id":11,
              "nom_salle":"3\u00e8me A"
            },
            "enseignant":{
              "id":1,
              "nom_complet":"Paucek Schroeder",
              "phone":"+19405431001",
              "genre":"Feminin"
            },
            "matiere":{
              "id":170,
              "nom_matiere":"Anglais",
              "nom_matiere_court":"Anglais",
              "coeficient":2
            },
            "classe":{
              "id":11,
              "nom_classe":"Troisi\u00e8me",
              "nom_court":"3\u00e8me",
              "serie":null
            },
            "annee":{
              "id":1,
              "nom_annee":"2021-2022"
            },
            "cycle":{
              "id":2,
              "nom_cycle":"Coll\u00e8ge"
            }
          }

      */

      // Setup Tabulator
      let myUrl = window.location.origin + "/datatables/cours";
      let myData = {cycle:null,classe:null,salle:null};

      if (typeof coursTablesOptions !== 'undefined') {
        myUrl = coursTablesOptions['ajaxURL'];
        myData = coursTablesOptions['ajaxData']
      }

      let table = new Tabulator("#CoursTabulator", {
        ajaxURL: myUrl,
        ajaxParams: myData, //ajax parameters
        ajaxFiltering: false,
          ajaxSorting: false,
          printAsHtml: true,
          printStyled: true,
          printHeader: document.getElementById("header_for_print"),
          printFooter: document.getElementById("footer_for_print"),
          pagination: "local",
          paginationSize: 40,
          paginationSizeSelector: [20, 40 ,60, 80, 100,200,300,500,1000,1500],
          layout: "fitColumns",
          responsiveLayout: "collapse",
          placeholder: document.getElementById("CoursTabulatorEmpty"),
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
            headerSort: false,
          },

          {
            title: "ID",
            minWidth: 50,
            maxWidth: 75,
            field: "id",
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
          },

          // For HTML table
          {
            title: "Temps",
            minWidth: 150,
            responsive: 0,
            field: "jour",
            vertAlign: "middle",
            print: true,
            download: true,
            headerFilter:true,
            formatter(cell, formatterParams) {
              return `<div>
                <div class="font-medium whitespace-nowrap">${
                  cell.getData().jour
                }</div>
                <div class="text-slate-500 text-xs whitespace-nowrap">${
                  cell.getData().heure_debut + ' à ' + cell.getData().heure_fin
                }</div>
              </div>`;
            },
          },

          {
            title: "heure_debut",
            minWidth: 100,
            responsive: 0,
            field: "heure_debut",
            vertAlign: "middle",
            visible: false,
            print: false,
            download: true,
            formatter(cell, formatterParams) {
              return `<div>
                <div class="font-medium whitespace-nowrap">${
                  cell.getData().heure_debut
                }</div>
              </div>`;
            },
          },

          {
            title: "heure_fin",
            minWidth: 100,
            responsive: 0,
            field: "heure_fin",
            vertAlign: "middle",
            visible: false,
            print: false,
            download: true,
            formatter(cell, formatterParams) {
              return `<div>
                <div class="font-medium whitespace-nowrap">${
                  cell.getData().heure_fin
                }</div>
              </div>`;
            },
          },


          {
            title: "Nom du Cours",
            minWidth: 150,
            responsive: 0,
            field: "nom_du_cours",
            vertAlign: "middle",
            print: true,
            download: true,
            headerFilter:true,
            formatter(cell, formatterParams) {
              return `<div>
                <div class="font-medium whitespace-nowrap">${
                  cell.getData().matiere.nom_matiere
                }</div>
                <div class="text-slate-500 text-xs whitespace-nowrap">${
                  cell.getData().enseignant.nom_complet
                }</div>
              </div>`;
            },
          },
          {
            title: "Classe",
            minWidth: 150,
            responsive: 0,
            field: "classe.nom_classe",
            vertAlign: "middle",
            print: true,
            download: true,
            headerFilter:true,
            formatter(cell, formatterParams) {
              return `<div>
                <div class="font-medium whitespace-nowrap">${
                  cell.getData().classe.nom_classe
                }</div>
                <div class="text-slate-500 text-xs whitespace-nowrap">${
                  cell.getData().cycle.nom_cycle
                }</div>
              </div>`;
            },
          },
          
          {
            title: "Salle",
            minWidth: 150,
            responsive: 0,
            field: "salle.nom_salle",
            vertAlign: "middle",
            print: true,
            download: true,
            headerFilter:true,
            formatter(cell, formatterParams) {
              return `<div>
                <div class="font-medium whitespace-nowrap">${
                  cell.getData().salle.nom_salle
                }</div>
                
              </div>`;
            },
          },
          
          {
            title: "Matiere",
            minWidth: 150,
            responsive: 0,
            field: "matiere.nom_matiere",
            vertAlign: "middle",
            print: true,
            download: true,
            headerFilter:true,

            formatter(cell, formatterParams) {
              return `<div>
                <div class="font-medium whitespace-nowrap">${
                  cell.getData().matiere.nom_matiere
                }</div>
                <div class="text-slate-500 text-xs mt-1 whitespace-nowrap">
                  <span class="px-2 py-1 rounded-full bg-primary text-white mr-1">Coefficient : ${ cell.getData().matiere.coeficient } </span>
                </div>
              </div>`;
            },
          },
          {
            title: "Enseignant",
            minWidth: 150,
            responsive: 0,
            field: "enseignant.nom_complet",
            vertAlign: "middle",
            print: true,
            download: true,
            headerFilter:true,
            formatter(cell, formatterParams) {
              return `<div class="flex">
                        <div class="w-10 h-10 image-fit zoom-in mr-2">
                          <img alt="" data-action="zoom" class="tooltip rounded-full" src="${ cell.getData().enseignant.image }" title="${cell.getData().enseignant.nom_complet }"> 
                        </div>
                        <div class="whitespace-nowrap self-center">
                          <div class="font-medium whitespace-nowrap">${ cell.getData().enseignant.nom_complet }</div>
                          <div class="text-slate-500 text-xs whitespace-nowrap">${ cell.getData().enseignant.phone }</div>
                        </div>
                      </div>`;
            },
          },
          
        ],
        renderComplete() {
          feather.replace({
            "stroke-width": 1.5,
          });
        },
        ajaxResponse:function(url, params, response){
            //url - the URL of the request
            //params - the parameters passed with the request
            //response - the JSON object returned in the body of the response.
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

      window.addEventListener("CoursTabulator-Data-Change", event => {
        table.setData(event.detail);
      });

      window.addEventListener("CoursTabulator-Data-Change-Array", event => {
        table.replaceData(event.detail.data);
      });


      $("#CoursTabulator-export-xlsx").on("click", function (event) {
        window.XLSX = xlsx;
        table.download("xlsx", "Liste-Cours.xlsx", {
          sheetName: "Cours",
        });
      });

      $("#CoursTabulator-print").on("click", function (event) {
        table.print();
      });
    }

  });
  </script>

  <div id="formulaire-creation-cours" class="modal modal-slide-over print:hidden" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <a data-tw-dismiss="modal" href="javascript:;">
                  <x-icon name="x" class="w-8 h-8 text-slate-400" />
              </a>
              <div class="modal-header">
                  <h2 class="font-medium text-base mr-auto">Enregistrer Un Cours</h2>
              </div>
              <div class="modal-body">
                  <livewire:forms.cours.create-cours-form />
              </div>
              <div class="modal-footer w-full bottom-0">
                  <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
              </div>
          </div>
      </div>
  </div>
</section>
