<table class="table ">
    <thead>
    <tr>
        <th scope="col">actor picture</th>
        <th scope="col">actor name</th>
        <th scope="col">movie name</th>
        <th scope="col">edit actor</th>
        <th scope="col">delete actor</th>
    </tr>
    </thead>
    <tbody>
    @if($actors->count() >= 1)

        @foreach($actors as $actor)
            <tr>
                <td><img src="{{asset($actor->actor_image)}}"
                         style="border-radius: 30px; box-shadow:5px 5px 5px 8px #888888;" height="130px"
                         width="180px" alt=""></td>
                <td><strong>{{$actor->actor_name}}</strong></td>


                <td>
                    @foreach($movies->where('id',$actor->movie_id) as $movie)

                        {{$movie->movie_title}}
                    @endforeach
                </td>

                <td><a href="{{route('actor.edit',['id'=>$actor->id])}}" class="btn btn-lg btn-warning"><b>edit </b>
                        &nbsp; <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
                <td><a href="{{route('actor.destroy',['id'=>$actor->id])}}"
                       class="btn btn-lg btn-danger"><b>delete</b>
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach

    @else
        <tr>
            <th>
                <div class="alert alert-danger">There's no actors</div>
            </th>
        </tr>
    @endif
    </tbody>
</table>
