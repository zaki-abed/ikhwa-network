@extends('layouts.site')

@section('title', 'Jobs')

@section('content')
<div class="jop-page">
    {{-- Landing --}}
    <div class="landing custom-landing">
        <div class="content">
            <h1>وظــــائـــــفــــنـــا</h1>
            <p>
                انضم لفريقنا واكتشف فرص العمل المتاحة لدينا، وكن جزءًا من بيئة ديناميكية تدعم الإبداع والنمو المهني.
            </p>
        </div>
    </div>
    {{-- / Landing --}}
    {{-- Form --}}
    <div class="jobs">
        <div class="container">
            <div class="inner-content">
                <div class="text">
                    <h4>إنضـــم للفريـــــق</h4>
                    <p>
                        إذا كنت تبحث عن شركة تقدر العمل الجماعي والمبادرة والابتكار، فالخيار واضح أنك تنتمي إلى شبكة أخوة
                    </p>
                </div>
                <div class="form-section">
                    <form>
                        <div>
                            <label for="full-name">اسمك الكامل</label>
                            <input type="text" id="full-name" placeholder="أدخل اسمك" required>
                        </div>

                        <div class="custom">
                            <div>
                                <label for="email">البريد الإلكتروني</label>
                                <input type="email" id="email" placeholder="أدخل البريد الإلكتروني" required>

                            </div>
                            <div>
                                <label for="phone">رقم الهاتف</label>
                                <input id="phone" type="tel" placeholder="06X XXX XXXX" required maxlength="10">
                            </div>
                        </div>

                        <div class="date">
                            <label for="address">تاريخ الميلاد</label>
                            <input type="date" id="address" placeholder="أدخل تاريخ الميلاد" required>

                        </div>

                        <div>
                            <label for="address">العنوان</label>
                            <input type="text" id="address" placeholder="أدخل عنوان السكن" required>
                        </div>

                        <div>
                            <label for="edu">المستوى التعليمي</label>
                            <input type="text" id="edu" placeholder="أدخل المستوى التعليمي" required>
                        </div>

                        <div class="file-upload">السيرة الذاتية
                            <label for="file" class="file-label">
                                <span class="label-text">أرفق السيرة الذاتية</span>
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                <input type="file" id="file" class="file-input">
                            </label>
                        </div>


                        <div>
                            <label for="description">نبذة عنك</label>
                            <textarea id="description" placeholder="تَحدث عن نفسك" rows="4"></textarea>

                        </div>

                        <button type="submit">تقديم الطلب</button>
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

