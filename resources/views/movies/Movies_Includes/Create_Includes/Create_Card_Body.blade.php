<div class="card-body">
    <form action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Movie title</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-header" aria-hidden="true"></i>
                                            </span>
                        <input type="text" class="form-control" id="movie_title" name="movie_title"
                               placeholder="Enter Titlel">
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

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Chose Post</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                                            </span>
                        <select class="form-select form-control" name="post_id">
                            @foreach($posts as $post)
                                <option value="{{$post->id}}">{{$post->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="form-group">
                    <label for="featured">Upload movie</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-file-video-o" aria-hidden="true"></i>
                                            </span>&nbsp;
                        <input type="file" class="form-control-file" id="movie" name="movie">
                    </div>
                </div>
            </div>

            <div class="col-lg-12">

                <div class="form-group">
                    <label for="category_type">type :</label>
                    <div class="row">
                        @foreach($category_type as $type)


                            <span class="col-lg-3 mr-2 mt-2 badge badge-dark" style="height: 40px">
                        <h4>
                            <input type="checkbox" name="movies_category_type[]" value="{{$type->id}}">
                            {{$type->name}} &nbsp;
                            <i class="fa fa-file-video-o" aria-hidden="true"></i>
                        </h4>
                        </span>


                        @endforeach
                    </div>
                </div>

                <hr>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <label for="content">About movie</label>
                    <textarea class="form-control" id="about_movie" name="about_movie" rows="12" cols="11"></textarea>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <hr>
            <button type="submit" class="btn btn-primary col-lg-4 float-right">Save</button>
        </div>
    </form>
</div>
