@extends('layouts.site')

@section('title', 'Partners')

@section('content')
    <div class="partners-page">
        {{-- Landing --}}
        <div class="landing">
            <div class="overlay"></div>
            <h1>
                {!! __('site.partnersPage.landing') !!}
            </h1>
        </div>
        {{-- / Landing --}}

        {{-- Partners --}}
        <div class="partners-section">
            <div class="container">
                {{-- 1 --}}
                <div class="partner-box">
                    <div class="top-side">
                        <div class="image">
                            <img src="{{ asset('assets/images/site/partners/1.png') }}" alt="شركة IKHWA INVESTMENTS BY IKHWA NETWORK ش.م.م">
                        </div>
                        <div class="text">
                            <h3 class="title">
                                {!! __('site.partnersPage.partners.partner_1.title') !!}
                            </h3>
                            <p class="desc">
                                {!! __('site.partnersPage.partners.partner_1.content') !!}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="bottom-side">
                        <div class="contact">
                            <p>{!! __('site.partnersPage.theCommon.moreInfo') !!}</p>
                            <p><i class="fa-solid fa-phone"></i> 00212663806725</p>
                        </div>
                        <a href="#">{!! __('site.partnersPage.theCommon.visitAnchor') !!}</a>
                    </div> --}}
                </div>

                {{-- 2 --}}
                <div class="partner-box">
                    <div class="top-side">
                        <div class="image">
                            <img src="{{ asset('assets/images/site/partners/2.png') }}" alt="شركة IKHWA DIGITAL BY IKHWA NETWORK ش.م.م">
                        </div>
                        <div class="text">
                            <h3 class="title">
                                {!! __('site.partnersPage.partners.partner_2.title') !!}
                            </h3>
                            <p class="desc">
                                {!! __('site.partnersPage.partners.partner_2.content') !!}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="bottom-side">
                        <div class="contact">
                            <p>{!! __('site.partnersPage.theCommon.moreInfo') !!}</p>
                            <p><i class="fa-solid fa-phone"></i> 00212663806725</p>
                        </div>
                        <a href="#">{!! __('site.partnersPage.theCommon.visitAnchor') !!}</a>
                    </div> --}}
                </div>

                {{-- 3 --}}
                <div class="partner-box">
                    <div class="top-side">
                        <div class="image">
                            <img src="{{ asset('assets/images/site/partners/3.png') }}" alt="شركة KARIHOME ش.م.م">
                        </div>
                        <div class="text">
                            <h3 class="title">
                                {!! __('site.partnersPage.partners.partner_3.title') !!}
                            </h3>
                            <p class="desc">
                                {!! __('site.partnersPage.partners.partner_3.content') !!}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="bottom-side">
                        <div class="contact">
                            <p>{!! __('site.partnersPage.theCommon.moreInfo') !!}</p>
                            <p><i class="fa-solid fa-phone"></i> 00212663806725</p>
                        </div>
                        <a href="#">{!! __('site.partnersPage.theCommon.visitAnchor') !!}</a>
                    </div> --}}
                </div>

                {{-- 4 --}}
                <div class="partner-box">
                    <div class="top-side">
                        <div class="image">
                            <img src="{{ asset('assets/images/site/partners/4.png') }}" alt="شركة ARTYADS ش.م.م">
                        </div>
                        <div class="text">
                            <h3 class="title">
                                {!! __('site.partnersPage.partners.partner_4.title') !!}
                            </h3>
                            <p class="desc">
                                {!! __('site.partnersPage.partners.partner_4.content') !!}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="bottom-side">
                        <div class="contact">
                            <p>{!! __('site.partnersPage.theCommon.moreInfo') !!}</p>
                            <p><i class="fa-solid fa-phone"></i> 00212663806725</p>
                        </div>
                        <a href="#">{!! __('site.partnersPage.theCommon.visitAnchor') !!}</a>
                    </div> --}}
                </div>

                {{-- 5 --}}
                <div class="partner-box">
                    <div class="top-side">
                        <div class="image">
                            <img src="{{ asset('assets/images/site/partners/5.png') }}" alt="شركة KARILIVE ش.م.م">
                        </div>
                        <div class="text">
                            <h3 class="title">
                                {!! __('site.partnersPage.partners.partner_5.title') !!}
                            </h3>
                            <p class="desc">
                                {!! __('site.partnersPage.partners.partner_5.content') !!}
                            </p>
                        </div>
                    </div>
                    {{-- <div class="bottom-side">
                        <div class="contact">
                            <p>{!! __('site.partnersPage.theCommon.moreInfo') !!}</p>
                            <p><i class="fa-solid fa-phone"></i> 00212663806725</p>
                        </div>
                        <a href="#">{!! __('site.partnersPage.theCommon.visitAnchor') !!}</a>
                    </div> --}}
                </div>

            </div>
        </div>
        {{-- / Partners --}}
    </div>
@endsection


@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const images = document.querySelectorAll('.partner .image img');
    const alternativeImages = [
        "/assets/images/site/partners/1s.png",
        "/assets/images/site/partners/2s.png",
        "/assets/images/site/partners/3s.png",
        "/assets/images/site/partners/4s.png",
        "/assets/images/site/partners/5s.png"
    ];

    const defaultImages = [
        "/assets/images/site/partners/1.png",
        "/assets/images/site/partners/2.png",
        "/assets/images/site/partners/3.png",
        "/assets/images/site/partners/4.png",
        "/assets/images/site/partners/5.png"
    ];


    function updateImages() {
        images.forEach((img, index) => {
            if (window.innerWidth <= 768) {
                img.src = alternativeImages[index];
            } else {
                img.src = defaultImages[index];
            }
        });
    }
    updateImages();
    window.addEventListener('resize', updateImages);
});
</script>
@endpush


