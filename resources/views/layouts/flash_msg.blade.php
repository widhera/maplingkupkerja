@if(session('success'))
<div class="row">
    <div class="col-lg-8 col-md-offset-2">
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    </div>
</div>
@endif
@if(session('error'))
<div class="row">
    <div class="col-lg-8 col-md-offset-2">
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    </div>
</div>
@endif