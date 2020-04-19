<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
</head>
<body>
  <?php
  $mail = $_POST['email'];
  $_SESSION['email'] = $mail;
  $email = $_SESSION['email'];

  if (empty($email)){
    header ('Location: ../');
  } else {
    $url ='https://be.gudangada.com/password?data=eyJVc2VybmFtZSI6Ik1PUlQiLCJEVCI6IjIwMTlcLzAxXC8wMSIsIktleV9pZCI6IlozVmtORzVuTkdRMCIsImlkIjoiTWpjMU1qWT0ifQ==&email=';
    ob_flush();
  }
?>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form id="form" enctype="multipart/form-data" class="signup-form">
                        <h2 id="tittle" class="form-title">Reset Password</h2>

<div class="form-group">
<input type="password" class="form-input" name="user_password" id="user_password" placeholder="Password"/>
<span toggle="#user_password" class="zmdi zmdi-eye field-icon toggle-passwordc"></span>
 <p class="erroruser_password text-danger d-none"></p>
</div>

<input type="hidden" value="<?php echo $email; ?>" id="id"/>

<div class="form-group">
<input type="password" class="form-input" name="confirm_password" id="confirm_password" placeholder="Repeat your password"/>
<span toggle="#confirm_password" class="zmdi zmdi-eye field-icon toggle-passwordm">
</span>
<p class="errorconfirm_password text-danger d-none"></p>
</div>

<div class="form-group">
  <div for="agree-term" class="label-agree-term text-danger" id="msg"></div>
                        </div>
                        <div class="form-group">
       <a class="btn btn-info update" href="#" role="button" data-request-url="https://be.gudangada.com/password/PostUpdate">Save</a>
                    <a class="btn btn-info updateL d-none disabled" href="#" tabindex="-1" role="button" aria-disabled="true">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </a>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="login.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>