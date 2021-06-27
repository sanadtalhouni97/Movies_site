@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\TagController::}}--}}

@section('content')

    {{--     Tags Index Header       --}}
    @include('tags.Tags_Includes.Index_Includes.Index_Header')

    <div class="container bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        <div class="col-lg-12">

            {{--     Tags Index Add Button       --}}
            @include('tags.Tags_Includes.Index_Includes.Index_Add_BTN')
            {{--     Tags Index Table            --}}
            @include('tags.Tags_Includes.Index_Includes.Index_Table')
            {{--     Tags Pagination Links       --}}
            @include('tags.Tags_Includes.Pagination_Links')

        </div>
    </div>

@endsection
