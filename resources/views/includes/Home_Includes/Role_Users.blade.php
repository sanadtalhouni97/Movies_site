<div class="conatiner d-flex justify-content-center">


    <div class="row mt-3 bg-white " style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">

        @if($user[0]->RoleUsers()  === true)
            <div class="col-lg-6 mt-4 mb-4 d-flex">
                <a style="text-decoration: none;" href="{{route('capacity.index')}}">
                    <img width="400" height="300"
                         style="border-radius: 50%;border: 1px solid black;box-shadow: rgb(78 109 99) 0px 0px 13px 9px;"
                         src="{{asset('assets\admin_home\capacity.png')}}" alt="">
                    <h2 style="color: #efd134;font-size: 50px;background: #5d5151;border-radius: 100%; box-shadow: rgb(78 109 99) 0px 0px 13px 9px;"
                        class="d-flex justify-content-center font-weight-bolder mt-4">
                        Capacity
                    </h2>
                </a>
            </div>
        @endif

        @if($user[0]->RoleSettings()  === true)
            <div class="col-lg-6 mt-4 mb-4">
                <a style="text-decoration: none;" href="{{route('setting.index')}}">
                    <img width="400" height="300"
                         style="border-radius: 50%;border: 1px solid black;box-shadow: rgb(78 109 99) 0px 0px 13px 9px;"
                         src="{{asset('assets\admin_home\settings.jpg')}}" alt="">
                    <h2 style="color: #efd134;font-size: 50px;background: #5d5151;border-radius: 100%; box-shadow: rgb(78 109 99) 0px 0px 13px 9px;"
                        class="d-flex justify-content-center font-weight-bolder mt-4">
                        Settings
                    </h2>
                </a>
            </div>
            @endif



    </div>
</div>
