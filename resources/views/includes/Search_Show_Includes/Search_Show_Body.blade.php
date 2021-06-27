<div class="row">
    @if($search_show->count() >= 1 )
        @foreach($search_show->posts as $find_related)
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item -->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal"
                       href="{{route('category.show',['id'=> $find_related->id])}}">
                        <img class="img-fluid" src="{{asset($find_related->photo)}}" style="width: 356px; height: 250px"
                             alt="..."/>
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Post : {{$find_related->title}}</div>
                        <div class="portfolio-caption-heading">category : {{$find_related->category->name}}</div>
                        <div class="portfolio-caption-subheading text-muted">Posted
                            : {{$find_related->created_at->diffForHumans()}}</div>
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
