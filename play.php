<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style3.css">
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

    /* Style for the search bar */
    .search-container {
      position: fixed;
      top: 10px;
      right: 230px; /* Adjust as needed */
      display: flex;
    }

    .search-container input[type=text] {
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 16px;
      margin-right: 10px;
    }

    .search-container button {
      padding: 10px;
      border-radius: 5px;
      background-color: #509bf5;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
    }

    /* Style for the music player */
    .music-player {
      position: fixed;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #333;
      color: white;
      padding: 20px;
      border-radius: 10px;
      display: flex;
      align-items: center;
    }

    .music-player button {
      background-color: #509bf5;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      padding: 10px;
      margin: 0 10px;
      border-radius: 5px;
    }

    .music-player button i {
      font-size: 20px;
    }
  </style>
  <title>Music Player</title>
</head>
<body>
  <form action="home.php" method="POST">
    <button type="submit" class="back-button">Back</button>
  </form>

  <div class="search-container">
  <input type="text" id="searchInput" placeholder="Search for music..." style="color: #000; background-color: #fff;">
  <button type="button" onclick="searchMusic()">Search</button>
</div>

  <div class="sidebar">
    <div class="logo">
      <a href="#">
        <img src="profile1.jpg" alt="Logo" />
      </a>
    </div>
    
    <div class="policies">
      <ul>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>

  <div class="main-container">
    <div class="topbar"></div>

    <div class="spotify-playlists">
      <h2>HOTMUSIC Playlists</h2>

      <div class="list">
        <div class="item">
          <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRP7HAX2vu_2phqxjOkxwrkzKKNb83585QiJnlMI76VxAq3ykL9" />
          <div class="play">
            <span class="fa fa-play"></span>
            <audio src="yt1s.com - Zack Tabudlo  Nangangamba Lyric Video.mp3"></audio>
          </div>
          <h4>Nangangamba</h4>
          <p>Zack Tabudlo OPM Artist</p>
        </div>
      </div>

      <div class="list">
        <div class="item">
          <img src="justin bieber1.jpg" />
          <div class="play">
            <span class="fa fa-play"></span>
            <audio src="Justin Bieber - Baby ft. Ludacris (128).mp3"></audio>
          </div>
          <h4>Baby</h4>
          <p>Justin Bieber</p>
        </div>
      </div>

      <div class="list">
        <div class="item">
          <img src="the19751.jpg" />
          <div class="play">
            <span class="fa fa-play"></span>
            <audio src="Y2meta.app - The 1975 ~ It's Not Living (If It's Not With You) Lyrics (128 kbps).mp3"></audio>
          </div>
          <h4>It's Not Living (If It's Not With You)</h4>
          <p>The 1975</p>
        </div>
      </div>

      <div class="list">
        <div class="item">
          <img src="https://i.pinimg.com/564x/2a/a8/88/2aa888c24b0f235667336eafbb8dfd26.jpg" />
          <div class="play">
            <span class="fa fa-play"></span>
            <audio src="Y2meta.app - Hayaan Mo Sila - Ex Battalion (Lyrics) -Kalimutan mo na yan, Sige-sige maglibang- (128 kbps).mp3"></audio>
          </div>
          <h4>Hayaan Mo Sila</h4>
          <p>Ex Battalion</p>
        </div>
      </div>

      <div class="list">
        <div class="item">
          <img src="rob deniel.jpg" />
          <div class="play">
            <span class="fa fa-play"></span>
            <audio src="Y2meta.app - Miss Miss - Rob Deniel (Official Music Video) (128 kbps).mp3"></audio>
          </div>
          <h4>Miss Miss</h4>
          <p>Rob Deniel</p>
        </div>
      </div>

      <div class="list">
        <div class="item">
          <img src="smash mouth.jpg" />
          <div class="play">
            <span class="fa fa-play"></span>
            <audio src="yt1s.com - Smash Mouth  All Star Lyrics.mp3"></audio>
          </div>
          <h4>All Star</h4>
          <p>Smash Mouth</p>
        </div>
      </div>

      <div class="list">
        <div class="item">
          <img src="camila.jpg" />
          <div class="play">
            <span class="fa fa-play"></span>
            <audio src="Camila Cabello - Havana (Audio) ft. Young Thug_HCjNJDNzw8Y.mp3"></audio>
          </div>
          <h4>Havana</h4>
          <p>Camila Cabello</p>
        </div>
      </div>

      <!-- More playlist items -->

       <div class="youtube-videos">
      <div class="youtube-video">
        <iframe src="https://www.youtube.com/embed/3tmd-ClpJxA" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="youtube-video">
        <iframe src="https://www.youtube.com/embed/kJQP7kiw5Fk" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="youtube-video">
        <iframe src="https://www.youtube.com/embed/2Vv-BfVoq4g" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="youtube-video">
        <iframe src="https://www.youtube.com/embed/fRh_vgS2dFE" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="youtube-video">
        <iframe src="https://www.youtube.com/embed/YQHsXMglC9A" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>


    </div>
  </div>

  <html>
  <head>
    <title>Audio Player</title>

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
   <style>
     body {
  height: 100%;
  background: linear-gradient(to right, #f7971e, #ffd200);
  color: white;
}

.clearfix {
  clear: both;
}

.module-border-wrap {
  background-color: white;
  width: 42%;
  padding: 5px;
  margin: 30px auto;
  border-radius: 10px;
}

.container {
  width: 99%;
  background: linear-gradient(to right, #000000, #434343);
  margin: 0px auto;
  padding: 0px;
  border-radius: 10px;
}

#audioplayer {
  padding: 15px;
}

#audioimg {
  overflow: hidden;
  height: 200px;
  margin-bottom: 20px;
  border-radius: 10px;
}

