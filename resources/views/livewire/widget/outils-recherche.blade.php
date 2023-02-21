<div 
  x-data='{
    showResult() {
      this.$refs.result.classList = "search-result show";
    },
    hideResult() {
      this.$refs.result.classList = "search-result";
    },
  }' class="intro-x relative mr-3 sm:mr-6">
  <div class="search hidden sm:block">
    <input x-ref="input" x-on:focus="showResult()" x-on:focusout="hideResult()" type="text" wire:model.debounce.1000ms='recherche' class="search__input form-control border-transparent" placeholder="recherche...">
    <x-icon name="search" class="search__icon dark:text-slate-500" />
  </div>

  <div x-ref='result' x-on:focus="showResult()" class="search-result" wire:ignore.self>
    
    <div class="search-result__content">
      {{-- loading--}}
      <div wire:loading class="w-full" >
        <div class="text-center">
          Recherche en cours...
        </div>
        <div class="flex justify-center p-4 m-4">
          <x-loading  />
        </div>
      </div>

      <div wire:loading.remove >
        @if($recherche == "")
        <div class="text-gray-500 text-sm text-center">
          Entrez un Element dans la bar de Recherche
        </div>
        @else
          {{-- loading --}}
          <div class="mb-2 text-center">
            Resultat de recherche pour : <span class="font-medium" >{{$recherche}}</span>
          </div>
          @if($resultats)
            {{debug($resultats)}}

            @foreach($resultats as $resultat)
              <div class="search-result__content__title capitalize font-bold text-primary">{{$resultat['titre']}}</div>
              <div class="mb-5">
                @foreach ($resultat['data'] as $model)
                  <a href="{!!$model[$resultat['url']]!!}" class="flex items-center mt-2">
                    @if($resultat['image'] && $model[$resultat['image_url']])
                    {{debug($model[$resultat['image_url']])}}
                    <div class="w-8 h-8 image-fit">
                      <img alt="" class="rounded-full" src="{!!$model[$resultat['image_url']]['preview_url']!!}">
                    </div>
                    @else
                    <div class="w-8 h-8 image-fit">
                      <img alt="" class="rounded-full" src="{{route('avatar',[$model[ $resultat['value'] ] ] )}}">
                    </div>
                    @endif
                    <div class="ml-3">{{ $model[ $resultat['value'] ] }}</div>
                    
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">{{ $model[ $resultat['description'] ] }}</div>
                  </a>
                @endforeach
              </div>
              @if(!$loop->last)
                <div class="w-full border-t border-slate-200/60 dark:border-darkmode-400 my-3"></div>
              @endif
            @endforeach
          @else
            <div class="text-gray-500 text-sm">
              Aucun Résultat.
            </div>
          @endif

        @endif
      </div>
    </div>
    
  </div>
</div>
