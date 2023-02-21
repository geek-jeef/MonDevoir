<div>
      <div class="intro-x dropdown w-8 h-8">
      <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
        <img alt="" src="{{ $loggedin_user->profile_photo_url }}">
      </div>
      <div class="dropdown-menu w-56">
        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
          <li class="p-2">
            <div class="font-medium">{{ $loggedin_user->name }}</div>
            @php
              $est_du_personnel = \App\Models\Personnel::firstWhere('user_id',$loggedin_user->id) ; 
            @endphp
            @if($est_du_personnel)
            <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">{{ $est_du_personnel->designation }}</div>
            @endif
            @php
              unset($est_du_personnel);
            @endphp
          </li>
          <li><hr class="dropdown-divider border-white/[0.08]"></li>
          <li>
            <a href="{{route('profile.show')}}" class="dropdown-item hover:bg-white/5">
              <i data-feather="user" class="w-4 h-4 mr-2"></i> Profil
            </a>
          </li>
          {{--<li>
            <a href="#" class="dropdown-item hover:bg-white/5">
              <i data-feather="edit" class="w-4 h-4 mr-2"></i> Ajouter un Compte
            </a>
          </li>
          <li>
            <a href="#" class="dropdown-item hover:bg-white/5">
              <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Aide
            </a>
          </li>--}}
          <li><hr class="dropdown-divider border-white/[0.08]"></li>
          <li>
            <form method="POST" action="{{ route('logout') }}" x-data>
              @csrf
              <button type="submit" class="dropdown-item hover:bg-white/5 w-full">
                <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Se Déconnecter </button> 
              </a>
            </form>
          </li>
        </ul>
      </div>
    </div>
</div>