
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">
                Copyright &copy; Your Website
                <!-- This script automatically adds the current year to your website footer-->
                <!-- (credit: https://updateyourfooter.com/)-->
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </div>
            <div class="col-lg-4 my-3 my-lg-0">

                        @if(isset($settings->twitter) === true)
                    <a class="btn btn-dark btn-social mx-2" href="{{$settings->twitter}}"  target="_blank"><i class="fab fa-twitter"></i></a>
                    @else @endif
                         @if(isset($settings->facebook) === true)

                    <a class="btn btn-dark btn-social mx-2" href="{{$settings->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    @else @endif
                        @if(isset($settings->linkedIn) === true)

                    <a class="btn btn-dark btn-social mx-2" href="{{$settings->linkedIn}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    @else @endif

            </div>

        </div>
    </div>
</footer>
<!-- Portfolio Modals-->
<!-- Portfolio item 2 modal popup-->




<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

