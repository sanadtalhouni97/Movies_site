<form action="{{route('setting.update',['id'=>$settings->id])}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="title"><strong>blog_name</strong></label>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-newspaper-o" aria-hidden="true"></i>   </span>
                    <input type="text" class="form-control" id="blog_name" name="blog_name" value="{{$settings->blog_name}}">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="title"><strong>phone_number</strong></label>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$settings->phone_number}}">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="title"><strong>blog_Email</strong></label>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="blog_Email" name="blog_Email" value="{{$settings->blog_Email}}">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="title"><strong>Address</strong></label>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-address-card" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="address" name="address" value="{{$settings->address}}">
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label for="title"><strong>LinkedIn</strong></label>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="linkedIn" name="linkedIn" value="{{$settings->linkedIn}}">
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="form-group">
                <label for="title"><strong>Twitter</strong></label>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{$settings->twitter}}">
                </div>
            </div>
        </div>


        <div class="col-lg-4">
            <div class="form-group">
                <label for="title"><strong>Facebook</strong></label>
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{$settings->facebook}}">
                </div>
            </div>
        </div>
        <div class="col-lg-12 ">
            <hr>
            <button type="submit" class="col-lg-4  btn btn-primary float-right mr-4 ">Save</button>
        </div>
    </div>


</form>
