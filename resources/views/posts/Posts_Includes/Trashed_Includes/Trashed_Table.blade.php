<table class="table">
    <thead>
    <tr>
        <th scope="col">Post picture</th>
        <th scope="col">title</th>
        <th>updated at</th>
        <th>created at</th>
        <th scope="col">restore</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    @if($posts->count() >= 1)

        @foreach($posts as $post)
            <tr>


                <td><img src="{{asset($post->photo)}}" style="border-radius: 30px; box-shadow:5px 5px 5px 8px #888888;" height="130px" width="180px" alt=""></td>
                <td>{{$post->title}}</td>
                <td>{{$post->updated_at}}</td>
                <td>{{$post->created_at}}</td>
                <td><a href="{{route('posts.restore', ['id' => $post->id])}}" class="btn btn-info"><b>restore </b>
                    </a>
                </td>
                <td><a href="{{route('posts.hardDelete', ['id' => $post->id])}}" class="btn btn-danger"><b>delete</b>
                    </a>
                </td>
            </tr>
        @endforeach

    @else
        <tr>
            <th>  <div class="alert alert-danger">There's no posts </div></th>
        </tr>
    @endif
    </tbody>
</table>
