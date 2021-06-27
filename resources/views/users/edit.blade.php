@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\UserController::}}--}}

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--         Users Edit Card Header            --}}
                    @include('users.User_Includes.Edit_Includes.Edit_Card_Header')
                    {{--         Users Messages           --}}
                    @include('includes.messages')
                    {{--         Users Edit Card Body           --}}
                    @include('users.User_Includes.Edit_Includes.Edit_Card_Body')
                </div>
            </div>
        </div>
    </div>
@endsection
