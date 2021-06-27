@if($category->count() >= 1 )

    @foreach($category as $categories)
        <div class="portfolio-modal modal fade" id="portfolioModal1_{{$categories->id}}" tabindex="-1" role="dialog"
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
                                    <div class="col-lg-12">
                                        <p class="item-intro text-muted">Category : {{$categories->name}}</p>
                                        <img class="img-fluid d-block mx-auto" src="{{asset($categories->featured)}}"
                                             style="width: 340px;height: 189px;border-radius: 80px;box-shadow: 5px 5px 30px 7px rgb(0 0 0 / 25%), -5px -5px 30px 7px rgb(0 0 0 / 22%);"
                                             alt="..."/>
                                    </div>
                                    <hr>

                                    <div class="text-center">
                                        <h2 class="section-heading text-uppercase">All movies
                                            for {{$categories->name}}</h2>
                                    </div>
                                    <div class="row mt-4">
                                        @if($categories->posts->count() >= 1 )
                                            @foreach($categories->posts as $categoriesPosts)
                                                <div class="col-lg-4 col-sm-6 mb-5">
                                                    <!-- Portfolio item -->
                                                    <div class="portfolio-item">
                                                        <a class="portfolio-link"
                                                           href="{{route('category.show',['id'=> $categoriesPosts->id])}}">

                                                            <img class="img-fluid"
                                                                 src="{{asset($categoriesPosts->photo)}}"
                                                                 style="width: 356px;height: 250px;box-shadow: 5px 5px 30px 7px rgba(0, 0, 0, 0.25), -5px -5px 30px 7px rgba(0, 0, 0, 0.22);border-radius: 50%;"
                                                                 alt="..."/>
                                                        </a>

                                                        <div class="portfolio-caption">
                                                            <div
                                                                class="portfolio-caption-heading">{{$categoriesPosts->title}}
                                                                Film
                                                            </div>
                                                            <div class="portfolio-caption-subheading text-muted">Posted
                                                                : {{$categoriesPosts->created_at->diffForHumans()}}</div>
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
