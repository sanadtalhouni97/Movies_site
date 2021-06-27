@extends('layouts.app')


{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\PostController::}}--}}

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--      Posts Edit   Card Header           --}}
                    @include('posts.Posts_Includes.Edit_Includes.Edit_Card_Header')
                    {{--      Posts Edit     Messages         --}}
                    @include('includes.messages')
                    {{--      Posts Edit  Card body            --}}
                    @include('posts.Posts_Includes.Edit_Includes.Edit_Card_Body')
                </div>
            </div>
        </div>
    </div>
    {{--  Text Area Summer Note   --}}
    @include('posts.Posts_Includes.Edit_Includes.Edit_SummerNote')
@endsection
