<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="{{asset('/')}}css/sign-up.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$gs->title}}</title>
    <!-- FAVICON  -->

    @include('backend.layouts.includes.favicon')

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
            <div class="multisteps-form">
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
                        </div>
                        <form class="multisteps-form__form" action="{{route('register.store')}}" method="POST">
                            @csrf
                            <input
                                type="hidden"
                                value=""
                                name="record_id"
                                id="record_id"
                            >
                            <!--single form panel-->
                            <div class="multisteps-form__panel p-4 rounded bg-white js-active" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Create New Account</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-one">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="email" required
                                               placeholder="">
                                        {{--                                        <div class="invalid-feedback">Please fill out this field.</div>--}}
                                        <label for="">Phone Number</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                {{--                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"--}}
                                                {{--                                                        data-toggle="dropdown" aria-haspopup="true"--}}
                                                {{--                                                        aria-expanded="false">+1--}}
                                                {{--                                                </button>--}}
                                                {{--                                                <div class="dropdown-menu">--}}
                                                {{--                                                    <a class="dropdown-item" href="javascript:">+2</a>--}}
                                                {{--                                                    <a class="dropdown-item" href="javascript:">+3</a>--}}
                                                {{--                                                    <a class="dropdown-item" href="javascript:">+4</a>--}}
                                                {{--                                                    <a class="dropdown-item" href="javascript:">+5</a>--}}
                                                {{--                                                </div>--}}
                                                <select name="phone_prefix" required class="form-control">
                                                    <option selected value="+1">+1</option>
                                                    <option value="+2">+2</option>
                                                    <option value="+3">+3</option>
                                                    <option value="+4">+4</option>
                                                    <option value="+5">+5</option>
                                                </select>
                                            </div>
                                            <input type="text" name="phone" id="phone" required class="form-control"
                                                   placeholder=""
                                                   aria-label="Text input with dropdown button">
                                        </div>
                                        <label for="">Partner Code</label>
                                        <input type="text" placeholder="" name="partner_code"
                                               id="partner_code" required>
                                    </div>
                                    <div class="button-row mt-4">
                                        <button class="btn btn-primary ml-auto "
                                                id="step-1"
                                                type="button" title="Next">Next
                                        </button>
                                        <button class="btn btn-primary ml-auto step-one js-btn-next" data-step="1"
                                                style="display: none"
                                                type="button" title="Next">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel p-4 bg-white" data-animation="scaleIn">

                                <div class="multisteps-form__content">

                                    <div class="step-two">
                                        <div class="icon-mail">
{{--                                            <img src="{{asset('/')}}images/mail-step -2.png" alt="">--}}
                                            <h5>Check Your Email</h5>
                                            <p>We sent a verification link to the Email address
                                                you used to create the account.
                                                If you don’t verify your Email address,
                                                you may not be able to continue.</p>
                                        </div>

                                    </div>

                                    <div class="button-row mt-4">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev
                                        </button>
                                        <button class="btn btn-primary ml-auto "
                                                id="step-2"
                                                type="button" title="Next">Next
                                        </button>
                                        <button class="btn btn-primary step-two ml-auto js-btn-next" data-step="2"
                                                style="display: none"
                                                type="button" title="Next">Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--single form panel-->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Create Password</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-three">
                                        <label>Password</label>
                                        <input name="password" id="password" type="password" placeholder="">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirmation"
                                               placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">
                                                Prev
                                            </button>
                                            <button class="btn btn-primary ml-auto "
                                                    id="step-3"
                                                    type="button" title="Next">Next
                                            </button>
                                            <button style="display: none"
                                                    class="btn btn-primary step-three ml-auto js-btn-next" type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- NEW  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Enter Your Verification Code</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-four">
                                        <p>Security of your personal and financial information is
                                            of upmost importance to us. Setting up two factor authentication
                                            helps us keep your account safe. We have sent an SMS
                                            with a 6 digit code to your phone number.
                                            Please enter the code below to confirm your mobile phone number.</p>
                                        <label for="">Enter the 6-digit code</label>
                                        <input required name="phone_verify_code" id="phone_verify_code" type="text"
                                               placeholder="******">
                                        <h6>I haven't received the code <a href="javascript:" id="resend-phone-code"
                                                                           class="btn-primary">Resend</a></h6>
                                    </div>

                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">
                                                Prev
                                            </button>
                                            <button class="btn btn-primary ml-auto "
                                                    id="step-4"
                                                    type="button" title="Next">Next
                                            </button>
                                            <button class="btn btn-primary ml-auto js-btn-next step-four"
                                                    style="display: none"
                                                    type="button"
                                                    title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- NEW  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Personal Information</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-five">
                                        <label>Prefix <span>(optional)</span></label>
                                        <input type="text" placeholder="" name="name_prefix" id="name_prefix">
                                        <label>First Name</label>
                                        <input type="text" id="first_name" name="first_name" placeholder="">
                                        <label>Middle Name</label>
                                        <input type="text" placeholder="" name="middle_name" id="middle_name">
                                        <label>Last Name</label>
                                        <input id="last_name" name="last_name" type="text" placeholder="">
                                        <label>Suffix <span>(optional)</span></label>
                                        <input name="name_suffix" id="name_suffix" type="text" placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">
                                                Prev
                                            </button>
                                            <button class="btn btn-primary ml-auto "
                                                    id="step-5"
                                                    type="button" title="Next">Next
                                            </button>
                                            <button
                                                style="display: none"
                                                class="btn btn-primary ml-auto js-btn-next step-five" type="button"
                                                title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->

                            <!-- new  -->
                            <div class="multisteps-form__panel p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Personal Information - Address</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-six">
                                        <label>Street Address</label>
                                        <input id="street" name="street" type="text" placeholder="">
                                        <label>Unit Number</label>
                                        <input id="unit_number" name="unit_number" type="text" placeholder="">
                                        <label>City</label>
                                        <input id="city" name="city" type="text" placeholder="">
                                        <label>State</label>
                                        <input id="state" name="state" type="text" placeholder="">
                                        <label>Zip Code</label>
                                        <input id="zipcode" name="zipcode" type="text" placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="button-row mt-4 col-12">
                                            <button class="btn btn-primary js-btn-prev" type="button" title="Prev">
                                                Prev
                                            </button>
                                            <button class="btn btn-primary ml-auto "
                                                    id="step-6"
                                                    type="button" title="Next">Next
                                            </button>
                                            <button
                                                style="display: none"
                                                class="btn btn-primary ml-auto js-btn-next step-six" type="button"
                                                title="Next">Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- new  -->
                            <!--single form panel-->
                            <div class="multisteps-form__panel  p-4 rounded bg-white" data-animation="scaleIn">
                                <h3 class="multisteps-form__title">Personal Information</h3>
                                <div class="multisteps-form__content">
                                    <div class="step-seven">
                                        <label>Gender</label>
                                        <input id="gender" name="gender" type="text" placeholder="">
                                        <label>Date Of Birth</label>
                                        <input id="dob" name="dob" type="date">
                                        <label>SSN or TIN</label>
                                        <input id="stn" name="stn" type="text" placeholder="">
                                        <p>Surplus is required by law to collect this information</p>
                                    </div>
                                    <div class="button-row  mt-4">
                                        <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev
                                        </button>
                                        <button class="btn btn-primary ml-auto "
                                                id="step-7"
                                                type="button" title="Next">Next
                                        </button>
                                        <button
                                            style="display: none"
                                            class="btn btn-primary ml-auto step-seven" type="button" title="Send">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-2">
                            <br>
                            <p>Already have an account? click <a href="{{route('login')}}"
                                                                 style="background-color: unset !important;color: #4b49ac !important; ">here</a>
                                to Sign in</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
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
                phone_prefix: $("select[name='phone_prefix']").val(),
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

    $(document).on('click', '#resend-phone-code', function (e) {
        $('#step-3').trigger('click')
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
