<nav class="navbar navbar-expand-lg  navbar-light  navv">
  <div class="container-fluid">
    <a class="navbar-brand me-5 text-light" href="index.php">
      <i class="bi bi-person-raised-hand" style="font-size: 40px; color: red;">Nelp</i>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex me-5">
        <input class="form-control me-2" type="search" placeholder="Things to do" aria-label="Search">
        <input class="form-control me-2" type="search" placeholder="Location" aria-label="Search">
        <button class="btn btn-danger btn-outline-danger text-light" type="submit">Search</button>
      </form>
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navver text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Help for Business
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="bi bi-house-add-fill me-3"></i>Add a business</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-check2-circle me-3"></i>Claim your business</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle me-3"></i>Log in to Business Account</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-search me-3"></i>Explore help for Business</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 active text-light navver" aria-current="page" href="review.php">Write a Review</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-3  text-light navver" href="project.php">Start a Project</a>
        </li>
        <li class="nav-item ">
          <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Log In</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h3 class="text-center mb-3">Log in to 🙋‍♂️help </h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>

                    <div class="text-center mt-3">
                      <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>
                    <div class="text-center mt-3">
                      <a href="#" class="text-decoration-none text-dark">New to Yelp? Sign up
                      </a>
                    </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>

                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#eexampleModal" data-bs-whatever="@mdo">Sign up</button>

          <div class="modal fade" id="eexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header text-center">
                </div>
                <div class="modal-body">
                  <form class="mx-1 mx-md-4">
                    <h3 class="text-center mb-3">Register to 🙋‍♂️help </h3>

                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" class="form-control" required />
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" class="form-control" required />
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" class="form-control" required />
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" class="form-control" required />
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-3">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" required />
                      <label class="form-check-label" for="form2Example3c">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary w-100">Register</button>
                    </div>
                  </form>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Close</button>

                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- =============================another navbar============================= -->

<nav class="navbar navbar-expand-lg " style="background-color: aqua;">
  <div class="container">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Restaurants
            </a>
            <ul class="dropdown-menu second-menu">
              <div class="content_1 d-flex">
                <div class="sub-nav-col left me-4">
                  <a href="#" class="sub-nav-box  text-decoration-none text-dark" id="box-1">

                    <h4 class="leftt"> <span class="leftt">🗑</span>Takeout</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-2">

                    <h4 class="leftt"> <span class="leftt">🍔</span>burger</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-3">

                    <h4 class="leftt"> <span class="leftt">🏯</span>chinese</h4>

                  </a>
                  
                </div>
                <div class="sub-nav-col right">
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-5">

                    <h4 class="leftt"> <span class="leftt">🗓️</span>Reservations</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-6">

                    <h4 class="leftt"> <span class="leftt">🚚</span>Delivery</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-7">

                    <h4 class="leftt"> <span class="leftt">🌮</span>Mexican</h4>

                  </a>
                  
                </div>
              </div>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Home Services
            </a>
            <ul class="dropdown-menu second-menu">
              <div class="content_1 d-flex">
                <div class="sub-nav-col left me-4">
                  <a href="#" class="sub-nav-box  text-decoration-none text-dark" id="box-1">

                    <h4 class="leftt"> <span class="leftt">🛠️</span>Contractors</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-2">

                    <h4 class="leftt"> <span class="leftt">🔌</span>Electricians</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-3">

                    <h4 class="leftt"> <span class="leftt">🖲</span>Home Cleaner</h4>

                  </a>

                </div>
                <div class="sub-nav-col right me-1">
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-4">

                    <h4 class="leftt"><span class="leftt">🧑‍🌾</span>Landscaping</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-5">

                    <h4 class="leftt"> <span class="leftt">🚚</span>Movers</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-6">

                    <h4 class="leftt"> <span class="leftt">👷🏾</span>Plumbers</h4>

                  </a>
                </div>
              </div>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Auto Services
            </a>
            <ul class="dropdown-menu second-menu">
              <div class="content_1 d-flex">
                <div class="sub-nav-col left me-4">
                  <a href="#" class="sub-nav-box  text-decoration-none text-dark" id="box-1">

                    <h4 class="leftt"> <span class="leftt">🦿</span>Auto Repair</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-2">

                    <h4 class="leftt"> <span class="leftt">⚗</span>Auto detailing</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-3">

                    <h4 class="leftt"> <span class="leftt">🔫</span>Car Wash</h4>

                  </a>
                </div>
                <div class="sub-nav-col right">
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-5">

                    <h4 class="leftt"> <span class="leftt">🏚</span>Car Dealers</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-6">

                    <h4 class="leftt"> <span class="leftt">👨🏻‍🔧</span>Oil Change</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-7">

                    <h4 class="leftt"> <span class="leftt">🅿</span>Parking</h4>

                  </a>
                  
                </div>
              </div>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu second-menu">
              <div class="content_1 d-flex">
                <div class="sub-nav-col left me-4">
                  <a href="#" class="sub-nav-box  text-decoration-none text-dark" id="box-1">

                    <h4 class="leftt"> <span class="leftt">🖱</span>Dry Cleaning</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-2">

                    <h4 class="leftt"> <span class="leftt">📲</span>phone repair</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-3">

                    <h4 class="leftt"> <span class="leftt">🍹</span>Nightlife</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-4">

                    <h4 class="leftt"><span class="leftt">✂</span>Hair Salons</h4>

                  </a>
                </div>
                <div class="sub-nav-col right">
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-5">

                    <h4 class="leftt"> <span class="leftt">🏋🏿‍♂️</span>Gyms</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-6">

                    <h4 class="leftt"> <span class="leftt">💆🏻‍♀️</span>Massage</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-7">

                    <h4 class="leftt"> <span class="leftt">🛍️</span>Shopping</h4>

                  </a>
                  <a href="#" class="sub-nav-box text-decoration-none text-dark" id="box-8">

                    <h4 class="leftt"> <span class="leftt">🍺</span>Bars</h4>

                  </a>
                </div>
              </div>
            </ul>

          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>