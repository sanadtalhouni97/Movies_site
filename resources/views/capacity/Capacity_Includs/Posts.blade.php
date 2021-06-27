<div class="col-lg-6 p-3">

    <div class="card">
        <!-- header condition alert for posts -->
        @if($posts->count() > 500 && $posts->count() <= 700)
            <div class="card-header alert alert-warning">
                <h2>posts
                    <span class="badge" style="border:2px solid gold;">chek your inventory</span>
                </h2>
            </div>
        @elseif($posts->count() > 800)
            <div class="card-header alert alert-danger">
                <h2>posts</h2>
            </div>
        @else
            <div class="card-header alert alert-success">
                <h2 >posts</h2>

            </div>
    @endif
    <!-- end header condition alert for posts-->

        <div class="card-body">
            <strong>Number of posts :</strong> {{$posts->count()}} <strong>(post)</strong>
            <br><br>
            <strong>Limit of posts :</strong> 1000 <strong>(post)</strong>
            <br><br>


            <!-- posts space condition -->
            <strong>Current space available :</strong>
            @if($posts->count() > 500 && $posts->count() <= 700)
                <span class="alert alert-warning">{{$space_posts}}</span>
                <strong>(post)</strong>
            @elseif($posts->count() > 800)
                <span class="alert alert-danger">{{$space_posts}}</span>
                <strong>(post)</strong>
            @else
                <span class="alert alert-success">{{$space_posts}}</span>
                <strong>(post)</strong>
        @endif
        <!-- end posts space condition -->


        </div>
        <div class="card-footer">


            <!--  progress bar count for posts -->
            <progress style="height: 40px; width: 100%"
                      value="{{$posts->count()}}" max="1000">{{$posts->count()}}</progress>
            <!-- end progress bar count for posts -->

        </div>
    </div>
</div>
