@if(isset($FormLister) && $FormLister->getFormStatus())
    <h2>Thank you!</h2>
@endif
<form action="post">
    <h2>Get Answer</h2>
    <input type="hidden" name="formid" value="ContactForm">
    <div class="input {{ $data['name.classname'] }}">
        <input type="text" name="name" placeholder="name" value="{{ $data['name.value'] }}">
        {!! $data['name.error'] !!}
    </div>
    <div class="input {{ $data['email.classname'] }}">
        <input type="text" name="email" placeholder="email" value="{{ $data['email.value'] }}">
        {!! $data['email.error'] !!}
    </div>
    <div class="input {{ $data['message.classname'] }}">
        <textarea type="text" name="message" placeholder="message" value="{{ $data['message.value'] }}"></textarea>
        {!! $data['message.error'] !!}
    </div>
    <button class="btn" id="submit">Send</button>
</form>