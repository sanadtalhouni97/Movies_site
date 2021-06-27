<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="col-lg-6">
        <div class="input-group rounded">
            <input type="search" name="search" id="search" onkeyup="search_func(this.value);"
                   class="form-control rounded" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon"/>

            <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                      </span>

        </div>
        <ul class="list-group">
            <li class="list-group-item" id="display" style="display: none; "></li>

        </ul>

    </div>
    <div class="container">
        {{--        @foreach($settings as $setting)--}}
        <a class="navbar-brand" href="#page-top">


            @if( isset($settings->blog_name) === false)
                there no blog name
            @else
                {{$settings->blog_name}}
            @endif
        </a>

        {{--        @endforeach--}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">


            <script>
                $(document).ready(function () {
                    $("#search").keyup(function () {
                        var text = $(this).val();
                        $.ajax({
                            method: "get",
                            url: "search_fun",
                            data: {text: text},
                            dataType: "html",
                            success: function (data) {


                                if (data == 'empty') {
                                    $("#display").css('display', 'none');
                                } else {

                                    $("#display").css('display', 'block');
                                    $("#display").css('position', 'absolute');
                                    $("#display").css('width', '75%');
                                    $("#display").css('margin-top', '3px');

                                    $("#display").html(data);
                                }

                            }

                        });
                    });
                });
            </script>

            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                <li class="nav-item"><a class="nav-link" href="#portfolio">Latest movies</a></li>
                <li class="nav-item"><a class="nav-link" href="#categories">categories</a></li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link font-weight-bolder" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link font-weight-bolder"
                               href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('home') }}">
                                Home
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>

        </div>

    </div>

</nav>
