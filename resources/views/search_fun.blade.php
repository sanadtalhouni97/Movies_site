@if($_GET['text'] != '' && isset($_GET['text']) )



{{--   --}}

@if($search->count() > 0)


@foreach($search as $searchs)
    <a style="text-decoration: none;" href="{{route('search_show',['id'=>$searchs->id])}}">
    <div style="background-image: url('{{$searchs->featured}}'); height: 100%; width: 100%;
        border-radius: 20px; ">



            <br>
            <h3 class="d-flex justify-content-center" style="font-size: 37px; font-weight: 600; color: #ffc80f">{{$searchs->name}}</h3>

{{--        <img src="{{asset($searchs->featured)}}"--}}
{{--             style="position:absolute; right: 50px; border-radius: 25px"    width="100px"  height="50px" alt="">--}}
    </div>
    </a>



    <br>
    <hr>

    @endforeach
@else
    {{'no result found'}}
@endif



@else

{{'empty'}}

@endif




