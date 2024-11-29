@extends('layouts.site')

@section('title', 'Terms & Conditions')

@section('content')
<div class="terms-page">
    {{-- Landing --}}
    <div class="landing custom-landing">
        <div class="content">
            <h1>{!! __('site.termsConditionsPage.head.title') !!}</h1>
            <p>
                {!! __('site.termsConditionsPage.head.content') !!}
            </p>
        </div>
    </div>
    {{-- / Landing --}}
    <div class="terms">
        <div class="text">
            <div class="container">
                <h2>{!! __('site.termsConditionsPage.head.title') !!}</h2>
                {!! __('site.termsConditionsPage.content') !!}
            </div>
        </div>

    </div>
</div>

@endsection

