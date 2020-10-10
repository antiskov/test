<p>Question from site: {{ $data['name'] }}</p>

<p>Name: {{ $data['name'] }}</p>
<p>Email: {{ $data['email'] }}</p>
<p>Question:</p>
<p>{{ $data['message'] }}</p>

<p>Come on link
    <a href="mailto: {{ $data['email'] }}?subject=RE: Question from site">{{ $data['email'] }}</a>
</p>