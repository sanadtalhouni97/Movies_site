@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\ActorController::}}--}}

@section('content')
    {{--  Actor Index  actor header    --}}
    @include('actor.Actor_Includes.Index_Includes.Index_Header')
    <div class="container bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        {{--  Actor Index messages actor     --}}
        @include('actor.Actor_Includes.messages')
        <div class="col-lg-12 ">
            {{--    Actor Index button add actor     --}}
            @include('actor.Actor_Includes.Index_Includes.Index_Add')
            {{--    Actor Index table     --}}
            @include('actor.Actor_Includes.Index_Includes.Index_Table')
            {{--    Actor Index pagination links     --}}
            @include('actor.Actor_Includes.pagination_links')
        </div>
    </div>
@endsection
