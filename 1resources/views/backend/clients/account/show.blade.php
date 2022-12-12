<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="{{asset('/')}}css/sign-up.css">
    <link rel="stylesheet" href="{{asset('/')}}css/benificiaries.css">

    <!-- FAVICON  -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}favicon-16x16.png">
    <!-- FAVICON  -->

    <title>Surplus | #1 Crypto Contract Assets Firm</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>

        .multisteps-form__form label {
            margin-top: 10px;
        }

        .multisteps-form__form input {
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

<div class="content">
    <!--content inner-->
    <div class="content__inner">
        <div class="container overflow-hidden">
            <!--multisteps-form-->
            <div class="multisteps-form benific">
                <!--progress bar-->
                <!--form panels-->
                <div class="row">
                    <!-- <div class="col-12 col-lg-6 ml-auto mr-auto mb-4">


                      </div> -->
                    <div class=" main-form">
                        <div class="form-logo">
                            <img src="{{asset('/')}}images/LOGO.png" alt="">
                        </div>
                        <div class="multisteps-form__progress">
                            <button class="multisteps-form__progress-btn js-active" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                            <button class="multisteps-form__progress-btn" type="button"></button>
                        </div>
                        <form class="multisteps-form__form">
                            <!--single form panel-->
                            <div class="multisteps-form__panel p-4 rounded bg-white js-active" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Your Guranteed Crypto Growth</h3>

                                <div class="multisteps-form__content">
                                    <div class="step-one">
                                        <label for="">Intial Amount</label>
                                        <input type="number" placeholder="$10,000 - $5,000,000">
                                        <label for="">Number Of Years</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">3</label>

                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">5</label>

                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">7</label>

                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">10</label>
                                        </div>
                                        <label for="">Guranteed Rate (APY)</label>
                                        <input type="number" name="" id="" placeholder="30%">
                                        <label for="">Crypto Value At Maturity</label>
                                        <input type="text" name="" id="" placeholder="$2,000,000">
                                    </div>
                                    <div class="button-row mt-4">
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel p-4 bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Enter Your Beneficiaries</h3>
                                <div class="multisteps-form__content">

                                    <div class="step-two">
                                        <div class="icon-mail">
                                            <p>Beneficiaries receive the death benefit
                                                in the event you pass away before your term is over.
                                                A beneficiary can be a person or a trust.
                                                The owner may change the beneficiary(ies)
                                                at any time during the term of the contract.</p>
                                        </div>

                                        <div class="btns-benif">
                                            <button>An Individual</button>
                                            <button>A Trust</button>
                                            <button>Your Estate</button>
                                        </div>

                                    </div>

                                    <div class="button-row mt-4">
                                        <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                        <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Individual Information</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-three">
                                        <label for="">Prefix <span>(optional)</span></label>
                                        <input type="text" placeholder="Mr">
                                        <label for="">First Name</label>
                                        <input type="text" placeholder="William">
                                        <label for="">Middle Name</label>
                                        <input type="text" placeholder="Jay">
                                        <label for="">Last Name</label>
                                        <input type="text" placeholder="Smith">
                                        <label for="">Suffix <span>(optional)</span></label>
                                        <input type="text" placeholder="JR">
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--single form panel-->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Trust Information</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-three-2">
                                        <label for="">Name</label>
                                        <input type="text" placeholder="John Smith">
                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">Street Address</label>
                                                <input type="text" placeholder="Gold Road 3422">
                                            </div>
                                            <div class="col-md">
                                                <label for="#">Second address</label>
                                                <input type="text" placeholder="Silver Road 1234">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <label for="">ZIP Code</label>
                                                <input type="number" name="" id="" placeholder="1002">
                                            </div>
                                            <div class="col-md">
                                                <label for="">Tax-identification Number</label>
                                                <input type="number" name="" id="" placeholder="1234567890">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- NEW  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Individual Information</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-four">
                                        <label for="">Sex</label>
                                        <input type="text" placeholder="Male">
                                        <label for="">Date Of Birth</label>
                                        <input type="date">
                                        <label for="">SSN or TIN</label>
                                        <input type="text" placeholder="1234567890">
                                        <p>Surplus is required by law to collect this information</p>
                                        <label for="">Relationship To Owner</label>
                                        <input type="text" placeholder="Son">
                                    </div>

                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- NEW  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Allocation</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-five">
                                        <label for="">Allocation %</label>
                                        <input type="text" placeholder="Male">
                                        <label for="">Contact Email</label>
                                        <input type="text" placeholder="johnsmith@gmail.com">
                                        <label for="">Contact Email</label>
                                        <input type="text" placeholder="johnsmith@gmail.com">
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Irrevocable?</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-six">
                                        <div class="icon-mail">
                                            <p>Is this beneficiary irrevocable?</p>
                                        </div>

                                        <div class="btns-benif irrevoc">
                                            <button>Yes</button>
                                            <button>No</button>
                                        </div>

                                        <p class="bottom-text">*An irrevocable beneficiary can only be revoked by a
                                            written request
                                            from the crypto contract owner and the irrevocable beneficiary.</p>
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Your Guranteed Crypto Growth</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-six-2">
                                        <p>Review and sign the Agreement</p>
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Your Guranteed Crypto Growth</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-six-3">
                                        <p>How would you like to cover the intial amount for your Crypto Asset?</p>
                                        <div class="row text-center">
                                            <div class="col-md ">
                                                <a href="#" data-toggle="modal"
                                                   data-target="#BtcPayment"><span>connect</span> <br> coinbase <br>
                                                    commerce</a>
                                            </div>
                                            <div class="col-md">
                                                <a href="#" data-toggle="modal"
                                                   data-target="#WirePayment"><span>connect</span> <br> Circle Payment
                                                    <br> (wire)</a>
                                            </div>
                                        </div>

                                        <div class="row text-center">
                                            <div class="col-md">
                                                <a href="" data-toggle="modal"
                                                   data-target="#AchPayment"><span>connect</span> <br> Circle Payment
                                                    <br> (ACH)</a>
                                            </div>
                                            <div class="col-md">
                                                <a href="#" data-toggle="modal" data-target="#StripePayment"><span>connect</span>
                                                    <br> Circle Payment <br> (Debit/credit card)</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->

                            <!--single form panel-->
                            <div class="multisteps-form__panel  p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Your Guranteed Crypto Growth</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-seven">
                                        <img src="{{asset('/')}}images/like.png" alt="">
                                        <p>Congralations On New Your Crypto Asset</p>
                                    </div>
                                    <div class="button-row  mt-4">
                                        <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                        <button class="btn btn-primary ml-auto" type="button" title="Send">Next</button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

<!-- BTC PAYMENT POPUP  -->
<div class="modal fade" id="BtcPayment" tabindex="-1" role="dialog" aria-labelledby="BtcPaymentTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="BtcPaymentTitle">BTC Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{asset('/')}}images/qr-code.jpg" width="100%" alt="">
                    </div>
                    <div class="col-md-7">
                        <form action="">
                            <label for="">BTC Wallet Address:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control"
                                       aria-label="Dollar amount (with dot and two decimal places)">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-copy"></i></span>
                                </div>
                            </div>
                            <label for="">Amount:</label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control"
                                       aria-label="Dollar amount (with dot and two decimal places)">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-copy"></i></span>
                                </div>
                            </div>
                            <p>System will extact sent <b>0.2534535</b> to the address above. System will automatically
                                validate your transaction.</p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <p class="mb-0">Already sent the bitcoin and we still haven't identiefied?</p>
                <button type="button" class="btn btn-primary">Check Transaction</button>
            </div>
        </div>
    </div>
</div>
<!-- BTC PAYMENT POPUP  -->


<!-- WIRE  -->
<div class="modal fade" id="WirePayment" tabindex="-1" role="dialog" aria-labelledby="WirePaymentTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="WirePaymentTitle">Wire Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Here you can add your code ..
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Check Transaction</button>
            </div>
        </div>
    </div>
</div>
<!-- WIRE  -->

<!-- ACH  -->
<div class="modal fade" id="AchPayment" tabindex="-1" role="dialog" aria-labelledby="AchPaymentTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AchPaymentTitle">ACH Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Here you can add your code ..
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Check Transaction</button>
            </div>
        </div>
    </div>
</div>
<!-- ACH  -->

<!-- STRIPE  -->
<div class="modal fade" id="StripePayment" tabindex="-1" role="dialog" aria-labelledby="StripePaymentTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="StripePaymentTitle">Stripe Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="">Name on Card</label>
                            <input class="form-control " type="text">
                        </div>
                        <div class="col-md-6  mb-2">
                            <label for="">Card Number</label>
                            <input class="form-control" type="number" name="" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">CVC Code</label>
                            <input class="form-control" type="number" placeholder="ex: 311">
                        </div>
                        <div class="col-md-4">
                            <label for="">Expiry Month</label>
                            <input class="form-control" type="text" placeholder="MM">
                        </div>
                        <div class="col-md-4">
                            <label for="">Expiry Year</label>
                            <input type="text" class="form-control" placeholder="YYYY">
                        </div>
                    </div>

                    <input class="mt-4" type="submit" value="Pay Now ($1,000,00)">

                </form>

            </div>
        </div>
    </div>
</div>
<!-- STRIPE  -->
<!-- partial -->


{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}

<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
{{--<script  src="{{asset('/')}}js/form.js"></script>--}}
<script>

    $(document).on('click', '#step-1', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{url('register-steps')}}',
            data: {
                step: 1,
                email: $("input[name='email']").val(),
                phone_prefix: $("input[name='phone_prefix']").val(),
                phone: $("input[name='phone']").val(),
                partner_code: $("input[name='partner_code']").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#record_id').val(response.record.id)
                $('.step-one').trigger('click')
            },
            error: function (response) {
                var responseJSON = response.responseJSON
                console.log(response)
                if (responseJSON) {
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<div  class="error invalid-feedback" style="display: block">' + errors[error][0] + '</div>')
                        }
                    }
                }
                alert(responseJSON ? responseJSON.message : 'Something Went Wrong')
            }
        })
    })

    $(document).on('click', '#step-2', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{url('register-steps')}}',
            data: {
                step: 2,
                record_id: $("#record_id").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('.step-two').trigger('click')
            },
            error: function (response) {
                var responseJSON = response.responseJSON
                if (responseJSON) {
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<div  class="error invalid-feedback" style="display: block">' + errors[error][0] + '</div>')
                        }
                    }
                }
                alert(responseJSON ? responseJSON.message : 'Something Went Wrong')
            }
        })
    })

    $(document).on('click', '#step-3', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{url('register-steps')}}',
            data: {
                step: 3,
                record_id: $("#record_id").val(),
                password: $("#password").val(),
                password_confirmation: $("#password_confirmation").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('.step-three').trigger('click')
            },
            error: function (response) {
                var responseJSON = response.responseJSON
                if (responseJSON) {
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<div  class="error invalid-feedback" style="display: block">' + errors[error][0] + '</div>')
                        }
                    }
                }
                alert(responseJSON ? responseJSON.message : 'Something Went Wrong')
            }
        })
    })

    $(document).on('click', '#step-4', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{url('register-steps')}}',
            data: {
                step: 4,
                record_id: $("#record_id").val(),
                phone_verify_code: $("#phone_verify_code").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('.step-four').trigger('click')
            },
            error: function (response) {
                var responseJSON = response.responseJSON
                if (responseJSON) {
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<div  class="error invalid-feedback" style="display: block">' + errors[error][0] + '</div>')
                        }
                    }
                }
                alert(responseJSON ? responseJSON.message : 'Something Went Wrong')
            }
        })
    })

    $(document).on('click', '#step-5', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{url('register-steps')}}',
            data: {
                step: 5,
                record_id: $("#record_id").val(),
                name_prefix: $("#name_prefix").val(),
                first_name: $("#first_name").val(),
                middle_name: $("#middle_name").val(),
                last_name: $("#last_name").val(),
                name_suffix: $("#name_suffix").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('.step-five').trigger('click')
            },
            error: function (response) {
                var responseJSON = response.responseJSON
                if (responseJSON) {
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<div  class="error invalid-feedback" style="display: block">' + errors[error][0] + '</div>')
                        }
                    }
                }
                alert(responseJSON ? responseJSON.message : 'Something Went Wrong')
            }
        })
    })

    $(document).on('click', '#step-6', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{url('register-steps')}}',
            data: {
                step: 6,
                record_id: $("#record_id").val(),
                street: $("#street").val(),
                unit_number: $("#unit_number").val(),
                city: $("#city").val(),
                state: $("#state").val(),
                zipcode: $("#zipcode").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('.step-six').trigger('click')
            },
            error: function (response) {
                var responseJSON = response.responseJSON
                if (responseJSON) {
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<div  class="error invalid-feedback" style="display: block">' + errors[error][0] + '</div>')
                        }
                    }
                }
                alert(responseJSON ? responseJSON.message : 'Something Went Wrong')
            }
        })
    })

    $(document).on('click', '#step-7', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{url('register-steps')}}',
            data: {
                step: 7,
                record_id: $("#record_id").val(),
                gender: $("#gender").val(),
                dob: $("#dob").val(),
                stn: $("#stn").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                window.location.href = '{{route('login')}}'
                // $('.step-six').trigger('click')
            },
            error: function (response) {
                var responseJSON = response.responseJSON
                if (responseJSON) {
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<div  class="error invalid-feedback" style="display: block">' + errors[error][0] + '</div>')
                        }
                    }
                }
                alert(responseJSON ? responseJSON.message : 'Something Went Wrong')
            }
        })
    })

    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test($email);
    }

    //DOM elements
    const DOMstrings = {
        // stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
        stepFormPanelClass: 'multisteps-form__panel',
        stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next'
    };


    //remove class from a set of items
    const removeClasses = (elemSet, className) => {

        elemSet.forEach(elem => {

            elem.classList.remove(className);

        });

    };

    //return exect parent node of the element
    const findParent = (elem, parentClass) => {

        let currentNode = elem;

        while (!currentNode.classList.contains(parentClass)) {
            currentNode = currentNode.parentNode;
        }

        return currentNode;

    };

    //get active button step number
    const getActiveStep = elem => {
        return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    //set all steps before clicked (and clicked too) to active
    const setActiveStep = activeStepNum => {

        //remove active state from all the state
        removeClasses(DOMstrings.stepsBtns, 'js-active');

        //set picked items to active
        DOMstrings.stepsBtns.forEach((elem, index) => {

            if (index <= activeStepNum) {
                elem.classList.add('js-active');
            }

        });
    };

    //get active panel
    const getActivePanel = () => {

        let activePanel;

        DOMstrings.stepFormPanels.forEach(elem => {

            if (elem.classList.contains('js-active')) {

                activePanel = elem;

            }

        });

        return activePanel;

    };

    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {

        //remove active class from all the panels
        removeClasses(DOMstrings.stepFormPanels, 'js-active');

        //show active panel
        DOMstrings.stepFormPanels.forEach((elem, index) => {
            if (index === activePanelNum) {

                elem.classList.add('js-active');

                setFormHeight(elem);

            }
        });

    };

    //set form height equal to current panel height
    const formHeight = activePanel => {

        const activePanelHeight = activePanel.offsetHeight;

        DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

    };

    const setFormHeight = () => {
        const activePanel = getActivePanel();

        formHeight(activePanel);
    };

    //STEPS BAR CLICK FUNCTION
    DOMstrings.stepsBar.addEventListener('click', e => {

        //check if click target is a step button
        const eventTarget = e.target;

        if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
            return;
        }

        //get active button step number
        const activeStep = getActiveStep(eventTarget);

        //set all steps before clicked (and clicked too) to active
        setActiveStep(activeStep);

        //open active panel
        setActivePanel(activeStep);
    });

    //PREV/NEXT BTNS CLICK
    DOMstrings.stepsForm.addEventListener('click', e => {

        const eventTarget = e.target;

        if (eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)) {
            $('.invalid-feedback').hide()

        }

        //check if we clicked on `PREV` or NEXT` buttons
        if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`))) {
            return;
        }

        //find active panel
        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

        //set active step and active panel onclick
        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            activePanelNum--;

        } else {

            activePanelNum++;

        }

        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);

    });

    //SETTING PROPER FORM HEIGHT ONLOAD
    window.addEventListener('load', setFormHeight, false);

    //SETTING PROPER FORM HEIGHT ONRESIZE
    window.addEventListener('resize', setFormHeight, false);

    //changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

    const setAnimationType = newType => {
        DOMstrings.stepFormPanels.forEach(elem => {
            elem.dataset.animation = newType;
        });
    };

    //selector onchange - changing animation
    const animationSelect = document.querySelector('.pick-animation__select');

    animationSelect.addEventListener('change', () => {
        const newAnimationType = animationSelect.value;

        setAnimationType(newAnimationType);
    });

</script>
</body>
</html>
