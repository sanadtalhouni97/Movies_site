<table class="table">
    <thead>
    <tr>
        <th scope="col">Profile Picture</th>
        <th scope="col">name</th>
        <th>updated at</th>
        <th>created at</th>
        <th scope="col">user profile</th>
        <th scope="col">edit</th>
        <th scope="col">delete</th>
    </tr>
    </thead>
    <tbody>

    @if($users_admin->count() >= 1)


        @foreach($users_admin as $users)

            <tr>
                <td>
                    @foreach($profiles = \App\Profile::where('user_id',$users->id)->get() as $profile)
                        <img src="{{asset($profile->avatar)}}" alt="" style="width: 120px; height: 120px">
                    @endforeach
                </td>
                <td>{{$users->name}}</td>
                <td>{{$users->updated_at}}</td>
                <td>{{$users->created_at}}</td>

                <td><a href="{{route('profile.show', ['id' => $users->id])}}" class="btn btn-md btn-info w-75">
                        <i class="fa fa-user " style="font-size: 25px; font-weight: 500;"
                           aria-hidden="true"></i>
                    </a>
                </td>

                <td><a href="{{route('user.edit', ['id' => $users->id])}}" class="btn btn-md btn-warning w-75">
                        <i class="fa fa-pencil-square-o" style="font-size: 25px; font-weight: 500;"
                           aria-hidden="true"></i>
                    </a>
                </td>
                <td><a href="{{route('user.destroy',['id'=>$users->id])}}" class="btn btn-md btn-danger w-75">
                        <i class="fa fa-trash-o" style="font-size: 25px; font-weight: 500;"
                           aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        @endforeach

    @else
        <tr>
            <th>  <div class="alert alert-danger">There's no users </div></th>
        </tr>
    @endif
    </tbody>
</table>
