    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo">
                <img src="{{ asset('assets/images/site/large-logo.png') }}" alt="Logo">
            </a>
            <div class="hide-nav">
                <ul class="main-nav">
                    <li><a href="{{ route('site.home') }}" class="{{ Route::currentRouteName() === 'site.home' ? 'active' : '' }}">الرئيسية</a></li>
                    <li><a href="{{ route('site.about') }}" class="{{ Route::currentRouteName() === 'site.about' ? 'active' : '' }}">شركتنا</a></li>
                    <li><a href="{{ route('site.services') }}" class="{{ Route::currentRouteName() === 'site.services' ? 'active' : '' }}">خدماتنا</a></li>
                    <li><a href="{{ route('site.faq') }}" class="{{ Route::currentRouteName() === 'site.faq' ? 'active' : '' }}">شركاؤنا</a></li>
                    <li><a href="#">الوظائف</a></li>
                    <li><a href="#">الإستفسارات</a></li>
                    <li><a href="{{ route('site.contact') }}" class="{{ Route::currentRouteName() === 'site.contact' ? 'active' : '' }}">تواصل معنا</a></li>
                </ul>
                <div class="lang-menu li-dropdown">
                    <p>
                        <img src="{{ asset('assets/images/site/ma.png') }}" alt="Lang"> العربية
                        <i class="fa-solid fa-caret-down"></i>
                    </p>
                    <div class="dropdown-content">
                        <ul>
                            <li>
                                <a href="#">French
                                    <img src="{{ asset('assets/images/site/mf.png') }}" alt="Lang">
                                </a>
                            </li>
                            <li>
                                <a href="#">English
                                    <img src="{{ asset('assets/images/site/us.png') }}" alt="Lang">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <i class="fa-regular fa-bars btn-show-nav"></i>
        </div>
    </div>

      <!-- End Header -->
