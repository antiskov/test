@extends('layouts.app')

@section('content')
    @include('partials.pagebuilder.pbcontent', ['data' => $pagebuilder])
    <div class="container" id="ajaxForm">
        @include('form.ContactForm')
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).on('submit', '#ajaxForm form', function (ev)
        {
            var frm = $('#ajaxForm form');
            $('#submit').prop("disabled", true);
            $.ajax({
                type: 'post',
                dataType: "json",
                url: '{{ $modx->config['site_url'] }}feedbackajaxform',
                data: frm.serialize(),
                success: function (data)
                {
                    $('#ajaxForm').empty();
                    $('#ajaxForm').html(data.output);
                },
            });
            ev.preventDefault();
        });

        $(document).on('clicl', '#ask-us-us', function (ev)
        {
            var frm = $('#ajaxForm form');
            $.ajax({
                type: 'post',
                url: '{{ $modx->config['site_url'] }}newform',
                data: frm.serialize(),
                success: function (data)
                {
                    $('#ajaxForm').empty();
                    $('#ajaxForm').html(data);
                },
            });
            ev.preventDefault();
        });
    </script>
@endpush