<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style>
    .genre-section {
  display: flex;
  justify-content: center;
  align-items: center;
}

.genre {
  margin: 10px;
}

.genre a {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-decoration: none;
  color: #333;
}

.genre img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
}

.genre span {
  margin-top: 5px;
}


  </style>

</head>

<body>
<div class="genre-section">
  <div class="genre">
    <a href="#">
      <img src="classic-icon.png" alt="Classic">
      <span>Classic</span>
    </a>
  </div>
  <div class="genre">
    <a href="#">
      <img src="hiphop-icon.png" alt="Hip-Hop">
      <span>Hip-Hop</span>
    </a>
  </div>
  <div class="genre">
    <a href="#">
      <img src="opm-icon.png" alt="OPM">
      <span>OPM</span>
    </a>
  </div>
</div>
</body>
</html>