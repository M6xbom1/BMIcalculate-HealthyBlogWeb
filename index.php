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
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Template Main CSS File -->
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
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <h1>Eazy<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">BMI</a></li>
          <li><a href="#services">HEALTH</a></li>
          
          <li><a href="#team">CREATOR</a></li>
          
          <li>
            <?php 
            $success = $_SESSION['success'] ?? '';
            if( $success==true)
             { 
              echo '<a href="logout.php"><span>' . $_SESSION["username"] . ' (Logout)</span></a></li>';
             }
            
            elseif( $success==false)
             {
               echo '<a href="login.php"><span>Login/Register</span></a></li>';
              }
           ?> 
              

      
        </ul>
        
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Eazy <span>Site</span></h2>
          <p>เว็บไซต์ คำนวน BMI ของร่างกาย ที่จะช่วยดูแลสุขภาพของคุณให้ดียิ่งขึ้น!! พูดจริงไม่จอจี้นะเออ</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">คำนวน BMI</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/Doc.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-search-heart"></i></div>
              <h4 class="title"><a href="index.php#myForm" class="stretched-link">BMI</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-book"></i></div>
              <h4 class="title"><a href="index.php#team" class="stretched-link">Creator</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-heart"></i></div>
              <h4 class="title"><a href="index.php#services" class="stretched-link">HEALTH</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-person-fill"></i></div>
              <h4 class="title"><a href="me.php" class="stretched-link">ME</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>BMI คืออะไร?</h2>
          <p>BMI คือ ตัวชี้วัดมาตรฐานเพื่อประเมินสภาวะของร่างกายว่า
            มีความสมดุลของน้ำหนักตัวต่อส่วนสูงอยู่ในเกณฑ์ที่เหมาะสมหรือไม่
            ค่า BMI สามารถใช้เป็นเครื่องมือคัดกรองเพื่อระบุผู้ที่มีน้ำหนักเกิน
            หรือภาวะอ้วนและผู้ที่มีน้ำหนักต่ำกว่าเกณฑ์มาตรฐานในผู้ใหญ่ที่อายุ 20 ปีขึ้นไป</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>ดัชนีมวลกาย สำคัญอย่างไร</h3>
            <img src="assets/img/about.png" class="img-fluid rounded-4 mb-4" alt="">
            <p>การคำนวณค่าดัชนีมวลกาย นอกจากเราได้ทราบถึงรูปร่างและสัดส่วนแล้ว ยังทำให้เราทราบถึงความเสี่ยงการเกิดโรคต่างๆ ได้จริงหรือ แล้วค่าดัชนีมวลกายเป็นตัวบ่งชี้อะไรได้บ้าง จะมาไขคำตอบเกี่ยวกับเรื่องนี้
              ค่าดัชนีมวลกาย Body Mass Index หรือเรียกย่อ ๆ ว่า BMI คือ ตัวชี้วัดมาตรฐานเพื่อประเมินสภาวะของร่างกายว่า มีความสมดุลของน้ำหนักตัวต่อส่วนสูงอยู่ในเกณฑ์ที่เหมาะสมหรือไม่</p>
            <p>อย่างไรก็ตาม การแปลผลค่า BMI ในนักกีฬา นักเพาะกายที่มีมวลกล้ามเนื้อสูง หรือผู้ป่วยโรคตับ ไต ที่มีภาวะบวมน้ำ อาจมีค่า BMI สูงได้โดยที่ไม่ได้มีภาวะน้ำหนักเกินหรืออ้วนได้</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                ดัชนีมวลกาย (BMI) = น้ำหนักตัว (กิโลกรัม) / ส่วนสูง (เมตร)ยกกำลังสอง
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> ค่า BMI < 18.5 แสดงถึง อยู่ในเกณฑ์น้ำหนักน้อยหรือผอม</li>
                <li><i class="bi bi-check-circle-fill"></i> ค่า BMI 18.5 - 22.90 แสดงถึง อยู่ในเกณฑ์ปกติ</li>
                <li><i class="bi bi-dash-circle-fill"></i> ค่า BMI 23 - 24.90 แสดงถึง น้ำหนักเกิน</li>
                <li><i class="bi bi-exclamation-circle-fill"></i> ค่า BMI 25 - 29.90 แสดงถึง โรคอ้วนระดับที่ 1</li>
                <li><i class="bi bi-exclamation-circle-fill"></i> ค่า BMI 30 ขึ้นไป แสดงถึง โรคอ้วนระดับที่ 2</li>
              </ul>
              <p>
                ในกรณีที่มีค่าดัชนีมวลกายสูง และถูกวินิจฉัยว่ามีภาวะน้ำหนักเกินหรือเป็นโรคอ้วน ก็อาจทำให้เสี่ยงต่อปัญหาสุขภาพมากมาย ได้แก่ โรคความดันโลหิตสูง ระดับโคเลสเตอรอลและระดับไตรกลีเซอไรด์ในเลือดสูง โรคเบาหวานชนิดที่ 2 โรคหลอดเลือดหัวใจ โรคหลอดเลือดสมอง โรคเกี่ยวกับถุงน้ำดี โรคข้อเข่าเสื่อม ภาวะการหยุดหายใจขณะหลับหรือปัญหาในการหายใจ และโรคมะเร็งชนิดต่าง ๆ
              </p>

              <div class="position-relative mt-4">
                  <div class="md:flex md:items-center ">
                      <form class="mx-auto ... mt-4" id="myForm">
                          <div class="mb-4 mt-24">
                            <div class="mb-4 mt-4">
                              <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="height">
                                  ส่วนสูง
                              </label>
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="height" type="text" placeholder="cm.">
                            </div>
                              <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="weight">
                                  นํ้าหนัก
                              </label>
                              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="weight" type="text" placeholder="kg.">
                          </div>
                          <div class="md:flex md:items-center">
                              <div class="md:w-2/3">
                                <button class="shadow bg-green-400 hover:bg-green-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded" type="button" id="btn">
                                  คํานวณ &#8595;
                                </button>
                              </div>
                              <div class="md:w-1/3">
                                <button class="shadow bg-red-400 hover:bg-red-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-2 rounded" type="button" onclick="reset()">
                                    reset &#10005;
                                </button>
                              </div>
                          </div>
                          <br><br><br>
                          <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-4 dark:bg-gray-800 dark:border-gray-700">
                            <div id="result"></div>
                          </div>
                        </form>
              </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </section>
    <script>
        window.onload = () => {
          let button = document.querySelector("#btn");
          button.addEventListener("click", calculateBMI);
        };
        function calculateBMI() {
          let height = parseInt(document.querySelector("#height").value);
          let weight = parseInt(document.querySelector("#weight").value);
          let result = document.querySelector("#result");
          if (height === "" || isNaN(height)) 
              result.innerHTML = "";
          else if (weight === "" || isNaN(weight)) 
              result.innerHTML = "";
          else {
              let bmi = (weight / ((height * height) / 10000)).toFixed(2);
              if (bmi < 18.5) result.innerHTML =`<div class="block flex items-center font-bold"> ผอม<br>  ${bmi}<a href="BlogPage/food_blog.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คําแนะนํา</a></div>`;
              else if (bmi >= 18.6 && bmi < 22.9) 
                  result.innerHTML = `<div class="flex items-center font-bold"> ปกติ<br>  ${bmi}<a href="BlogPage/exercise_blog.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คําแนะนํา</a></div>`;
              else if (bmi >= 23 && bmi < 24.9) 
                  result.innerHTML = `<div class="flex items-center font-bold"> นํ้าหนักเกิน<br>  ${bmi}<a href="BlogPage/exercise_blog.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คําแนะนํา</a></div>`;
              else if (bmi >= 25 && bmi < 29.9)
                  result.innerHTML = `<div class="flex items-center font-bold"> โรคอ้วนระดับ 1<br>  ${bmi}<a href="BlogPage/obesity_blog.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คําแนะนํา</a></div>`;
              else{
                  result.innerHTML = `<div class="flex items-center font-bold"> โรคอ้วนระดับ 2<br>  ${bmi}<a href="BlogPage/obesity_blog.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;คําแนะนํา</a></div>`;
              }
          }
        }
        function reset(){
          document.getElementById("MyForm").reset();
        }
    </script>
 
    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>สุขภาพสำคัญอย่างไร</h2>
          <p>หากคุณมีสุขภาพร่างกายที่แข็งแรง ร่างกายของคุณจะมีภูมิต้านทานที่แข็งแรงมากยิ่งขึ้น โรคแทรกซ้อนต่าง ๆ จะเข้ามาแทรกแซงร่างกายคุณได้น้อยลง และช่วยยับยั้งการเกิดโรคร้ายแรงต่างๆ</p>
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-speedometer"></i>
              </div>
              <h3>โรคอ้วน</h3>
              <p>โรคอ้วน (Obesity) หรือภาวะน้ำหนักเกิน (Overweight) คือโรคที่มีไขมันสะสมตามส่วนต่างๆ ของร่างกายมากกว่าปกติ ส่งผลให้เกิดภาวะน้ำหนักเกินมาตรฐาน
                โรคอ้วนเป็นสาเหตุหนึ่งที่ทำให้เกิดโรคอื่นๆ เช่น โรคความดันโลหิตสูง โรคเบาหวาน โรคไขมันในเลือดผิดปกติ </p>
              <a href="BlogPage/obesity_blog.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-capsule"></i>
              </div>
              <h3>ทานอาหาร 5 หมู่</h3>
              <p>เนื่องจากร่างกายต้องการสารอาหารต่างๆที่มีอยู่ในอาหาร 
                ได้แก่ โปรตีน คาร์โบไฮเดรต ไขมัน แร่ธาตุ วิตามิน รวมทั้งน้ำและใยอาหาร 
                แต่ไม่มีอาหารชนิดใดชนิดเดียวที่ให้ สารอาหารต่างๆ ครบในปริมาณที่ร่างกายต้องการ
                จึงจำเป็นต้องกินอาหารให้ครบ 5 หมู่</p>
              <a href="BlogPage/food_blog.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <h3>ออกกำลังกาย</h3>
              <p>ออกกำลังกาย คือ การทำกิจกรรมที่ได้ออกแรงหรือเคลื่อนไหวร่างกายซึ่งมีหลากหลายรูปแบบ การออกกำลังกายอย่างสม่ำเสมอก่อให้เกิดผลดีต่อสุขภาพ โดยช่วยจัดระเบียบร่างกายและควบคุมอารมณ์ได้เป็นอย่างดี</p>
              <a href="BlogPage/exercise_blog.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
  
      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>สมาชิกในกลุ่ม</h2>
            <p>คณะผู้จัดทำเว็บไซต์</p>
          </div>
  
          <div class="row">
  
            <div class="col" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="assets/img/Creator/Jet.jpg" class="img-fluid" alt="">
                <h4>นายธนกฤต ฉัตรวิเชียร</h4>
                <span>เจ็ต</span>
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a> -->
                  <a href="https://www.facebook.com/profile.php?id=100007560886499" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/tnkitty_jet/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col" data-aos="fade-up" data-aos-delay="200">
              <div class="member">
                <img src="assets/img/Creator/Ferry.jpg" class="img-fluid" alt="">
                <h4>นายจีรกิตติ์ สีทา</h4>
                <span>เฟอร์รี่</span>
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a> -->
                  <a href="https://www.facebook.com/jeerakit.ferry" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/jeerakits/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col" data-aos="fade-up" data-aos-delay="300">
              <div class="member">
                <img src="assets/img/Creator/Pah.jpg" class="img-fluid" alt="">
                <h4>
                  นายอธิกันต์ หมู่พยัค</h4>
                <span>ภูผา</span>
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a> -->
                  <a href="https://www.facebook.com/atikan.moopayak" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/ipsbs_ati/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
                </div>
              </div>
            </div><!-- End Team Member -->
  
  
          </div>
  
        </div>
      </section><!-- End Our Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Eazy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by ทนงทวยคงควรคอย
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

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