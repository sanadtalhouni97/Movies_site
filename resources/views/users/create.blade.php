@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\UserController::}}--}}

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--        User Create Card Header           --}}
                    @include('users.User_Includes.Create_Includes.Create_Card_Header')
                    {{--        User Messages            --}}
                    @include('includes.messages')
                    {{--        User Create Card Body            --}}
                    @include('users.User_Includes.Create_Includes.Create_Card_Body')
                </div>
            </div>
        </div>
    </div>
@endsection
