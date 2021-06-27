@extends('layouts.app')


{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\PostController::}}--}}


@section('content')

    {{--  Posts Index Header  --}}
    @include('posts.Posts_Includes.Index_Includes.Index_Posts_Header')

    <div class="container bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        <div class="col-lg-12">
            {{--     Posts Index Add Button      --}}
            @include('posts.Posts_Includes.Index_Includes.Index_Add_BTN')
            {{--     Posts Index Table      --}}
            @include('posts.Posts_Includes.Index_Includes.Index_Posts_Table')
        </div>
        {{--     Pagination Links      --}}
        @include('posts.Posts_Includes.Pagination_Links')
    </div>

@endsection
