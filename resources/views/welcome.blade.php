<!DOCTYPE html>
<html lang="en">

@include('includes.header')
{{-- TO DO SANAD TALHOUNU DATE:6/21.2021 --}}
{{--@if(Route::currentRouteName() ===  'indesx')--}}
{{--    {{dd('true')}}--}}
{{--@else--}}
{{--    {{dd('false')}}--}}
{{--    @endif--}}
<body id="page-top">

{{-- Welcome NavBar --}}
@include('includes.Welcome_Includes.welcome_NavBar')

{{-- Welcome Slider --}}
@include('includes.Welcome_Includes.welcome_Slider')


<!-- Latest Movies-->
@include('includes.Welcome_Includes.welcome_Latest_Movies')

<!-- Movies Categories-->
@include('includes.Welcome_Includes.welcome_Movies_Categories')


{{-- Latest Movies Pop up --}}
@include('includes.Welcome_Includes.welcome_Latest_Movies_PopUp')

{{-- Movies Categories Pop up--}}
@include('includes.Welcome_Includes.welcome_Movies_Categories_PopUp')


@include('includes.footer')

</body>
</html>
