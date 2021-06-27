{{--@if($user[0]->RoleCOT() === true--}}
{{-- || $user[0]->RoleUsers() === true--}}
{{-- || $user[0]->RoleSettings() === true)--}}


@extends('layouts.app')

@section('content')


    @if($user[0]->RoleCOT() === true
     || $user[0]->RoleUsers() === true
     || $user[0]->RoleSettings() === true)

        @include('includes.Home_Includes.Role_Users')

    @else

        @include('includes.Home_Includes.Regular_User')

    @endif

@endsection



