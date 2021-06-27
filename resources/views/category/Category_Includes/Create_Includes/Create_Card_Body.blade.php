<div class="card-body">
    <form method="POST" action="{{route('category.store')}}" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title"><strong>Category Title</strong></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-header" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Titlel">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="featured"><strong>Category picture</strong></label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-picture-o" aria-hidden="true"></i></span>&nbsp;
                        <input type="file" class="form-control-file" id="featured" name="featured">
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="title"><strong>Category type</strong></label>
                <div class="container">
                    <div class="row">
                        <hr>
                        @foreach($categories_type as $type)
                            <div class="col-lg-3"><br>
                                <input class="form-check-input" type="checkbox" name="category_type[]" value="{{$type->id}}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$type->name}}
                                </label>
                            </div>
                        @endforeach

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
