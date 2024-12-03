    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}" class="logo">
                <img src="{{ asset('assets/images/site/large-logo.png') }}" alt="{{ __('site.head.siteName') }}">
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
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}#about"
                            class="{{ Route::currentRouteName() === 'site.about' ? 'active' : '' }}">
                            {{ __('site.header.about') }}
                         </a>
                    </li>
                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}#services"
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
                    <li>
                        <a href="{{ route('site.careers', ['locale' => app()->getLocale()]) }}"
                           class="{{ Route::currentRouteName() === 'site.careers' ? 'active' : '' }}">
                            {{ __('site.header.careers') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}#faq"
                           class="{{ Route::currentRouteName() === 'site.inquiries' ? 'active' : '' }}">
                            {{ __('site.header.inquiries') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}#contact"
                           class="{{ Route::currentRouteName() === 'site.contact' ? 'active' : '' }}">
                            {{ __('site.header.contact') }}
                        </a>
                    </li>
                </ul>

                <div class="lang">
                    @if (app()->getLocale() !== 'ar')
                        <p>
                            <a href="{{ route(Route::currentRouteName(), ['locale' => 'ar']) }}">
                                AR
                            </a>
                        </p>
                    @endif

                    @if (app()->getLocale() !== 'en')
                        <p>
                            <a href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}">
                                EN
                            </a>
                        </p>
                    @endif

                    @if (app()->getLocale() !== 'fr')
                        <p>
                            <a href="{{ route(Route::currentRouteName(), ['locale' => 'fr']) }}">
                                FR
                            </a>
                        </p>
                    @endif
                </div>

            </div>
            <i class="fa-regular fa-bars btn-show-nav"></i>
        </div>
    </div>

      <!-- End Header -->
      {{-- Sidebar --}}
    <div class="sidebar">
        <div>
            <a href="http://system.ikhwanetwork.com">
                <i class="fa-solid fa-house"></i>
                <p>{{ __('site.sidebar.dashboard') }}</p>
            </a>
        </div>
        <div>
            <a href="https://wa.me/+212663806725">
                <i class="fa-brands fa-whatsapp"></i>
                <p>{{ __('site.sidebar.WhatsApp') }}</p>
            </a>
        </div>
    </div>
    {{-- / Sidebar --}}

