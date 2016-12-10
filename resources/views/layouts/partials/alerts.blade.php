@if(Session::has('info'))
    <div class="alert alert-info text-center" role="alert">
        {{ Session::get('info') }}
    </div>
@endif