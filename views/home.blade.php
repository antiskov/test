@extends('layouts.app')

@section('content')
    @include('partials.pagebuilder.pbcontent', ['data' => $pagebuilder])
@endsection