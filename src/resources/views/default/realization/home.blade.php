<div class="row justify-content-center">
    @foreach($items as $item)
        <div class="col-lg-4 col-md-6">
            <div class="about-boxarea">
                <div class="icons">
                    <img style="width: 40px" src="{{ renderImage($item->galleryCover(), 40, 40, 'cover') }}" alt="">
                </div>
                <div class="space24"></div>
                <h3>{{$item->title}}</h3>
                <div class="space16"></div>
                {!! $item->text !!}
            </div>
        </div>
    @endforeach
</div>
