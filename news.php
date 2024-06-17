<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="music.css">
    <style>
        body {
            background-color: #0a183d;
            color: white;
            font-family: Montserrat, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Style for the back button */
        .back-button {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 10px 20px;
            background-color: #fc0254;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #e2044e;
        }

        .container {
            padding: 20px;
        }

        .blog-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .title h2 {
            margin-bottom: 20px;
        }

        .title p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .card {
            background-color: #08192d;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            max-width: 300px;
            flex: 1 1 300px;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .image-section img {
            width: 100%;
            height: auto;
            transition: transform 0.3s;
        }

        .image-section img:hover {
            transform: scale(1.05);
        }

        .content {
            padding: 20px;
        }

        .content h4 {
            margin-top: 0;
        }

        .content p {
            font-size: 14px;
            line-height: 1.6;
            margin: 10px 0;
        }

        .content a {
            display: inline-block;
            margin-top: 10px;
            color: #fc0254;
            text-decoration: none;
            font-weight: bold;
        }

        .content a:hover {
            text-decoration: underline;
        }

        .posted-date {
            padding: 0 20px 20px;
            font-size: 12px;
            color: #979aa5;
        }

        /* Style for the footer */
        .footer {
            background-color: #08192d;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            .back-button {
                padding: 8px 16px;
                font-size: 14px;
            }

            .title p {
                font-size: 16px;
            }

            .cards {
                flex-direction: column;
                align-items: center;
            }

            .card {
                max-width: 90%;
            }
        }
    </style>
    <title>Blog & News</title>
</head>
<body>
    <form action="home.php" method="POST">
        <button type="submit" class="back-button">Back</button>
    </form>

    <div class="container">
        <div class="blog-section">
            <div class="title">
                <h2>Blog&News</h2>
                <p>Music, an art form that transcends boundaries and speaks to the soul, holds a special place in the hearts of millions around the globe. Its melodies, rhythms, and harmonies have the power to evoke a wide range of emotions, from joy and excitement to nostalgia and introspection. Whether it's the pulsating beats of electronic dance music, the soothing strains of classical symphonies, or the raw energy of rock and roll, there's something for everyone in the vast and diverse landscape of music.

                In today's fast-paced world, music serves as more than just entertainment; it's a form of expression, a means of communication, and a source of inspiration. From the catchy tunes that dominate the airwaves to the underground sounds waiting to be discovered, the music industry is constantly evolving, driven by innovation and creativity. Artists push boundaries, experiment with new genres, and challenge societal norms, leaving an indelible mark on culture and society.</p>
            </div>
            <div class="cards">
                <div class="card">
                    <div class="image-section">
                        <img src="charli-xcx-george-daniel-feature.webp" alt="Charli XCX and George Daniel">
                    </div>
                    <div class="content">
                        <h4>Charli XCX Jokes She’s ‘Such a Bitch’ While Working With The 1975’s George Daniel</h4>
                        <p>In a new interview with ‘Rolling Stone U.K.,’ Charli XCX provides a glimpse into her relationship with her fiancé. By: Mike Vulpo</p>
                        <a href="https://hollywoodlife.com/2024/05/22/charli-xcx-working-with-the-1975-george-daniel/">Read more</a>
                    </div>
                    <div class="posted-date">
                        <p>Posted May 22, 2024 3:33PM</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image-section">
                        <img src="h1.jpg" alt="Image of girl">
                    </div>
                    <div class="content">
                        <h4>Hailey Bieber's Pregnancy Style Will Have You Saying Baby, Baby, Baby, Oh</h4>
                        <p>Pregnant Hailey Bieber has combined her Y2K-influenced style with maternity fashion as she prepares to welcome her first baby with husband Justin Bieber. See all the pregnancy looks she's worn so far.</p>
                        <a href="https://www.eonline.com/news/1402394/hailey-biebers-pregnancy-style-will-have-you-saying-baby-baby-baby-oh">Read more</a>
                    </div>
                    <div class="posted-date">
                        <p>By GABRIELLE CHUNG JUN 03, 2024 12:00 AM</p>
                    </div>
                </div>
                <div class="card">
                    <div class="image-section">
                        <img src="ent1-main.jpg" alt="Image of girl">
                    </div>
                    <div class="content">
                        <h4>Ai-Ai delas Alas explains why she quit managing Ex Battalion</h4>
                        <p>28 May – Ai-Ai delas Alas recently admitted that it was the unprofessionalism shown by Ex Battalion which caused her to cut ties with the group as their manager after only a year.
</p>
                        <a href="https://sg.news.yahoo.com/ai-ai-delas-alas-explains-033200016.html">Read more</a>
                    </div>
                    <div class="posted-date">
                        <p>The Hive Asia
Updated 27 May 2019

</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        &copy; 2024 HOTMUSIC. All rights reserved.
    </footer>
</body>
</html>
