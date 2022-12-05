<?php 
  session_start();
  include('server.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EazySite</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Eazy.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/info.css">
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="assets/css/main.css" rel="stylesheet">
  <style>
        html {
        overflow: scroll;
        overflow-x: hidden;
    }
    ::-webkit-scrollbar {
        width: 0;  /* Remove scrollbar space */
        background: transparent;  /* Optional: just make scrollbar invisible */
    }
    /* Optional: show position indicator in red */
    ::-webkit-scrollbar-thumb {
        background: #FF0000;
    } 
  </style>

</head>

<body>
 

 
  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

    <div class="info-form">
        <form class="rounded-5" action="register_db.php" method="post">

          <?php include('error.php') ?>
          <?php if(isset($_SESSION['success'])) : ?>
            <div class="error success">
              <h3>
                <?php
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                ?>
              </h3>
            </div>
          <?php endif ?>

            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" name="username" placeholder="ชื่อผู้ใช้">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" placeholder="อีเมล">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="birth-date" name="dob" placeholder="ดด-วว-ปปปป">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" name="password_1" placeholder="รหัสผ่าน">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="repassword" name="password_2" placeholder="ยืนยันรหัสผ่าน">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block submit" name="reg_user">สมัครสมาชิก</button>
            </div>
            <p>เป็นสมาชิกอยู่แล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
        </form>
    </div>
    </section>
  </main>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>