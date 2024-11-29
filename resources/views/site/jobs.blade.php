@extends('layouts.site')

@section('title', 'Jobs')

@section('content')

<div class="jop-page">
    {{-- Landing --}}
    <div class="landing custom-landing">
        <div class="content">
            <h1>{!! __('site.jobsPage.landing.title') !!}</h1>
            <p>
                {!! __('site.jobsPage.landing.content') !!}
            </p>
        </div>
    </div>
    {{-- / Landing --}}
    {{-- Form --}}
    <div class="jobs">
        <div class="container">
            <div class="inner-content">
                <div class="text">
                    <h4>{!! __('site.jobsPage.form.head.title') !!}</h4>
                    <p>
                        {!! __('site.jobsPage.form.head.content') !!}
                    </p>
                </div>
                <div class="form-section">
                    <form>
                        <div>
                            <label for="full-name">{!! __('site.jobsPage.form.input.name') !!}</label>
                            <input type="text" id="full-name" placeholder="{!! __('site.jobsPage.form.input.name') !!}" required>
                        </div>

                        <div class="custom">
                            <div>
                                <label for="email">{!! __('site.jobsPage.form.input.email') !!}</label>
                                <input type="email" id="email" placeholder="{!! __('site.jobsPage.form.input.email') !!}" required>
                            </div>
                            <div>
                                <label for="phone">{!! __('site.jobsPage.form.input.phone') !!}</label>
                                <input id="phone" type="tel" placeholder="06X XXX XXXX" required maxlength="10">
                            </div>
                        </div>

                        <div class="date">
                            <label for="dob">{!! __('site.jobsPage.form.input.dob') !!}</label>
                            <input type="date" id="dob" placeholder="{!! __('site.jobsPage.form.input.dob') !!}" required>
                        </div>

                        <div>
                            <label for="address">{!! __('site.jobsPage.form.input.address') !!}</label>
                            <input type="text" id="address" placeholder="{!! __('site.jobsPage.form.input.address') !!}" required>
                        </div>

                        <div>
                            <label for="edu">{!! __('site.jobsPage.form.input.levelOfEdu') !!}</label>
                            <input type="text" id="edu" placeholder="{!! __('site.jobsPage.form.input.levelOfEdu') !!}" required>
                        </div>

                        <!-- File Upload -->
                        <div class="file-upload">{!! __('site.jobsPage.form.input.cv') !!}
                            <label for="file" class="file-label">
                                <span class="label-text">{!! __('site.jobsPage.form.input.cv') !!}</span>
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                <input type="file" id="file" class="file-input">
                            </label>
                        </div>

                        <!-- About You -->
                        <div>
                            <label for="description">{!! __('site.jobsPage.form.input.aboutYou') !!}</label>
                            <textarea id="description" placeholder="{!! __('site.jobsPage.form.input.aboutYou') !!}" rows="4"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit">{!! __('site.jobsPage.form.input.submit') !!}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- / Form --}}
</div>
@endsection


@push('scripts')
<script>
        const phoneInput = document.querySelector("#phone");
const iti = window.intlTelInput(phoneInput, {
initialCountry: "ma",
preferredCountries: ["ma", "ps"],
utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});

phoneInput.addEventListener("countrychange", function () {
console.log(iti.getSelectedCountryData());
});

</script>
@endpush

