@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\CategoriesTypeController::}}--}}

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--      Categories types Edit card header    --}}
                    @include('categories_type.Category_Type_Include.Edit_Includes.Edit_Card_Header')
                    {{--      Categories types Edit messages    --}}
                    @include('includes.messages')
                    {{--     Categories types  Edit card body     --}}
                    @include('categories_type.Category_Type_Include.Edit_Includes.Edit_Card_Body')
                </div>
            </div>
        </div>
    </div>
@endsection
