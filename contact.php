<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style23.css" />
    <style>
        /* Style for the back button */
        .back-button {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 20px;
            border-radius: 60px;
            width: 200px;
            background: #fc0254;
            color: white;
            border: none;
            text-transform: uppercase;
            outline: none;
            cursor: pointer;
            font-weight: 400;
            font-family: Montserrat, sans-serif;
            letter-spacing: 1px;
            box-shadow: 0px 2px 10px #000;
        }

        body {
            position: relative;
            margin-bottom: 100px; /* Adjust the margin to prevent overlap */
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            color: white;
        }
    </style>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
        <div class="contact-info">
            <h3 class="title">Contact us</h3>
            <p class="text"></p>

            <div class="info">
                <div class="information">
                    <img src="img/location.png" class="icon" alt="" />
                    <p>Poblacion, Claveria - Misamis Oriental PH 9000</p>
                </div>
                <div class="information">
                    <img src="img/email.png" class="icon" alt="" />
                    <p>neilpatz05@gmail.com</p>
                </div>
                <div class="information">
                    <img src="img/phone.png" class="icon" alt="" />
                    <p>+63 985 151 2574</p>
                </div>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61560430713514&mibextid=ZbWKwL">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://x.com/NeilNeilpatz05">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCijmp6i_oSAbx6_OZLoWStg">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="home.php" autocomplete="off">
                <h3 class="title">Get to know us</h3>
                <p><font color="white"> On our music website offers a glimpse into the passionate team behind the scenes. Learn about the individuals shaping your musical experience, their expertise, and the shared vision driving our platform.</p>
                <div class="input-container">
                    <form action="home.php" method="POST">
                        <button type="submit" class="back-button">Back</button>
                    </form>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024 HOTMUSIC. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
