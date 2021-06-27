<div class="card-body">
    <form method="POST" action="{{route('categories_type.update',['id'=>$categories_type->id])}}" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title"><strong>Category type Title</strong></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-header" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="name"  value="{{$categories_type->name}}" name="name" placeholder="Enter Titlel">
                    </div>
                </div>
            </div>


        </div>

        <div class="col-lg-12">
            <hr>
            <button type="submit" class="btn btn-primary col-lg-5 float-right">Save</button>
        </div>

    </form>
</div>
