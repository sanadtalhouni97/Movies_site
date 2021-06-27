<table class="table">
    <thead>
    <tr>
        <th scope="col">Post picture</th>
        <th scope="col">title</th>
        <th>updated at</th>
        <th>created at</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    @if($posts->count() >= 1)

        @foreach($posts as $post)
            <tr>


                <td><img src="{{$post->Image($post->photo)}}" alt="" height="120px" width="120px" style="border-radius: 30px; box-shadow:5px 5px 5px 8px #888888;"></td>
                <td>{{$post->title}}</td>
                <td>{{$post->updated_at}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="{{route('posts.edit', ['id' => $post->id])}}" class="btn btn-lg btn-warning">
                        <b>edit </b>
                        &nbsp; <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>

                </td>
                <td><a href="{{route('posts.destroy', ['id' => $post->id])}}" class="btn btn-lg btn-danger">
                        <b>delete</b>
                        &nbsp; <i class="fa fa-trash" aria-hidden="true"></i>
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
