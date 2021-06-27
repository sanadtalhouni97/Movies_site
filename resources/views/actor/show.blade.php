@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\ActorController::}}--}}

@section('content')

    {{--  Actor Show  Header  --}}
    @include('actor.Actor_Includes.Show_Includes.Show_Header')
    <div class="container mt-3">
        <div class="row mb-5"
             style="border: 2px solid;background: whitesmoke;border-radius: 50px;box-shadow: rgb(60 45 68) 0px 1px 28px 21px;">
            {{--   Actor Show Actor Body      --}}
            @include('actor.Actor_Includes.Show_Includes.Show_Body')
        </div>
    </div>

@endsection
