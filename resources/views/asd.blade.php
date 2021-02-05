<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PMTI</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
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
</head>

<body>
    <section class="banner">
        <div class="banner-background">
            <div class="header">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="col-lg-6  col-md-12 col-sm-12">
                            <div class="logo">
                                <img src="{{ asset('imgs/nav-logo.png') }}" />
                            </div>
                        </div>
                        <div class="col-lg-6  col-md-12 col-sm-12 headerText">
                            <h6>Pilipinas Micro-Matrix Technology, Inc</h6>
                        </div>
                    </div>

                    <div class="col-lg-6  col-md-12 col-sm-12">
                        <div class="header-right">
                            <a class="" href=" /event/create">Home</a>
                            <a class="" href="/event/view">About</a>
                            <a class="" href="/event/view">Products</a>
                            <a class="" href="/event/view">Solutions</a>
                            <a class="" href="/event/view">Clients</a>
                            <button type="button" class="requestbtn btn-primary">Request a demo</button>
                        </div>
                    </div>

                </div>
            </div>

            {{-- <div class="row headerTag">
                <div class="col-6">
                    <h1>We Create, <br> Innovate, <br> and Integrate.</h1>
                </div>
            </div> --}}
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
                <div class="col text-center">
                    <span class="section2-paragraph">PMTI is a team of skilled and technology specialists that ensures
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
                    <img src="{{ asset('imgs/digipep.png') }}" />
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('imgs/receipt.svg') }}" />
                </div>
            </div>

            <div class="row">
                <div class="col-6  text-center">
                    <h3 class="text-digipep">DIGIPEP<h3>
                </div>

                <div class="col-6  text-center">
                    <h3 class="text-resibo">E-RESIBO<h3>
                </div>
            </div>

            <div class="row">
                <div class="col-6  text-center">
                    <p class="digipep-desc">The Digital Payment and Ecommerce Platform creates an online, real time,
                        government compliant payment system. Integrating with any existing portals/websites and API any
                        third-party systems.
                    <p>
                </div>

                <div class="col-6  text-center">
                    <p class="resibo-desc">PMTI systems can create an Electronic official receipt for any government
                        agency or Local Government Unit payable receipts to accept online payments.
                    <p>
                </div>
            </div>

        </div>


        <section class="section3" style="margin-top:10em">
            <div class="row section3">
                <div class="col-6 section3-bg">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="section3-text-Implementation">Implementations with remarkable results.<h3>
                                    <div class="col mt-3 text-center">
                                        <p class="Implementation-desc">Our innovative ways in exploring the technology
                                            placed
                                            the company in
                                            an outstanding position in today’s highly competitive market. We pride
                                            ourselves for
                                            having a
                                            proven track record in executing multiple implementations with impressive
                                            results.
                                        <p>
                                    </div>

                                    <div class="col-12 mt-3 text-center">
                                        <p class="Implementation-desc">PMTI believes that by continuously directing the
                                            team
                                            members in the development of software modifications, we can ensure that our
                                            products and services will be aligned to all business requirements,
                                            including their
                                            financial plans and time program.
                                        <p>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 section3-bg1"></div>
            </div>

            <section>
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
                                <div class="card" style="width: 40rem;padding:30px">
                                    <div class="card-body">
                                        <form>
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
                                                <label for="exampleFormControlTextarea1">MESSAGE</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="5"></textarea>
                                            </div>
                                            <div class="text-center mt-3">
                                                <button class="schedbtn btn-primary">SCHEDULE YOUR DEMO</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-5">
                            <div class="col text-center" style = "top:15rem">
                                <img src="{{ asset('imgs/nav-logo.png') }}" class = "footer-logo" />
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col text-center" style = "top:15rem">
                              <p class ="footer-text">Copyright © 2021 All Rights Reserved by Pilipinas Micro-Matrix Technology, Inc. (PMTI)</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            {{--
            </div> --}}
</body>

</html>
