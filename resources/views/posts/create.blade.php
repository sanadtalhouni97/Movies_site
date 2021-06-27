@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\PostController::}}--}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--      Posts Create Card Header           --}}
                    @include('posts.Posts_Includes.Create_Includes.Create_Card_Header')
                    {{--      Posts Create Messages             --}}
                    @include('includes.messages')
                    {{--      Posts Create Card Body          --}}
                    @include('posts.Posts_Includes.Create_Includes.Create_Card_Body')
                </div>
            </div>
        </div>
    </div>
    {{--  Text Area Summer Note  --}}
    @include('posts.Posts_Includes.Create_Includes.Create_SummerNote')
@endsection
