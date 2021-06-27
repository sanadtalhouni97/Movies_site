<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th>updated at</th>
        <th>created at</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    @if($tags->count() >= 1)

        @include('includes.messages')

        @foreach($tags as $tag)
            <tr>

                <td>{{$tag->id}}</td>
                <td>{{$tag->tag}}</td>
                <td>{{$tag->updated_at}}</td>
                <td>{{$tag->created_at}}</td>
                <td>
                    <a href="{{route('tags.edit', ['id' => $tag->id])}}" class="btn btn-warning">
                        <b>edit </b>
                    </a>
                </td>
                <td><a href="{{route('tags.destroy', ['id' => $tag->id])}}" class="btn btn-danger">
                        <b>delete</b>
                    </a>
                </td>
            </tr>
        @endforeach

    @else
        <tr>
            <th>  <div class="alert alert-danger">There's no tags </div></th>
        </tr>
    @endif
    </tbody>
</table>
