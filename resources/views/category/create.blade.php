@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\CategoryController::}}--}}

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--      Category Create  Card Header            --}}
                    @include('category.Category_Includes.Create_Includes.Create_Card_header')
                    {{--      Category Create  Messages           --}}
                    @include('includes.messages')
                    {{--      Category Create  Card Body           --}}
                    @include('category.Category_Includes.Create_Includes.Create_Card_Body')
                </div>
            </div>
        </div>
    </div>
@endsection
