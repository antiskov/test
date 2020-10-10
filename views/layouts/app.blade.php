<html>
<head>
    <title>test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="pricing/pricing.css" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white box-shadow">
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="text-success" href="http://anton-test.div.net.ua/"><strong>TEST</strong></a>
        @foreach($topmenu as $item)
            <a class="p-2 text-dark" href="{{$item['url']}}">{{$item['title']}}</a>
        @endforeach
    </nav>
</div>
<div class="flex-column flex-md-row align-items-center p-1 px-md-4 mb-3 border-bottom box-shadow">
    @if($modx->documentIdentifier != $modx->getConfig('site_start'))
        <nav class="navbar-dark">
            @foreach($crumbs as $item)
                @if($loop->last)
                    <span class="p-2 text-success">{{$item['title']}} </span>
                @else
                    <a class="p-2 text-dark" href="{{$item['url']}}">{{$item['title']}}</a> >
                @endif
            @endforeach
        </nav>
    @endif
</div>
<div class="container">
    @yield('content')
    @stack('scripts')
</div>
</body>
</html>
