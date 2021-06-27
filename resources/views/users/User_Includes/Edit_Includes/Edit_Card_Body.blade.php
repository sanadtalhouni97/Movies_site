<div class="card-body">
    <form action="{{route('user.update',['id'=>$users->id])}}" method="POST"  >
        @csrf

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="name">Name</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-header" aria-hidden="true"></i>
                                            </span>
                        <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </span>
                        <input type="text" readonly class="form-control" id="email" name="email" value="{{$users->email}}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="password">password</label>
                    <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="fa fa-key" aria-hidden="true"></i>
                                            </span>
                        <input type="text"  class="form-control" id="password" name="password" placeholder="enter your new password">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <hr>
            <button type="submit" class="btn btn-primary col-lg-4 float-right">Save</button>
        </div>
    </form>
</div>
