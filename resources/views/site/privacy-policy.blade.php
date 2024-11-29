@extends('layouts.site')

@section('title', 'Privacy Policy')

@section('content')
<div class="privacy-page">
        {{-- Landing --}}
        <div class="landing custom-landing">
            <div class="content">
                <h1>{!! __('site.privacyPolicyPage.head.title') !!}</h1>
                <p>
                    {!! __('site.privacyPolicyPage.head.content') !!}
                </p>
            </div>
        </div>
        {{-- / Landing --}}
        <div class="text">
            <div class="container">
                <h2>{!! __('site.privacyPolicyPage.head.title') !!}</h2>
                {!! __('site.privacyPolicyPage.content') !!}
            </div>
        </div>
</div>
@endsection
