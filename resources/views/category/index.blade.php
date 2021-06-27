@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\CategoryController::}}--}}

@section('content')

    {{--       Category Index Header           --}}
    @include('category.Category_Includes.Index_Includes.Index_Category_Header')
    <div class="container bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        <div class="col-lg-12 ">
            {{--   Category Index   Add Category button     --}}
            @include('category.Category_Includes.Index_Includes.Index_Btn_Create')
            {{--   Category Index   Category Table      --}}
            @include('category.Category_Includes.Index_Includes.Index_Category_Table')
            {{--   Category Index   pagination links   --}}
            @include('category.Category_Includes.pagination_links')
        </div>
    </div>

@endsection
