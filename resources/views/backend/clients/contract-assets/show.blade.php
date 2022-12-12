<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="{{asset('/')}}css/sign-up.css">
    <link rel="stylesheet" href="{{asset('/')}}css/benificiaries.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON  -->
{{--    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}apple-touch-icon.png">--}}
{{--    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}favicon-32x32.png">--}}
{{--    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}favicon-16x16.png">--}}
<!-- FAVICON  -->

    <title>{{$gs->title}}</title>
    <!-- FAVICON  -->

@include('backend.layouts.includes.favicon')

<!-- FAVICON  -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>

        .multisteps-form__form label {
            margin-top: 10px;
        }

        .multisteps-form__form input {
            margin-bottom: 5px;
        }

        .step-six-3 a {
            padding: 10px 20px;
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

                    <div class=" main-form">
                        <div class="form-logo">
                            <img src="{{$gs->logoPath()}}" alt="">
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
                        <form class="multisteps-form__form" id="contract-form" action="{{$url}}" method="POST">
                            @csrf
                            <input type="hidden" name="step" id="input_step" value="">
                            <input type="hidden" name="signature" class="signature-input" id="signature_input" value="">
                            <input type="hidden" name="beneficiary_type" id="beneficiary_type">
                            <input type="hidden" name="beneficiary_irrevocable" id="beneficiary_irrevocable">
                            <input type="hidden" name="record_id" id="record_id" value="{{$record->id}}">
                        {{--                            <input type="hidden" name="wire_email" id="input_wire_email" value="">--}}
                        <!--single form panel-->
                            <div class="multisteps-form__panel p-4 rounded bg-white js-active" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Your Guaranteed Crypto Growth</h3>

                                <div class="multisteps-form__content">
                                    <div class="step-one">
                                        <label>Initial Amount</label>
                                        <input type="number"
                                               class="calc-maturity"
                                               name="initial_amount"
                                               id="initial_amount"
                                               placeholder="${{number_format($record->min_amount)}} - ${{number_format($record->max_amount)}}">
                                        <label>Number Of Years</label>
                                        {{--                                        <div class="custom-control custom-checkbox">--}}
                                        {{--                                            @foreach($years as $year)--}}
                                        {{--                                                <input type="radio" checked class="custom-control-input"--}}
                                        {{--                                                       name="years"--}}
                                        {{--                                                       value="{{$year}}"--}}
                                        {{--                                                       id="customCheck{{$year}}">--}}
                                        {{--                                                <label class="custom-control-label"--}}
                                        {{--                                                       for="customCheck{{$year}}">{{$year}}</label>--}}
                                        {{--                                            @endforeach--}}
                                        {{--                                        </div>--}}
                                        <div class="" id="years">
                                            @foreach($years as $year)
                                                <label> <input style="width: auto" type="radio"
                                                               @if($loop->first)
                                                               checked
                                                               @endif
                                                               class="calc-maturity"
                                                               name="years"
                                                               value="{{$year}}"
                                                    > {{$year}}</label>
                                            @endforeach
                                        </div>
                                        <label>Guaranteed Rate (APY)</label>
                                        <input type="text" disabled value="{{$record->guaranteed_rate}}%">
                                        <label>Crypto Value At Maturity</label>
                                        <input type="text"
                                               readonly
                                               name="crypto_value_at_maturity"
                                               id="crypto_value_at_maturity"
                                               placeholder="">
                                    </div>
                                    <div class="button-row mt-4">
                                        <button class="btn btn-primary ml-auto " id="step-1" type="button" title="Next">
                                            Next
                                        </button>
                                        <button class="btn btn-primary ml-auto step-one js-btn-next" type="button"
                                                title="Next" hidden>
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
                                            <button class="beneficiary-btn" data-type="individual" type="button">An
                                                Individual
                                            </button>
                                            <button class="beneficiary-btn" data-type="trust" type="button">A Trust
                                            </button>
                                            <button class="beneficiary-btn" data-type="estate" type="button">Your
                                                Estate
                                            </button>
                                        </div>
                                    </div>

                                    <div class="button-row mt-4">
                                        {{--                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev--}}
                                        {{--                                        </button>--}}
                                        <button class="btn btn-primary ml-auto " id="step-2" type="button" title="Next">
                                            Next
                                        </button>
                                        <button class="btn btn-primary ml-auto step-two js-btn-next" type="button"
                                                title="Next"
                                                hidden>
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
                                        <label>Prefix <span>(optional)</span></label>
                                        <input type="text" placeholder="" name="prefix_name" id="prefix_name">
                                        <label>First Name</label>
                                        <input type="text" placeholder="" name="first_name" id="first_name">
                                        <label>Middle Name</label>
                                        <input type="text" placeholder="" name="middle_name" id="middle_name">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="" name="last_name" id="last_name">
                                        <label>Suffix <span>(optional)</span></label>
                                        <input type="text" placeholder="" name="suffix_name" id="suffix_name">
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            {{--                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">--}}
                                            {{--                                                Prev--}}
                                            {{--                                            </button>--}}
                                            <button class="btn btn-primary ml-auto step-three js-btn-next" type="button"
                                                    hidden
                                                    title="Next">Next
                                            </button>
                                            <button class="btn btn-primary ml-auto " id="step-3" type="button"
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
                                        <label>Name</label>
                                        <input type="text" placeholder="" name="name" id="name">
                                        <div class="row">
                                            <div class="col-md">
                                                <label>Street Address</label>
                                                <input type="text" placeholder="" name="street"
                                                       id="street">
                                            </div>
                                            <div class="col-md">
                                                <label for="#">City</label>
                                                <input type="text" placeholder="" name="city"
                                                       id="city">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md">
                                                <label>ZIP Code</label>
                                                <input type="text" placeholder="" name="zipcode" id="zipcode">
                                            </div>
                                            <div class="col-md">
                                                <label>Tax-identification Number</label>
                                                <input type="text" placeholder="" name="tax_number"
                                                       id="tax_number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            {{--                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">--}}
                                            {{--                                                Prev--}}
                                            {{--                                            </button>--}}
                                            <button class="btn btn-primary ml-auto " id="step-4" type="button"
                                                    title="Next">Next
                                            </button>
                                            <button class="btn btn-primary ml-auto js-btn-next step-four" type="button"
                                                    hidden
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
                                        <label>Sex</label>
                                        <input type="text" placeholder="" name="beneficiary_gender"
                                               id="beneficiary_gender">
                                        <label>Date Of Birth</label>
                                        <input type="date" name="beneficiary_dob" id="beneficiary_dob">
                                        <label>SSN or TIN</label>
                                        <input type="text" placeholder="" name="beneficiary_ssn"
                                               id="beneficiary_ssn">
                                        <p>Surplus is required by law to collect this information</p>
                                        <label>Relationship To Owner</label>
                                        <input type="text" placeholder="" name="beneficiary_relationship"
                                               id="beneficiary_relationship">
                                    </div>

                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            {{--                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">--}}
                                            {{--                                                Prev--}}
                                            {{--                                            </button>--}}
                                            <button class="btn btn-primary ml-auto " id="step-5" type="button"
                                                    title="Next">Next
                                            </button>
                                            <button class="btn btn-primary ml-auto js-btn-next step-five"
                                                    type="button"
                                                    hidden
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
                                        <label>Allocation %</label>
                                        <input type="number" placeholder="" name="allocation_percent"
                                               id="allocation_percent">
                                        <label>Contact Email</label>
                                        <input placeholder="" name="beneficiary_email"
                                               id="beneficiary_email">
                                        <label>Phone Number</label>
                                        <input type="text" placeholder="" name="beneficiary_phone"
                                               id="beneficiary_phone">
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            {{--                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">--}}
                                            {{--                                                Prev--}}
                                            {{--                                            </button>--}}
                                            <button class="btn btn-primary ml-auto" type="button"
                                                    id="step-6"
                                                    title="Next">Next
                                            </button>
                                            <button class="btn btn-primary ml-auto js-btn-next step-six" type="button"
                                                    hidden
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Irrevocable</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-six">
                                        <div class="icon-mail">
                                            <p>Is this beneficiary irrevocable?</p>
                                        </div>

                                        <div class="btns-benif irrevoc">
                                            <button class="irrevocable-btn" data-value="yes" type="button">Yes</button>
                                            <button class="irrevocable-btn" data-value="yes" type="button">No</button>
                                        </div>

                                        <p class="bottom-text">*An irrevocable beneficiary can only be revoked by a
                                            written request
                                            from the crypto contract owner and the irrevocable beneficiary.</p>

                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            {{--                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">--}}
                                            {{--                                                Prev--}}
                                            {{--                                            </button>--}}
                                            <button class="btn btn-primary ml-auto " type="button"
                                                    id="step-7"
                                                    title="Next">Next
                                            </button>
                                            <button class="btn btn-primary ml-auto js-btn-next step-seven" type="button"
                                                    hidden
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Your Guaranteed Crypto Growth</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-six-2">
                                        <p>Review and sign the Agreement</p>
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto step-8" type="button"
                                                    data-toggle="modal"
                                                    data-target="#reviewApplication"
                                                    title="Next">Next
                                            </button>
                                            <button class="btn btn-primary ml-auto js-btn-next step-eight" type="button"
                                                    hidden
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Your Guaranteed Crypto Growth</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-six-3">
                                        <p>How would you like to cover the initial amount for your Crypto Asset?</p>
                                        <div class="row text-center">
                                            {{--                                            <div class="col-md ">--}}
                                            {{--                                                <a href="#" data-toggle="modal"--}}
                                            {{--                                                   data-target="#BtcPayment"><span>connect</span> <br> coinbase <br>--}}
                                            {{--                                                    commerce</a>--}}
                                            {{--                                            </div>--}}
                                            <div class="col-md">
                                                <a href="#" data-toggle="modal"
                                                   data-target="#WirePayment">Wire</a>
                                            </div>

                                            <div class="col-md">
                                                <a href="" data-toggle="modal"
                                                   data-target="#AchPayment">Direct ACH</a>
                                            </div>

                                            <div class="col-md">
                                                <a href="#" data-toggle="modal"
                                                   data-target="#StripePayment">Card
                                                    Payment</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                            <button class="btn btn-primary ml-auto " type="button"
                                                    id="step-9"
                                                    title="Next">Next
                                            </button>
                                            <button class="btn btn-primary ml-auto step-nine js-btn-next" type="button"
                                                    hidden
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- new  -->

                            <!--single form panel-->
                            <div class="multisteps-form__panel  p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Your Guaranteed Crypto Growth</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-seven">
                                        {{--                                        <img src="{{asset('/')}}images/like.png" alt="">--}}
                                        <p>Congratulations On Your New Crypto Asset</p>
                                    </div>
                                    <div class="button-row  mt-4">
                                        <!-- <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button> -->
                                        <button class="btn btn-primary ml-auto" id="step-10" type="button" title="Send">
                                            Go to Dashboard
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <div class="text-center mt-2">
                            <br>
                            <p>Back To Dashboard? click
                                <a href="{{route('dashboard')}}"
                                   style="background-color: unset !important;color: #4b49ac !important; ">here</a>
                            </p>
                        </div>
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
                        {{--                        <img src="{{asset('/')}}images/qr-code.jpg" width="100%" alt="">--}}
                    </div>
                    <div class="col-md-7">
                        <form action="">
                            <label>BTC Wallet Address:</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control"
                                       aria-label="Dollar amount (with dot and two decimal places)">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-copy"></i></span>
                                </div>
                            </div>
                            <label>Amount:</label>
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
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="WirePaymentTitle">Complete Your Wire Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="multisteps-form__form">
                    <label>Amount*</label>
                    <input type="number" readonly
                           class="input_initial_amount">
                    <label>Email*</label>
                    <input
                        value="{{auth()->user()->email}}"
                        id="wire_email">
                </div>
            </div>
            <div class="modal-footer text-center d-block">
                <button type="button" class="btn btn-primary btn-lg" id="step-wire-payment">Next</button>
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
                <h5 class="modal-title" id="AchPaymentTitle">Complete Your ACH Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <input type="hidden" name="step" value="ach_payment">
            <div class="modal-body">
                <div class="multisteps-form__form">
                    <label>Amount*</label>
                    <input type="number" readonly
                           class="input_initial_amount">
                </div>
            </div>
            <div class="modal-footer text-center d-block">
                <button type="submit" class="btn btn-primary btn-lg" form="contract-form" id="step-ach-payment">Pay
                </button>
            </div>

        </div>
    </div>
</div>
<!-- ACH  -->

<!-- ACH  -->
<div class="modal fade" id="reviewApplication" tabindex="-1" role="dialog" aria-labelledby="reviewApplicationTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-lg " style="max-width: 98% !important;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AchPaymentTitle">Surplus CCA - DAO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style=" background-color: purple;">
                @include('backend.clients.contract-assets.application')
            </div>
            <div class="modal-footer text-center d-block">
                <button type="button" class="btn btn-primary btn-lg" id="step-8">Next</button>
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
                <div class="multisteps-form__form">
                    <label>Amount*</label>
                    <input type="number" readonly
                           class="input_initial_amount">
                </div>
                {{--                <form action="#">--}}
                {{--                    <div class="row">--}}
                {{--                        <div class="col-md-6 mb-2">--}}
                {{--                            <label>Name on Card</label>--}}
                {{--                            <input class="form-control " type="text">--}}
                {{--                        </div>--}}
                {{--                        <div class="col-md-6  mb-2">--}}
                {{--                            <label>Card Number</label>--}}
                {{--                            <input class="form-control" type="number" name="" id="">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="row">--}}
                {{--                        <div class="col-md-4">--}}
                {{--                            <label>CVC Code</label>--}}
                {{--                            <input class="form-control" type="number" placeholder="ex: 311">--}}
                {{--                        </div>--}}
                {{--                        <div class="col-md-4">--}}
                {{--                            <label>Expiry Month</label>--}}
                {{--                            <input class="form-control" type="text" placeholder="MM">--}}
                {{--                        </div>--}}
                {{--                        <div class="col-md-4">--}}
                {{--                            <label>Expiry Year</label>--}}
                {{--                            <input type="text" class="form-control" placeholder="YYYY">--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <input class="mt-4" type="button" value="Pay Now ($1,000,00)">--}}
                {{--                </form>--}}
            </div>
            <div class="modal-footer text-center d-block">
                <button type="submit" class="btn btn-primary btn-lg" form="contract-form" id="step-card-payment">Pay
                </button>
            </div>
        </div>
    </div>
</div>
<!-- STRIPE  -->
<!-- partial -->

<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

<script src="{{asset('/')}}vendors/jsignature/flashcanvas.js"></script>
<script src="{{asset('/')}}vendors/jsignature/jSignature.min.js"></script>
<script src="{{asset('/')}}vendors/jsignature/jSignature.min.noconflict.js"></script>

<script>

    var $sigdivdir = $("#signature")

    $(document).ready(function () {

    })

    function initSignevent(type) {
        if (type == 'reset') {
            $sigdivdir.jSignature("reset")
            $('.signature-input').val('')
        }
    }

    $("#reviewApplication")
        .on('show.bs.modal', function () {
            setTimeout(function () {
                $sigdivdir.jSignature({
                    width: '100%',
                    height: 300
                })
                $sigdivdir.bind('change', function (e) {
                    var datapair = $sigdivdir.jSignature("getData", "svgbase64")
                    var base_64 = "data:" + datapair[0] + "," + datapair[1]
                    $(".signature-input").val(base_64)
                })
            }, 200)
        })

    $(document).on('keyup change', '.calc-maturity', function (e) {
        var initial_deposit = parseFloat($('#initial_amount').val())
        var years = parseFloat($("input[name='years']:checked").val())
        var rate = parseFloat('{{$record->guaranteed_rate}}')

        if (!initial_deposit) {
            initial_deposit = 0;
        }

        if (!years) {
            years = 0;
        }

        if (!rate) {
            rate = 0;
        }

        var crypto_value_at_maturity = initial_deposit * (Math.pow((1 + (rate / 100)), years));
        crypto_value_at_maturity = Math.floor(100 * crypto_value_at_maturity) / 100
        $('#crypto_value_at_maturity').val('$' + crypto_value_at_maturity)
        $('.show_initial_amount').html(initial_deposit)
        $('.show_years').html(years)
        $('.show_months').html(years * 12)
        $('.input_initial_amount').val(initial_deposit)

    })

    $(document).on('click', '#step-1', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{$url}}',
            data: {
                step: 1,
                initial_amount: $("#initial_amount").val(),
                years: $("input[name='years']:checked").val(),
                // crypto_value_at_maturity: $("#crypto_value_at_maturity").val(),
                record_id: $("#record_id").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
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

    $(document).on('click', '.beneficiary-btn', function (e) {
        $('#beneficiary_type').val($(this).data('type'));
        switch ($(this).data('type')) {
            case 'individual':
                $('.step-two').trigger('click')
                break;
            case 'trust':
                $('.step-three').trigger('click')
                break;
            case 'estate':
                $('.step-five').trigger('click')
                break;
        }
    })

    $(document).on('click', '.irrevocable-btn', function (e) {
        $('#beneficiary_irrevocable').val($(this).data('value'));
        $('.step-seven').trigger('click')
    })

    {{--$(document).on('click', '#checkout-stripe', function (e) {--}}
    {{--    window.location.href = '{{$url}}?stripe_checkout=1&amount' +--}}
    {{--})--}}

    $(document).on('click', '#step-2', function (e) {
        alert('Please Select Beneficiary')
    })

    $(document).on('click', '#step-3', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{$url}}',
            data: {
                step: 3,
                prefix_name: $("#prefix_name").val(),
                first_name: $("#first_name").val(),
                middle_name: $("#middle_name").val(),
                last_name: $("#last_name").val(),
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

    $(document).on('click', '#step-4', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            async: false,
            method: 'POST',
            url: '{{$url}}',
            data: {
                step: 4,
                name: $("#name").val(),
                street: $("#street").val(),
                city: $("#city").val(),
                zipcode: $("#zipcode").val(),
                tax_number: $("#tax_number").val(),
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

    $(document).on('click', '#step-5', function (e) {
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')

        $.ajax({
            async: false,
            method: 'POST',
            url: '{{$url}}',
            data: {
                step: 5,
                beneficiary_gender: $("#beneficiary_gender").val(),
                beneficiary_dob: $("#beneficiary_dob").val(),
                beneficiary_ssn: $("#beneficiary_ssn").val(),
                beneficiary_relationship: $("#beneficiary_relationship").val(),
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
            url: '{{$url}}',
            data: {
                step: 6,
                allocation_percent: $("#allocation_percent").val(),
                beneficiary_email: $("#beneficiary_email").val(),
                beneficiary_phone: $("#beneficiary_phone").val(),
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
        alert('Please Select Irrevocable')
    })

    $(document).on('click', '#step-8', function (e) {
        if ($('#signature-input').val() != '') {
            $('#reviewApplication').modal('hide')
            $('.step-eight').trigger('click')
        } else {
            alert('Please Sign The application')
        }
    })

    $(document).on('click', '#step-9', function (e) {
        e.preventDefault();
        alert('Please Select payment method')
    })

    $(document).on('click', '#step-10', function (e) {
        window.location.href = '{{route('dashboard')}}'
    })

    $(document).on("keydown", "form", function (event) {
        return event.key != "Enter";
    });

    $(document).on('click', '#step-wire-payment', function (e) {
        _this = $(this)
        _this.html('Loading..')
        _this.attr('disabled', true)
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        $.ajax({
            method: 'POST',
            url: '{{$url}}',
            data: {
                step: 'wire_payment',
                record_id: $("#record_id").val(),
                initial_amount: $("#initial_amount").val(),
                years: $("input[name='years']:checked").val(),
                amount: $("#initial_amount").val(),
                wire_email: $("#wire_email").val(),
                prefix_name: $("#prefix_name").val(),
                first_name: $("#first_name").val(),
                middle_name: $("#middle_name").val(),
                last_name: $("#last_name").val(),
                name: $("#name").val(),
                street: $("#street").val(),
                city: $("#city").val(),
                zipcode: $("#zipcode").val(),
                tax_number: $("#tax_number").val(),
                beneficiary_gender: $("#beneficiary_gender").val(),
                beneficiary_dob: $("#beneficiary_dob").val(),
                beneficiary_ssn: $("#beneficiary_ssn").val(),
                beneficiary_relationship: $("#beneficiary_relationship").val(),
                allocation_percent: $("#allocation_percent").val(),
                beneficiary_email: $("#beneficiary_email").val(),
                beneficiary_phone: $("#beneficiary_phone").val(),
                crypto_value_at_maturity: $("#crypto_value_at_maturity").val(),
                signature: $("#signature_input").val(),
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#WirePayment').modal('hide')
                $('.step-nine').trigger('click')
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
                _this.html('Submit')
                _this.attr('disabled', false)
            }
        })
    })

    $(document).on('click', '#step-card-payment', function (e) {
        $('#input_step').val('card_payment')
        _this = $(this)
        _this.html('Loading..')
        return;
    })

    $(document).on('click', '#step-ach-payment', function (e) {
        $('#input_step').val('ach_payment')
        _this = $(this)
        _this.html('Loading..')
        // _this.attr('disabled', true)
        return;
        {{--$('.invalid-feedback').remove()--}}
        {{--$('.is-invalid').removeClass('is-invalid')--}}
        {{--$.ajax({--}}
        {{--    method: 'POST',--}}
        {{--    url: '{{$url}}',--}}
        {{--    data: {--}}
        {{--        step: 'ach_payment',--}}
        {{--        record_id: $("#record_id").val(),--}}
        {{--        initial_amount: $("#initial_amount").val(),--}}
        {{--        years: $("input[name='years']:checked").val(),--}}
        {{--        prefix_name: $("#prefix_name").val(),--}}
        {{--        first_name: $("#first_name").val(),--}}
        {{--        middle_name: $("#middle_name").val(),--}}
        {{--        last_name: $("#last_name").val(),--}}
        {{--        name: $("#name").val(),--}}
        {{--        street: $("#street").val(),--}}
        {{--        city: $("#city").val(),--}}
        {{--        zipcode: $("#zipcode").val(),--}}
        {{--        tax_number: $("#tax_number").val(),--}}
        {{--        beneficiary_gender: $("#beneficiary_gender").val(),--}}
        {{--        beneficiary_dob: $("#beneficiary_dob").val(),--}}
        {{--        beneficiary_ssn: $("#beneficiary_ssn").val(),--}}
        {{--        beneficiary_relationship: $("#beneficiary_relationship").val(),--}}
        {{--        allocation_percent: $("#allocation_percent").val(),--}}
        {{--        beneficiary_email: $("#beneficiary_email").val(),--}}
        {{--        beneficiary_phone: $("#beneficiary_phone").val(),--}}
        {{--    },--}}
        {{--    headers: {--}}
        {{--        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
        {{--    },--}}
        {{--    success: function (response) {--}}
        {{--        $('#AchPayment').modal('hide')--}}
        {{--        $('.step-nine').trigger('click')--}}
        {{--    },--}}
        {{--    error: function (response) {--}}
        {{--        var responseJSON = response.responseJSON--}}
        {{--        if (responseJSON) {--}}
        {{--            var errors = responseJSON.errors;--}}
        {{--            if (errors) {--}}
        {{--                for (var error in errors) {--}}
        {{--                    var input_field_e = $('#' + error)--}}
        {{--                    input_field_e.addClass('is-invalid')--}}
        {{--                    input_field_e.after('<div  class="error invalid-feedback" style="display: block">' + errors[error][0] + '</div>')--}}
        {{--                }--}}
        {{--            }--}}
        {{--        }--}}
        {{--        alert(responseJSON ? responseJSON.message : 'Something Went Wrong')--}}
        {{--        _this.html('Submit')--}}
        {{--        _this.attr('disabled', false)--}}
        {{--    }--}}
        {{--})--}}
    })

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

    // //changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)
    //
    // const setAnimationType = newType => {
    //     DOMstrings.stepFormPanels.forEach(elem => {
    //         elem.dataset.animation = newType;
    //     });
    // };
    //
    // //selector onchange - changing animation
    // const animationSelect = document.querySelector('.pick-animation__select');
    //
    // animationSelect.addEventListener('change', () => {
    //     const newAnimationType = animationSelect.value;
    //
    //     setAnimationType(newAnimationType);
    // });

</script>
</body>
</html>
