<div class="col-lg-12">
    <h1>
        <a href="{{url()->previous()}}" class="btn btn-dark">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;back
        </a>
        <strong class="d-flex justify-content-center">{{$show->title}} movie</strong>
    </h1>
    <h5 class="d-flex justify-content-center">posted : {{$show->created_at->diffForHumans()}}</h5>
</div>
