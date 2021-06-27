@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\MoviesController::}}--}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--      Movies Edit  Card Header          --}}
                    @include('movies.Movies_Includes.Edit_Includes.Edit_Card_Header')
                    {{--      Movies Edit  Messages         --}}
                    @include('includes.messages')
                    {{--      Movies Edit  Card Body         --}}
                    @include('movies.Movies_Includes.Edit_Includes.Edit_Card_Body')
                </div>
            </div>
        </div>
    </div>
    {{--  Text Area Summer Note  --}}
    @include('movies.Movies_Includes.Edit_Includes.Edit_Script_SummerNote')
@endsection
