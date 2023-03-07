<div class="intro-y box col-span-12 mt-8 lg:col-span-12">
  <div class="dark:border-darkmode-400 flex items-center border-b border-slate-200/60 px-5 py-5 sm:py-0">
    <h2 class="mr-auto text-base font-medium">Progression Saisie de Note</h2>
    <div class="dropdown ml-auto sm:hidden">
      <a class="dropdown-toggle block h-5 w-5" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
        <x-icon name="dots-horizontal" class="h-5 w-5 text-slate-500" />
      </a>
      <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
        <ul class="dropdown-content">
          <li>
            <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab"
              data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab"
              aria-controls="work-in-progress-new" aria-selected="true">Matiere</a>
          </li>
          <li>
            <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab"
              data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab"
              aria-selected="false">Etablissement</a>
          </li>
        </ul>
      </div>
    </div>
    <ul class="nav nav-link-tabs ml-auto hidden w-auto sm:flex" role="tablist">
      <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
        <a href="javascript:;" class="nav-link active py-5" data-tw-target="#work-in-progress-new"
          aria-controls="work-in-progress-new" aria-selected="true" role="tab">
          Matiere
        </a>
      </li>
      <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
        <a href="javascript:;" class="nav-link py-5" data-tw-target="#work-in-progress-last-week"
          aria-controls="work-in-progress-last-week" aria-selected="false" role="tab">
          Etablissement
        </a>
      </li>
    </ul>
  </div>
  <div class="p-5">
    <div class="tab-content">
      <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
        @forelse ($examen->matieres as $matiere)
          @php
            $progression = $matiere->progression();
          @endphp
          <div class="@if(!$loop->first) mt-4 @endif">
            <div class="flex">
              <div class="mr-auto">{{$matiere->nom_matiere}}</div>
              <div>{{$progression['notes']}} / {{$progression['effectif']}}</div>
            </div>
            <div class="progress mt-1 h-4">
              <div class="progress-bar" style="width: {{$progression['percent']}}%" role="progressbar" aria-valuenow="{{$progression['notes']}}" aria-valuemin="0" aria-valuemax="{{$progression['effectif']}}">{{$progression['percent']}}%</div>
            </div>
          </div>
        @empty
          <div class="p-5">
            <ul class="nav nav-boxed-tabs flex-col justify-center sm:flex-row" role="tablist">
              <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                <a href="javascript:;"
                  class="nav-link active mb-2 w-full py-2 px-0 text-center sm:mx-2 sm:mb-0 sm:w-40"
                  data-tw-target="#top-products-laravel" aria-controls="top-products-laravel"
                  aria-selected="true" role="tab">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-box mx-auto mb-2 block h-6 w-6">
                    <path
                      d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                    </path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                  </svg> Aucune Matiere Enregistrée
                </a>
              </li>
            </ul>
          </div>
        @endforelse
      </div>

      <div id="work-in-progress-last-week" class="tab-pane" role="tabpanel" aria-labelledby="work-in-progress-last-week-tab">
        @forelse ($examen->etablissements as $etablissement)
          @php
            $progression = $etablissement->progression();
          @endphp
          <div class="@if(!$loop->first) mt-4 @endif">
            <div class="flex">
              <div class="mr-auto">{{$etablissement->nom_etablissement}}</div>
              <div>{{$progression['notes']}} / {{$progression['effectif']}}</div>
            </div>
            <div class="progress mt-1 h-4">
              <div class="progress-bar" style="width: {{$progression['percent']}}%" role="progressbar" aria-valuenow="{{$progression['notes']}}" aria-valuemin="0" aria-valuemax="{{$progression['effectif']}}">{{$progression['percent']}}%</div>
            </div>
          </div>
        @empty
          <div class="p-5">
            <ul class="nav nav-boxed-tabs flex-col justify-center sm:flex-row" role="tablist">
              <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                <a href="javascript:;"
                  class="nav-link active mb-2 w-full py-2 px-0 text-center sm:mx-2 sm:mb-0 sm:w-40"
                  data-tw-target="#top-products-laravel" aria-controls="top-products-laravel"
                  aria-selected="true" role="tab">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-box mx-auto mb-2 block h-6 w-6">
                    <path
                      d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                    </path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                  </svg> Aucun Etablissement Enregistré
                </a>
              </li>
            </ul>
          </div>
        @endforelse
        
        {{--<a href="" class="btn btn-secondary mx-auto mt-5 block w-40">View More Details</a>--}}
      </div>
    </div>
  </div>
</div>
