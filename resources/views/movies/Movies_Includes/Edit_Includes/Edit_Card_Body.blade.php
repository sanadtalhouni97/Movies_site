<div class="card-body">
    <form action="{{route('movies.update',['id'=>$movies->id])}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Movie title</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-header" aria-hidden="true"></i>
                                            </span>
                        <input type="text" class="form-control" id="movie_title" name="movie_title" value="{{$movies->movie_title}}">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title">Chose Category </label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                            </span>
                        <select class="form-select form-control" name="category_id">
                            @foreach($categories as $category)
                                @if($category->id == $movies->category_id)

                                    <option value="{{$category->id}}" selected  >{{$category->name}}</option>
                                @else
                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                @endif
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
                                @if($post->id == $movies->post_id)

                                    <option value="{{$post->id}}" selected>{{$post->title}}</option>
                                @else
                                    <option value="{{$post->id}}">{{$post->title}}</option>
                                @endif
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
                        <input type="file" class="form-control-file" id="edit_movie" name="edit_movie">
                    </div>
                </div>
            </div>


            <div class="col-lg-12">
                <div class="form-group">
                    <label for="content">About movie</label>
                    <textarea class="form-control" id="about_movie" name="about_movie"  rows="12" cols="11">
                                            {!! $movies->about_movie !!}
                                        </textarea>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <hr>
            <button type="submit" class="btn btn-primary col-lg-4 float-right">Save</button>
        </div>
    </form>
</div>
