<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Music Website</title>
  <meta name="description" content="Welcome to our About Us page! Learn more about our mission, team, and passion for music.">
  <link rel="stylesheet" href="music.css">
  <style>
    /* General Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #0a183d;
      color: white;
      margin: 0;
      padding: 0;
    }

    a {
      color: #ff4081;
      text-decoration: none;
    }

    /* Style for the back button */
    .back-button {
      position: fixed;
      top: 10px;
      right: 10px;
      background-color: #fc0254;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .back-button:hover {
      background-color: #e73370;
    }

    /* Hover effect and animation for the images */
    img:hover {
      transform: scale(1.1); /* Scale up the image on hover */
      transition: transform 0.5s;
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
      background-color: #001122;
      padding: 10px 0;
    }

    .footer-content {
      margin: 0 auto;
    }

    /* About Us section styles */
    .about-us {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      text-align: justify;
      background-color: #001122;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .about-us h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .about-us img {
      display: block;
      margin: 20px auto;
      width: 50%;
      border-radius: 10px;
    }

    /* New Sections */
    .section {
      max-width: 800px;
      margin: 50px auto;
      padding: 20px;
      text-align: justify;
      background-color: #001122;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .section h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .contact-form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 10px;
      border: none;
      border-radius: 5px;
    }

    .contact-form button {
      background-color: #ff4081;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .contact-form button:hover {
      background-color: #e73370;
    }
  </style>
</head>
<body>

  <form action="home.php" method="POST">
    <button type="submit" class="back-button">Back</button>
  </form>

  <section class="about-us">
    <h2>About HOTMUSIC</h2>
    <p>HOTMUSIC is a passionate music streaming platform dedicated to providing listeners with a seamless and enjoyable experience. We believe that music has the power to connect people, uplift spirits, and inspire creativity. Our mission is to offer a vast library of music, from established artists to up-and-coming talents, catering to diverse musical tastes.</p>
    <img src="girl.jpeg" alt="About Us Image">
    <p>Our team is a group of music enthusiasts with a combined passion for technology and user experience. We strive to continuously improve HOTMUSIC and provide the best possible service to our users.</p>
    <img src="144.jpg" alt="About Us Image">
  </section>

  <section class="section">
    <h2>Our Services</h2>
    <p>At HOTMUSIC, we offer a range of services to enhance your music streaming experience:</p>
    <ul>
      <li>Vast library of songs from various genres and artists.</li>
      <li>Personalized playlists and recommendations.</li>
      <li>High-quality audio streaming.</li>
      <li>Offline listening capabilities.</li>
      <li>Exclusive releases and early access to new tracks.</li>
    </ul>
  </section>

  <section class="section">
    <h2>Contact Us</h2>
    <p>Have questions or feedback? Reach out to us!</p>
    <form class="contact-form" action="contact.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <footer class="footer">
    <div class="footer-content">
      <p>&copy; 2024 HOTMUSIC. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
