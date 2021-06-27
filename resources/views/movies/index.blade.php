@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\MoviesController::}}--}}

@section('content')

    {{--  Movies Index Header  --}}
    @include('movies.Movies_Includes.Index_Includes.Index_Movies_Header')
    <div class="container bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        {{--        Movies Index Messages      --}}
        @include('movies.Movies_Includes.Index_Includes.Index_Messages')
        <div class="col-lg-12">
            {{--    Movies Index Add button        --}}
            @include('movies.Movies_Includes.Index_Includes.Index_Add_BTN')
            {{--    Movies Index Table      --}}
            @include('movies.Movies_Includes.Index_Includes.Index_Table')
        </div>
        {{--    Pagination Links    --}}
        @include('movies.Movies_Includes.pagination_links')
    </div>

@endsection
