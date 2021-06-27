@extends('layouts.app')


{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\ActorController::}}--}}

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">

                    {{--    Actor create  card  header            --}}
                    @include('actor.Actor_Includes.Create_include.Create_Card_header')

                    {{--    Actor create messages --}}
                    @include('actor.Actor_Includes.messages')

                    {{--    Actor create  card  body            --}}
                    @include('actor.Actor_Includes.Create_include.Create_Card_body')
                </div>
            </div>
        </div>
    </div>
@endsection
