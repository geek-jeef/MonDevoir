<div>
  <div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
      <button class="btn btn-primary shadow-md mr-2">Trier La Liste</button>
      <div class="dropdown">
        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
          <span class="w-5 h-5 flex items-center justify-center">
            <x-icon name="filter" class="w-4 h-4" />
          </span>
        </button>
        <div class="dropdown-menu w-40">
          <ul class="dropdown-content">
            {{--<li>
              <a href="" class="dropdown-item">
                <i data-feather="users" class="w-4 h-4 mr-2"></i> Add Group
              </a>
            </li>
            <li>
              <a href="" class="dropdown-item">
                <i data-feather="message-circle" class="w-4 h-4 mr-2"></i> Ancien Employé ?
              </a>
            </li>--}}
            <li>
              <div class="dropdown-item">
                <div class="form-check form-switch">
                  <input class="form-check-input" wire:model="ancien_employe" type="checkbox" >
                  <label class="form-check-label" >Inclure Ancien Employé</label>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      {{ $personnels->links('components.pagination.custom-indicator') }}
      <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
        <div class="w-56 relative text-slate-500">
          <input type="text" class="form-control w-56 box pr-10" wire:model.debouce.1000ms="recherche" placeholder="Recherche...">
          <x-icon name="search" class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" />
        </div>
      </div>
    </div>
    

    <!-- BEGIN: Users Layout -->
    @foreach ($personnels as $personnel)
      <div class="intro-y col-span-12 md:col-span-6 lg:col-span-4">
        <div class="box">
          <div class="flex items-start px-5 pt-5">
            <div class="w-full flex flex-col lg:flex-row items-center">
              <div class="w-16 h-16 image-fit">
                <img alt="" class="rounded-full" src="{{ route('avatar',[$personnel->nom." ".$personnel->prenoms])}}">
              </div>
              <div class="lg:ml-4 text-center lg:text-left mt-3 lg:mt-0">
                <a href="javascript:;" onclick=" var ask = window.confirm('Afficher le Profil de  {{ $personnel->nom." ".$personnel->prenoms}} ?');if (ask) { window.location.href = '{{route('personnel.show',[$personnel->id])}}';};" class="font-medium">{{ $personnel->nom." ".$personnel->prenoms }}</a>
                <div class="text-slate-500 text-xs mt-0.5">{{ $personnel->designation }}</div>
              </div>
            </div>
            <div class="absolute right-0 top-0 mr-5 mt-3 dropdown">
              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                <x-icon name="dots-horizontal" class="w-5 h-5 text-slate-500"/>
              </a>
              <div class="dropdown-menu w-40">
                <div class="dropdown-content">
                  <a href="{{route('personnel.show',[$personnel->id])}}" class="dropdown-item">
                    <x-icon name="academic-cap" class="w-4 h-4 mr-2" /> Profil
                  </a>

                  {{--<a href="" class="dropdown-item">
                    <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                  </a>
                  --}}
                </div>
              </div>
            </div>
          </div>
          <div class="text-center lg:text-left p-5">
            <div></div>
            <div class="flex items-center justify-center lg:justify-start text-slate-500 mt-5">
              <x-icon name="mail" class="w-3 h-3 mr-2" /> <a href="mailto:{{$personnel->email}}"> {{$personnel->email}} </a>


            </div>
            <div class="flex items-center justify-center lg:justify-start text-slate-500 mt-5">
              <x-icon name="phone" class="w-3 h-3 mr-2" /> <a href="tel:{{$personnel->phone}}"> {{$personnel->phone}} </a>
            </div>
          </div>
          <div class="text-center lg:text-right p-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <a href="javascript:;" class="btn btn-primary py-1 px-2" 
              onclick="
                window.$wireui.confirmDialog({
                  title:`Confirmation`,
                  description: `Afficher le Profil de  {{ $personnel->nom." ".$personnel->prenoms}} ?` ,
                  icon: 'question',
                  accept: {
                      label: 'Oui, Afficher',
                      execute: () => {window.location.href = '{{route('personnel.show',[$personnel->id])}}';}
                  },
                  reject: {
                      label: 'Non',
                  }
                });" >Voir le Profil</a>
          </div>
        </div>
      </div>
    @endforeach
    <!-- END: Users Layout -->

    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
      {{ $personnels->links() }}

      <select wire:model="perPage" class="w-20 form-select box mt-3 sm:mt-0">
        @foreach([12,16,24,32,64,128,256,512,1024] as $nb)
          <option {{ ($perPage == $nb )? 'selected' : ''}} >{{$nb}}</option>
        @endforeach
      </select>
    </div>
    <!-- END: Pagination -->
  </div>
</div>