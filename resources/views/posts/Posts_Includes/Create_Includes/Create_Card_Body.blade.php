<div class="card-body">
    <form action="{{route('posts.store')}}" method="POST"  enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-header" aria-hidden="true"></i>
                                            </span>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Titlel">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Chose Category</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                            </span>
                        <select class="form-select form-control" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-check">
                    <hr>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Chose Tags &nbsp;
                                                <i class="fa fa-tags" aria-hidden="true"></i> :
                                            </span>
                    </div>
                    <div class="container">
                        <div class="row">
                            <hr>
                            @foreach($tags as $tag)
                                <div class="col-lg-3"><br>
                                    <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$tag->tag}}
                                    </label>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="featured">Upload video</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-file-video-o" aria-hidden="true"></i>
                                            </span>&nbsp;
                        <input type="file" class="form-control-file" id="featured" name="featured">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="featured">upload picture</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-file-image-o" aria-hidden="true"></i>
                                            </span> &nbsp;
                        <input type="file" class="form-control-file" id="photo" name="photo">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="contents" name="contents"  rows="12" cols="11"></textarea>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <hr>
            <button type="submit" class="btn btn-primary col-lg-4 float-right">Save</button>
        </div>
    </form>
</div>
