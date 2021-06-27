@extends('layouts.app')

@section('content')

    <div class="col-lg-12 d-flex justify-content-center">
        <h1 class="mt-4 mb-5"
            style="font-size: 50px;font-weight: 700;background: #3e3939;color: rgb(239, 209, 52);border-radius: 21px; box-shadow: rgb(136 136 136) 2px 0px 16px 17px;">
            watch {{$movies->movie_title}} on Roya Watch Now</h1>
    </div>

    <div class="container mt-3">

        <div class="row mb-5"
             style="border: 2px solid;background: whitesmoke;border-radius: 50px;box-shadow: rgb(60 45 68) 0px 1px 28px 21px;">

            @if($movies->count() >= 1)
                <div class="container">

                    <div class="row mt-3 mb-3">
                        <div class="col-lg-6">
                            <img src="{{asset($posts->photo)}}" style="border-radius: 20px" width="100%" height="500px"
                                 alt="">
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">
                      <strong>movie name &nbsp; <i class="fa fa-film" aria-hidden="true"></i> :</strong>
                  </span>
                                </div>
                                <input type="text" class="form-control" readonly value="{{$movies->movie_title}}">
                            </div>

                            <div class="input-group mt-2">
                                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend2">
                      <strong>Category name &nbsp; <i class="fa fa-list" aria-hidden="true"></i> :</strong>
                  </span>
                                </div>
                                <input type="text" class="form-control" readonly value="{{$category->name}}">
                            </div>
                        </div>


                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="card   mt-3 mb-3">
                                <div class="card-header "><strong>story :</strong></div>
                                <div class="card-body">
                                    <p class="card-text">{!! $movies->about_movie !!}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="card    mt-3 mb-3">
                                <div class="card-header ">
                                    <h2 class="font-weight-bolder">watch trailer</h2>
                                </div>
                                <div class="card-body">
                                    <video width="500" height="200" style="border-radius: 20px" controls preload="none">
                                        <source type="video/mp4" src="{{asset($posts->featured)}}">
                                    </video>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 ">
                            <div class="card    mt-3 mb-3">
                                <div class="card-header d-flex justify-content-center ">
                                    <h2 class="font-weight-bolder">actors</h2>
                                </div>
                                <div class="card-body ">
                                    <div class="container  ">
                                        <div class="row ">
                                            @foreach($actors as $actor)

                                                <div class="col-lg-4 mt-2 d-flex justify-content-center  ">
                                                    <a style="text-decoration: none;"
                                                       href="{{route('actor.show',['id'=>$actor->id,'actor_name'=>$actor->actor_name])}}">
                                                        <img src="{{asset($actor->actor_image)}}"
                                                             style="border-radius: 50%" width="200" height="200" alt="">
                                                        <h3 style="color: black;"
                                                            class="d-flex justify-content-center font-weight-bolder">{{$actor->actor_name}}</h3>
                                                    </a>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="clearfix"></div>


                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="card    mt-3 mb-3">
                                <div class="card-header ">
                                    <h2 class="font-weight-bolder d-flex justify-content-center">watch</h2>
                                </div>
                                <div class="card-body">
                                    <video width="1000" height="400" style="border-radius: 20px"
                                           poster="{{asset($posts->photo)}}" controls preload="none">
                                        <source type="video/mp4" src="{{asset($movies->movie)}}">
                                    </video>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="card    mt-3 mb-3">
                                <div class="card-header ">
                                    <h2 class="font-weight-bolder d-flex justify-content-center">Movies related</h2>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-lg-12 d-inline-block">
                                            <div class="row">


                                                @foreach($movies->Category_type->where('name',$movies_categoryType->name) as $Get_movie)

                                                    @foreach($Get_movie->Movies as $view_Movie)
                                                        <div class="col-lg-4 d-flex mt-3">


                                                            <div class="card" style="width: 18rem;">
                                                                @foreach($movies_related_wallpaper->where('id',$view_Movie->post_id) as $p)
                                                                <img class="card-img-top"
                                                                     src="{{asset($p->photo)}}"
                                                                     alt="Card image cap">
                                                                @endforeach
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{$view_Movie->movie_title}}</h5>
                                                                    <p class="card-text">{!! $view_Movie->about_movie !!}</p>
                                                                    <a href="{{route('movies.show',['id'=>$view_Movie->id])}}"
                                                                       class="btn btn-success col-md-12">
                                                                        <strong>Watch</strong>&nbsp;
                                                                        <i class="fa fa-clock-o"
                                                                           aria-hidden="true"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                @endforeach


                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>

                </div>


            @else

                <div class="col-lg-12">movie is not available at the moment</div>
    @endif

@endsection
