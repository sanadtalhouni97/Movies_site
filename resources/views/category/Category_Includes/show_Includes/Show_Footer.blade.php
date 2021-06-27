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
            <div class="col-lg-4 my-3 my-lg-0 d-flex justify-content-center">
                <a class="btn btn-dark btn-social mx-2" href="{{$settings->twitter}}" target="_blank"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="{{$settings->facebook}}" target="_blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="{{$settings->linkedIn}}" target="_blank"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>

        </div>
    </div>
</footer>
