<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Help Business Promo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* body{
            background-color: #343F4F;
        } */
        .promo-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
        }

        .promo-text {
            max-width: 50%;
        }

        .promo-text h1 {
            font-size: 70px;
            font-weight: 700;
        }

        .promo-image {
            position: relative;
            max-width: 45%;
        }

        .message-box,
        .message-box_1 {
            position: absolute;
            background: white;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);

        }

        .message-box-2 {
            position: absolute;
            background: white;
            border-radius: 10px;

            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .message-box {
            top: 10px;
            left: -110px;

        }

        .message-box-2 {
            top: 100px;

            left: -110px;
        }

        .message-box_1 {
            bottom: 16px;
            right: 10px;
        }

        .verify-btn {
            background: red;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .wrapper {
            display: flex;
        }

        .wrapper .static-txt {
            color: #fff;
            font-size: 60px;
            font-weight: 400;
        }

        .wrapper .dynamic-txts {
            margin-left: 15px;
            height: 90px;
            line-height: 90px;
            overflow: hidden;
        }

        .dynamic-txts li {
            list-style: none;
            color: #FC6D6D;
            font-size: 60px;
            font-weight: 500;
            position: relative;
            top: 0;
            animation: slide 12s steps(4) infinite;
        }

        @keyframes slide {
            100% {
                top: -360px;
            }
        }

        .dynamic-txts li span {
            position: relative;
            margin: 5px 0;
            line-height: 90px;
        }

        .dynamic-txts li span::after {
            content: "";
            position: absolute;
            left: 0;
            height: 100%;
            width: 100%;
            /* background: #343F4F; */
            border-left: 2px solid #FC6D6D;
            animation: typing 1s steps(10) infinite;
        }

        @keyframes typing {

            100% {
                left: 100%;
                margin: 0 -35px 0 35px;
            }
        }
    </style>
</head>

<body>
    <div class="contt ">
        <?php
        include "navbar/navbar.php";
        ?>
    </div>

    <div class="container promo-container">
        <div class="promo-text">
            <h1>It's free to be on Yelp</h1>
            <ul class="list-unstyled fs-3">
                <li>✅ 34% of Nelp users have an annual household income of $1000 or more</li>
                <li>✅ 73% of users hire or buy from a business they found on Nelp</li>

            </ul>
            <p><strong class="fs-5">Get found on Nelp for free today!</strong></p>
            <button class="verify-btn fw-bolder"><a href="claim.php" class="text-light text-decoration-none">Verify my free listing</a></button>
        </div>

        <div class="promo-image position-relative">
            <img src="images/homepage-hero-florist-woman (1).webp" class="img-fluid rounded" alt="Business Owner" style="width: 80%;height:60%;">
            <div class="message-box">
                <strong>Message from Abby:</strong><br>
                Do you offer a flower delivery service?
            </div>
            <div class="message-box-2">
                <strong>Bloom & Co:</strong><br>
                Yes we do,How can we help?
            </div>
            <div class="message-box_1">
                Bloom & Co did an AMAZING job with our arrangement order!
            </div>
        </div>
    </div>

    <div class="container" style="background-color: antiquewhite; height:180px;border-radius:20px;text-align: center;padding-top:70px;">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="wrapper">
                        <div class="static-txt text-dark">Join the millions of other</div>
                        <ul class="dynamic-txts">
                            <li><span>YouTuber</span></li>
                            <li><span>Designer</span></li>
                            <li><span>Developer</span></li>
                            <li><span>Freelancer</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>