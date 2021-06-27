<div class="col-lg-6">
    <div class="card">

        <!-- header condition alert for categories -->
        @if($categories->count() > 250 && $categories->count() <= 300)
            <div class="card-header alert alert-warning">
                <h2>categories
                    <span class="badge" style="border:2px solid gold;">chek your inventory</span>
                </h2>
            </div>
        @elseif($categories->count() > 350)
            <div class="card-header alert alert-danger">
                <h2>categories</h2>
            </div>
        @else
            <div class="card-header alert alert-success">
                <h2 >categories</h2>

            </div>
    @endif
    <!-- end header condition alert for categories -->

        <div class="card-body">
            <strong>Number of categories :</strong> {{$categories->count()}} <strong>(category)</strong>
            <br><br>
            <strong>Limit of categories :</strong> 500 <strong>(category)</strong>
            <br><br>


            <!-- categories space condition -->
            <strong>Current space available :</strong>
            @if($categories->count() > 200 && $categories->count() <= 300)
                <span class="alert alert-warning">{{$space_categories}}</span>
                <strong>(user)</strong>
            @elseif($categories->count() > 350)
                <span class="alert alert-danger">{{$space_categories}}</span>
                <strong>(user)</strong>
            @else
                <span class="alert alert-success">{{$space_categories}}</span>
                <strong>(category)</strong>
        @endif
        <!-- end categories space condition -->


        </div>
        <div class="card-footer">


            <!--  progress bar count for categories -->
            <progress style="height: 40px; width: 100%"
                      value="{{$categories->count()}}" max="500">{{$categories->count()}}</progress>
            <!--  end progress bar count for categories -->



        </div>
    </div>
</div>
