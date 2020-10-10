<div>
    <div class="container">
        @if($block['title'] != '' || $block['subtitle'] != '')
            <div class="row">
                <div class="col-lg-7">
                    @if($block['title'] != '')
                        <h2>{!! $block['title'] !!}</h2>
                    @endif
                    @if($block['subtitle'] != '')
                        <h2>{!! $block['subtitle'] !!}</h2>
                    @endif
                </div>
            </div>
        @endif
        <div class="text h6">
            {!! $block['richtext'] !!}
        </div>
    </div>
</div>