<?php
require_once __DIR__ . "/../../data/model/User.php";

session_start(); // Start session

$currentLoggedInUser = unserialize($_SESSION['user']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/theme/theme.css">
    <title>Booking Form</title>

    <style>
        /* Override global variables */
        :root {
            --divider-width: 100%;
            --textfield-width: 14rem;
            --card-width: 100%;
            --button-size: 0.65rem 0.65rem;
            --elevation: 0.1rem;
        }

        body {
            overflow-x: hidden;
        }

        .booking-form {
            margin-top: 2.5rem;
        }

        .booking-form-element {
            margin-right: 2rem;
            margin-left: 2rem;
        }

        .booking-calendar>input {
            width: 30vw;
            height: 10vh;
            text-align: start;
        }

        .calendar-header>* {
            margin: 1rem 0.85rem 1rem 0.85rem;
        }

        #guest-number {
            text-align: center;
        }

        .guest-number-label {
            width: 25%;
        }

        .special-request-margin {
            margin: 0rem 2rem 0 2rem;
        }

        .label-margin-1 {
            margin-right: 5rem;
        }

        .label-margin-2 {
            margin-right: 2rem;
        }

        .label-margin-3 {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <div class="column-container center">
        <nav class="navbar">
            <div class="navbar-content">
                <div class="navbar-start">
                    <a href="#" class="navbar-logo">
                        <img src="../../images/image-placeholder.svg" alt="Logo">
                    </a>
                </div>
                <div class="navbar-center">
                    <div class="progress-bar">
                        <div class="progress-item active">
                            <div class="progress-circle">1</div>
                            <div class="progress-text">Booking Information</div>
                        </div>
                        <div class="progress-item">
                            <div class="progress-line"></div>
                            <div class="progress-circle">2</div>
                            <div class="progress-text">Payment Information</div>
                        </div>
                        <div class="progress-item">
                            <div class="progress-line"></div>
                            <div class="progress-circle">3</div>
                            <div class="progress-text">Booking Confirmation</div>
                        </div>
                    </div>
                </div>
                <div class="navbar-end">
                    <button class="navbar-profile-btn">
                        <img src="<?php echo $currentLoggedInUser->getProfilePicture(); ?>" alt="Profile">
                        <span class="md-24 material-icons-outlined">arrow_drop_down</span>
                    </button>
                    <div class="navbar-dropdown">
                        <div class="column-container">
                            <a href="#" class="navbar-dropdown-item">
                                <div class="row-container center-horizontal">
                                    <span class="material-icons navbar-dropdown-item-icon">account_circle</span>
                                    Profile
                                </div>
                            </a>
                            <a href="#" class="navbar-dropdown-item">
                                <div class="row-container center-horizontal">
                                    <span class="material-icons navbar-dropdown-item-icon">auto_stories</span>
                                    My Bookings
                                </div>
                            </a>
                            <a href="#" class="navbar-dropdown-item">
                                <div class="row-container center-horizontal">
                                    <span class="material-icons navbar-dropdown-item-icon">local_activity</span>
                                    Voucher
                                </div>
                            </a>
                            <a href="#" class="navbar-dropdown-item">
                                <div class="card" style="--card-width: auto">
                                    <div class="card-content">
                                        <div class="column-container center">
                                            <span class="text-center">Log Out</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="wrap-content">
            <div class="column-container">
                <h1 class="display-medium text-center">Booking Form</h1>
                <div class="card">
                    <div class="card-content">
                        <div class="row-container center-vertical booking-form">
                            <!-- Date of Arrival -->
                            <div class="column-container booking-form-element">
                                <!-- Calendar Picker Dialog -->
                                <label class="body-large roboto-medium">Date of Arrival</label>
                                <input type="text" class="calendar-input" hidden>

                                <div class="calendar-picker">
                                    <div class="calendar-header">
                                        <span class="material-icons-outlined prev-month">navigate_before</span>
                                        <div class="select-container">
                                            <select class="select-month select text-center"></select>
                                        </div>
                                        <div class="select-container">
                                            <select class="select-year select text-center"></select>
                                        </div>
                                        <span class="material-icons-outlined next-month">navigate_next</span>
                                    </div>
                                    <div class="calendar"></div>
                                </div>
                            </div>

                            <!-- Date of Departure -->
                            <div class="column-container booking-form-element">
                                <!-- Calendar Picker Dialog -->
                                <label class="body-large roboto-medium">Date of Departure</label>
                                <input type="text" class="calendar-input" hidden>

                                <div class="calendar-picker">
                                    <div class="calendar-header">
                                        <span class="material-icons-outlined prev-month">navigate_before</span>
                                        <div class="select-container">
                                            <select class="select-month select text-center"></select>
                                        </div>
                                        <div class="select-container">
                                            <select class="select-year select text-center"></select>
                                        </div>
                                        <span class="material-icons-outlined next-month">navigate_next</span>
                                    </div>
                                    <div class="calendar"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Divider/Line -->
                        <div class="horizontal-divider booking-form"></div>


                        <div class="row-container center-vertical booking-form">
                            <div class="row-container center-horizontal fill-parent booking-form-element">
                                <label class="guest-number-label label-margin-1 body-large roboto-medium">Guest
                                    Number</label>
                                <div class="column-container">
                                    <div class="textfield-container" style="--textfield-width: 5rem">
                                        <input type="text" id="guest-number" name="guest_number" class="textfield-input"
                                            placeholder=" " value="1" />
                                        <div class="textfield-underline"></div>
                                    </div>
                                    <div class="row-container">
                                        <button id="decrease-guest" class="button fill-parent"
                                            style="--button-size: 0.65rem 0.65rem">–</button>
                                        <button id="increase-guest" class="button fill-parent"
                                            style="--button-size: 0.65rem 0.65rem">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row-container  center-horizontal fill-parent booking-form-element">
                                <label class="label-margin-2 body-large roboto-medium">Room Type</label>
                                <div class="select-container">
                                    <select class="select-month select fill-parent">
                                        <option value="">Choose a Room Type</option>
                                        <option value="">Standard</option>
                                        <option value="">Deluxe</option>
                                        <option value="">Suite</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row-container center-vertical booking-form">
                            <div class="row-container center-horizontal fill-parent booking-form-element">
                                <label class="label-margin-2 body-large roboto-medium">Contact #:</label>
                                <div class="textfield-container">
                                    <input type="text" name="contact" id="contact" class="textfield-input"
                                        placeholder="09999999999" value="<?php echo $currentLoggedInUser->getPhoneNumber(); ?>" />
                                    <div class="textfield-underline"></div>
                                    <span class="error-message">Invalid phone number</span>
                                </div>
                            </div>
                            <div class="row-container  center-horizontal fill-parent booking-form-element">
                                <label class="label-margin-2 body-large roboto-medium">Email:</label>
                                <div class="textfield-container">
                                    <input type="email" name="contact" id="email" class="textfield-input"
                                        placeholder="johndoe@gmail.com" value="<?php echo $currentLoggedInUser->getEmail(); ?>" />
                                    <div class="textfield-underline"></div>
                                    <span class="error-message">Invalid email address</span>
                                </div>
                            </div>
                        </div>

                        <!-- Divider/Line -->
                        <div class="horizontal-divider booking-form"></div>

                        <div class="column-container booking-form booking-form-element">
                            <span class="body-large roboto-medium label-margin-3">
                                Special Request:
                            </span>
                            <div class="outlined-textfield-container" style="--textfield-width: 100%">
                                <textarea class="outlined-textfield-input" name="special-request"
                                    placeholder="Note your special requests" rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Additional margin -->
                        <div class="booking-form"></div>
                    </div>
                </div>
                <div class="row-container booking-form">
                    <div class="display-small fill-parent booking-form-element">
                        <span>Price:</span>
                        <span id="price">P99,999</span>
                    </div>
                    <button id="confirm" class="button label-margin-2"
                        style="--button-size: 0.65rem 3rem">Confirm</button>
                    <button id="cancel" class="button label-margin-2"
                        style="--button-size: 0.65rem 3rem">Cancel</button>
                </div>

                <!-- Additional margin -->
                <div class="booking-form"></div>
            </div>
        </div>
    </div>
</body>
<script src="../../scripts/calendar.js"></script>
<script src="../../scripts/validators.js"></script>
<script>
    const MINIMUM_GUEST_ALLOWED = 1;
    const MAXIMUM_GUEST_ALLOWED = 19;

    document.addEventListener('DOMContentLoaded', () => {
        const contactInput = document.getElementById('contact');
        const emailInput = document.getElementById('email');
        const guestNumberInput = document.getElementById('guest-number');
        const increaseGuestButton = document.getElementById('increase-guest');
        const decreaseGuestButton = document.getElementById('decrease-guest');

        guestNumberInput.addEventListener('change', (e) => {
            e.target.value = validateGuestNumber(e.target.value);
        })

        emailInput.addEventListener('input', (e) => {
            const parentContainer = e.target.parentElement;
            const isValid = validateEmail(e.target.value) || isEmpty(e.target.value);

            if (isValid) {
                parentContainer.classList.remove('error-container');
            } else {
                parentContainer.classList.add('error-container');
            }
        })

        contactInput.addEventListener('input', (e) => {
            const parentContainer = e.target.parentElement;
            const isValid = validatePhilippinePhoneNumber(e.target.value) || isEmpty(e.target.value);

            if (isValid) {
                parentContainer.classList.remove('error-container');
            } else {
                parentContainer.classList.add('error-container');
            }
        })

        increaseGuestButton.addEventListener('click', () => {
            guestNumberInput.value = increaseGuest(guestNumberInput.value);
        })

        decreaseGuestButton.addEventListener('click', () => {
            guestNumberInput.value = decreaseGuest(guestNumberInput.value);
        })
    })

    function increaseGuest(inputValue) {
        let increasedGuestNumber = parseInt(inputValue) + 1;

        if (increasedGuestNumber >= MAXIMUM_GUEST_ALLOWED) {
            increasedGuestNumber = MAXIMUM_GUEST_ALLOWED;
        }

        return increasedGuestNumber;
    }

    function decreaseGuest(inputValue) {
        let decreasedGuestNumber = parseInt(inputValue) - 1;

        if (decreasedGuestNumber <= 0) {
            decreasedGuestNumber = MINIMUM_GUEST_ALLOWED;
        }

        return decreasedGuestNumber;
    }
</script>

</html>