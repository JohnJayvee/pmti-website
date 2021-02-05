<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/Clients.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/mobileNav.css') }}" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/toggleNav.js') }}"></script>
    <title>Clients</title>
</head>

<body>


    <div class="row">
        <div class="col-12 d-lg-none d-md-block">
            <nav class="navbar">
                <div class="brand-title">
                    <img src="{{ asset('imgs/nav-logo.png') }}" />
                    <h6>Pilipinas Micro-Matrix Technology, Inc</h6>
                </div>
                <a href="#" class="toggle-button" id="togglebtn">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="navbar-links">
                    <ul>
                        <li><a class="" href="/">Home</a></li>
                        <li><a class="" href="/about-us">About</a></li>
                        <li><a class="" href="/product">Products</a></li>
                        <li><a class="" href="/solution">Solutions</a></li>
                        <li><a class="" href="/clients">Clients</a></li>
                        <li><button type="button" class="requestbtn btn-primary"><a href="/contact"
                                    class="hrefbtn">Request a demo</a></button></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <section class="product-banner-container">
        <div class="product-banner">
            <div class="header  d-md-none d-none  d-lg-block">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="col-lg-6  col-md-12 col-sm-12  d-md-none d-none  d-lg-block">
                            <div class="logo">
                                <img src="{{ asset('imgs/nav-logo.png') }}" />
                            </div>
                        </div>
                        <div class="col-lg-6  col-md-12 col-sm-12 headerText">
                            <h6>Pilipinas Micro-Matrix Technology, Inc</h6>
                        </div>
                    </div>

                    <div class="col-lg-6  col-md-12 col-sm-12  d-md-none d-none  d-lg-block">
                        <div class="header-right">
                            <a class="" href=" /">Home</a>
                            <a class="" href="/about-us">About</a>
                            <a class="" href="/product">Products</a>
                            <a class="" href="/solution">Solutions</a>
                            <a class="" href="/clients">Clients</a>
                            {{-- <a href="/contact" class="requestbtn btn-primary">Request a demo</a> --}}
                            <button type="button" class="requestbtn btn-primary"><a href="/contact"
                                    class="hrefbtn">Request a demo</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" style="top:10em">
                    <div class="text-center">
                        <h1 class="headerTag">Clients</h1>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12" style="top:10em">
                    <div class="text-center">
                        <h1 class="headerTag-desc">Our friends we work with</h1>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row mt-5">
                <div class="col partner-container">
                    <div class="row img-row">
                        <div class="col-lg-2 col-md-12 col-sm-12 text-center mb-5">
                            <img src="{{ asset('imgs/BIR.png') }}" class="partner-img" />
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12 text-center mb-5">
                            <img src="{{ asset('imgs/BOC.png') }}" class="partner-img" />
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12 text-center mb-5">
                            <img src="{{ asset('imgs/DTI.png') }}" class="partner-img" />
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12 text-center mt-5 mb-5">
                            <img src="{{ asset('imgs/DCI.png') }}" class="partner-img" />
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12 text-center mb-5">
                            <img src="{{ asset('imgs/DBP.png') }}" class="partner-img" />
                        </div>
                        <div class="col-lg-2 col-md-12 col-sm-12 text-center mt-2 mb-5">
                            <img src="{{ asset('imgs/landbank.png') }}" class="partner-img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="footer-section">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{ asset('imgs/nav-logo.png') }}" class="footer-logo" />
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-3">
                <span class="footer-span">Copyright © 2021 All Rights Reserved by Pilipinas Micro-Matrix Technology,
                    Inc. (PMTI)</span>
            </div>
        </div>
    </section>

</body>

</html>
