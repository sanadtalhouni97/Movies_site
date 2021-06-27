<div class="col-lg-6">

    <div class="card">


        <!-- header condition alert for user -->
        @if($user->count() > 50 && $user->count() <= 79)
            <div class="card-header alert alert-warning">
                <h2>users
                    <span class="badge" style="border:2px solid gold;">chek your inventory</span>
                </h2>
            </div>
        @elseif($user->count() > 80)
            <div class="card-header alert alert-danger">
                <h2>users
                    <span class="badge" style="border:3px solid indianred;">your almost out of space</span>
                </h2>
            </div>
        @else

            <div class="card-header alert alert-success">
                <h2 >users</h2>
            </div>

    @endif
    <!-- end header condition alert for user -->


        <div class="card-body">
            <strong>Number of Users :</strong> {{$user->count()}} <strong>(user)</strong>
            <br><br>
            <strong>Limit of Users :</strong> 100 <strong>(user)</strong>
            <br><br>


            <!-- users space condition -->
            <strong>Current space available :</strong>
            @if($user->count() > 50 && $user->count() <= 79)
                <span class="alert alert-warning">{{$space}}</span>
                <strong>(user)</strong>
            @elseif($user->count() > 80)
                <span class="alert alert-danger">{{$space}}</span>
                <strong>(user)</strong>
            @else
                <span class="alert alert-success">{{$space}}</span>
                <strong>(user)</strong>
        @endif
        <!-- end users space condition -->


        </div>

        <div class="card-footer">


            <!--  progress bar count for users -->
            <progress style="height: 40px; width: 100%"
                      value="{{$user->count()}}" max="100">{{$user->count()}}</progress>
            <!-- end progress bar count for users -->


        </div>
    </div>
</div>
