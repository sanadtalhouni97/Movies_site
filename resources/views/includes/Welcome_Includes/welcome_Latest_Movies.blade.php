<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Latest movies</h2>
            <h3 class="section-subheading text-muted">Keep up to date</h3>
        </div>
        <div class="row">
            @if($LatestNews->count() >= 1 )
                @foreach($LatestNews as $Latest)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item -->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2_{{$Latest->id}}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{asset($Latest->photo)}}"
                                     style="width: 340px;height: 189px;border-radius: 80px;box-shadow: 5px 5px 30px 7px rgb(0 0 0 / 25%), -5px -5px 30px 7px rgb(0 0 0 / 22%);"
                                     alt="..."/>
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Post : {{$Latest->title}}</div>
                                <div class="portfolio-caption-heading">category : {{$Latest->category->name}}</div>
                                <div class="portfolio-caption-subheading text-muted">Posted
                                    : {{$Latest->created_at->diffForHumans()}}</div>
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
