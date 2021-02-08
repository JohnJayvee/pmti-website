<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="viewport" content="width=1050, initial-scale=1.0" /> --}}
    {{-- <meta name="viewport" content="width=800" /> --}}
    <link rel="stylesheet" href="{{ asset('css/Solutions.css') }}" type="text/css">
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
    <title>Solution</title>
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
                        <div class="col-lg-6  col-md-12 col-sm-12 headerText ">
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
                            <button type="button" class="requestbtn btn-primary"><a href="/contact"
                                    class="hrefbtn">Request a demo</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" style="top:10em">
                    <div class="text-center">
                        <h1 class="headerTag">SOLUTIONS</h1>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="feature-section">
        <div class="row">
            <div class="col text-center">
                <img src="{{ asset('imgs/digipep.png') }}" class="digipep-img" />
            </div>
        </div>

        <div class="row digipep-img-row">
            <div class="col text-center">
                <span class="digipep-desc">The Digital Payment and Ecommerce Platform creates an online, real time,
                    government compliant payment system. <br> Integrating with any existing portals/websites and API any
                    third-party systems.</span>
            </div>
        </div>

        <div class="container">
            <div class="row feature-row">
                <div class="col-lg-4 col-sm-12">
                    <span class="feature-text">Features</span>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="row mt-4">
                        <div class="col-2">
                            <img src="{{ asset('imgs/api.svg') }}" class="api-img" />
                        </div>
                        <div class="col-10">
                            <span class="feature-desc">Open API (One-time integration)</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-2">
                            <img src="{{ asset('imgs/receipt.svg') }}" class="api-img" />
                        </div>
                        <div class="col-10">
                            <span class="feature-desc">Online and Over-the-counter transaction</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-2">
                            <img src="{{ asset('imgs/shield-check-line.svg') }}" class="api-img" />
                        </div>
                        <div class="col-10">
                            <span class="feature-desc">COA Compliant</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-2">
                            <img src="{{ asset('imgs/window.svg') }}" class="api-img" />
                        </div>
                        <div class="col-10">
                            <span class="feature-desc">Single Dashboard</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-2">
                            <img src="{{ asset('imgs/POS.svg') }}" class="api-img" />
                        </div>
                        <div class="col-10">
                            <span class="feature-desc">ZiaPOS</span>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-2">
                            <img src="{{ asset('imgs/wallet.svg') }}" class="api-img" />
                        </div>
                        <div class="col-10">
                            <span class="feature-desc">PHpay E-Wallet</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row digram-row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="text-center">
                    <span class="diagram-desc">Business Overview Diagram</span>
                </div>
            </div>
        </div>


        <div class="row digram-row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="text-center">
                    <img src="{{ asset('imgs/diagram.png') }}" class="diagram-img" />
                </div>
            </div>
        </div>
    </section>

    <section class="eResibo-section">
        <div class="row col-eResibo">
            <div class="col eResibo-container text-center">
                <span class="eResibo-title">E-RESIBO</span>
            </div>
        </div>

        <div class="row col-eResibo">
            <div class="col eResibo-desc text-center">
                <span class="eResibo-desc">PMTI systems can create an Electronic official receipt for any government
                    agency or Local Government Unit payable receipts to accept online payments.</span>
            </div>
        </div>
    </section>

    <section class="cloudSolution-section">
        <div class="container">
            <div class="row">
                <div class="col  text-center">
                    <span class="cloudSolution-title">Cloud Solutions</span>
                </div>
            </div>

            <div class="row cloudSolution-products">
                <div class="col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="PaaS-title">PaaS</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="subTitle">Platform as a service</span>
                        </div>
                    </div>
                    <div class="row desc-container">
                        <div class="col">
                            <span class="desc">With years of experience with government agencies, PMTI provides
                                platforms to transform government process into a paperless, cashless and online
                                ecosystem. Processes such as business registrations, tax payments, virtual and physical
                                ID generation and online monitoring systems.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-sm-12">
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <img src="{{ asset('imgs/eotcphp-logo.svg') }}" class="cloudSolution-img-eotcphp" />
                        </div>
                        <div class="col-12 text-center mt-5">
                            <img src="{{ asset('imgs/ebriu-logo.svg') }}" class="cloudSolution-img-ebriu" />
                        </div>
                        <div class="col-12 text-center mt-5">
                            <img src="{{ asset('imgs/etrio-logo.png') }}" class="cloudSolution-img-etrio" />
                        </div>
                        <div class="col-12 text-center mt-5">
                            <img src="{{ asset('imgs/epaytax-logo.svg') }}" class="cloudSolution-img-epaytax" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row cloudSolution-products">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col">
                            <span class="PaaS-title">SaaS</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="subTitle">Software as a service</span>
                        </div>
                    </div>
                    <div class="row desc-container">
                        <div class="col">
                            <span class="desc">PMTI offers software as a service to automate and monitor business
                                processes and payments. Software ranges from Ecommerce sites, Remittances, Tax payments,
                                Bills payments and Government assistance programs. Existing software include:</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-sm-12">
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <img src="{{ asset('imgs/ziadala-logo.png') }}" class="cloudSolution-img-ziadala" />
                        </div>
                        <div class="col-12 text-center mt-5">
                            <img src="{{ asset('imgs/ziamarket.svg') }}" class="cloudSolution-img-ziamarket" />
                        </div>
                        <div class="col-12 text-center mt-5">
                            <img src="{{ asset('imgs/ziabiller.svg') }}" class="cloudSolution-img-ziabiller" />
                        </div>
                        <div class="col-12 text-center mt-5">
                            <img src="{{ asset('imgs/ziacare.svg') }}" class="cloudSolution-img-ziacare" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row cloudSolution-products">
                <div class="col-lg-4 col-sm-12">
                    <div class="row">
                        <div class="col">
                            <span class="PaaS-title">IaaS</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <span class="subTitle">Infrastructure as a service</span>
                        </div>
                    </div>
                    <div class="row desc-container">
                        <div class="col">
                            <span class="desc">The company furthermore supplies, set ups, and trains the use of storage
                                solutions such as servers and cloud storage. Ready to use Point of Sale devices are
                                available to accept payments.</span>
                        </div>
                    </div>
                    <div class="row desc-container">
                        <div class="col">
                            <span class="desc">PMTI supplies point of sale terminals and software to enable E-Wallet QR
                                code-based payments for government cashiers and partners.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-sm-12">
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <img src="{{ asset('imgs/aws.png') }}" class="aws-img" />
                            <span class="aws-desc">Cloud Hosting</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        {{-- <div class="col-12 text-center">
                            <img src="{{ asset('imgs/ziadala-logo.png') }}" class="cloudSolution-img-ziadala" />
                        </div> --}}
                        <div class="col-12 text-center">
                            <img src="{{ asset('imgs/azure.png') }}" class="cloudSolution-img-azure" />
                        </div>
                        <div class="col-12 text-center mt-5">
                            <span class="IaaS-Desc"><b>Servers</b> on premise</span>
                        </div>
                        <div class="col-12 text-center mt-5">
                            <span class="IaaS-Desc"><b>POS</b> Terminals</span>
                        </div>
                        <div class="col-12 text-center mt-5">
                            <span class="IaaS-Desc"><b>Technical</b> Support</span>
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
