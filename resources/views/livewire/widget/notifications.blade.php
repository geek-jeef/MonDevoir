<div>
    <div class="intro-x dropdown mr-4 sm:mr-6">
      <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown">
        <i data-feather="bell" class="notification__icon dark:text-slate-500"></i>
      </div>
      <div class="notification-content pt-2 dropdown-menu">
        <div class="notification-content__box dropdown-content">
          <div class="notification-content__title">Notifications</div>
          @foreach (array_slice($fakers, 0, 5) as $key => $faker)
            <div class="cursor-pointer relative flex items-center {{ $key ? 'mt-5' : '' }}">
              <div class="w-12 h-12 flex-none image-fit mr-1">
                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
              </div>
              <div class="ml-2 overflow-hidden">
                <div class="flex items-center">
                  <a href="javascript:;" class="font-medium truncate mr-5">{{ $faker['users'][0]['name'] }}</a>
                  <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">{{ $faker['times'][0] }}</div>
                </div>
                <div class="w-full truncate text-slate-500 mt-0.5">{{ $faker['news'][0]['short_content'] }}</div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
</div>