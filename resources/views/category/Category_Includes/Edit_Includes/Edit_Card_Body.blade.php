<div class="card-body">
    <form method="POST" action="{{route('category.update', ['id' => $category->id])}}" enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title"><strong>Category Title</strong></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-header" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" value="{{$category->name}}" id="name" name="name" placeholder="Enter Titlel">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="featured"><strong>Category picture</strong></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-picture-o" aria-hidden="true"></i></span>&nbsp;
                        <input type="file" class="form-control-file" id="featured"  value="{{asset($category->featured)}}" name="featured">
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-12">
            <hr>
            <button type="submit" class="btn btn-primary col-lg-4 float-right">Save</button>
        </div>
    </form>
</div>
