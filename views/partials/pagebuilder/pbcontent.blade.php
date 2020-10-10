@foreach($data as $block)
    @include('partials.pagebuilder.parts.'.$block['block_id'], ['data' => $block])
@endforeach