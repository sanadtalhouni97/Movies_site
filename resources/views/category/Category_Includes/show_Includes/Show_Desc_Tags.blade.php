<div class="col-lg-12">
    <h2 class="d-flex justify-content-center mb-2 mt-2">description :</h2>
    {!!$show->content!!}

    <div class="col-lg-6">
        @foreach($tags as $tag)
            <h4 class="d-inline-block">
                <a href="{{route('tags.show',['id'=>$tag->id])}}">
                        <span class="badge badge-dark ">
                            <i class="fa fa-tag" aria-hidden="true"></i>&nbsp;{{$tag->tag}}
                      </span>
                </a>
            </h4>
        @endforeach
    </div>
</div>
