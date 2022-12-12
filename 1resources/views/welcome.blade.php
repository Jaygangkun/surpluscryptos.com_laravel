<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Democratizing the world of finance for all. Changing the future today.">
    <meta name="keywords" content="Be On The Right Side Of History | Surplus">
    <!-- FONT-AWESOME  -->
    <script src="https://kit.fontawesome.com/434f764404.js"></script>
@include('backend.layouts.includes.favicon')
<!-- LINK BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Surplus | A Modern Financial Firm</title>
</head>
<body>
<header>
    <div class="container">
        <nav class="row d-flex justify-content-between align-items-center">
            <div class="col-6">
                <img src="{{asset('/')}}images/Surplus_Logo.png" class="logo" alt="">
            </div>
            <div class="col-6 d-flex justify-content-end logo-box">
                <div>
                    <p>Available Through Partners Only</p>
                    <div class="logo-icons d-flex justify-content-end">
                        <a href="https://www.linkedin.com/company/surpluspartners"><img
                                src="{{asset('/')}}images/bxl-linkedin.svg.svg" alt=""></a>
                        <a href="https://www.facebook.com/surpluscrypto"><img
                                src="{{asset('/')}}images/bxl-facebook-square.svg.svg" alt=""></a>
                        <a href="https://twitter.com/surpluscrypto"><img src="{{asset('/')}}images/bxl-twitter.svg.svg"
                                                                         alt=""></a>
                        <a href="https://www.instagram.com/surpluspartners/"><img
                                src="{{asset('/')}}images/bxl-instagram-alt.svg.svg" alt=""></a>
                        <a href="https://www.youtube.com/channel/UC6HXuwEQj1876XFvD-TM5yw/featured"><img
                                src="{{asset('/')}}images/bxl-youtube.svg.svg" alt=""></a>
                        <a href="https://www.tiktok.com/@surpluspartners"><img
                                src="{{asset('/')}}images/bxl-tiktok.svg.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h6><span>Tomorrow’s returns today.</span> <br><br> Your Future Never Looked Brighter! <i
                        class="fas fa-arrow-right"></i></h6>
                <h1>Be On The Right Side Of History</h1>
                <p>Cryptocurrency exposure, without the hassle <br> of all things cryptos.</p>
                <div class="banner-btns">
                    <a href="{{url('register')}}" class="btn-1">Jump In <i class="fas fa-arrow-right"></i></a>
                    <a href="{{route('login')}}" class="btn-2">Sign In <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-4 banner-right-col">
                <div class="row">
                    <div class="col-4">
                        <img src="{{asset('/')}}images/crypto.png" alt="">
                    </div>
                    <div class="col-8">
                        <h3>Crypto exposure for all</h3>
                        <div class="line"></div>
                        <p>The pain and worry has been taken away. The easiest way to get exposure to the crypto
                            marketplace in the world.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <img src="{{asset('/')}}images/encrypt.png" alt="">
                    </div>
                    <div class="col-8">
                        <h3>End-to-end cryptocurrency technology</h3>
                        <div class="line"></div>
                        <p>Surplus provides the infrastructure for our partners to offer the best in class
                            cryptocurrency products to our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('/')}}images/verical.png" class="vertical" alt="">
</section>
<!-- <h5 class="left-text"><span>Available Through Partners Only</span></h5> -->
<section class="section-two">
    <div class="container">
        <p>Information is for educational and illustrative purposes only. Surplus is not engaged in the business of the
            offer, sale or trading of securities and does not provide legal, tax, or investment advice. Cryptocurrencies
            and other digital assets are speculative and involve a substantial degree of risk, including the risk of
            complete loss. There can be no assurance that any cryptocurrency, token, coin, or other crypto asset will be
            viable, liquid, or solvent. No Surplus communication is intended to imply that any digital assets are
            low-risk or risk-free.</p>
        <p>Digital assets are subject to a number of risks, including price volatility. Transacting in digital assets
            could result in significant losses and may not be suitable for some consumers. Digital asset markets and
            exchanges are not regulated with the same controls or customer protections available with other forms of
            financial products and are subject to an evolving regulatory environment. Digital assets do not typically
            have legal tender status and are not covered by deposit protection insurance. The past performance of a
            digital asset is not a guide to future performance, nor is it a reliable indicator of future results or
            performance.</p>
        <p>Cryptocurrency Contract Assets (CCA) are an innovative Contractual product that is new to the consumer and
            cryptocurrency marketplace. Due to the ever-evolving Cryptocurrency marketplace, with a lack of regulatory
            oversight, it is important to note that SURPLUS DAO and CCAs is not registered with any Cryptocurrency based
            regulatory agency, Cryptocurrency based regulatory Commission, or Governmental Agency of any type
            whatsoever.</p>
        <div class="row">
            <div class="col-md">
                <div class="icon-row">
                    <div class="col-icon">
                        <img src="{{asset('/')}}images/tick-s.svg" alt="">
                    </div>
                    <div class="col-text">
                        <h5>Not FDIC/NCUA <br>
                            Insured
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="icon-row">
                    <div class="col-icon">
                        <img src="{{asset('/')}}images/tick-s.svg" alt="">
                    </div>
                    <div class="col-text">
                        <h5>Not a <br>
                            bank deposit
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="icon-row">
                    <div class="col-icon">
                        <img src="{{asset('/')}}images/tick-s.svg" alt="">
                    </div>
                    <div class="col-text">
                        <h5>Not insured by any federal <br>
                            government agency
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="icon-row">
                    <div class="col-icon">
                        <img src="{{asset('/')}}images/tick-s.svg" alt="">
                    </div>
                    <div class="col-text">
                        <h5>No bank <br>
                            guarantee
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="icon-row">
                    <div class="col-icon">
                        <img src="{{asset('/')}}images/tick-s.svg" alt="">
                    </div>
                    <div class="col-text">
                        <h5>May lose
                            value
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="icon-row">
                    <div class="col-icon">
                        <img src="{{asset('/')}}images/tick-s.svg" alt="">
                    </div>
                    <div class="col-text">
                        <h5>Not a condition of
                            any banking activity
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    ScrollReveal({

        distance: '60px',
        duration: 1500,
        delay: 400
    });
    ScrollReveal().reveal('header', {
        delay: 400,
        origin: 'top'
    });
    ScrollReveal().reveal('.vertical', {
        delay: 400,
        origin: 'left'
    });
    ScrollReveal().reveal('.banner h6, .banner h1, .banner .col-md-8 p, .banner .banner-btns, .banner-right-col .row, .section-two p, .section-two .col-md', {
        delay: 400,
        origin: 'bottom',
        interval: 200
    });


</script>
</body>
</html>
