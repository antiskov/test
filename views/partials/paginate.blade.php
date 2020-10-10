@if($paginate['last'] > 1)
        @if($paginate['current'] == 2)
            <a class="p-2 text-dark" href="@makeUrl($modx->documentIdentifier)"> < </a>
        @elseif($paginate['first'] != $paginate['current'])
            <a class="p-2 text-dark" href="@makeUrl($modx->documentIdentifier)?page={{ $paginate['current'] - 1}}"> < </a>
        @endif
        @for($i = $paginate['first']; $i <= $paginate['last']; $i++)
            @if($i == $paginate['current'])
                <span class="p-2 text-success">{{ $i }}</span>
            @else
                <a class="p-2 text-dark" href="@makeUrl($modx->documentIdentifier)?page={{ $i }}">{{ $i }}</a>
            @endif
        @endfor
        @if($paginate['last'] == $paginate['current'])
            <span class="p-2 text-success"> > </span>
        @else
            <a class="p-2 text-dark" href="@makeUrl($modx->documentIdentifier)?page={{ $paginate['current'] + 1}}"> > </a>
        @endif
@endif