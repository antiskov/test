@extends('layouts.app')

@section('content')
    <h2>Blog</h2>

    <div>
        @foreach($newsitems['docs'] as $item)
            @include('partials.newsitem', ['item' => $item])
        @endforeach
    </div>
    <nav class="pagination">
        @include('partials.paginate', ['paginate' => $newsitems['pages']])
    </nav>
@endsection