#audioimg img {
  position: relative;
  top: -40px;
}

#info {
  text-align: center;
  margin-bottom: 20px;
}

#info .artist {
  font-weight: bold;
}

.cover {
  width: 100%;
  z-index: 1;
}

#vol {
  padding: 10px;
}

.glyphicon-volume-up {
  font-size: 30px;
}

#volume {
  position: relative;
  top: -15px;
  width: 80%;
  background: grey;
  height: 2px;
  margin: 0px auto;
  margin-bottom: 20px;
}

#audiobuttons {
  width: 63%;
  margin: 15px auto;
  overflow: auto;
  margin-bottom: 20px;
  display: flex;
  justify-content: center;
}

#playbtn {
  border: none;
  width: 70px;
  height: 70px;
  background: url('img/play.png') no-repeat;
  float: left;
}

#pausebtn {
  border: none;
  width: 70px;
  height: 70px;
  background: url('img/pause.png') no-repeat;
  float: left;
}

#stopbtn {
  border: none;
  width: 70px;
  height: 70px;
  background: url('img/stop.png') no-repeat;
  float: left;
}

#prevbtn {
  margin-top: 20px;
  border: none;
  width: 70px;
  height: 70px;
  background: url('img/prev.png') no-repeat;
  float: left;
}

#nextbtn {
  margin-top: 20px;
  border: none;

  width: 70px;
  height: 70px;
  background: url('img/next.png') no-repeat;
  float: left;
  margin-left: 15px;
}

#stopbtn:focus,
#playbtn:focus,
#pausebtn:focus,
#prevbtn:focus,
#nextbtn:focus {
  outline: none;
}

#playlisthead {
  margin-top: 15px;
  text-align: center;
  font-weight: bold;
  padding: 0px;
}

#playlist {
  list-style: none;
  padding: 10px;
}

#playlist li {
  cursor: pointer;
  margin: 5px;
}

#tracker {
  position: relative;
  width: 100%;
}

#progressbar {
  width: 83%;
  margin-left: 2%;
  margin-bottom: 30px;
  margin-top: 9px;
  height: 10px;
  background: url('img/progress_bg.png') no-repeat;
  background-size: cover;
  float: left;
}

#progress {
  background: url('img/progress.png') no-repeat;
  background-size: cover;
  height: 9px;
  display: inline-block;
  position: absolute;
  top: 10px;
  left: 11px;
}

#duration {
  position: absolute;
  top: 0;
  right: 10px;
  padding: 4px 8px;
  background: black;
  border-radius: 5px;
}

