@extends('layouts.app')

@section('title', 'Donation')

@section('content')

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Meals on Wheels - Donation</title>
        <!-- Enable Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Styles -->
        <link href="{{ asset('css/donation.css') }}" rel="stylesheet"> 
        <style>
            .background {
                background-size: cover;
                height: 250vh;
                display: flex;
                justify-content: center;
                align-items: center;

            }

            .container {
                max-width: 600px;
                /* Reduced width to make it smaller */
                margin-top: 100px;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                background: rgba(255, 255, 255, 0.1);
                /* Increased opacity for better readability */
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                backdrop-filter: blur(30px);
                text-align: center;
                color: black;
            }

          
        </style>
    </head>

    <body>
        <div class="background" style="background-image: url('{{ asset('images/login_img.jpg') }}');">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <div class="image-container">
                            <img src="{{ asset('images/logo.png') }}" alt="Image for Donation Form">
                        </div>
                        <div class="title-text">
                            <div class="title">Billing Information</div>
                            <p>Please fill out the form below</p>
                        </div>
                        <div class="steps-container">
                            <div class="step">1 <br> DONATION</div>
                            <div class="step active">2 <br> BILLING</div>
                            <div class="step">3 <br> PAYMENT</div>
                            <div class="step">4 <br> COMPLETION</div>
                        </div>
                        <form id="form" action="{{ route('saveBilling') }}" method="POST">
                            @csrf
                            
                            <div class="input-control">
                                <label for="donor_first_name">First Name</label>
                                <input name="donor_first_name" type="text" id="donor_first_name" class="form-control"
                                    style="width:450px;" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_last_name">Last Name</label>
                                <input name="donor_last_name" type="text" id="donor_last_name" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_address">Address</label>
                                <input name="donor_address" type="text" id="donor_address" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_city">City</label>
                                <input name="donor_city" type="text" id="donor_city" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_state">State</label>
                                <input name="donor_state" type="text" id="donor_state" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_country">Country</label>
                                <input name="donor_country" type="text" id="donor_country" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_email">Email</label>
                                <input name="donor_email" type="text" id="donor_email" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <div class="input-control">
                                <label for="donor_phone">Phone</label>
                                <input name="donor_phone" type="number" id="donor_phone" class="form-control" />
                                <div class="error"></div>
                            </div>
                            <button type="submit" class="btn btn-light fw-bold" data-mdb-ripple-color="dark">NEXT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const form = document.getElementById('form');
                const donor_first_name = document.getElementById('donor_first_name');
                const donor_last_name = document.getElementById('donor_last_name');
                const donor_address = document.getElementById('donor_address');
                const donor_city = document.getElementById('donor_city');
                const donor_state = document.getElementById('donor_state');
                const donor_country = document.getElementById('donor_country');
                const donor_email = document.getElementById('donor_email');
                const donor_phone = document.getElementById('donor_phone');

                form.addEventListener('submit', (e) => {
                    const isValid = validateInputs();
                    if (!isValid) {
                        e.preventDefault();
                    }
                });

                const setError = (element, message) => {
                    const inputControl = element.parentElement;
                    const errorDisplay = inputControl.querySelector('.error');

                    errorDisplay.innerText = message;
                    inputControl.classList.add('error');
                    inputControl.classList.remove('success');
                };

                const setSuccess = (element) => {
                    const inputControl = element.parentElement;
                    const errorDisplay = inputControl.querySelector('.error');

                    errorDisplay.innerText = '';
                    inputControl.classList.add('success');
                    inputControl.classList.remove('error');
                };

                const validateInputs = () => {
                    const donor_first_name_value = donor_first_name.value.trim();
                    const donor_last_name_value = donor_last_name.value.trim();
                    const donor_address_value = donor_address.value.trim();
                    const donor_city_value = donor_city.value.trim();
                    const donor_state_value = donor_state.value.trim();
                    const donor_country_value = donor_country.value.trim();
                    const donor_email_value = donor_email.value.trim();
                    const donor_phone_value = donor_phone.value.trim();

                    let isValid = true;

                    if (donor_first_name_value === '') {
                        setError(donor_first_name, 'First name is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_first_name);
                    }

                    if (donor_last_name_value === '') {
                        setError(donor_last_name, 'Last name is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_last_name);
                    }

                    if (donor_address_value === '') {
                        setError(donor_address, 'Address is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_address);
                    }

                    if (donor_city_value === '') {
                        setError(donor_city, 'City is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_city);
                    }

                    if (donor_state_value === '') {
                        setError(donor_state, 'State is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_state);
                    }

                    if (donor_country_value === '') {
                        setError(donor_country, 'Country is required');
                        isValid = false;
                    } else {
                        setSuccess(donor_country);
                    }

                    if (donor_email_value === '') {
                        setError(donor_email, 'Email is required');
                        isValid = false;
                    } else if (!isValidEmail(donor_email_value)) {
                        setError(donor_email, 'Provide a valid email address');
                        isValid = false;
                    } else {
                        setSuccess(donor_email);
                    }

                    if (donor_phone_value === '') {
                        setError(donor_phone, 'Phone is required');
                        isValid = false;
                    } else if (donor_phone_value.length < 10) {
                        setError(donor_phone, 'Provide a valid phone number');
                        isValid = false;
                    } else {
                        setSuccess(donor_phone);
                    }

                    return isValid;
                };

                const isValidEmail = (email) => {
                    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                    return emailPattern.test(email);
                };
            });
        </script>
    </body>
@endsection
