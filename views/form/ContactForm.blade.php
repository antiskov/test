@if(isset($FormLister) && $FormLister->getFormStatus())
    <h2>Thank you!</h2>
@endif
<form action="post">
    <h2>Get Answer</h2>
    <div class="form-group alert alert-secondary col-sm-6 col-md-8">
        <input type="hidden" name="formid" value="ContactForm">
        <div class="form-group col-md-6 input {{ $data['name.classname'] }}">
            <input class="form-control"  type="text" name="name" placeholder="name" value="{{ $data['name.value'] }}">
            {!! $data['name.error'] !!}
        </div>
        <div class="form-group col-md-6 input {{ $data['email.classname'] }}">
            <input class="form-control"  type="text" name="email" placeholder="email" value="{{ $data['email.value'] }}">
            {!! $data['email.error'] !!}
        </div>
        <div class="form-group col-md-6 input {{ $data['message.classname'] }}">
            <textarea class="form-control" type="text" name="message" placeholder="message" value="{{ $data['message.value'] }}"></textarea>
            {!! $data['message.error'] !!}
        </div>
    </div>
    <button class="btn btn-primary" id="submit">Send</button>
</form>