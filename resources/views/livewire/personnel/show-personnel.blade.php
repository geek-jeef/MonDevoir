<section>
  <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Profil de l'Employé</h2>
  </div>
  <div class="intro-y box px-5 pt-5 mt-5">
    <div wire:ignore class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
      <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
          <img alt="" class="rounded-full" src="{{ route('avatar',[$personnel->nom_complet]) }}">
        </div>
        <div class="ml-5">
          <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $personnel->nom_complet }}</div>
          <div class="text-slate-500">{{ $personnel->designation }}</div>
        </div>
      </div>
      <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
        <div class="font-medium text-center lg:text-left lg:mt-3">Details</div>
        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
          <div class="tooltip truncate sm:whitespace-normal flex items-center" title="Sexe">
            <img src="{{asset('dist/images/gender.svg')}}"  class="w-4 h-4 mr-2" />
            <span class="{{ ($personnel->genre == 'Masculin')   ? 'text-blue-700 dark:text-blue-500'   : 'text-pink-700 dark:text-pink-500'}}"> {{$personnel->genre}}</span>
          </div>
          <div class="truncate sm:whitespace-normal flex items-center mt-3">
            <x-icon name="mail" class="w-4 h-4 mr-2" /> <a href="mailto:{{$personnel->email}}">{{ $personnel->email }}</a> 
          </div>
          <div class="truncate sm:whitespace-normal flex items-center mt-3">
            <x-icon name="phone" class="w-4 h-4 mr-2" /> <a href="tel:{{$personnel->phone}}">{{ $personnel->phone }}</a> 
          </div>
          
        </div>
      </div>
      {{--
      <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
        <div class="text-center rounded-md w-20 py-3">
          <div class="font-medium text-primary text-xl">201</div>
          <div class="text-slate-500">Orders</div>
        </div>
        <div class="text-center rounded-md w-20 py-3">
          <div class="font-medium text-primary text-xl">1k</div>
          <div class="text-slate-500">Purchases</div>
        </div>
        <div class="text-center rounded-md w-20 py-3">
          <div class="font-medium text-primary text-xl">492</div>
          <div class="text-slate-500">Reviews</div>
        </div>
      </div>
      --}}
    </div>
    <ul wire:ignore class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center" role="tablist">

      @foreach($menus as $menu)
      <li id="menu-{{$menu['id']}}-tab" class="nav-item" role="presentation">
        <button
          wire:click="changeMenu({{$menu['id']}})"
          wire:loading.attr="disabled"
          class="nav-link py-4 flex items-center {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
          data-tw-target="#menu-{{$menu['id']}}"
          aria-controls="menu-{{$menu['id']}}"
          aria-selected="{{($menu['id'] == $currentMenu['id'] )? 'true' : 'false'}}"
          role="tab"
        >
          <i class="w-4 h-4 mr-2" data-feather="{{$menu['icon']}}"></i> {{$menu['titre']}}
        </button>
      </li>
      @endforeach
      
    </ul>
  </div>
  <!-- END: Profile Info -->
  <div class="tab-content mt-5">
    @foreach($menus as $menu)
    <div
      wire:key="menu-pane-key-{{$menu['id']}}" 
      id="menu-{{$menu['id']}}" 
      class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
      role="tabpanel" aria-labelledby="menu-{{$menu['id']}}-tab">

      {{--  if current menu content else loading --}}
      @if(($menu['id'] == $currentMenu['id'] ))
        <div wire:key="menu-pane-content-key-{{$menu['id']}}">
          @if($currentMenu['id'] == 1)
          <div wire:loading.remove class="intro-y box lg:mt-5 ">
            <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
              <div class="flex items-center">
                <h2 class="font-medium text-base mr-auto">{{$menu['titre']}}</h2>
              </div>
            </div>
            <div class="p-5 wrapper">
              <div class=".flex flex-col-reverse xl:flex-row flex-col">
                <form wire:submit.prevent="update">
                  <div class="p-5">
                    <x-errors class="mt-3"/>       
                    <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-2">
                      <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Information</div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                      <div class="intro-y col-span-12 lg:col-span-6">
                        <x-input.input-lockable label="Nom" wire:model.defer="personnel.nom" required />
                      </div>
                      <div class="intro-y col-span-12 lg:col-span-6">
                        <x-input.input-lockable label="Prénoms" wire:model.defer="personnel.prenoms" required />
                      </div>

                      <div class="intro-y col-span-12 lg:col-span-6">
                        <x-select
                          label="Sexe"
                          placeholder="Choisir Le Sexe"
                          wire:model.defer="personnel.genre" required>
                          <x-select.option label="Masculin" value="Masculin" />
                          <x-select.option label="Feminin" value="Feminin" />
                        </x-select>

                      </div>

                      <div class="intro-y col-span-12 lg:col-span-6">
                        <label  class="form-label">Date de Naissance</label>
                        <x-input.input-lockable type="date" class="form-control" data-single-mode="true" wire:model.defer="personnel.date_de_naissance" required />
                      </div>
                    </div>

                    <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-8">
                      <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Emploi</div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                      <div class="intro-y col-span-12 lg:col-span-6">
                        <x-input.input-lockable label="Poste" wire:model.defer="personnel.designation" required />
                      </div>
                      <div class="intro-y col-span-12 lg:col-span-6">
                        <x-input.input-lockable label="Formation" wire:model.defer="personnel.qualification" required />
                      </div>
                      <div class="intro-y col-span-12 lg:col-span-6">
                        <label  class="form-label">Date D'embauche</label>
                        <x-input.input-lockable type="date" class="form-control" data-single-mode="true" wire:model.defer="personnel.date_embauche" required />
                      </div>
                      <div class="intro-y col-span-12 lg:col-span-6 self-center">
                        <div class="form-check form-switch">
                          <input class="form-check-input" wire:model.defer="personnel.enseignant" type="checkbox">
                          <label class="form-check-label" >Enseignant ?</label>
                        </div>
                      </div>
                    </div>


                    <div class="w-full flex justify-center border-t border-slate-200/60 dark:border-darkmode-400 mt-8">
                      <div class="bg-white dark:bg-darkmode-600 px-5 -mt-3 text-slate-500">Contact</div>
                    </div>

                    <div class="grid grid-cols-12 gap-6 mt-5">
                      <div class="intro-y col-span-12 lg:col-span-6">
                        <x-input wire:model.defer="personnel.phone" required />
                      </div>
                      <div class="intro-y col-span-12 lg:col-span-6">
                        <x-input.input-lockable label="Email" wire:model.defer="personnel.email" required />
                      </div>
                      <div class="intro-y col-span-12 lg:col-span-12">
                        <x-textarea wire:model.defer="personnel.adresse" label="Adresse" />
                      </div>
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="submit">Enregister</button>
                    </div>                           
                  </div>                  
                </form>
              </div>
            </div>
          </div> 
          <div wire:loading class="text-center w-full" >
            <x-loading />
          </div>
          @elseif($currentMenu['id'] == 2)
            <div class="intro-y box lg:mt-5">
              <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <h2 class="font-medium text-base mr-auto">
                  <x-icon name="finger-print" class="w-4 h-4 float-left mr-2" /> Tampon 
                </h2>
              </div>
              <div class="p-5">
                <div class="grid grid-cols-12 gap-4">
                  <div class=" col-span-3 mb-3 xl:mr-0">
                    <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                      <div class="flex justify-center">
                        @if($personnel->tampon)
                          <img class="rounded-md zoom-in" data-action="zoom" alt="" src="{{$personnel->tampon->preview_url}}">
                        @else
                          <x-icon name="x-circle" class="h-40 w-40 text-danger stroke-1" />
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="col-span-9">
                    <form wire:submit.prevent="saveTampon">
                      <x-image-cropper model="tampon" width="200" height="200" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @elseif($currentMenu['id'] == 3)
          @elseif($currentMenu['id'] == 4)
            @if($personnel->user_id)
              <div class="alert alert-success text-white show mb-2" role="alert">
                <div class="flex items-center">
                  <div class="font-medium text-lg">Un utilisateur de l'application est disponible pour {{$personnel->nom_complet}} </div>
                  <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">
                    <x-icon name="user" class="w-4 h-4 m-1" />
                  </div>
                </div>
                <div class="mt-3">
                  <table class="table table-light">
                    <tbody>
                      <tr class="bg-black/10">
                        <td>Nom Utilisateur :</td>
                        <td>{{$personnel->user->email}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            @else
              <div class="alert alert-danger show mb-2" role="alert">
                <div class="flex items-center">
                  <div class="font-medium text-lg">Aucun utilisateur de l'application disponible pour {{$personnel->nom_complet}} </div>
                  <div class="text-xs bg-white px-1 rounded-md text-slate-700 ml-auto">
                    <x-icon name="user" class="w-4 h-4 m-1" />
                  </div>
                </div>
              </div>

            <div wire:loading.remove class="intro-y box lg:mt-5 ">
              <div class="flex items-center justify-between p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                <div class="flex items-center">
                  <h2 class="font-medium text-base mr-auto">Créer un utilisateur</h2>
                </div>
              </div>
              
              <div class="p-5 wrapper">
                <x-errors class="mb-4"/>
                <div class=".flex flex-col-reverse xl:flex-row flex-col">
                  <form wire:submit.prevent="createUser">
                    <div class="mt-3">
                      <x-input type="email"  label="Email" wire:model.defer="user_email" required />
                    </div>

                    <div class="mt-3">
                      <x-input label="Mot de Passe" type="password" wire:model.defer="user_password"  required />
                    </div>
                    <div class="mt-3">
                      <x-input label="Confirmer le Mot de Passe" type="password" wire:model.defer="confirmation_user_password"  required />
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-primary" type="submit">Enregister</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            @endif
          @elseif($currentMenu['id'] == 5) 5
          content 5
          @endif
          
        </div>
      @else
      <x-loading />
      @endif

    </div>
    @endforeach
    

  </div>
</section>