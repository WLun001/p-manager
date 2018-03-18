@if (isset($erros)&&count($errors > 0))
    <div class="alert alert-dismissable alert-danger fade">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&time;</span>
        </button>
        @foreach($errors->all() as $error)
            <li><strong>{ !! $error !!}</strong></li>
        @endforeach
    </div>
@endif