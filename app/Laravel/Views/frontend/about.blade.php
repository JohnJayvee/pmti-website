<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="viewport" content="width=970" /> --}}
    {{-- <meta name="viewport" content="width=1024, initial-scale=1.0" /> --}}
    <link rel="stylesheet" href="{{ asset('css/About.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/Timeline.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/mobileNav.css') }}" type="text/css">
    <script src="{{ asset('js/toggleNav.js') }}"></script>
    <script src="{{ asset('js/Timeline.js') }}"></script>
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

    <title>About</title>
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
                    <div class="col-lg-6 col-md-12 col-sm-12  d-md-none d-none  d-lg-block">
                        <div class="col-lg-6  col-md-12 col-sm-12">
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
                            <button type="button" class="requestbtn btn-primary"><a href="/contact"
                                    class="hrefbtn">Request a demo</a></button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" style="top:10em">
                    <div class="text-center">
                        <h1 class="headerTag">ABOUT US</h1>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row" style="margin-top: 10rem;">
                <div class="col">
                    <span class="about-us-desc">Providing Information and Communications Technology Solutions to the
                        government agencies and
                        private sectors has been the core of Pilipinas Micro-Matrix Technology, Inc. (PMTI) since 2007.
                        The
                        company is proactively engaged in technical consultancy, supply, design and installation of ICT
                        Systems across the country.</span>
                </div>
            </div>

            <div class="row" style="margin-top: 10rem;">
                <div class="col">
                    <span class="about-us-desc">PMTI is also known as one of the most trusted investment integrators
                        that deals with financial
                        management and adequate services of both corporations and institutions. The company believes
                        that
                        effective system integration is necessary for the advancement of the corporation’s interest,
                        especially to those who are continually investing in ICT solutions.</span>
                </div>
            </div>

            <div class="row" style="margin-top: 10rem;">
                <div class="col text-center">
                    <span class="pmti-history">PMTI History</span>
                </div>
            </div>

            <div class="row" style="margin-top: 5rem;">
                <div class="col">
                    <ul class="timeline">
                        <li class="timeline-inverted">
                            <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card">2010</i></div>
                            <div class="timeline-panel">
                                <div class="timeline-body">
                                    <p>In 2010, we were awarded to develop the BIR’s Mobile Collection Revenue Operating
                                        System (MRCOS). A mobile application running on a POS Terminal and used to
                                        collect and record tax payment in the various Revenue District Offices.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card">2018</i></div>
                            <div class="timeline-panel">
                                <div class="timeline-body">
                                    <p>In 2018, in partnership with the government bank, we develop the application DBP
                                        Pay Tax system. The application automates the filing of tax forms and accepts
                                        on-line payments via Visa cards and automatically settles the payment to the
                                        Treasury account of the BIR.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up">2019</i></div>
                            <div class="timeline-panel">
                                <div class="timeline-body">
                                    <p>In 2019, we were awarded to develop DTI’s payment system call DTI Pay. The
                                        application provides an On-line system to pay for various fees to DTI.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container" style="margin-top: 10rem;">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col">
                                <span class="mission-text">Mission</span>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-sm-12">
                                <span class="mission-desc">To create a cashless, contactless and paperless society by
                                    providing platforms, system solutions, infrastructures to the Philippine Government
                                    agencies and Offices.</span>
                            </div>
                        </div>

                        <div class="row vission">
                            <div class="col">
                                <span class="mission-text">Vission</span>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col">
                                <span class="mission-desc">We envision a transparent , efficient , corrupt free
                                    Philippine government utilizing the newest and fastest custom online platforms for
                                    Ease of doing Business.</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 text-center">
                        <img src="{{ asset('imgs/PMTI.png') }}" class="pmti-img" />
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
