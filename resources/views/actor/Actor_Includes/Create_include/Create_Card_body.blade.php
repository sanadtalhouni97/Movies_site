<div class="card-body">
    <form method="POST" action="{{route('actor.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="title"><strong>actor name</strong></label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-film" aria-hidden="true"></i>&nbsp;
                                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                            </span>
                        <input type="text" class="form-control" id="actor_name" name="actor_name"
                               placeholder="Enter actor name">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="featured"><strong>chose movie</strong></label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                            <i class="fa fa-film" aria-hidden="true"></i>&nbsp;
                                            </span>
                        <select class="form-select form-control" name="movie_id">
                            @foreach($movies as $movie)
                                <option value="{{$movie->id}}">{{$movie->movie_title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="featured"><strong>actor picture</strong></label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;
                                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                                            </span>&nbsp;
                        <input type="file" class="form-control-file" id="actor_image"
                               name="actor_image">
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
