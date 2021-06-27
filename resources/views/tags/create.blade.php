@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\TagController::}}--}}

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--        Tags Create Card Header            --}}
                    @include('tags.Tags_Includes.Create_Includes.Create_Card_Header')
                    {{--        Tags  Messages            --}}
                    @include('includes.messages')
                    {{--        Tags Create Card Body            --}}
                    @include('tags.Tags_Includes.Create_Includes.Create_Card_Body')
                </div>
            </div>
        </div>
    </div>
@endsection
