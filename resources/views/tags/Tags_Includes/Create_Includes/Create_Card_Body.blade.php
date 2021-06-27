<div class="card-body">
    <form action="{{route('tags.store')}}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                    </div>
                </div>
                <input type="text" class="form-control" id="tag" name="tag" placeholder="Enter tag">
            </div>
        </div>
        <button type="submit" class="btn btn-primary col-lg-4 mr-3 float-right">Save</button>
    </form>
</div>
