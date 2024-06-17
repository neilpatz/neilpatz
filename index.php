<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function validateForm() {
      var recaptchaResponse = grecaptcha.getResponse();
      if (recaptchaResponse.length === 0) {
        alert("Please confirm the reCAPTCHA");
        return false;
      }
      return true;
    }
  </script>
</head>
<body class="background">

  <form action="login.php" method="post" onsubmit="return validateForm()" style="background-position: right;">
    <h2>LOGIN</h2>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>Username</label>
    <input type="text" name="uname" placeholder="Username"><br>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <div class="g-recaptcha" data-sitekey="6LdmUO8pAAAAAIT2x9bkhBp6lBtFSV67EMdGB6GN"></div><br>

    <button type="submit">Login</button>
    <a href="signup.php" class="ca">Create an account</a>

  </form>
</body>
</html>
