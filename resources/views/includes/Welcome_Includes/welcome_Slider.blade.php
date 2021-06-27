<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        @foreach($LatestNews as $Latest)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$Latest->id}}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" style="height: 670px" src="{{asset('assets\img\Roya.png')}}" alt="First slide">
        </div>
        @foreach($LatestNews as $Latest)
            <div class="carousel-item ">
                <img class="d-block w-100 " style="height: 670px" src="{{asset($Latest->photo)}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="font-weight-bolder">coming soon : {{$Latest->title}}</h1>
                    <p>{!! $Latest->content !!}</p>
                </div>
            </div>
        @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
