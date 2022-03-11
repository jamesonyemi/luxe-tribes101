<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Login | Luxe Tribes</title>

     <!-- Favicon -->
     <link rel="icon" type="image/png" href="images/favicons/favicon.ico" />

     <!-- Icons -->
     <script
       src="https://kit.fontawesome.com/4af2d803fc.js"
       crossorigin="anonymous"
     ></script>
     <!-- Styles -->
     <link
       href="select2/dist/css/select2.min.css"
       rel="stylesheet"
     />
     <link href="css/bootstrap.css" rel="stylesheet" />
     <link
       rel="stylesheet"
       href="flatpickr/dist/flatpickr.min.css"
     />
 
     <link
       rel="stylesheet"
       href="intl-tel-input/build/css/intlTelInput.css"
     />
  </head>
  <body class="bg-white">
    <div id="app">
        <div class=" container ">
            <nav
              class="navbar navbar-expand-lg navbar-light bg-white position-relative py-30 "
            >
              <a class="navbar-brand position-absolute" href="#">
                Luxe Tribes
              </a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
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
                      <i class="fa fa-search"></i
                    ></a>
                  </li>
                  <li class="nav-item mr-2">
                    <a class="btn btn-outline-primary " href="login.html"
                      ><i class="far fa-user"> </i>
                      Log in
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
      <main class="main-content">
        <div class="container-fluid login-page">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="container">
                <div class="justify-content-center">
                  <div class="login">
                    <div class="heading">
                      <h4>Welcome Back!</h4>
                    </div>
                    <form
                      action="#"
                      method="POST"
                    >
                    <div class="form-group">
                        <input
                          type="text"
                          class="form-control "
                          id="user-name"
                          name="user-name"
                          pattern="[A-Za-z0-9]+"
                          title="username can only allow numbers and alphabets!"
                          data-toggle="tooltip"
                          data-placement="left"
                          placeholder="user name"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <input
                          type="email"
                          class="form-control "
                          id="email"
                          name="email"
                          placeholder="Email"
                          required
                        />
                      </div>

                      <div class="form-group">
                        <input
                        class="form-control "
                        name="password"
                        id="password"
                        type="password"
                        placeholder="Password"
                        maxlength="6"
                        pattern="^(?=.{6,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="password must contain at least 
                                              1 uppercase letter, 
                                              1 lowercase letter, 
                                              1 symbol and 
                                              1 number 
                                              with a minimum length of 6 characters"
                        required
                        />
                      </div>

                      <div class="form-group row">
                        <div class="col">
                          <button type="submit" class="btn btn-primary w-100">
                            Login
                          </button>
                        </div>
                      </div>

                      <p class="text-muted">
                        Don't have an account?
                        <a href="register.html">Register</a>
                      </p>

                      <p class="text-muted">
                        Forgot Pasword?
                        <a href="#">Reset Password?</a>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 p-0">
              <div class="back-grey"></div>
              <div class="front-img position-absolute">
                <img src="images/background/back-8.jpg" width="400" />
              </div>
              <div class="back-img position-absolute">
                <img src="images/background/back-7.png" alt="" />
              </div>
              <div class="back-img position-absolute">
                <img src="images/background/back-6.jpg" width="180" />
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <!-- Scripts -->
    <script src="js/app.js"></script>
    <script src="select2/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
      $(function() {
        $('[data-toggle="tooltip"]').tooltip();
      });
      
    </script>
    <script>
      $(document).on("submit", "form", function(e) {
        $(this)
          .find('button[type="submit"]')
          .html(`<i class="fas fa-spinner fa-spin"></i> Processing`);
      });
    </script>
  </body>
</html>
