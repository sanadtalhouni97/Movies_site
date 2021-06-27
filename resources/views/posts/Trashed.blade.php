@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\PostController::}}--}}

@section('content')

    {{-- Posts Trashed Header --}}
    @include('posts.Posts_Includes.Trashed_Includes.Trashed_Header')
    <div class="container bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        <div class="col-lg-12">
            {{--      Posts Trashed Table       --}}
            @include('posts.Posts_Includes.Trashed_Includes.Trashed_Table')

            {{--      Trashed Pagination Links      --}}
            @include('posts.Posts_Includes.Pagination_Links')
        </div>
    </div>

@endsection
