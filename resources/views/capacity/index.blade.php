@extends('layouts.app')
{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\CapacityController::}}--}}
@section('content')
    <div class="container">
        <div class="row">
            <!-- users -->
            @include('capacity.Capacity_Includs.Users')
            <!-- user end -->
            <!-- ----------------------------------------------------------------------------------------------- -->
            <!-- categories -->
            @include('capacity.Capacity_Includs.Categories')
            <!-- end categories -->
            <!-- ----------------------------------------------------------------------------------------------- -->
            <!-- posts -->
            @include('capacity.Capacity_Includs.Posts')
            <!-- end posts -->
            <!-- ----------------------------------------------------------------------------------------------- -->
            <!-- tags -->
            @include('capacity.Capacity_Includs.Tags')
            <!-- end tags -->
            <!-- ----------------------------------------------------------------------------------------------- -->
        </div>
    </div>
@endsection
