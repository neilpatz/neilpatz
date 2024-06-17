<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Help - Music Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #351db9;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: relative;
        }
        header .logo {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
        }
        header .logo a {
            color: white;
            text-decoration: none;
        }
        header .logo span.hot {
            color: red;
        }
        .search-bar {
            margin: 20px auto;
            text-align: center;
        }
        .search-bar input[type="text"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .faq-section {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .faq-section h2 {
            color: #333;
        }
        .faq-section .faq-item {
            margin-bottom: 20px;
        }
        .faq-section .faq-item h3 {
            margin: 0;
            font-size: 18px;
            color: #1db954;
        }
        .faq-section .faq-item p {
            margin: 5px 0 0 0;
            color: #555;
        }
        footer {
            background-color: #351db9;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        footer a {
            color: #1db954;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <a href="home.php"><span class="hot">HOT</span>MUSIC</a>
    </div>
    <h1>Help Center</h1>
</header>

<div class="search-bar">
    <input type="text" placeholder="Search for help topics...">
</div>

<div class="faq-section">
    <h2>Frequently Asked Questions</h2>
    <div class="faq-item">
        <h3>How do I create a playlist?</h3>
        <p>To create a playlist, go to your library, click on 'Create Playlist', and start adding your favorite songs.</p>
    </div>
    <div class="faq-item">
        <h3>How do I find my saved songs?</h3>
        <p>Your saved songs can be found in the 'Liked Songs' section of your library.</p>
    </div>
    <div class="faq-item">
        <h3>How do I upgrade to premium?</h3>
        <p>To upgrade to premium, go to the 'Premium' section and choose a plan that suits you best.</p>
    </div>
</div>

<footer>
    <a href="home.php">Home</a>
    <a href="#">Browse</a>
    <a href="#">Your Library</a>
    <a href="#">Premium</a>
</footer>

</body>
</html>
