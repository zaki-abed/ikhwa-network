        {{-- Start Footer --}}
        <footer>
            <div class="container">
              <div class="footer-links">
                <ul>
                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.header.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.partners', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.header.partners') }}
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            {{ __('site.header.about') }}
                        </a>
                    </li>
                    <li>
                        <a href="#services">
                            {{ __('site.header.services') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.careers', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.header.careers') }}
                        </a>
                    </li>
                    <li>
                        <a href="#inquiries">
                            {{ __('site.header.inquiries') }}
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            {{ __('site.header.contact') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.terms', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.header.terms') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.privacy', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.header.privacy') }}
                        </a>
                    </li>

                </ul>
              </div>
              <div class="footer-logo">
                <img src="{{ asset('assets/images/site/small-logo.png') }}" alt="شعار">
              </div>
              <div class="social-links">
                <a href="https://linkedin.com/company/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="https://www.instagram.com/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://x.com/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="https://www.facebook.com/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://whatsapp.com/channel/0029VaxvOXgKQuJNIrIC0s2t" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="https://t.me/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-telegram"></i>
                </a>
            </div>
            </div>
            <p>جميع الحقوق محفوظة لدى أخوة نتوورك 2024</p>
          </footer>

        {{-- End Footer --}}
