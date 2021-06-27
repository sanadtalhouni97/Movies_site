@include('layouts.app')





    <section class="page-section " id="portfolio">

        <div class="container bg-light" style="border-radius: 20px">
            <h1>
                <a href="{{url()->previous()}}" class="btn btn-dark">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;
                    back
                </a>
            </h1>
            <div class="text-center">
                <h2 class="section-heading text-uppercase">posts related {{$tags->tag}}</h2>
                <h3 class="section-subheading text-muted">Keep up to date</h3>
            </div>



            <div class="row">
                @if($find_posts->count() >= 1 )
                    @foreach($find_posts as $find_related)
                        <div class="col-lg-4 col-sm-6 mb-4 ">
                            <!-- Portfolio item -->
                            <div class="portfolio-item">
                                <a class="portfolio-link"  href="{{route('category.show',['id'=>$find_related->id])}}">
                                    <img class="img-fluid" src="{{asset($find_related->photo)}}" style="width: 356px; height: 250px" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Post : {{$find_related->title}}</div>
                                    <div class="portfolio-caption-heading">category : {{$find_related->category->name}}</div>
                                    <div class="portfolio-caption-subheading text-muted">Posted : {{$find_related->created_at->diffForHumans()}}</div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                @else
                    <div class=" col-lg-12 d-flex justify-content-center alert-warning ">
                        <h1>there's no new Post available</h1>
                    </div>

                @endif


            </div>
        </div>
    </section>
@if($find_posts->count() >= 1 )

    @foreach($find_posts as $find_related)
        <div class="portfolio-modal modal fade" id="portfolioModal2_{{$find_related->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Post :{{$find_related->title}}</h2>
                                    <p class="item-intro text-muted">Category : {{$find_related->category->name}}</p>
                                    <iframe width="800" height="400"
                                            src="{{asset($find_related->featured)}}">
                                    </iframe>
                                    <p>{!!  $find_related->content!!}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Date:</strong>
                                            {{$find_related->created_at->diffForHumans()}}
                                        </li>
                                        <li>
                                            <strong>Tags:</strong>

                                            @foreach($find_related->Tag as $Tags)
                                                <div class="col-lg-3 ">
                                                    <h1 class="d-inline-flex">
                                                        <a href="{{route('tags.show',['id'=>$Tags->id])}}"><span class="badge badge-secondary">{{$Tags->tag}}</span></a>
                                                    </h1>
                                                </div>
                                            @endforeach


                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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



@include('includes.footer')
