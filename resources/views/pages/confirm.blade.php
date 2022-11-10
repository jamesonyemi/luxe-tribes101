<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Confirmation Page | Luxe Tribes</title>
    <!-- CSRF Token -->
    @include('partials.csrf')
    <!-- Favicon -->
    <link rel="icon" type="image/*" href="{{ asset('luxetribe-assets/images/favicons/favicon.ico') }}" />

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/4af2d803fc.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('luxetribe-assets/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('luxetribe-assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('luxetribe-assets/flatpickr/dist/flatpickr.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('luxetribe-assets/intl-tel-input/build/css/intlTelInput.css') }}" />
</head>

<body class="bg-white">
    <div id="app">
        <div class=" container ">
            <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative py-30 ">
                <a class="navbar-brand position-absolute" href="#">
                    Luxe Tribes
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Group trips</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Private trips</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Past trips & reviews</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">About us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact us</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a href="#" class="btn search-btn py-2 mb-2">
                                <i class="fa fa-search"></i></a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <main class="main-content">
            <div class="container verify-page mt-4">
                <div class="row">
                    <div class="col-8 mx-auto">
                        <div class="card p-4">
                            <div class="card-body">
                                <div class="heading text-center">
                                    <div class="text-center mx-auto check-bg mb-4">
                                        <img src="https://booking.luxetribes.com/images/icons/check.svg" alt="">
                                    </div>
                                </div>



                                <h4 class="text-center">Success</h4>

                                <div class="text-muted text-center">
                                    Thank you for creating an account.
                                    <br>
                                    Now you are a member of our Travel Tribe, We cherish your partnership with us and would love to have you on our next Tribe trip.
                                    <br>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Scripts -->
    <script src="https://booking.luxetribes.com/js/app.js?v=1647002526"></script>
    <script src="{{ asset('luxetribe-assets/select2/dist/js/select2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(".datepicker").flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d"
        });
    </script>
    <script src="{{ asset('luxetribe-assets/intl-tel-input/build/js/intlTelInput.js') }}"></script>
    <script src="{{ asset('luxetribe-assets/js/init-tel-input.js') }}"></script>
    <script src="{{ asset('luxetribe-assets/intl-tel-input/build/js/utils.js') }}"></script>
</body>

</html>
