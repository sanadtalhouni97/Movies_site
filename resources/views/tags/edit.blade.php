@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\TagController::}}--}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{--         Tags Edit Card Header           --}}
                    @include('tags.Tags_Includes.Edit_Includes.Edit_Card_Header')
                    {{--         Tags  Messages           --}}
                    @include('includes.messages')
                    {{--         Tags Edit Card Body           --}}
                    @include('tags.Tags_Includes.Edit_Includes.Edit_Card_Body')
                </div>
            </div>
        </div>
    </div>
@endsection