.active {
  font-weight: bold;
  padding: 3px;
  background: gray;
}

   </style>
  </head>


  <body>


    <div class="module-border-wrap">
      <div class="container">
        <div id="audioimg">
          <img class="cover" />
        </div>

        <div id="audioplayer">
          <div id="info">
            <span class="artist"></span>-<span class="title"></span>
          </div>
          <div id="tracker">
            <div id="progressbar">
              <span id="progress"></span>
            </div>

            <span id="duration"></span>
          </div>

          <br />
          <div id="audiobuttons">
            <button id="prevbtn"></button>
            <button id="playbtn"></button>
            <button id="stopbtn"></button>
            <button id="nextbtn"></button>
          </div>

          <div class="clearfix"></div>
          <div id="vol">
            <span
              class="glyphicon glyphicon-volume-up"
              aria-hidden="true"
            ></span>
            <input id="volume" type="range" min="0" max="10" value="5" />
          </div>
          <div class="clearfix"></div>

          <p id="playlisthead">Playlist</p>
          <ul id="playlist">
            <li
              song="media/Castle.mp3"
              cover="cover.jpg"
              artist="N3WPORT feat. Leila Pari"
            >
              Castle.mp3
            </li>
            <li
              song="media/Dancing On The Moon.mp3"
              cover="cover.jpg"
              artist="Unknwon Brain feat. Luke Burr"
            >
              Dancing On The Moon.mp3
            </li>
            <li
              song="media/The Revolution.mp3"
              cover="cover.jpg"
              artist="Egzod & Neoni"
            >
              The Revolution.mp3
            </li>

             <li
              song="Y2meta.app - Hayaan Mo Sila - Ex Battalion (Lyrics) -Kalimutan mo na yan, Sige-sige maglibang- (128 kbps).mp3"
              cover="cover.jpg"
              artist="Egzod & Neoni"
            >
              Y2meta.app - Hayaan Mo Sila - Ex Battalion (Lyrics) -Kalimutan mo na yan, Sige-sige maglibang- (128 kbps).mp3
            </li>

             <li
              song="media/The Revolution.mp3"
              cover="cover.jpg"
              artist="Egzod & Neoni"
            >
              The Revolution.mp3
            </li>

             <li
              song="media/The Revolution.mp3"
              cover="cover.jpg"
              artist="Egzod & Neoni"
            >
              The Revolution.mp3
            </li>
          </ul>
        </div>
      </div>
    </div>

    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>

    <script src="audio.js" type="text/javascript"></script>
  </body>
</html>


  <script src="https://kit.fontawesome.com/23cecef777.js" crossorigin="anonymous"></script>

  <script>
    // Get all play buttons
    var playButtons = document.querySelectorAll('.play');

    // Variable to keep track of the current playing song
    var currentPlayingIndex = -1;
    var currentAudio = null;

    // Add click event listener to each play button
    playButtons.forEach(function(playButton, index) {
      playButton.addEventListener('click', function() {
        if (currentAudio && !currentAudio.paused) {
          currentAudio.pause();
          document.querySelector('.fa-pause').classList.add('fa-play');
          document.querySelector('.fa-pause').classList.remove('fa-pause');
        }
        currentAudio = this.querySelector('audio');
        if (currentAudio.paused) {
          currentAudio.play();
          this.querySelector('.fa').classList.remove('fa-play');
          this.querySelector('.fa').classList.add('fa-pause');
          currentPlayingIndex = index;
        } else {
          currentAudio.pause();
          this.querySelector('.fa').classList.remove('fa-pause');
          this.querySelector('.fa').classList.add('fa-play');
          currentPlayingIndex = -1;
        }
      });
    });

    // Function to handle music search
    function searchMusic() {
      var input = document.getElementById('searchInput');
      var filter = input.value.toUpperCase();
      var lists = document.getElementsByClassName('list');
      for (var i = 0; i < lists.length; i++) {
        var item = lists[i].getElementsByClassName('item')[0];
        var h4 = item.getElementsByTagName("h4")[0];
        var txtValue = h4.textContent || h4.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          lists[i].style.display = "";
        } else {
          lists[i].style.display = "none";
        }
      }
    }

    // Music player controls
    document.getElementById('prevBtn').addEventListener('click', function() {
      if (currentPlayingIndex > 0) {
        playButtons[--currentPlayingIndex].click();
      }
    });

    document.getElementById('playBtn').addEventListener('click', function() {
      if (currentAudio && currentAudio.paused) {
        currentAudio.play();
        this.innerHTML = '<i class="fa fa-pause"></i>';
      } else if (currentAudio && !currentAudio.paused) {
        currentAudio.pause();
        this.innerHTML = '<i class="fa fa-play"></i>';
      }
    });

    document.getElementById('nextBtn').addEventListener('click', function() {
      if (currentPlayingIndex < playButtons.length - 1) {
        playButtons[++currentPlayingIndex].click();
      }
    });
  </script>
</body>
</html>
