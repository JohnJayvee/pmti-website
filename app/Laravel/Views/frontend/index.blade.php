<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--
    <meta name="viewport" content="width=1050, initial-scale=1.0" /> --}}
    {{--
    <meta name="viewport" content="width=800" /> --}}
    {{--
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}

    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/mobileNav.css') }}" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
</head>

<body>
    <div class="wrapper">
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
        <section class="banner">
            <div class="banner-background">
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
                                <a class="" href="/">Home</a>
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
                    <div class="col-lg-6 col-md-12 col-sm-12" style="top:10em">
                        <h1 class="headerTag">We Create, <br> Innovate, <br> and Integrate.</h1>
                        <div class="text-center">
                            <button type="button" class="learn-more-btn btn-outline-primary mt-4"><a href="/product"
                                    style="color:#FFFFFF">LEARN MORE ></a></button>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">
                <div class="row mt-3">
                    <div class="col text-center">
                        <span class="section2-span">WHAT we do best</span>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-center">
                        <span class="section2-expertise">Our Expertise</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <span class="section2-paragraph">PMTI is a team of skilled and technology specialists that
                            ensures
                            rapid
                            efficiency and optimal <br> performance in planning, developing, executing, and deploying
                            solutions to
                            different <br> businesses.</span>
                        <br>
                        <br>
                        <span class="section2-paragraph">______</span>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <h3 class="text-digipep mb-3">DIGIPEP<h3>
                                <img src="{{ asset('imgs/digipep.png') }}" class="mb-2" />
                                <p class="digipep-desc mt-3">The Digital Payment and Ecommerce Platform creates an
                                    online,
                                    real
                                    time,
                                    government compliant payment system. Integrating with any existing portals/websites
                                    and
                                    API any
                                    third-party systems.
                                </p>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <h3 class="text-resibo mb-3">E-RESIBO<h3>
                                <img src="{{ asset('imgs/receipt.svg') }}" class="mt-3 mb-2" />
                                <p class="digipep-desc mt-3">The Digital Payment and Ecommerce Platform creates an
                                    online,
                                    real
                                    time,
                                    government compliant payment system. Integrating with any existing portals/websites
                                    and
                                    API any
                                    third-party systems.
                                </p>
                    </div>
                </div>
            </div>


            <section class="section3" style="margin-top:20em">
                <div class="row no-gutters section3">
                    <div class="col-lg-6 col-md-12 col-sm-12 section3-bg">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class="section3-text-Implementation">Implementations with remarkable results.<h3>
                            </div>
                            <div class="desc-container">
                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3 text-center">
                                    <p class="Implementation-desc mt-3">Our innovative ways in exploring the
                                        technology
                                        placed
                                        the company in
                                        an outstanding position in today’s highly competitive market. We pride
                                        ourselves for
                                        having a
                                        proven track record in executing multiple implementations with impressive
                                        results.
                                    </p>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3 text-center">
                                    <p class="Implementation-desc">PMTI believes that by continuously directing the
                                        team
                                        members in the development of software modifications, we can ensure that our
                                        products and services will be aligned to all business requirements,
                                        including their
                                        financial plans and time program.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 section3-bg1"></div>
                </div>

                <section class="section-content">
                    <div class="footer-bg">
                        <div class="container">

                            <div class="row">
                                <div class="col text-center" style="top:7rem;">
                                    <h3 class="req-demo">Request a demo</h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col text-center" style="top:10rem;">
                                    <h3 class="demo-fill">Reach us by filling up the form below</h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col" style="top:15em">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="pmti/request-demo" method="POST">
                                                @if (session()->has('notification-status'))
                                                    <div class="alert alert-{{ in_array(session()->get('notification-status'), ['failed', 'error', 'danger']) ? 'danger' : session()->get('notification-status') }}"
                                                        role="alert">
                                                        {{ session()->get('notification-msg') }}
                                                    </div>
                                                @endif
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <label for="name">NAME</label>
                                                    <input type="text" class="form-control" id="name" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">COMPANY</label>
                                                    <input type="text" class="form-control" id="company" name="company">
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">EMAIL</label>
                                                    <input type="email" class="form-control" id="email" name="email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">PHONE</label>
                                                    <input type="text" class="form-control" id="phone" name="phone"
                                                        placeholder="+63">
                                                </div>

                                                <div class="form-group">
                                                    <label for="message">MESSAGE</label>
                                                    <textarea class="form-control" id="message" name="message"
                                                        rows="5"></textarea>
                                                </div>
                                                <div class="text-center mt-3">
                                                    <button class="schedbtn btn-primary" type="submit">SCHEDULE YOUR
                                                        DEMO</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row mt-5">
                                <div class="col text-center" style="top:15rem">
                                    <img src="{{ asset('imgs/nav-logo.png') }}" class="footer-logo" />
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col text-center" style="top:15rem">
                                    <p class="footer-text">Copyright © 2021 All Rights Reserved by Pilipinas
                                        Micro-Matrix
                                        Technology, Inc. (PMTI)</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>



    </div>
</body>

</html>
