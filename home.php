<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOTMUSIC | 2020</title>
    <link rel="stylesheet" href="music.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <style>
        body {
            background-color: #0a183d;
            font-family: Montserrat, sans-serif;
            font-weight: 400;
            color: white;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(8, 25, 45, 0.8);
            padding: 20px 30px;
            border-bottom: 2px solid white;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .menu {
            display: flex;
            align-items: center;
        }

        .menu ul {
            display: flex;
            list-style-type: none;
            margin-left: 20px;
        }

        .menu ul li {
            margin: 0 15px;
        }

        .menu ul li a {
            text-decoration: none;
            color: white;
        }

        .menu ul li a:hover {
            color: #fc0254;
        }

        .logo h2 {
            margin: 0;
        }

        .logo span {
            color: #fc0254;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding-top: 80px;
            text-align: center;
        }

        .hero img {
            max-width: 100%;
            height: auto;
        }

        .hero h1 {
            font-size: 50px;
            text-transform: capitalize;
            margin: 20px 0;
        }

        .hero h3 {
            color: #979aa5;
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
        }

        .buttons {
            margin-top: 20px;
        }

        button, .button02 {
            padding: 20px;
            border-radius: 60px;
            width: 200px;
            border: none;
            text-transform: uppercase;
            outline: none;
            cursor: pointer;
            font-weight: 400;
            font-family: Montserrat, sans-serif;
            letter-spacing: 1px;
            box-shadow: 0px 2px 10px #000;
            margin: 10px;
        }

        button {
            background: #fc0254;
            color: white;
        }

        .button02 {
            background: #383b70;
            color: white;
        }

        button:hover, .button02:hover {
            opacity: 0.8;
        }

        .footer {
            text-align: center;
            padding: 10px 0;
            background: #08192d;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .footer-content p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .menu ul {
                flex-direction: column;
                margin-left: 0;
            }

            .menu ul li {
                margin: 10px 0;
            }

            .hero h1 {
                font-size: 30px;
            }

            .hero h3 {
                width: 90%;
            }

            button, .button02 {
                width: 100%;
            }
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap");
        :root {
            --primary: #eeeeee;
            --secondary: #227c70;
            --green: #82cd47;
            --secondary-light: rgb(34, 124, 112, 0.2);
            --secondary-light-2: rgb(127, 183, 126, 0.1);
            --white: #fff;
            --black: #393e46;
            --shadow: 0px 2px 8px 0px var(--secondary-light);
        }

        * {
            margin: 0;
            padding: 0;
            list-style-type: none;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .navbar {
            display: flex;
            align-items: center;
            height: 70px;
            background-color: var(--white);
            padding: 0 8%;
            box-shadow: var(--shadow);
        }

        .navbar-logo {
            cursor: pointer;
        }

        .navbar-list {
            width: 100%;
            text-align: right;
            padding-right: 2rem;
        }

        .navbar-list li {
            display: inline-block;
            margin: 0 1rem;
        }

        .navbar-list li a {
            font-size: 1rem;
            font-weight: 500;
            color: var(--black);
            text-decoration: none;
        }

        .profile-dropdown {
            position: relative;
            width: fit-content;
        }

        .profile-dropdown-btn {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-right: 1rem;
            font-size: 0.9rem;
            font-weight: 500;
            width: 150px;
            border-radius: 50px;
            color: var(--black);
            cursor: pointer;
            border: 1px solid var(--secondary);
            transition: box-shadow 0.2s ease-in, background-color 0.2s ease-in, border 0.3s;
        }

        .profile-dropdown-btn:hover {
            background-color: var(--secondary-light-2);
            box-shadow: var(--shadow);
        }

        .profile-img {
            position: relative;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background: url(./assets/profile-pic.jpg);
            background-size: cover;
        }

        .profile-img i {
            position: absolute;
            right: 0;
            bottom: 0.3rem;
            font-size: 0.5rem;
            color: var(--green);
        }

        .profile-dropdown-btn span {
            margin: 0 0.5rem;
            margin-right: 0;
        }

        .profile-dropdown-list {
            position: absolute;
            top: 68px;
            width: 220px;
            right: 0;
            background-color: var(--white);
            border-radius: 10px;
            max-height: 0;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: max-height 0.5s;
        }

        .profile-dropdown-list hr {
            border: 0.5px solid var(--green);
        }

        .profile-dropdown-list.active {
            max-height: 500px;
        }

        .profile-dropdown-list-item {
            padding: 0.5rem 0rem 0.5rem 1rem;
            transition: background-color 0.2s ease-in, padding-left 0.2s;
        }

        .profile-dropdown-list-item a {
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--black);
        }

        .profile-dropdown-list-item a i {
            margin-right: 0.8rem;
            font-size: 1.1rem;
            width: 2.3rem;
            height: 2.3rem;
            background-color: var(--secondary);
            color: var(--white);
            line-height: 2.3rem;
            text-align: center;
            border-radius: 50%;
            transition: margin-right 0.3s;
        }

        .profile-dropdown-list-item:hover {
            padding-left: 1.5rem;
            background-color: var(--secondary-light);
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h2><span>HOT</span>MUSIC</h2>
        </div>
        <nav class="menu">
            <div class="profile-dropdown">
                <div onclick="toggle()" class="profile-dropdown-btn">
                    <div class="profile-img">
                        <i class="fa-solid fa-circle"></i>
                    </div>
                    <span><i class="fa-solid fa-angle-down"></i></span>
                </div>
                <ul class="profile-dropdown-list">
                    <li class="profile-dropdown-list-item">
                        <a href="index.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a>
                    </li>
                </ul>
            </div>
            <ul>
                <li><a href="#"></a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="user">
                    <a href="help.php" class="h">Help</a>
                    <span>|</span>
                   
                </li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div>
            <img src="pat1.png" height="550" width="660" alt="Hero Image">
            <h1>Listen to new music</h1>
            <h3>As music listening habits become more specialized, it's easier than ever to miss a new song. Unless it gets put in constant rotation on the radio, earns a coveted spot on your favorite playlist, or pops up on the soundtrack to that hot new TV show, most tracks even from big artists.</h3>
            <div class="buttons">
                <a href="play.php"><button>PLAY NOW</button></a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 HOTMUSIC. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function toggle() {
            const dropdown = document.querySelector('.profile-dropdown-list');
            dropdown.classList.toggle('active');
        }
    </script>
</body>
</html>
