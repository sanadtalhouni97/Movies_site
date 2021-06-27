@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\CategoriesTypeController::}}--}}

@section('content')

    {{--     Categories types Index header     --}}
    @include('categories_type.Category_Type_Include.Index_Includes.Index_Header_Types')
    <div class="container bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        <div class="col-lg-12 ">
            {{--      Categories types Index create button      --}}
            @include('categories_type.Category_Type_Include.Index_Includes.Index_Create_BTN')
            {{--      Categories types Index table      --}}
            @include('categories_type.Category_Type_Include.Index_Includes.Index_Categories_Table')
        </div>
        {{--     pagination links   --}}
        @include('categories_type.Category_Type_Include.pagination')
    </div>
@endsection

