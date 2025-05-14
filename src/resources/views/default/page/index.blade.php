@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<!--===== ABOUT AREA STARTS =======-->
<div class="about4-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-header heading8">
                    @if(!empty($fields->header_about_us))
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            {{$fields->header_about_us}}
                        </h5>
                    @endif
                    @if(!empty($fields->title_about_us))
                        <h2 class="text-anime-style-3">
                            {{$fields->title_about_us}}
                        </h2>
                    @endif
                    @if(!empty($fields->description_about_us))
                        {!! str_replace('<p>', '<p data-aos="fade-left" data-aos-duration="1000">', $fields->description_about_us) !!}
                    @endif
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about2-header">
                    <div class="img1 image-anime reveal">
                        <img src="{{ asset('images/about_us.jpg') }}" alt="About Us">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service4-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="service-header text-center heading8">
                    @if(!empty($fields->header_services))
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            {{$fields->header_services}}
                        </h5>
                    @endif
                    @if(!empty($fields->title_services))
                        <h2 class="text-anime-style-3">
                            {{$fields->title_services}}
                        </h2>
                    @endif
                </div>
            </div>
        </div>

        @include('default.article.home')
    </div>
</div>

<!--===== SERVICE AREA ENDS =======-->

<div class="about-inner-section-area sp2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-inner-header heading2">
                    @if(!empty($fields->header_why_us))
                        <h5>
                            {{$fields->header_why_us}}
                        </h5>
                    @endif
                    @if(!empty($fields->title_why_us))
                        <h2>
                            {{$fields->title_why_us}}
                        </h2>
                    @endif
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <div class="heading2 text">
                    @if(!empty($fields->description_why_us))
                        {!! $fields->description_why_us !!}
                    @endif
                </div>
            </div>
        </div>

        @include('default.realization.home')
    </div>
</div>

<div class="gallery4-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="gallery-header text-center heading8">
                    @if(!empty($fields->header_gallery))
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            {{$fields->header_gallery}}
                        </h5>
                    @endif
                    @if(!empty($fields->title_gallery))
                        <h2 class="text-anime-style-3">
                            {{$fields->title_gallery}}
                        </h2>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($page->gallery->items->filter(fn($item) => $item->type === 'gallery')->take(3) as $item)
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="{{ 800 + ($loop->index * 200) }}">
                    <div class="gallery-boxarea">
                        <div class="img1">
                            <img src="{{ renderImage($item->url, 600, 600, 'fit') }}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="btn-area2 d-flex justify-content-center mt-4" data-aos="fade-left" data-aos-duration="1400">
            <a href="{{route('gallery.show')}}" class="header-btn4">
                <img src="{{asset('img/icons/logo-icon4.svg')}}" alt="">
                Zobacz więcej zdjęć
            </a>
        </div>
    </div>
</div>

<div class="about4-section-area sp1" id="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-header heading8">
                    @if(!empty($fields->header_contact))
                        <h5 data-aos="fade-left" data-aos-duration="800">
                            {{$fields->header_contact}}
                        </h5>
                    @endif
                    @if(!empty($fields->title_contact))
                        <h2 class="text-anime-style-3">
                            {{$fields->title_contact}}
                        </h2>
                    @endif
                    @if(!empty($fields->description_contact))
                        {!! str_replace('<p>', '<p data-aos="fade-left" data-aos-duration="1000">', $fields->description_contact) !!}
                    @endif
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about2-header">
                    <iframe src="{{getConstField('google_map_iframe')}}" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-box-section pt-0 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-boxarea">
                    <div class="img1">
                        <img src="{{asset('img/icons/location-icon2.svg')}}" alt="">
                    </div>
                    <div class="space32"></div>
                    <h4>Lokalizacja</h4>
                    <div class="space32"></div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="space32"></div>
                    <a href="{{getConstField('google_map')}}">
                        {{getConstField('company_address')}}<br>
                        {{getConstField('company_post_code')}} {{getConstField('company_city')}}
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-boxarea">
                    <div class="img1">
                        <img src="{{asset('img/icons/call-icon4.svg')}}" alt="">
                    </div>
                    <div class="space32"></div>
                    <h4>Telefon</h4>
                    <div class="space32"></div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="space32"></div>
                    <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a><br>
                    <a href="tel:{{str_replace(' ', '', getConstField('phone2'))}}">{{getConstField('phone2')}}</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="contact-boxarea">
                    <div class="img1">
                        <img src="{{asset('img/icons/email-icon2.svg')}}" alt="">
                    </div>
                    <div class="space32"></div>
                    <h4>Email</h4>
                    <div class="space32"></div>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="space32"></div>
                    <a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
