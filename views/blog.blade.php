@extends('layouts.app')

@section('content')
    <div class="flex-column flex-md-row align-items-center p-1 px-md-4 mb-3 border-bottom box-shadow">
        <nav class="navbar-dark">
            @include('partials.paginate', ['paginate' => $newsitems['pages']])
        </nav>
    </div>
    <h2>Blog</h2>
    <div>
        @foreach($newsitems['docs'] as $item)
            @include('partials.newsitem', ['item' => $item])
        @endforeach
    </div>

@endsection