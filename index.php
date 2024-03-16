<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="popup.css">
</head>

<body>
  <div class="blurry-background">
    <div class="popup-container" id="popup-container">
      <div class="popup">
        <h3>Dear User! Please Login/SignUp.</h3>
        <div class="cont2">
          <div class="login">
            <a href="http://localhost/Hackathon/login2.php">Login</a>
          </div>
          <div class="signup">
            <a href="signup.php">SignUp</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Select the popup container
      var popupContainer = document.getElementById("popup-container");

      // Make the popup visible
      popupContainer.style.display = "flex";
    });

  </script>
</body>

</html>