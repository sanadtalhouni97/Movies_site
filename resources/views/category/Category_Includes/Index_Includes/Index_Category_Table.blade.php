<table class="table ">
    <thead>
    <tr>
        <th scope="col">category picture</th>
        <th scope="col">name</th>
        <th scope="col">category type</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>
    @if($categories->count() >= 1)

        @foreach($categories as $category)
            <tr>
                <td><img src="{{asset($category->featured)}}"
                         style="border-radius: 30px; box-shadow:5px 5px 5px 8px #888888;" height="130px"
                         width="180px" alt=""></td>
                <td><strong>{{$category->name}}</strong></td>
                <td>
                    <strong>
                        @foreach($category->CategoryType as $type_category)
                            {{$type_category->name}}<br>
                        @endforeach
                    </strong>
                </td>
                <td><a href="{{route('category.edit', ['id' => $category->id])}}"
                       class="btn btn-lg btn-warning"><b>edit </b>
                        &nbsp; <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </td>
                <td><a href="{{route('category.destroy', ['id' => $category->id])}}"
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
