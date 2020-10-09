<html>
<head>
    <title>test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="pricing/pricing.css" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <nav class="my-2 my-md-0 mr-md-3">
        @foreach($topmenu as $item)
            <a class="p-2 text-dark" href="{{$item['url']}}">{{$item['title']}}</a>
{{--            @if(is_array($item['children']))--}}
{{--                @foreach($item['children'] as $item)--}}
{{--                    <a class="p-2 text-dark" href="{{$item['url']}}">{{$item['title']}}</a>--}}
{{--                @endforeach--}}
{{--            @endif--}}
        @endforeach
    </nav>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>
