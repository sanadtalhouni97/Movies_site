@extends('layouts.app')

{{--  The Controller bellow belongs to this view  --}}
{{--{{\App\Http\Controllers\SettingsController::}}--}}

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
                    {{--         Setting Card Header           --}}
                    @include('settings.Settings_Includes.Setting_Card_Header')
                    {{--         Setting Messages          --}}
                    @include('includes.messages')
                    <div class="card-body">

                        @if(isset($settings) === true)

                            {{--            Setting Update Form if Condition True                --}}
                            @include('settings.Settings_Includes.Setting_Form_Update')

                        @else

                            {{--            Setting Store Form if Condition False                --}}
                            @include('settings.Settings_Includes.Setting_Form_Store')

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
