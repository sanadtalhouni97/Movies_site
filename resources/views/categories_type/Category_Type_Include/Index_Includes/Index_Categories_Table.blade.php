<table class="table ">

    <div class="col-lg-12 d-flex justify-content-center">
        @include('includes.messages')
    </div>
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
    </tr>

    </thead>
    <tbody>
    @if($categories_type->count() >= 1)

    @foreach($categories_type as $category)
    <tr>
        <td>
            {{$category->id}}
        </td>
        <td><strong>{{$category->name}}</strong></td>
        <td>
            <a href="{{route('categories_type.edit', ['id' => $category->id])}}"
               class="btn btn-lg btn-warning"><b>edit </b>
                &nbsp; <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            </a>
        </td>
        <td>
            <a href="{{route('categories_type.destroy', ['id' => $category->id])}}"
               class="btn btn-lg btn-danger"><b>delete</b>
                <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
        </td>
    </tr>
    @endforeach

    @else
    <tr>
        <th>
            <div class="alert alert-danger">There's no categories</div>
        </th>
    </tr>
    @endif
    </tbody>
</table>
