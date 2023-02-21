<section>
  <style type="text/css">
      .table th {
          border-bottom-width: 2px;
          padding-left: 0.125rem;
          padding-right: 0.125rem;
          padding-top: 0.125rem;
          padding-bottom: 0.125rem;
          font-weight: unset;
      }
      .table td {
          border-bottom-width: 1px;
          padding-left: 0.125rem;
          padding-right: 0.125rem;
          padding-top: 0.125rem;
          padding-bottom: 0.125rem;
      }
      .table th.border-r-2 , .table td.border-r-2 {
          border-right-width: 2px;
      }
      .module {
        background-image:url({{asset('devoir.svg')}});;
      }
      .table th, .table td {
          border-color : black;
      }
      .table[no-border] th ,
      .table[no-border] td {
          border-bottom-width: 0;
      }
  </style>
  @foreach($bulletins as $bulletin)
  <div class="flex justify-center mb-8 print:mb-0" @if(!$loop->last) style="page-break-after: always;" @endif>
    <livewire:evaluation.bulletin.show-bulletin wire:key="bulletin-for-print-{{$bulletin}}" :bulletin="App\Models\Bulletin::find($bulletin)" :alone="false" />
  </div>
  @endforeach
</section>
