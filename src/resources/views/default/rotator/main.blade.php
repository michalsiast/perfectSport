<div class="mainRotator ">
    @if($rotator->arrows)
        <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
    @endif
    <div class="mainRotator__items" id="rotator{{$rotator->id}}">
        @foreach($rotator->gallery->items as $item)
            <div class="hero4-section-area">
                <div class="bg-img">
                    <img src="{{renderImage($item->url, 1920, 700, `fit`)}}" alt="">
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="hero4-header heading7">
                                <h1 class="text-anime-style-3">{{$item->name}}</h1>
                                {!! str_replace('<p>', '<p data-aos="fade-left" data-aos-duration="1000">', $item->text) !!}
                                <div class="btn-area2" data-aos="fade-left" data-aos-duration="1200">
                                    <a href="#contact_us" style="scroll-margin-top: 200px;" class="header-btn4" id="contact_us_link"><img src="{{asset('img/icons/logo-icon4.svg')}}" alt=""> Skontaktuj się z nami</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if($rotator->arrows)
        <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
    @endif
</div>
@push('scripts.body.bottom')
    <script>
        $('#rotator{{$rotator->id}}').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            speed: {{$rotator->speed ?? 500}},
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            dots: {{$rotator->pager ? 'true' : 'false'}},
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            pauseOnHover: false
        });
    </script>
@endpush
