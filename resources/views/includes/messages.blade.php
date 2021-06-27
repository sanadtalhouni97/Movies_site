
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('status'))
    <div class="alert alert-success d-flex justify-content-center">
        {{ session()->get('status') }}
    </div>
@endif
@if(session()->has('warning'))
    <div class="alert alert-warning d-flex justify-content-center">
        <h3>{{ session()->get('warning') }}</h3>
    </div>
@endif
@if(session()->has('empty'))
    <div class="alert alert-danger d-flex justify-content-center">
        {{ session()->get('empty') }}
    </div>
@endif
