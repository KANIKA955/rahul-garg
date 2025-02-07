<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bg-wrap">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-center">
                            <p class="mb-0 phone pl-md-2">
                                <a href="tel:+91 9599378395" class="mr-2"><span class="fa fa-phone mr-1"></span>+91 9599378395</a>
                                <a href="mailto:garg5060@gmail.com"><span class="fa fa-paper-plane mr-1"></span> garg5060@gmail.com</a>
                            </p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end">
                            <div class="social-media">
                                <p class="mb-0 d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('assets/images/logo.png')}}" style="height: 90px; widows: auto" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item {{Route::currentRouteName()==='home'?'active':''}}"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item {{Route::currentRouteName()==='about'?'active':''}}"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item {{Route::currentRouteName()==='about'?'active':''}}"><a href="services.html" class="nav-link">Services</a></li>
                <li class="nav-item {{Route::currentRouteName()==='about'?'active':''}}"><a href="cases.html" class="nav-link">Case Study</a></li>
                <li class="nav-item {{Route::currentRouteName()==='about'?'active':''}}"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item {{Route::currentRouteName()==='about'?'active':''}}"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
