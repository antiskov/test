<div class="container">
    {!! $data['richtext'] !!}
</div>
<div class="swiper-wrapper">
    @foreach($data['images'] as $image)
        <div class="swiper-slide">
            <img src="/{{$image['image']}}" width="100px" height="100px" alt="">
        </div>
    @endforeach
</div>