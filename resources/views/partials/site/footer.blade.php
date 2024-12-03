        {{-- Start Footer --}}
        <footer>
            <div class="container">
              <div class="footer-links">
                <ul>
                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.footer.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.partners', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.footer.partners') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.careers', ['locale' => app()->getLocale()]) }}#about">
                            {{ __('site.footer.about') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}#services">
                            {{ __('site.footer.services') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.careers', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.footer.careers') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}#faq">
                            {{ __('site.footer.inquiries') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.home', ['locale' => app()->getLocale()]) }}#contact">
                            {{ __('site.footer.contact') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.terms', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.footer.termsAndConditions') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('site.privacy', ['locale' => app()->getLocale()]) }}">
                            {{ __('site.footer.privacyPolicy') }}
                        </a>
                    </li>

                </ul>
              </div>
              <div class="footer-logo">
                <img src="{{ asset('assets/images/site/small-logo.png') }}" alt="شعار">
              </div>
              <div class="social-links">
                <a class="c-linkedIn" href="https://linkedin.com/company/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a class="c-insta" href="https://www.instagram.com/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a class="c-x" href="https://x.com/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a class="c-facebook" href="https://www.facebook.com/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="c-whatsapp" href="https://whatsapp.com/channel/0029VaxvOXgKQuJNIrIC0s2t" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a class="c-telegram" href="https://t.me/ikhwanetwork" target="_blank">
                    <i class="fa-brands fa-telegram"></i>
                </a>
            </div>
            </div>
            <p> {{ __('site.footer.copy_right') }}</p>
          </footer>

        {{-- End Footer --}}
