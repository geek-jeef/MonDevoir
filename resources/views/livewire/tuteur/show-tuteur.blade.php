<section>
  <div wire.ignore class="intro-y flex items-center mt-3">
    <h2 class="text-lg font-medium mr-auto">Tuteur</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
@if($tuteur)
  <div class="intro-y box px-5 pt-5 mt-5">
    <div wire.ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar', [ \Hp::avatar($tuteur->nom)] ) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 sm:whitespace-normal font-medium text-lg">{{ $tuteur->nom }} </div>
          <div class="text-slate-500">{{ $tuteur->profession }} </div>
          <div class="tooltip truncate sm:whitespace-normal flex items-center mt-2" title="Sexe">
            <img src="{{asset('dist/images/gender.svg')}}"  class="w-4 h-4 mr-2" />
            <span class="{{ ($tuteur->genre == 'Masculin')   ? 'text-blue-700 dark:text-blue-500'   : 'text-pink-700 dark:text-pink-500'}}"> {{$tuteur->genre}}</span>
          </div>

          @if($tuteur->adresse)
          <div title="Adresse" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <x-icon name="map" class="w-4 h-4 mr-2" /> <a href="mailto:{{$tuteur->adresse}}"></a> {{$tuteur->adresse}}
          </div>
          @endif
        </div>
      </div>
      {{--
            $table->unsignedInteger('user_id')->nullable();
            $table->string('nom');
            $table->string('phone_primaire',15)->nullable();
            $table->string('phone_secondaire',15)->nullable();
            $table->enum('genre', ["Masculin","Feminin"])->default("Masculin");
            $table->string('email')->nullable();
            $table->string('adresse',500)->nullable();
            $table->string('profession')->nullable();
            $table->json('data')->nullable();
            $table->boolean('active')->default(true);
      --}}
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Contact</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">

          @if($tuteur->phone_primaire)
          <div title="Telephone" class="tooltip truncate sm:whitespace-normal flex items-center">
            <x-icon name="phone" class="w-4 h-4 mr-2" /> <a href="tel:{{$tuteur->phone_primaire}}"></a> {{$tuteur->phone_primaire}}
          </div>
          @endif

          @if($tuteur->phone_secondaire)
          <div title="Telephone" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <x-icon name="phone" class="w-4 h-4 mr-2" /> <a href="tel:{{$tuteur->phone_secondaire}}"></a> {{$tuteur->phone_secondaire}}
          </div>
          @endif

          @if($tuteur->email)
          <div title="Email" class="tooltip truncate sm:whitespace-normal flex items-center mt-3">
            <x-icon name="mail" class="w-4 h-4 mr-2" /> <a href="mailto:{{$tuteur->email}}"></a> {{$tuteur->email}}
          </div>
          @endif

        </div>
      </div>
    </div>

    <ul wire:ignore class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">

      @foreach($menus as $menu)
      <li id="menu-tuteur-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-tuteur-{{$menu['id']}}"
          aria-controls="menu-tuteur-{{$menu['id']}}"
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
      wire:key="menu-tuteur-pane-key-{{$menu['id']}}" 
      id="menu-tuteur-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-tuteur-{{$menu['id']}}-tab">

      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-tuteur-pane-content-key-{{$menu['id']}}">
          {{$menu['titre']}}
          @if($currentMenu['id'] == 1)
            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">{{$menu['titre']}}</h2>
                </div>
              </div>
              <div class="p-5 wrapper">
                <x-errors class="mb-4"/>
                <div class=".flex flex-col-reverse xl:flex-row flex-col">
                  <form wire:submit.prevent="update">
                    <div class="mt-3">
                      <label  class="form-label">Nom et Prénoms</label>
                      <input type="text" class="form-control" wire:model.defer="tuteur.nom">
                    </div>
                    <div class="mt-3">
                      <label class="form-label">Numéro de télephone Principal</label>
                      <x-input wire:model.defer="tuteur.phone_primaire" />
                    </div>
                    <div class="mt-3">
                      <label class="form-label">Numéro de télephone Secondaire</label>
                      <x-input wire:model.defer="tuteur.phone_secondaire" />
                    </div>
                    <div class="mt-3">
                      <x-select
                        label="Sexe"
                        placeholder="Choisir Le Sexe"
                        wire:model.defer="tuteur.genre" required>
                        <x-select.option label="Masculin" value="Masculin" />
                        <x-select.option label="Feminin" value="Feminin" />
                      </x-select>
                    </div>
                    <div class="mt-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" wire:model.defer="tuteur.email" placeholder="example@gmail.com">
                    </div>
                    <div class="mt-3">
                      <label  class="form-label">Adresse</label>
                        <textarea class="form-control" rows="2" wire:model.defer="tuteur.adresse"></textarea>
                    </div>
                    <div class="mt-3">
                      <label  class="form-label">Profession</label>
                      <input type="text" class="form-control" wire:model.defer="tuteur.profession">
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="submit">Enregister</button>
                    </div>
                  </form>
                </div>
              </div>
            </div> 
            <div wire:loading class="text-center w-full" >
              <x-loading />
            </div>
          @elseif($currentMenu['id'] == 2)
               <div class="intro-y box mt-5">
                <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                  <div class="flex items-center">
                    <h2 class="font-medium text-base mr-auto">Eleves</h2>
                  </div>
                </div>
                <div  class="px-5 sm:px-20 py-10 border-t border-slate-200/60 dark:border-darkmode-400">
                  <div class="">
                    <table class="table table-bordered table-hover table-striped">
                      <thead class="table-primary">
                        <tr>
                          <th class="whitespace-nowrap">#</th>
                          <th class="whitespace-nowrap">Nom</th>
                          <th class="whitespace-nowrap">Inscription</th>
                          <th class="whitespace-nowrap">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($tuteur->eleves as $eleve)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                              <div class="flex items-center">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                  <img class=" zoom-in" src="{{$eleve->image}}">
                                </div>
                                <div class="ml-4 mr-auto">
                                  <div class="font-medium {{($eleve->genre == "Masculin")   ? "text-blue-700 dark:text-blue-500"   : "text-pink-700 dark:text-pink-500"}} ">{{$eleve->nom_complet}}</div>
                                  <div class="text-slate-500 text-xs mt-0.5">Né(e) {{$eleve->info_naissance}}</div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="flex items-center">
                                <div class="ml-4 mr-auto">
                                  <div class="font-medium">
                                    {{$eleve->description}}
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              <div class="flex justify-around items-center gap-2">
                                <a class="edit flex items-center text-danger" href="javascript:;" onclick="
                                  window.$wireui.confirmDialog({
                                    title: 'Afficher le Profil?',
                                    description: `Afficher le Profil de : {{$eleve->nom_complet}} `,
                                    icon: 'question',
                                    accept: {
                                        label: 'Oui, Afficher',
                                        url: @js(route('eleve.show',[$eleve->id])) ,
                                    },
                                    reject: {
                                        label: 'Non, Annuler',
                                    }
                                })">
                                  <x-icon name="eye" class="w-4 h-4 mr-1" /> Profil
                                </a>
                                
                              </div>
                            </td>
                          </tr>
                        @empty
                          <x-small-empty-state message="Aucun Eleve Associé" />
                        @endforelse
                      </tbody>
                    </table>
                  </div>                  
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
@endif
</section>
