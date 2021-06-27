@if($LatestNews->count() >= 1 )

    @foreach($LatestNews as $Latest)
        <div class="portfolio-modal modal fade" id="portfolioModal2_{{$Latest->id}}" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                                                          alt="Close modal"/></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{$Latest->title}} Trailer</h2>
                                    <p class="item-intro text-muted">Category : {{$Latest->category->name}}</p>
                                    <h3 class=" d-flex justify-content-center font-weight-bolder">watch trailer</h3>
                                    <video width="800" height="400" controls preload="none">
                                        <source type="video/mp4" src="{{asset($Latest->featured)}}">
                                    </video>
                                    <p class="d-inline-block">
                                    <h3 class="font-weight-bolder">description :</h3>{!!  $Latest->content!!}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Posted: {{$Latest->created_at}}</strong><br>
                                            <strong>Before : {{$Latest->created_at->diffForHumans()}} ago</strong>
                                        </li>

                                        <li class="mt-5 mb-5">
                                            <h3 class="d-inline-block ">Tags:</h3>

                                            @foreach($Latest->Tag as $Tags)
                                                <div class="col-lg-3 d-inline-block">
                                                    <h1 class="d-inline-flex">
                                                        <a href="{{route('tags.show',['id'=>$Tags->id])}}">
                                                            <span class="badge badge-secondary">
                                                              <i class="fa fa-tag" aria-hidden="true"></i>&nbsp; {{$Tags->tag}}
                                                            </span>
                                                        </a>
                                                    </h1>
                                                </div>
                                            @endforeach


                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                            type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@else
    <div class="alert-warning d-none">
        there's no new Post available
    </div>

@endif
