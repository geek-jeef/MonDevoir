<section>
  <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto"> Administration</h2>
  </div>
  <div class="grid grid-cols-12 gap-6">

    <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
      <div wire:ignore class="intro-y box bg-white p-5 mt-6">
        <h2 class="text-lg text-center font-medium mr-auto dark:text-slate-300"> Administration</h2>
        <div class="border-t border-primary/10 dark:border-darkmode-400 mt-6 pt-6 " >
          <ul class="flex-col nav nav-pills" role="tablist">
            @foreach($menus as $menu )
            <li id="menu-{{$menu['id']}}-tab" class="nav-item  flex-1 cursor-pointer" role="presentation">
              <button
                wire:click="changeMenu({{$menu['id']}})"
                wire:loading.attr="disabled"
                class="nav-link flex items-center w-full {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}"
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
      </div>
      {{--<div class="intro-y box p-5 bg-danger text-white mt-5">
        <div class="flex items-center">
          <div class="font-medium text-lg">Important Update</div>
          <div class="text-xs bg-white dark:bg-danger dark:text-white text-slate-700 px-1 rounded-md ml-auto">New</div>
        </div>
        <div class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
        <div class="font-medium flex mt-5">
          <button type="button" class="btn py-1 px-2 border-white text-white dark:text-slate-300 dark:bg-darkmode-400 dark:border-darkmode-400">Take Action</button>
          <button type="button" class="btn py-1 px-2 border-transparent text-white dark:border-transparent ml-auto">Dismiss</button>
        </div>
      </div>--}}
    </div>

    
    <div class="tab-content col-span-12 lg:col-span-8 2xl:col-span-9">

      @foreach($menus as $menu)

      @php
        $track = uniqid('admin-')
      @endphp

      <div
        wire:key="menu-pane-{{$track}}-key-{{$menu['id']}}" 
        id="menu-{{$menu['id']}}" 
        class="tab-pane {{($menu['id'] == $currentMenu['id'] )? 'active' : ''}}" 
        role="tabpanel" aria-labelledby="menu-{{$menu['id']}}-tab">
        {{--  if current menu content else loading --}}
        @if(($menu['id'] == $currentMenu['id'] ))
          <div wire:key="menu-pane-content-{{$track}}-key-{{$menu['id']}}">
          @if($currentMenu['id'] == 1)
            @livewire($menu['file_name'])
          @elseif($currentMenu['id'] == 2)
            @livewire($menu['file_name'])
          @elseif($currentMenu['id'] == 3)
            @livewire($menu['file_name'])
          @elseif($currentMenu['id'] == 4)
            @livewire($menu['file_name'])
          @elseif($currentMenu['id'] == 5)
            @livewire($menu['file_name'])
          @elseif($currentMenu['id'] == 6)
            @livewire($menu['file_name'])
          @elseif($currentMenu['id'] == 7)
            @livewire($menu['file_name'])
          @endif
          </div>
        @else
        <x-loading />
        @endif
      </div>
      @endforeach


    </div>
    
  </div>
</section>
