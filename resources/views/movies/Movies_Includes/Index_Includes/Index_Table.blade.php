<table class="table">
    <thead>
    <tr>
        <th scope="col">Movie Picture</th>
        <th scope="col">Movie title</th>
        <th>Category</th>
        <th>movie post</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    @if($movies->count() >= 1)

        @foreach($movies as $movie)
            <tr>
                <td>
                    @foreach($post->where('id',$movie->post_id) as $posts)
                        <img src="{{asset($posts->photo)}}" alt="" height="120px" width="120px" style="border-radius: 30px; box-shadow:5px 5px 5px 8px #888888;">
                    @endforeach
                </td>
                <td>
                    @foreach($post->where('id',$movie->post_id) as $posts)
                        {{$posts->title}}
                    @endforeach
                </td>
                <td>
                    @foreach($Category->where('id',$movie->category_id) as $Categories)
                        {{$Categories->name}}
                    @endforeach
                </td>
                <td>
                    @foreach($post->where('id',$movie->post_id) as $posts)
                        <a href="{{route('posts.edit',['id'=>$posts->id])}}" class="btn d-block btn-lg btn-info">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </a>
                    @endforeach
                </td>
                <td>
                    <a href="{{route('movies.edit',['id'=>$movie->id])}}" class="btn btn-lg btn-warning">
                        <b>edit </b>
                        &nbsp; <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>

                </td>
                <td><a href="{{route('movies.destroy',['id'=>$movie->id])}}" class="btn btn-lg btn-danger">
                        <b>delete</b>
                        &nbsp; <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach

    @else
        <tr>
            <th>  <div class="alert alert-danger">There's no movies </div></th>
        </tr>
    @endif
    </tbody>
</table>
