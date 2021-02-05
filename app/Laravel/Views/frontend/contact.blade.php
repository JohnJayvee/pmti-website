<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--
    <meta name="viewport" content="width=1050, initial-scale=1.0" /> --}}
    {{--
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    --}}
    <link rel="stylesheet" href="{{ asset('css/Contact.css') }}" type="text/css">
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
            <div class="header d-md-none d-none  d-lg-block">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 d-md-none d-none  d-lg-block">
                        <div class="col-lg-6  col-md-12 col-sm-12">
                            <div class="logo">
                                <img src="{{ asset('imgs/nav-logo.png') }}" />
                            </div>
                        </div>
                        <div class="col-lg-6  col-md-12 col-sm-12 headerText">
                            <h6>Pilipinas Micro-Matrix Technology, Inc</h6>
                        </div>
                    </div>

                    <div class="col-lg-6  col-md-12 col-sm-12 d-md-none d-none  d-lg-block">
                        <div class="header-right">
                            <a class="" href=" /">Home</a>
                            <a class="" href="/about-us">About</a>
                            <a class="" href="/product">Products</a>
                            <a class="" href="/solution">Solutions</a>
                            <a class="" href="/clients">Clients</a>
                            <button type="button" class="requestbtn btn-primary" style = "color: #3E4098">Request a demo</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row no-gutter">
                <div class="col-lg-12 col-md-12 col-sm-12" style="top:10em">
                    <div class="text-center">
                        <h1 class="headerTag">CONTACT US</h1>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section>
        <div class="container" style="margin-top:5em">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h1 class="schedule-demo-text">Schedule a demo</h1>
                    <div class="row" style="margin-top:5em">
                        <div class="col">
                            <span class="office-text">OFFICE:</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <span class="office-desc">E0910 East Tower Philippine Stock Exchange, Tektite Building,
                                Exchange Road, Pasig City, Ortigas Center 1605, PH</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <span class="office-text">PHONE:</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <span class="office-desc">+63 (2) 8 570 7153</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col">
                            <span class="office-text">EMAIL:</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <span class="office-desc">http://www.pmti.biz/</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="pmti/request-demo-contactUs" method="POST">
                                @if (session()->has('notification-status'))
                                    <div class="alert alert-{{ in_array(session()->get('notification-status'), ['failed', 'error', 'danger']) ? 'danger' : session()->get('notification-status') }}"
                                        role="alert">
                                        {{ session()->get('notification-msg') }}
                                    </div>
                                @endif
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="name" class="card-label">NAME</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="company" class="card-label">COMPANY</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>

                                <div class="form-group">
                                    <label for="email" class="card-label">EMAIL</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="card-label">PHONE</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+63">
                                </div>

                                <div class="form-group">
                                    <label for="message" class="card-label">MESSAGE</label>
                                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                                </div>
                                <div class="text-center mt-3">
                                    <button class="schedbtn btn-primary" type="submit">SCHEDULE YOUR DEMO</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>






    <section class="footer-section">
        <div class="row no-gutter">
            <div class="col-12 text-center">
                <img src="{{ asset('imgs/nav-logo.png') }}" class="footer-logo" />
            </div>
        </div>
        <div class="row no-gutter">
            <div class="col-12 text-center mt-3">
                <span class="footer-span">Copyright © 2021 All Rights Reserved by Pilipinas Micro-Matrix Technology,
                    Inc. (PMTI)</span>
            </div>
        </div>
    </section>

</body>

</html>
