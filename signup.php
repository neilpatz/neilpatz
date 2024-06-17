<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
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

     <form action="signup-check.php" method="post" onsubmit="return validateForm();">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input type="text" 
                name="name" 
                placeholder="Name"
                value="<?php echo $_GET['name']; ?>"><br>
        <?php }else{ ?>
            <input type="text" 
                name="name" 
                placeholder="Name"><br>
        <?php }?>

        <label>Username</label>
        <?php if (isset($_GET['uname'])) { ?>
            <input type="text" 
                name="uname" 
                placeholder="User Name"
                value="<?php echo $_GET['uname']; ?>"><br>
        <?php }else{ ?>
            <input type="text" 
                name="uname" 
                placeholder="Username"><br>
        <?php }?>

        <label>Password</label>
        <input type="password" 
            name="password" 
            placeholder="Password"><br>

        <label>Re-enter Password</label>
        <input type="password" 
            name="re_password" 
            placeholder="Re-enter Password"><br>

        <!-- Google reCAPTCHA -->
        <div class="g-recaptcha" data-sitekey="6LdmUO8pAAAAAIT2x9bkhBp6lBtFSV67EMdGB6GN"></div><br>

        <button type="submit">Sign Up</button>
        <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>
