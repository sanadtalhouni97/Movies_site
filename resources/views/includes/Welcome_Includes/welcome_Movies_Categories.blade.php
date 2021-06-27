<section class="page-section" id="categories">

    <div class="text-center">
        <h2 class="section-heading text-uppercase">movies category</h2>
    </div>
    <div class="cards-list">

        @if($category->count() >= 1 )

            @foreach($category as $categories)
                <a style="text-decoration: none;" class="portfolio-link" data-bs-toggle="modal"
                   href="#portfolioModal1_{{$categories->id}}">

                    <div class="card 1">
                        <div class="card_image"><img src="{{asset($categories->featured)}}"/></div>
                        <div class="card_title title-white">
                            <p>{{$categories->name}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <div class="col-lg-12 alert-warning d-flex justify-content-center alert-warning">
                <h1>there's no new Post categories</h1>
            </div>

        @endif
    </div>


</section>
