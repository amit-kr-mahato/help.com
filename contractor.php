<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contractor Listing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        .container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .left {
            flex: 2;
            min-width: 300px;
        }

        .right {
            flex: 1;
            min-width: 300px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .card {
            background: white;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .restaurant-img_1 {
            width: 73%;
            height: 90%;
            border-radius: 8px;
        }

        .card h2 {
            margin: 10px 0 5px;
        }

        .card .tags span {
            background: #eee;
            padding: 4px 8px;
            border-radius: 4px;
            margin-right: 4px;
            font-size: 0.85rem;
        }

        .button {
            background: #e00707;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group select,
        .form-group input {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        #map {
            height: 200px;
            width: 100%;
            margin-top: 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>


    <div class="cont_1">
        <?php
        include "navbar/navbar.php";
        ?>
    </div>
    <div id="main">
        <div class="container my-4 flet">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Restaurants</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">contractor</a></li>
                </ol>
            </nav>
        </div>
        <div class="container">
            <h1>Top 10 Best Contractors Near San Francisco, California</h1>
            <div class="d-flex gap-2 my-3">
                <button class="btn btn-outline-secondary">Price</button>
                <button class="btn btn-outline-primary">Open at 11:00 pm</button>
                <button class="btn btn-outline-secondary">Reservations</button>
                <button class="btn btn-outline-secondary">Offers Online Waitlist</button>
                <button class="btn btn-outline-secondary">Offers Delivery</button>
                <button class="btn btn-outline-secondary">Offers Takeout</button>
            </div>
        </div>

        <div class="container">
            <!-- Left Section -->
            <div class="left">
                <div class="card    mb-3 shadow-sm">
                    <div class="row box-s g-0">
                        <div class="col-md-2" style="padding-top:20px ;">
                            <img src="https://images.unsplash.com/photo-1603574670812-d24560880210?fit=crop&w=600&q=80" class="restaurant-img" alt="Hinodeya Ramen Bar">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Hinodeya Ramen Bar</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="rating-stars me-2">
                                        ★★★★★
                                    </div>
                                    <div class="text-muted ms-2 font">4.4 (57 reviews)</div>
                                </div>
                                <div class="text-muted  font">📍 Marina/Cow Hollow · <span class="text-danger fw-semibold">Closed until 10:00 AM</span></div>
                                <div class="mb-2">
                                    <span class="custom-badge me-2 font">🌱 Vegan friendly</span>
                                    <span class="text-muted font">👥 Large group friendly</span>
                                </div>
                                <div class="text-primary mb-1 font">📝 Make an Online Reservation</div>
                                <p class="card-text text-muted font">“I've been here twice and I enjoyed my ramen both times. I've been to the Japantown location a few times and had decent experiences there. I came in to…” <a href="#" class="text-decoration-none">more</a></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="tag">Ramen</span>
                                    <button class="btn btn-danger ">
                                        <i class="bi bi-calendar-event me-1 magnet"></i> Reserve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card    mb-3 shadow-sm">
                    <div class="row box-s g-0">
                        <div class="col-md-2" style="padding-top:20px ;">
                            <img src="https://images.unsplash.com/photo-1603574670812-d24560880210?fit=crop&w=600&q=80" class="restaurant-img" alt="Hinodeya Ramen Bar">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Hinodeya Ramen Bar</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="rating-stars me-2">
                                        ★★★★★
                                    </div>
                                    <div class="text-muted ms-2 font">4.4 (57 reviews)</div>
                                </div>
                                <div class="text-muted  font">📍 Marina/Cow Hollow · <span class="text-danger fw-semibold">Closed until 10:00 AM</span></div>
                                <div class="mb-2">
                                    <span class="custom-badge me-2 font">🌱 Vegan friendly</span>
                                    <span class="text-muted font">👥 Large group friendly</span>
                                </div>
                                <div class="text-primary mb-1 font">📝 Make an Online Reservation</div>
                                <p class="card-text text-muted font">“I've been here twice and I enjoyed my ramen both times. I've been to the Japantown location a few times and had decent experiences there. I came in to…” <a href="#" class="text-decoration-none">more</a></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="tag">Ramen</span>
                                    <button class="btn btn-danger ">
                                        <i class="bi bi-calendar-event me-1 magnet"></i> Reserve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card    mb-3 shadow-sm">
                    <div class="row box-s g-0">
                        <div class="col-md-2" style="padding-top:20px ;">
                            <img src="https://images.unsplash.com/photo-1603574670812-d24560880210?fit=crop&w=600&q=80" class="restaurant-img" alt="Hinodeya Ramen Bar">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Hinodeya Ramen Bar</h5>
                                <div class="d-flex align-items-center mb-2">
                                    <div class="rating-stars me-2">
                                        ★★★★★
                                    </div>
                                    <div class="text-muted ms-2 font">4.4 (57 reviews)</div>
                                </div>
                                <div class="text-muted  font">📍 Marina/Cow Hollow · <span class="text-danger fw-semibold">Closed until 10:00 AM</span></div>
                                <div class="mb-2">
                                    <span class="custom-badge me-2 font">🌱 Vegan friendly</span>
                                    <span class="text-muted font">👥 Large group friendly</span>
                                </div>
                                <div class="text-primary mb-1 font">📝 Make an Online Reservation</div>
                                <p class="card-text text-muted font">“I've been here twice and I enjoyed my ramen both times. I've been to the Japantown location a few times and had decent experiences there. I came in to…” <a href="#" class="text-decoration-none">more</a></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="tag">Ramen</span>
                                    <button class="btn btn-danger ">
                                        <i class="bi bi-calendar-event me-1 magnet"></i> Reserve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section -->
            <div class="right">
                <h3>Free quotes from local professionals</h3>
                <p>Tell us about your project and get help from sponsored businesses.</p>
                <div class="form-group">
                    <select>
                        <option>What do you need?</option>
                    </select>
                </div>
                <div class="form-group">
                    <select>
                        <option>When do you need it?</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Enter ZIP code">
                </div>
                <button class="button">Get started</button>

                <!-- Map Section -->
                <div id="map"></div>
            </div>
        </div>
    </div>

    <div class="container-1">
        <?php
        include "footer/footer.php";
        ?>

    </div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Initialize the map at the center of San Francisco
        const map = L.map('map').setView([37.7749, -122.4194], 12);

        // Set the tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Add multiple markers
        const markers = [{
                coords: [37.7749, -122.4194],
                popup: 'San Francisco City Center'
            },
            {
                coords: [37.7759, -122.4154],
                popup: 'Another Location in SF'
            }
        ];

        markers.forEach(marker => {
            L.marker(marker.coords).addTo(map)
                .bindPopup(marker.popup);
        });
    </script>


</body>

</html>