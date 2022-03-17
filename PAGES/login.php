<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="With MedCRAN, your hospital and customers are safe, you are always comfortable. Discover Packages That Are Right For You, Plus 50% Discount For The First 5 Months!">
            <meta name="keywords" content="Hospital Automation, Hospital Systems, Patient Security, Patient Happiness, Bookkeeping, Accounting Software">
            <meta name="author" content="Mehmet Mert Gunduz">
            <link rel="stylesheet" href="../STYLES/typography.css">
            <link rel="stylesheet" href="../STYLES/stylesheet.css">
            <link rel="shortcut icon" href="../IMAGES/MedCRAN_Logo.svg" type="image/x-icon">
            <title>MedCRAN</title>
      </head>
      <body>
            <header class="index-header">
                  <div class="logo-div">
                        <a id="clickable-logo" href="index.php">
                              <img width="100" src="../IMAGES/MedCRAN_LogoWhite.svg" alt="">
                              <h1>MedCRAN</h1>
                        </a>
                  </div>
                  <div class="header-inputs">
                        <div class="search-input-div">
                              <input id="search-textbox" placeholder="MedCRAN Engine..." type="text" name="donate-textbox">
                              <a id="search-button" href="#"><img src="../IMAGES/MedCRAN_SearchLogo.svg" alt="Search Icon"></a>
                        </div>
                        <a href="login.php"><input id="login-button" type="button" name="login-button" value="Log In"></a>
                  </div>
            </header>

            <main class="login-main">
                  <h1 class="h1-purple-text font-weight-300">LOGIN</h1>
                  <form id="login-form" action="../SERVER/login_form_script.php" method="POST">
                        <input type="text" placeholder="Identity Number" name="identity-number">
                        <input type="text" placeholder="Password" name="password">
                        <input type="button" value="Log In">
                        <a href="register.php"><input type="button" value="Create An Account"></a>
                  </form>
            </main>
            
            <!-- FOOTER START -->
            <footer>
                  <img id="footer-img" width="100" src="../IMAGES/MedCRAN_Logo.svg" alt="Tails Logo">
                  <h3 id="mail-text" class="h3-purple-text font-weight-300">contact@medcran.com</h3>
            </footer>
            <!-- FOOTER END -->
      </body>
</html>