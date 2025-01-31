<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Ideas</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="cont">
        <?php
        include "navbar/navbar.php";
        ?>
    </div>
    <div class="container mt-5">
        <header class="d-flex justify-content-between align-items-center p-4">
            <h3 class="fs-1">Project Ideas</h3>

            <button type="button" class="btn btn-danger p-3" data-bs-toggle="modal" data-bs-target="#homeProjectModal">+ Get quotes</button>


            <!-- Modal -->
            <div class="modal fade" id="homeProjectModal" tabindex="-1" aria-labelledby="homeProjectModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="homeProjectModalLabel">Ready to start your next home project?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Choose a category to start creating your project</p>
                            <div class="modal-category">
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🔧<br>Auto Repair</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🏗<br>Contractors</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">⚡<br>Electricians</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🛠<br>Handyman</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">❄️<br>Heating & AC</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🧹<br>Home Cleaning</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🌿<br>Landscaping</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🚚<br>Movers</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🎨<br>Painters</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🚰<br>Plumbers</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🐜<br>Pest Control</div>
                                </a>
                                <a href="" class="text-decoration-none text-dark">
                                    <div class="category-card_1">🏠<br>Roofers</div>
                                </a>

                            </div>
                            <div class="text-center mt-3">
                                <a href="#">Search for other home services</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" disabled>Next</button>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <section class="container mt-4">
            <h3>Hire a local pro today</h3>
            <div class="row text-center mt-5">
                <div class="col-md-1 fs-4">
                    <a href="" class="text-decoration-none text-dark qqq" data-bs-toggle="modal" data-bs-target="#exampleModalToggle"> 🚛
                        <h5>Movers</h5>
                    </a>
                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">What Kind of move Do You Need</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="radio-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="location" id="inState">
                                            <label class="form-check-label" for="inState">In-state</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="location" id="outState">
                                            <label class="form-check-label" for="outState">Out-of-state</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="location" id="international">
                                            <label class="form-check-label" for="international">International</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" disabled>Back</button>
                                    <button class="btn btn-danger" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Next</button>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Hide this modal and show the first with the button below.
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 fs-4">
                    <a href="" class="text-decoration-none text-dark qqq"> 🧹
                        <h5> Home cleaning</h5>
                    </a>
                </div>
                <div class="col-md-1 fs-4">
                    <a href="" class="text-decoration-none text-dark qqq"> 🔧

                        <h5> Plumbers </h5>
                    </a>
                </div>
                <div class="col-md-2 fs-4">
                    <a href="" class="text-decoration-none text-dark qqq"> 🛠️
                        <h5> Appliance repair </h5>
                    </a>
                </div>
                <div class="col-md-2 fs-4">
                    <a href="" class="text-decoration-none text-dark qqq"> ⚡
                        <h5> Electricians </h5>
                    </a>
                </div>
                <div class="col-md-2 fs-4">
                    <a href="" class="text-decoration-none text-dark qqq"> 🚗
                        <h5> Auto detailing </h5>
                    </a>
                </div>

                <div class="col-md-2 fs-4">
                    <a href="" class="text-decoration-none text-dark qqq" data-bs-toggle="modal" data-bs-target="#homeProjectModal">
                        <i class="bi bi-three-dots text-dark"></i>
                        <h5> more </h5>
                        <div class="modal fade" id="homeProjectModal" tabindex="-1" aria-labelledby="homeProjectModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="homeProjectModalLabel">Ready to start your next home project?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Choose a category to start creating your project</p>
                                        <div class="modal-category">
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🔧<br>Auto Repair</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🏗<br>Contractors</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">⚡<br>Electricians</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🛠<br>Handyman</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">❄️<br>Heating & AC</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🧹<br>Home Cleaning</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🌿<br>Landscaping</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🚚<br>Movers</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🎨<br>Painters</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🚰<br>Plumbers</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🐜<br>Pest Control</div>
                                            </a>
                                            <a href="" class="text-decoration-none text-dark">
                                                <div class="category-card_1">🏠<br>Roofers</div>
                                            </a>

                                        </div>
                                        <div class="text-center mt-3">
                                            <a href="#">Search for other home services</a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" disabled>Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="container mt-4">
            <h4>Make your home your happier place</h4>
            <div class="row">
                <div class="col-md-3 p-2 ">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Chicken-Soup-main-2.webp" class="card-img-top" alt="Kitchen">
                            <div class="card-body">
                                <h5 class="card-title">Upgrade the heart of your home</h5>
                                <a href="#" class="btn btn-light border-dark">Find kitchen pros</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/plumber-fixing-white-sink-pipe-with-adjustable-wrench-picture-id1150199946.jpg" class="card-img-top" alt="Landscape">
                            <div class="card-body">
                                <h5 class="card-title">Spruce up your curb appeal</h5>
                                <a href="#" class="btn btn-light border-dark">Find landscapers</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Roofing_iStock-934626558.0-1-scaled.jpg.optimal.jpg" class="card-img-top" alt="Lighting">
                            <div class="card-body">
                                <h5 class="card-title">Give your home a glow up with new lighting</h5>
                                <a href="#" class="btn btn-light border-dark">Find electricians</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Chicken-Soup-main-2.webp" class="card-img-top" alt="Bathroom">
                            <div class="card-body">
                                <h5 class="card-title">Get bathroom bliss and create a luxury space</h5>
                                <a href="#" class="btn btn-light border-dark">Find bathroom pros</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-md-3 p-2">
                <a href="">
                    <div class="card carrd">
                        <img src="images/support.png" class="card-img-top" alt="Painting">
                        <div class="card-body">
                            <h5 class="card-title">Transform a room with just one wall</h5>
                            <a href="#" class="btn btn-light border-dark">Find painters</a>
                        </div>
                    </div> </a>
                </div> -->
            </div>
        </section>

        <section class="container mt-4">
            <h4>Create a backyard retreat</h4>
            <div class="row">
                <div class="col-md-3 p-2 ">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Chicken-Soup-main-2.webp" class="card-img-top" alt="Kitchen">
                            <div class="card-body">
                                <h5 class="card-title">Upgrade the heart of your home</h5>
                                <a href="#" class="btn btn-light border-dark">Find kitchen pros</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/plumber-fixing-white-sink-pipe-with-adjustable-wrench-picture-id1150199946.jpg" class="card-img-top" alt="Landscape">
                            <div class="card-body">
                                <h5 class="card-title">Spruce up your curb appeal</h5>
                                <a href="#" class="btn btn-light border-dark">Find landscapers</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Roofing_iStock-934626558.0-1-scaled.jpg.optimal.jpg" class="card-img-top" alt="Lighting">
                            <div class="card-body">
                                <h5 class="card-title">Give your home a glow up with new lighting</h5>
                                <a href="#" class="btn btn-light border-dark">Find electricians</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Chicken-Soup-main-2.webp" class="card-img-top" alt="Bathroom">
                            <div class="card-body">
                                <h5 class="card-title">Get bathroom bliss and create a luxury space</h5>
                                <a href="#" class="btn btn-light border-dark">Find bathroom pros</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-md-3 p-2">
                <a href="">
                    <div class="card carrd">
                        <img src="images/support.png" class="card-img-top" alt="Painting">
                        <div class="card-body">
                            <h5 class="card-title">Transform a room with just one wall</h5>
                            <a href="#" class="btn btn-light border-dark">Find painters</a>
                        </div>
                    </div> </a>
                </div> -->
            </div>
        </section>

        <section class="container mt-4">
            <h4>Make sure the maintenance is maintaining</h4>
            <div class="row">
                <div class="col-md-3 p-2 ">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Chicken-Soup-main-2.webp" class="card-img-top" alt="Kitchen">
                            <div class="card-body">
                                <h5 class="card-title">Upgrade the heart of your home</h5>
                                <a href="#" class="btn btn-light border-dark">Find kitchen pros</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/plumber-fixing-white-sink-pipe-with-adjustable-wrench-picture-id1150199946.jpg" class="card-img-top" alt="Landscape">
                            <div class="card-body">
                                <h5 class="card-title">Spruce up your curb appeal</h5>
                                <a href="#" class="btn btn-light border-dark">Find landscapers</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Roofing_iStock-934626558.0-1-scaled.jpg.optimal.jpg" class="card-img-top" alt="Lighting">
                            <div class="card-body">
                                <h5 class="card-title">Give your home a glow up with new lighting</h5>
                                <a href="#" class="btn btn-light border-dark">Find electricians</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Chicken-Soup-main-2.webp" class="card-img-top" alt="Bathroom">
                            <div class="card-body">
                                <h5 class="card-title">Get bathroom bliss and create a luxury space</h5>
                                <a href="#" class="btn btn-light border-dark">Find bathroom pros</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-md-3 p-2">
                <a href="">
                    <div class="card carrd">
                        <img src="images/support.png" class="card-img-top" alt="Painting">
                        <div class="card-body">
                            <h5 class="card-title">Transform a room with just one wall</h5>
                            <a href="#" class="btn btn-light border-dark">Find painters</a>
                        </div>
                    </div> </a>
                </div> -->
            </div>
        </section>

        <section class="container mt-4">
            <h4>Get these inside projects done to keep things fresh</h4>
            <div class="row">
                <div class="col-md-3 p-2 ">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Chicken-Soup-main-2.webp" class="card-img-top" alt="Kitchen">
                            <div class="card-body">
                                <h5 class="card-title">Upgrade the heart of your home</h5>
                                <a href="#" class="btn btn-light border-dark">Find kitchen pros</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/plumber-fixing-white-sink-pipe-with-adjustable-wrench-picture-id1150199946.jpg" class="card-img-top" alt="Landscape">
                            <div class="card-body">
                                <h5 class="card-title">Spruce up your curb appeal</h5>
                                <a href="#" class="btn btn-light border-dark">Find landscapers</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Roofing_iStock-934626558.0-1-scaled.jpg.optimal.jpg" class="card-img-top" alt="Lighting">
                            <div class="card-body">
                                <h5 class="card-title">Give your home a glow up with new lighting</h5>
                                <a href="#" class="btn btn-light border-dark">Find electricians</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="" class="text-decoration-none text-dark">
                        <div class="card carrd">
                            <img src="images/Chicken-Soup-main-2.webp" class="card-img-top" alt="Bathroom">
                            <div class="card-body">
                                <h5 class="card-title">Get bathroom bliss and create a luxury space</h5>
                                <a href="#" class="btn btn-light border-dark">Find bathroom pros</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-md-3 p-2">
                <a href="">
                    <div class="card carrd">
                        <img src="images/support.png" class="card-img-top" alt="Painting">
                        <div class="card-body">
                            <h5 class="card-title">Transform a room with just one wall</h5>
                            <a href="#" class="btn btn-light border-dark">Find painters</a>
                        </div>
                    </div> </a>
                </div> -->
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>