<div class="col-lg-6 p-3">
    <div class="card">



        <!-- header condition alert for tags -->
        @if($tags->count() > 3000 && $tags->count() <= 3500)
            <div class="card-header alert alert-warning">
                <h2>tags
                    <span class="badge" style="border:2px solid gold;">chek your inventory</span>
                </h2>
            </div>
        @elseif($tags->count() > 800)
            <div class="card-header alert alert-danger">
                <h2>tags</h2>
            </div>
        @else
            <div class="card-header alert alert-success">
                <h2 >tags</h2>

            </div>
    @endif
    <!-- end header condition alert for tags-->


        <div class="card-body">

            <strong>Number of tags :</strong> {{$tags->count()}} <strong>(tag)</strong>
            <br><br>
            <strong>Limit of tags :</strong> 5000 <strong>(tag)</strong>
            <br><br>

            <!-- tags space condition -->
            <strong>Current space available :</strong>
            @if($tags->count() > 3000 && $tags->count() <= 3500)
                <span class="alert alert-warning">{{$space_tags}}</span>
                <strong>(tag)</strong>
            @elseif($tags->count() > 4000)
                <span class="alert alert-danger">{{$space_tags}}</span>
                <strong>(tag)</strong>
            @else
                <span class="alert alert-success">{{$space_tags}}</span>
                <strong>(tag)</strong>
        @endif
        <!-- end tags space condition -->

        </div>
        <div class="card-footer">

            <!-- tags progress bar count for tags -->
            <progress style="height: 40px; width: 100%"
                      value="{{$tags->count()}}" max="5000">{{$tags->count()}}</progress>
            <!-- end progress bar count for tags -->

        </div>
    </div>
</div>
