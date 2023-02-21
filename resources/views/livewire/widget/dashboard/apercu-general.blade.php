<div class="col-span-12 mt-8">
  <div class="intro-y flex items-center h-10">
    <h2 class="text-lg font-medium truncate mr-5">Apercu Général</h2>
    <button wire:click="$refresh" class="ml-auto flex items-center text-primary">
      <x-icon name="refresh" class="hover:animate-spin w-4 h-4 mr-3" /> Actualiser
    </button>
  </div>
  <div class="grid grid-cols-12 gap-6 mt-5">

    @foreach($data as $info)
    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
      <div class="report-box zoom-in">
        <div class="box p-5">
          <div class="flex justify-end">
            <i data-feather="{{$info['icon']}}" class="report-box__icon text-primary"></i>
            {{--<div class="ml-auto">
              <div class="report-box__indicator bg-success tooltip cursor-pointer" title="33% Higher than last month">
                33% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
              </div>
            </div>
            --}}
          </div>
          <div class="text-3xl font-medium leading-8 mt-6">{{$info['valeur']}}</div>
          <div class="text-base text-slate-500 mt-1">{{$info['texte']}}</div>
        </div>
      </div>
    </div>
    @endforeach

    {{--<div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
      <div class="report-box zoom-in">
        <div class="box p-5">
          <div class="flex">
            <i data-feather="credit-card" class="report-box__icon text-pending"></i>
            <div class="ml-auto">
              <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
              </div>
            </div>
          </div>
          <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
          <div class="text-base text-slate-500 mt-1">New Orders</div>
        </div>
      </div>
    </div>
    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
      <div class="report-box zoom-in">
        <div class="box p-5">
          <div class="flex">
            <i data-feather="monitor" class="report-box__icon text-warning"></i>
            <div class="ml-auto">
              <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                12% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
              </div>
            </div>
          </div>
          <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
          <div class="text-base text-slate-500 mt-1">Total Products</div>
        </div>
      </div>
    </div>
    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
      <div class="report-box zoom-in">
        <div class="box p-5">
          <div class="flex">
            <i data-feather="user" class="report-box__icon text-success"></i>
            <div class="ml-auto">
              <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                22% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
              </div>
            </div>
          </div>
          <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
          <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
        </div>
      </div>
    </div>
    --}}
  </div>
</div>