<div class="row">
    @foreach($items as $item)
        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
            <div class="service-boxarea">
                <div class="content-area">
                    <h3>{{$item->title}}</h3>
                    <div class="space16"></div>
                    {!! $item->text !!}
                </div>
            </div>
        </div>
    @endforeach
</div>
