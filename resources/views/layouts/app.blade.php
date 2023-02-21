@extends('../layouts/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    @include('../components/mobile-menu')
    @include('../components/top-bar')
    <div class="wrapper print:rounded-none ">
        <div class="wrapper-box print:rounded-none">
        
            <nav id="side-nav" class="side-nav  print:hidden {{ ( isset($layout) && $layout == 'simple-menu') ? 'side-nav--simple' : ''}}">
                <ul>
                    <li>
                        <a href="javascript:;" id="side-nav-toggler"  class="side-menu">
                            <div class="side-menu__icon">
                                <i data-feather="bar-chart-2" class="transform -rotate-90"></i>
                            </div>
                            <div class="side-menu__title">
                                Réduire
                            </div>
                        </a>
                    </li>
                    @foreach ($side_menu as $menuKey => $menu)
                        @if ($menu == 'devider')
                            <li class="side-nav__devider my-6"></li>
                        @elseif(  !((   (!isset($menu['category'])) || ($menu['category'] != 'f_admin' ) ) ||  (Auth::user()['is_super_admin']??false) ) )

                        @else
                            <li>
                                <a href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}" class="{{ $first_level_active_index == $menuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                    <div class="side-menu__icon">
                                        <i data-feather="{{ $menu['icon'] }}"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        {{ $menu['title'] }}
                                        @if (isset($menu['sub_menu']))
                                            <div class="side-menu__sub-icon">
                                                <i data-feather="chevron-down"></i>
                                            </div>
                                        @endif
                                    </div>
                                </a>
                                @if (isset($menu['sub_menu']))
                                    <ul class="{{ $first_level_active_index == $menuKey ? 'side-menu__sub-open' : '' }}">
                                        @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                            <li>
                                                <a href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}" class="{{ $second_level_active_index == $subMenuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                    <div class="side-menu__icon">
                                                        <i data-feather="activity"></i>
                                                    </div>
                                                    <div class="side-menu__title">
                                                        {{ $subMenu['title'] }}
                                                        @if (isset($subMenu['sub_menu']))
                                                            <div class="side-menu__sub-icon">
                                                                <i data-feather="chevron-down"></i>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </a>
                                                @if (isset($subMenu['sub_menu']))
                                                    <ul class="{{ $second_level_active_index == $subMenuKey ? 'side-menu__sub-open' : '' }}">
                                                        @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                            <li>
                                                                <a href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}" class="{{ $third_level_active_index == $lastSubMenuKey ? 'side-menu side-menu--active' : 'side-menu' }}">
                                                                    <div class="side-menu__icon">
                                                                        <i data-feather="zap"></i>
                                                                    </div>
                                                                    <div class="side-menu__title">{{ $lastSubMenu['title'] }}</div>
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach
                </ul>
            </nav>
            <div class="content pb-32 print:shadow-none print:m-0 print:p-0 print:rounded-none print:bg-white" >
                @yield('subcontent')
                {{ (isset($slot)) ? $slot : ''}}
            </div>
            
        </div>
    </div>
@endsection
