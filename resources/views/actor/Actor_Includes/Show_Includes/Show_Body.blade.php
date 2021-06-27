@if($actor->count() >= 1)
    <div class="container">
        <div class="col-lg-12 d-flex justify-content-center mt-4 mb-4">
            <img src="{{asset($actor->actor_image)}}" width="400" height="300" style="border-radius: 50%;box-shadow: rgb(136 136 172) 0px 2px 31px 10px;border: 1px solid darkmagenta;" alt="">
        </div>
        <hr>
        <div class="clearfix"></div>
        <div class="container  ">
            <div class="row ">
                @foreach($movies as $movie)

                    @foreach($post->where('id',$movie->post_id) as $posts)
                        <div class="col-lg-4 mt-2 d-flex justify-content-center mb-3 ">

                            <a  style=" text-decoration: none;" href="{{route('movies.show',['id'=>$movie->id])}}">
                                <img src="{{asset($posts->photo)}}" style="border-radius: 50%" width="200" height="200" alt="">
                                <h3 class="d-flex justify-content-center" style="color: black;">
                                    <strong>{{$movie->movie_title}}</strong>
                                </h3>
                            </a>
                        </div>
                    @endforeach

                @endforeach
            </div>
        </div>
    </div>
@else
    <div class="col-lg-12">actor doesn't exist</div>
@endif
