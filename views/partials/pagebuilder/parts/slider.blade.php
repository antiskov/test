<div class="container">
    {!! $data['richtext'] !!}
</div>
<div class="swiper-wrapper">
    @foreach($data['images'] as $image)
        <div class="swiper-slide">
            <img src="/{{$image['image']}}" alt="">
        </div>
    @endforeach
</div>