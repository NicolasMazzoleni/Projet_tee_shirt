{{--<img src="{{ route('generateimage.index') }}" width="300" height="300" >--}}

        <!DOCTYPE html>
<html lang="en">
<head>
    @include('settings');
</head>

<body id="page-top">

@include('navbar')

<!-- Header -->
<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">Design</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Bob - Tom - Dave - Phil - Felonius Gru - Lucy Wilde - Agnes Gru - Dr.
            Nefario</h2>
    </div>
</header>

<!-- Shirt model Grid Section -->
<section class="portfoliso" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">1 - Shirt model</h2>
        <hr class="star-dark mb-5">
        <form action=" {{ route('resultatFusion') }}" method="post">
            {{ csrf_field() }}
            <div class="row">
                @foreach($tshirts as $tshirt)
                    <div class="col-md-6 col-lg-4">
                        <label><input value="{{$tshirt->id}}" type="radio" name="tshirt" style="visibility: hidden"><img
                                    class="img-fluid" src="{{asset('images/tshirts/'.$tshirt->id.'.png')}}"></label>
                    </div>
                @endforeach
            </div>
            <br><br><br><br>

            <h2 class="text-center text-uppercase text-secondary mb-0">2 - Image </h2>
            <hr class="star-dark mb-5">
            <div class="row">
                @foreach($logos as $logo)
                    <div class="col-md-6 col-lg-4">
                        <label><input value="{{$logo->id}}" type="radio" name="logo"
                                      style="visibility: hidden"><img class="img-fluid"
                                                                      src="{{asset('images/logos/'.$logo->id.'.png')}}"
                                                                      style="width: 200px"></label>
                    </div>
                @endforeach
            </div>
            <br><br><br><br>

            <!-- button validator -->
            <h2 class="text-center text-uppercase text-secondary mb-0">3 - Generator </h2>
            <hr class="star-dark mb-5">
            <div class="text-center">
                <input class="btn btn-lg btn-primary" type="submit" value="Create">
            </div>
        </form>
    </div>
</section>

<section class="upload" id="upload">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Upload your file</h2>
        <hr class="star-dark mb-5">

        <!-- The data encoding type, enctype, MUST be specified as below -->
        <form enctype="multipart/form-data" action="{{ route('saveUpload') }}" method="POST">
        {{ csrf_field() }}
        <!-- Name of input element determines name in $_FILES array -->
            Send this file: <input name="userfile" type="file"/>
            <input class="btn btn-lg btn-primary" type="submit" value="Upload File"/>
        </form>
    </div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes
                    the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets
                    for easy customization.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">Whether you're a student looking to showcase your work, a professional looking to
                    attract clients, or a graphic artist looking to share your projects, this template is the perfect
                    starting point!</p>
            </div>
        </div>
    </div>
</section>

@include('footer')

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>

</body>

</html>
