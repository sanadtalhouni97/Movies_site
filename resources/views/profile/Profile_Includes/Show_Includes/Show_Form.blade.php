<form action="{{route('profile.update',['id'=>$profile->id])}}" method="post" enctype="multipart/form-data">

    @csrf

    <div class="container mb-5 bg-white" style="border-radius: 67px;box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        <div class="row" style="border: 5px solid #3a3232;box-shadow: 2px 3px 10px 10px;border-radius: 66px;">


            <div class="col-lg-4 mt-4 ">
                <img src="{{asset($user_info->avatar)}}" class="mb-4 ml-4" width="250" height="250" style="border-radius: 50px;box-shadow: 2px 2px 13px 11px #756666;" alt="">
                <hr>

            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-5 mt-4">
                        <div class="form-group">
                            <label for="name"><strong>Name : </strong></label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-header" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{$profile->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <div class="form-group">
                            <label for="name"><strong>Email : </strong></label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="text" name="email" class="form-control" value="{{$profile->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <div class="form-group">
                            <label for="name"><strong>Facebook : </strong></label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="text" name="facebook" class="form-control" value="{{$user_info->facebook}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <div class="form-group">
                            <label for="name"><strong>Twitter : </strong></label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="text" name="twitter" class="form-control" value="{{$user_info->twitter}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <div class="form-group">
                            <label for="name"><strong>Github : </strong></label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-github" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="text" name="gitgub" class="form-control" value="{{$user_info->gitgub}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                        <div class="form-group">
                            <label for="name"><strong>Change profile picture : </strong></label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <input type="file" name="avatar" class="form-control" value="{{$user_info->avatar}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-12 ">
                    <div class="form-group">
                        <label for="name"><strong>About :</strong></label>
                        <textarea class="form-control" name="about" id="about" cols="30"
                                  rows="8">{{$user_info->about}}</textarea>
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <input type="submit" value="Update" style="border: 2px solid #1a1a1a; " class="btn btn-warning mt-3 mb-3 col-lg-3 mr-4 float-right font-weight-bolder"  >
            </div>

        </div>
    </div>
</form>
