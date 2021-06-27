@include('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\ProfileController::}}--}}

{{--      Profile Show Header           --}}


@include('profile.Profile_Includes.Show_Includes.Show_Header')

@if(Auth::User()->id === $profile->id)
{{--      Profile Show Form           --}}
@include('profile.Profile_Includes.Show_Includes.Show_Form')

{{--      Profile Show SummerNote           --}}
@include('profile.Profile_Includes.Show_Includes.Show_SummerNote')
@else

    <div class="container mb-5 bg-white alert alert-warning" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        <div class="col-lg-12 " >
            <h1 class="mb-3 mt-3 font-weight-bolder d-flex justify-content-center ">you are not authorized to enroll this profile</h1>
        </div>
    </div>

@endif
