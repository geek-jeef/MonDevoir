@extends('../layouts/auth')

@section('head')
  <title>Se Connecter - {{config('ecole.nom.court')}}</title>
@endsection

@section('content')
  <div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
      <!-- BEGIN: Login Info -->
      <div class="hidden xl:flex flex-col min-h-screen">
        <a href="" class="-intro-x flex items-center pt-5">
          <img alt="" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
          <span class="text-white text-lg ml-3">
            {{config('ecole.nom.court')}}
          </span>
        </a>
        <div class="my-auto">
          <img alt="" class="-intro-x w-1/2 -mt-16" src="{{ asset('dist/images/illustration.svg') }}">
          <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">{{config('ecole.nom.long')}}</div>
          <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">{{config('ecole.devise')}}</div>
        </div>
      </div>
      <!-- END: Login Info -->
      <!-- BEGIN: Login Form -->
      <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
        <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
          <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left mb-5">Se Connecter</h2>
          <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">{{--A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place--}}</div>
              <x-errors class="mt-3"/>

          {{--<form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="intro-x mt-8">
                <input id="email" type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email" required>
                <div id="error-email" class="login__input-error text-danger mt-2"></div>
                <input id="password" type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" required>
                <div id="error-password" class="login__input-error text-danger mt-2"></div>
            </div>
            <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
              <div class="flex items-center mr-auto">
                <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                <label class="cursor-pointer select-none" for="remember-me">Se Souvenir de Moi</label>
              </div>
              <a href="#">Mot de Passe Oublié?</a>
            </div>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
              <button type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Se Connecter</button>
            </div>
          </form>--}}
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="intro-x mt-8">
              <x-jet-input id="email" class="intro-x login__input form-control py-3 px-4 block" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
            </div>

            <div class="intro-x mt-8">
              <x-jet-input id="password" class="intro-x login__input form-control py-3 px-4 block mt-4" type="password" name="password" required autocomplete="current-password" placeholder="Mot de Passe" />
            </div>

            <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
              <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" class="form-check-input border mr-2" />
                <span class="cursor-pointer select-none">{{ __('Se Souvenir de Moi') }}</span>
              </label>
            </div>

            <div class="flex items-center justify-end mt-4">
              <x-jet-button class="btn btn-primary" >
                {{ __('Se Connecter') }}
              </x-jet-button>
            </div>
          </form>
          <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
            Mot de Passe Oublié ?<a href="javascript:;" class="text-primary ml-2 cursor-pointer dark:text-slate-200" data-tw-toggle="modal" data-tw-target="#liste-administrateur-login">Contacter Un Administrateur</a>
          </div>
          <div id="liste-administrateur-login" class="modal modal-slide-over"  tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <a data-tw-dismiss="modal" href="javascript:;">
                  <i data-feather="x" class="w-8 h-8 text-slate-400"></i>
                </a>
                <div class="modal-header">
                  <h2 class="font-medium text-base mr-auto">Liste des Administrateurs</h2>
                </div>
                <div class="modal-body">
                  <h2 class="mx-2 mb-2 text-danger">Contactez un de ces administrateurs pour récupérer votre compte</h2>
                  <div class="overflow-x-auto">
                    <table class="table">
                      <thead class="table-dark">
                        <tr>
                          <th class="whitespace-nowrap">#</th>
                          <th class="whitespace-nowrap">Nom</th>
                          <th class="whitespace-nowrap">Contact</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach(\App\Models\User::where('is_super_admin',true)->get() as $admin)
                          <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->email}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>

                </div>
                <div class="modal-footer w-full absolute bottom-0">
                  <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Fermer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END: Login Form -->
    </div>
  </div>
@endsection
