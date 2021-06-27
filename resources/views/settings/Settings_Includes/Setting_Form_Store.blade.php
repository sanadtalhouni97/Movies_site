<form action="{{route('setting.store')}}" method="POST"  enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="title"><strong>blog_name</strong></label>
                <input type="text" class="form-control" id="blog_name" name="blog_name" value="">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="title">phone_number</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="title">blog_Email</label>
                <input type="text" class="form-control" id="blog_Email" name="blog_Email" value="">
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group">
                <label for="title">address</label>
                <input type="text" class="form-control" id="address" name="address" value="">
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <label for="title">linkedIn</label>
                <input type="text" class="form-control" id="linkedIn" name="linkedIn" value="">
            </div>
        </div>


        <div class="col-lg-4">
            <div class="form-group">
                <label for="title">twitter</label>
                <input type="text" class="form-control" id="twitter" name="twitter" value="">
            </div>
        </div>


        <div class="col-lg-4">
            <div class="form-group">
                <label for="title">facebook</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="">
            </div>
        </div>

        <div class="col-lg-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary ml-4 ">Save</button>
        </div>
    </div>


</form>
