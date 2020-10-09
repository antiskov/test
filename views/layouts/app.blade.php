<html>
<head>
    <title>test</title>
</head>
<body>
@foreach($topmenu as $item)
    <a href="{{$item['url']}}">{{$item['title']}}</a>
    @if(is_array($item['children']))
        @foreach($item['children'] as $item)
            <a href="{{$item['url']}}">{{$item['title']}}</a>
        @endforeach
    @endif
@endforeach
<div class="container">
    @yield('content')
</div>
</body>
</html>
