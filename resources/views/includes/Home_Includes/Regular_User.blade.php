<div class="col-lg-12 d-flex justify-content-center">
    <h1 class="mt-4 mb-5"
        style="font-size: 50px;font-weight: 700;background: #3e3939;color: rgb(239, 209, 52);border-radius: 21px; box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
        watch latest movies on Roya Watch
    </h1>
</div>

<div class="container mt-3">


    <div class="row mb-5"
         style="border: 2px solid;background: whitesmoke;border-radius: 50px;box-shadow: rgb(60 45 68) 0px 1px 28px 21px;">

        <div class="col-lg-12 d-flex justify-content-center">
            @foreach($category_type as $type)
                <h3 class="mr-3 mt-3"><span class="badge badge-dark">
                        <a href="{{route('movies.collection',['name'=>$type->name])}}">
                            {{$type->name}}&nbsp;
                            <i class="fa fa-film" aria-hidden="true"></i>
                        </a>
                    </span>
                </h3>
            @endforeach
        </div>
        <div class="clearfix">
        </div>
        @if($movies->count() >= 1)
            @foreach($movies as $movie)

                @foreach($posts->where('id',$movie->post_id) as $post)
                    <div class="col-lg-4 mt-5 mb-5 ">
                        <a href="{{route('movies.show',['id'=>$movie->id])}}" style="text-decoration: none;">
                            <img src="{{asset($post->photo)}}" width="100px" height="200px"
                                 style="border-radius: 100px;box-shadow: rgb(175 171 177) 0px 1px 15px 14px;"
                                 class="card-img-top" alt="sss">
                            <span class="mt-3 d-flex justify-content-center" style="color: #3a3535;">
                               <h3 style="background: rgb(179 167 167);border-radius: 14px;box-shadow: rgb(175, 171, 177) 0px 1px 15px 14px;">
                                   <strong>{{$post->title}}</strong>
                               </h3>
                           </span>
                        </a>
                    </div>
                @endforeach


            @endforeach

        @else

            <div class="col-lg-12 mt-3 d-flex justify-content-center">
                <h1 class="alert alert-warning font-weight-bolder ">there's no movies available</h1>
            </div>

        @endif


    </div>
</div>
