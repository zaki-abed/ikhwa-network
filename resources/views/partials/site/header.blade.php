    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo">
                <img src="{{ asset('assets/images/site/large-logo.png') }}" alt="Logo">
            </a>
            <div class="hide-nav">
                <ul class="main-nav">
                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}"
                           class="{{ Route::currentRouteName() === 'site.home' ? 'active' : '' }}">
                            {{ __('site.header.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.about', ['locale' => app()->getLocale()]) }}"
                           class="{{ Route::currentRouteName() === 'site.about' ? 'active' : '' }}">
                            {{ __('site.header.about') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.services', ['locale' => app()->getLocale()]) }}"
                           class="{{ Route::currentRouteName() === 'site.services' ? 'active' : '' }}">
                            {{ __('site.header.services') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.partners', ['locale' => app()->getLocale()]) }}"
                           class="{{ Route::currentRouteName() === 'site.partners' ? 'active' : '' }}">
                            {{ __('site.header.partners') }}
                        </a>
                    </li>
                    <li><a href="#">{{ __('site.header.careers') }}</a></li>
                    <li><a href="#">{{ __('site.header.inquiries') }}</a></li>
                    <li>
                        <a href="{{ route('site.contact', ['locale' => app()->getLocale()]) }}"
                           class="{{ Route::currentRouteName() === 'site.contact' ? 'active' : '' }}">
                            {{ __('site.header.contact') }}
                        </a>
                    </li>
                </ul>


                <div class="lang-menu li-dropdown">
                    <p>
                        <!-- العلم الحالي مع اللغة -->
                        @if (app()->getLocale() === 'ar')
                            <img src="{{ asset('assets/images/site/ma.png') }}" alt="Lang"> العربية
                        @elseif (app()->getLocale() === 'fr')
                            <img src="{{ asset('assets/images/site/mf.png') }}" alt="Lang"> Français
                        @elseif (app()->getLocale() === 'en')
                            <img src="{{ asset('assets/images/site/us.png') }}" alt="Lang"> English
                        @endif
                        <i class="fa-solid fa-caret-down"></i>
                    </p>
                    <div class="dropdown-content">
                        <ul>
                            <!-- الروابط لتغيير اللغة مع الأعلام -->
                            @if (app()->getLocale() !== 'fr')
                                <li>
                                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'fr']) }}">
                                        Français
                                        <img src="{{ asset('assets/images/site/mf.png') }}" alt="Lang">
                                    </a>
                                </li>
                            @endif
                            @if (app()->getLocale() !== 'en')
                                <li>
                                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}">
                                        English
                                        <img src="{{ asset('assets/images/site/us.png') }}" alt="Lang">
                                    </a>
                                </li>
                            @endif
                            @if (app()->getLocale() !== 'ar')
                                <li>
                                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'ar']) }}">
                                        العربية
                                        <img src="{{ asset('assets/images/site/ma.png') }}" alt="Lang">
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>


            </div>
            <i class="fa-regular fa-bars btn-show-nav"></i>
        </div>
    </div>

      <!-- End Header -->
