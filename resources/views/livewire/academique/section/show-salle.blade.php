<section >
  <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Salle</h2>
  </div>

  <div class="intro-y box px-5 pt-5 mt-5">
    <div wire:ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', [$salle->nom_salle] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $salle->nom_salle }}
            <div class="text-slate-500 text-xs">Salle de Classe /<span class="mx-2">{{ $salle->info_salle }} </span></div>
          </div>
          <div title="Enseignant Titulaire" class="tooltip flex flex-col justify-center items-center lg:items-start mt-4 ">
            <a href="javascript:;"  class="flex" onclick=" var ask = window.confirm('Afficher Le profil de  {{ $salle->titulaire()}} ?');if (ask) { window.location.href = '{{route('personnel.show',[$salle->enseignant_id] )}}';};" >
              <div class="w-10 h-10 image-fit rounded-full zoom-in mr-2">
                <img alt="" data-action="zoom" class="tooltip rounded-full w-8 h-8" src="{{ route('avatar',[$salle->titulaire()]) }}" title="{{ $salle->titulaire() }}"> 
              </div>
              <div class="whitespace-nowrap self-center font-bold">
                {{$salle->titulaire()}}
              </div>
            </a>            
          </div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Information</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div title="Année Scolaire" class="tooltip truncate sm:whitespace-normal flex items-center">
            <i data-feather="calendar" class="w-4 h-4 mr-2"></i> {{$salle->annee()->first()->nom_annee}}
          </div>
          <div title="Cycle Scolaire / Classe" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <i data-feather="git-merge" class="w-4 h-4 mr-2"></i> {{$salle->cycle()->first()->nom_cycle}} / {{$salle->classe()->first()->nom_classe}}
          </div>
          <div title="Capacité" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <i data-feather="users" class="w-4 h-4 mr-2"></i> {{$salle->effectif()}}  sur  {{$salle->capacite}}
          </div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
        @foreach($stats as $stat)
        <div class="text-center rounded-md w-20 py-3">
          <div class="font-medium text-primary text-xl">{{$stat['valeur']}}</div>
          <div class="text-slate-500">{{$stat['texte']}}</div>
        </div>
        @endforeach
      </div>
    </div>
    <ul wire:ignore class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">
      @foreach($menus as $menu)
      <li id="menu-salle-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-salle-{{$menu['id']}}"
          aria-controls="menu-salle-{{$menu['id']}}"
          aria-selected="{{($menu['id'] == $currentMenu['id'] )? 'true' : 'false'}}"
          role="tab"
        >
          <i class="w-4 h-4 mr-2" data-feather="{{$menu['icon']}}"></i> {{$menu['titre']}}
        </button>
      </li>
      @endforeach
    </ul>
  </div>
  <div class="tab-content mt-5">
    @foreach($menus as $menu)
      <div
        wire:key="menu-salle-pane-key-{{$menu['id']}}" 
        id="menu-salle-{{$menu['id']}}" 
        class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
        role="tabpanel" aria-labelledby="menu-salle-{{$menu['id']}}-tab">

        @if(($menu['id'] == $currentMenu['id'] ))
          <div wire:key="menu-salle-pane-content-key-{{$menu['id']}}">
            @if($currentMenu['id'] == 1)
              <div wire:loading.remove class="intro-y box lg:mt-5 ">
                <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">{{$menu['titre']}}</h2>
                  </div>
                </div>
                <div class="p-5 wrapper">
                  <form wire:submit.prevent="update">
                    <x-errors class="mb-4"/>
                    <div class="mt-3">
                      <h2> La salle sera créee Pour la classe : {{$salle->classe->nom_classe}} </h2>
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="salle.nom_salle" label="Nom de la salle" placeholder="Nom de la salle" required />
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="salle.info_salle" label="Information sur la Salle" placeholder="Information sur la Salle" />
                    </div>
                    <div class="mt-3">
                      <x-input.input-lockable wire:model.defer="salle.capacite" label="Capacité de la Salle" type="number" min="1" />
                    </div>
                    <div class="mt-3">
                        <x-select
                            label="Choisir Un Enseignant Titulaire"
                            wire:model.defer="salle.enseignant_id"
                            placeholder="Choisir un Enseignant"
                            :async-data="route('api.enseignants.index')"
                            :template="[
                                'name'   => 'user-option',
                                'config' => ['src' => 'profile_image']
                            ]"
                            option-label="nom_complet"
                            option-value="id"
                            option-description="phone"
                        />
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                  </form> 
                </div>
              </div> 
              <div wire:loading class="text-center w-full" >
                <x-loading />
              </div>
            @elseif($currentMenu['id'] == 2)
              <div class="intro-y box p-5 mt-5 z-[45]">
                <div class="flex flex-col sm:flex-row sm:items-end xl:items-start justify-between">
                  <div class="intro-y flex flex-col-reverse sm:flex-row items-center self-end">
                    <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">          
                      <div class=" dropdown" data-tw-placement="bottom-start">
                        <button class="dropdown-toggle items-center w-full btn btn-outline-secondary sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown">
                          Options <x-icon name="chevron-down" class="w-4 h-4 ml-2" />
                        </button>
                        <div class="w-96 dropdown-menu pt-2">
                          <div class="dropdown-content">
                            <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
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
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <form id="EleveTabulator-html-filter-form" class="xl:flex" >
                    <div class="font-semibold text-base uppercase">
                      {{$titre}}
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
                  <x-print.page-header :titre="$titre" />
                  <div wire:ignore>
                    <div id="EleveTabulator" class="mt-5 soft-scrollbar table-report table-report--tabulator print:p-4"></div>
                    <x-empty-state id="EleveTabulatorEmpty"  />
                  </div>
                  <x-print.page-footer />
                </div>
              </div>
              <script type="text/javascript">
                var elevesTablesOptions = {
                  ajaxURL: `{{route('data.eleves')}}`,
                };
              </script>
              <script wire:ignore type="text/javascript" id="eleve-tables-tabulator-option">
                (function () {
                  "use strict";
                  if ($("#EleveTabulator").length) {
                    let myUrl = window.location.origin + "/datatables/eleves";
                    let myData = {cycle: @js($salle->cycle->id) ,classe: @js($salle->classe->id),salle: @js($salle->id) };
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

                    $("#EleveTabulator-export-xlsx").on("click", function (event) {
                      window.XLSX = xlsx;
                      table.download("xlsx", @js($titre.'.xlsx'), {
                        sheetName: @js($salle->nom_academique),
                      });
                    });

                    $("#EleveTabulator-print").on("click", function (event) {
                      table.print();
                    });
                  }
                })();
              </script>
            @elseif($currentMenu['id'] == 3)
              @php
                $devoirs = App\Models\Devoir::where('salle_id',$this->salle->id)->orderBy('devoirs.matiere_id')->orderByDesc('created_at')->get() ;
              @endphp
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
                <table class="table table-report -mt-2">
                <thead>
                  <tr>
                  <th class="whitespace-nowrap">ID</th>
                  <th class="text-center">Nom Devoir</th>
                  <th class="text-center whitespace-nowrap">Ponderation</th>
                  <th class="text-center whitespace-nowrap">Matiere</th>
                  <th class="text-center whitespace-nowrap">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($devoirs as $devoir)
                  <tr class="intro-x">
                    <td class="text-center">{{$devoir->id}}</td>
                    <td>
                    <a href="javascript:;" class="font-medium">{{ $devoir->nom_devoir}}</a>
                    </td>
                    <td class="text-center">{{$devoir->ponderation}}</td>
                    <td class="text-center whitespace-nowrap">{{$devoir->matiere->nom_matiere}}</td>
                    <td class="table-report__action w-56">
                      <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                          window.$wireui.confirmDialog({
                            title: 'Modifier les Notes?',
                            description: 'pour le devoir {{$devoir->nom_devoir}} ?',
                            icon: 'question',
                            accept: {
                                label: 'Oui, Modifier les Notes',
                                color: 'primary',
                                url: '{{route('devoir.show',$devoir->id)}}',
                            },
                            reject: {
                                label: 'Non, Annuler',
                                method: 'cancel'
                            }
                          })"
                        >
                          <x-icon name="pencil" class="w-4 h-4 mr-1" />Modifier les Notes
                        </a>
                        <a class="flex items-center mr-3 text-danger whitespace-nowrap" href="javascript:;">
                          <x-icon name="trash" class="w-4 h-4 mr-1" />Supprimer
                        </a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
              </div>
            @elseif($currentMenu['id'] == 4)
              @php
                $resultats = App\Models\ResultatExamen::select(['examen_id','classe_id', 'salle_id', ])
                                                    ->selectRaw('max(max_moyenne_salle) as max_moyenne ')
                                                    ->selectRaw('min(min_moyenne_salle) as min_moyenne ')
                                                    ->selectRaw('avg(avg_moyenne_salle) as avg_moyenne ')
                                                    ->groupBy(['examen_id', 'classe_id', 'salle_id', ])
                                                    ->having('salle_id',$salle->id)
                                                    ->get();
              @endphp
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
                <table class="table table-report -mt-2">
                <thead>
                  <tr>
                  <th class="whitespace-nowrap">#</th>
                  <th class="text-center">Examen</th>
                  <th class="text-center whitespace-nowrap">Moyenne Min</th>
                  <th class="text-center whitespace-nowrap">Moyenne Classe</th>
                  <th class="text-center whitespace-nowrap">Moyenne Max</th>
                  <th class="text-center whitespace-nowrap">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($resultats as $resultat)
                  <tr class="intro-x">
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>
                      <a href="javascript:;" class="flex">
                        <div class="self-center w-10 h-10 image-fit mr-2">
                          <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar', [\Hp::avatar($resultat->examen->nom_examen)])}}" title="{{ $resultat->examen->nom_examen}}" />
                        </div>
                        <div class="self-center ml-5 hover:text-primary hover:font-bold">
                          <div class="font-medium whitespace-nowrap hover:text-primary hover:font-bold">{{ $resultat->examen->nom_examen}}</div>
                          <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                            {{ $resultat->examen->periode->nom_periode}} <span class="mx-2">( {{$salle->nom_salle}} )</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td class="text-center whitespace-nowrap font-bold text-red-700">
                      {{$resultat->min_moyenne}} / 20
                    </td>
                    <td class="text-center whitespace-nowrap font-bold text-primary">
                      {{$resultat->avg_moyenne}} / 20
                    </td>
                    <td class="text-center whitespace-nowrap font-bold text-emerald-700">
                      {{$resultat->max_moyenne}} / 20
                    </td>
                    <td class="table-report__action w-56">
                      <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                          window.$wireui.confirmDialog({
                            title: 'Afficher les resultats?',
                            description: `Pour {{ $resultat->examen->nom_examen}} ({{$resultat->salle->nom_salle}})?` ,
                            icon: 'question',
                            accept: {
                                label: 'Oui, Afficher',
                                color: 'primary',
                                url: '{{route('resultat.examen.all',[$resultat->examen_id , $resultat->classe_id])}}',
                            },
                            reject: {
                                label: 'Non, Annuler',
                                method: 'cancel'
                            }
                          })"
                        >
                          <x-icon name="eye" class="w-4 h-4 mr-1" />Resultats
                        </a>
                        <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                          window.$wireui.confirmDialog({
                            title: 'Afficher les bulletins?',
                            description: `Pour {{ $resultat->examen->nom_examen}} ({{$resultat->salle->nom_salle}})?` ,
                            icon: 'question',
                            accept: {
                                label: 'Oui, Afficher',
                                color: 'primary',
                                url: '{{route('bulletin.examen',[$resultat->examen_id , $resultat->classe_id])}}',
                            },
                            reject: {
                                label: 'Non, Annuler',
                                method: 'cancel'
                            }
                          })"
                        >
                          <x-icon name="document" class="w-4 h-4 mr-1" />Bulletins
                        </a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
              </div> 
            @elseif($currentMenu['id'] == 5)
              @php
              $enseignants = App\Models\Cours::select(['enseignant_id' ,'matiere_id', 'salle_id' ])
                                            ->selectRaw('count(id) as nb')
                                            ->groupBy(['enseignant_id' ,'matiere_id', 'salle_id' ])
                                            ->having('salle_id',$salle->id)
                                            ->get() ;
              debug($enseignants);
              @endphp
              <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">      
                <table class="table table-report -mt-2">
                <thead>
                  <tr>
                  <th class="whitespace-nowrap">#</th>
                  <th class="text-center">Enseignant</th>
                  <th class="text-center whitespace-nowrap">Nbre de Cours/Sémaine</th>
                  <th class="text-center whitespace-nowrap">Matiere</th>
                  <th class="text-center whitespace-nowrap">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($enseignants as $data)
                  <tr class="intro-x">
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>
                      <a href="javascript:;" class="flex">
                        <div class="self-center w-10 h-10 image-fit mr-2">
                          <img alt="" class="tooltip rounded-full  zoom-in" src="{{ route('avatar', [\Hp::avatar($data->enseignant->nom_complet)])}}" title="{{ $data->enseignant->nom_complet}}" />
                        </div>
                        <div class="self-center ml-5 hover:text-primary hover:font-bold">
                          <div class="font-medium whitespace-nowrap hover:text-primary hover:font-bold">{{ $data->enseignant->nom_complet}}</div>
                          <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                            {{ $data->enseignant->description}}
                          </div>
                        </div>
                      </a>
                    </td>
                    <td class="text-center">
                      {{$data->nb}}
                    </td>
                    <td class="text-center">
                      {{$data->matiere->nom_matiere}}
                    </td>
                    <td class="table-report__action w-56">
                      <div class="flex justify-center items-center">
                        <a class="flex items-center mr-3 text-primary whitespace-nowrap" href="javascript:;" onclick="
                          window.$wireui.confirmDialog({
                            title: 'Afficher le Profil?',
                            description: `Pour {{ $data->enseignant->nom_complet}}?` ,
                            icon: 'question',
                            accept: {
                                label: 'Oui, Afficher',
                                color: 'primary',
                                url: '{{route('personnel.show',[$data->enseignant_id])}}',
                            },
                            reject: {
                                label: 'Non, Annuler',
                                method: 'cancel'
                            }
                          })"
                        >
                          <x-icon name="eye" class="w-4 h-4 mr-1" />Voir le Profil
                        </a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
              </div>
            @elseif($currentMenu['id'] == 6)

            <div class="grid grid-cols-12 gap-6">
              <div wire:loading class="col-span-12 text-center w-full" >
                <x-loading />
              </div>
              <div wire:loading.remove class="col-span-12 intro-y box lg:mt-5 ">
                <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Ecolage</h2>
                  </div>
                </div>
                <div class="p-5 wrapper">
                  <div>
                    @php
                      $systeme =  ($salle->systemeEcolage) ? $salle->systemeEcolage : $salle->classe->systemeEcolage;
                      $systeme =  ($systeme) ? $systeme : $salle->classe->cycle->systemeEcolage;
                    @endphp
                    @if($systeme)
                      <table class="table table-bordered">
                        <thead class="table-light">
                          <tr>
                            <th class="whitespace-nowrap">#</th>
                            <th class="whitespace-nowrap">Information</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Systeme de Payement</td>
                            <td>{{$systeme->titre}}
                              @if(!$salle->systemeEcolage)
                              <span class="mx-2" >  | herité de 
                                @if($salle->classe->systemeEcolage) 
                                <a class="text-primary" href="{{route('academique.classe.show',[$salle->classe->id])}}"> {{$salle->classe->nom_classe}} </a>
                                @else
                                <a class="text-primary" href="{{route('academique.cycle.show',[$salle->classe->cycle->id])}}"> {{$salle->classe->cycle->nom_cycle}} </a>
                                @endif 
                              </span>  
                              @endif
                            </td>
                          </tr>
                          <tr>
                            <td>Description</td>
                            <td>{{$systeme->description}}</td>
                          </tr>
                          <tr>
                            <td>Montant</td>
                            <td class="text-primary font-bold"> {{$systeme->montant}} FCFA</td>
                          </tr>
                          <tr>
                            <td>Frais d'Inscription</td>
                            <td class="text-primary font-bold"> {{$systeme->inscription}} FCFA</td>
                          </tr>
                        </tbody>
                      </table>
                    @else
                    <x-small-empty-state message="Aucun Systeme de Payement Enregistré" />
                    @endif
                  </div>
                  <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 my-7">
                    <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Changer Systeme de Payement Ecolage </div>
                  </div>
                  <x-errors class="mb-4"/>
                  <div class=".flex flex-col-reverse xl:flex-row flex-col">
                    <form wire:submit.prevent="setSystemeEcolage">
                      <div class="mt-3">
                        <x-select-lockable 
                          label="Systeme de Payement Ecolage" 
                          :options="App\Models\SystemeEcolage::actuel()->get()->toArray()" 
                          option-label="titre" 
                          option-value="id"
                          option-description="montant" 
                          wire:model.defer="systeme_ecolage_id"
                          required />
                      </div>
                      <div class="mt-3">
                        <button class="btn btn-primary" type="submit">Choisir</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div> 
              
              <div wire:loading.remove class="col-span-12 lg:col-span-6 mt-8">
                <livewire:graphe.payement.progression-inscription :academique="$salle" />
              </div>
              <div wire:loading.remove class="col-span-12 lg:col-span-6 mt-8">
                <livewire:graphe.payement.progression-payement :academique="$salle" />
              </div>
            </div>

            @endif
            
          </div>
        @else
        <x-loading />
        @endif

      </div>
    @endforeach
  </div>

</section>