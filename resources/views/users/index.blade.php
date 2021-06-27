@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\UserController::}}--}}

@section('content')

    {{--  Users Index Header  --}}
    @include('users.User_Includes.Index_Includes.Index_Header')

    <div class="container bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        <div class="col-lg-12">
            {{--  Users Messages  --}}
            @include('includes.messages')
            {{--  Users Index Add user Button  --}}
            @include('users.User_Includes.Index_Includes.Index_Add_BTN')
            {{--  Users Index Table  --}}
            @include('users.User_Includes.Index_Includes.Index_Table')
        </div>
    </div>

@endsection
