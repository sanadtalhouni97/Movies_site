<div class="card-body">
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name"><strong>Name</strong></label>
                    <input type="text" class="form-control" id="name" name="name"
                           placeholder="Enter Name">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">

                    <label for="name"><strong>User Type</strong></label>
                    <select class="form-select form-control" name="user_type"
                            aria-label="Default select example">
                        @foreach($user_type as $user_types)
                            <option value="{{$user_types->id}}">{{$user_types->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email"><strong>Email</strong></label>
                    <input type="text" class="form-control" id="email" name="email"
                           placeholder="Enter email">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email"><strong>Password</strong></label>
                    <input type="text" class="form-control" id="password" name="password"
                           placeholder="Enter password">
                </div>
            </div>

            <div class="col-lg-12">
                <label for="permissions"><strong>chose permission</strong></label>
                <div class="form-check">
                    <div class="container">
                        <div class="row">
                            <hr>
                            @foreach($permission as $permissions)
                                <div class="col-lg-3"><br>
                                    <input class="form-check-input" type="checkbox"
                                           name="permissions[]" value="{{$permissions->id}}"
                                           id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{$permissions->name}}
                                    </label>
                                </div>
                            @endforeach
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-lg-12  d-flex mt-4   ">
            <button type="submit" class="offset-sm-8 col-sm-4   btn btn-primary">Save</button>
        </div>

    </form>
</div>
