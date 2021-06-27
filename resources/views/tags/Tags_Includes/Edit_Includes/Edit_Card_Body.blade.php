<div class="card-body">
    <form action="{{route('tags.update',['id'=> $tag->id])}}" method="POST" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">tag</label>
            <input type="text" class="form-control" id="tag" value="{{$tag->tag}}" name="tag" placeholder="Enter tag">
        </div>


        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
