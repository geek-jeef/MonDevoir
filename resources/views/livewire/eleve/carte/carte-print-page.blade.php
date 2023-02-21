<section>
  @foreach($pages as $page)
  <div class="flex justify-center mb-8 print:mb-0" @if(!$loop->last) style="page-break-after: always;" @endif>
    <div id="bulletin" class="module box p-4 " style="width: 29.7cm; height: 20.8cm;">
      <div class="module-inside grid grid-cols-3 grid-rows-3 content-around items-center place-content-around place-items-center gap-5">
        @foreach($page as $carte)
          <livewire:eleve.carte.show-carte :eleve="App\Models\Eleve::find($carte)" :annee="$annee" />
        @endforeach
      </div>
    </div>
  </div>
  @endforeach
</section>
