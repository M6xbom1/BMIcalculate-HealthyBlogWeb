<?php 
session_start();



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
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->

  <header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <a href="../index.php" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <h1>Eazy<span>.</span></h1>
  </a>
  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li></li>
        <?php 
        $success = $_SESSION['success'] ?? '';
        if( $success==true)
         { 
          echo '<a href="../logout.php"><span>' . $_SESSION["username"] . ' (Logout)</span></a></li>';
         }
        
        elseif( $success==false)
         {
           echo '<a href="../login.php"><span>Login/Register</span></a></li>';
          }
       ?> 
          

  
    </ul>
    
  </nav><!-- .navbar -->

  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header><!-- End Header -->
<!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>อาหาร 5 หมู่มีประโยชน์</h2>
              <p>การกินอาหารให้ครบ 5 หมู่นั้นเป็นสิ่งที่ควรทําอย่างยิ่งเพราะ การกินอาหารให้ครบ 5 หมู่นั่นจะช่วยให้ร่างกายได้รับสารอาหารที่ครบถ้วน อีกทั้งยังมีประโยชน์อื่นๆอีกมากมายมาให้ผู้อ่านได้อ่านกันครับ</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="../index.php#services">หน้าหลัก</a></li>
            <li>อาหาร 5 หมู่มีประโยชน์</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-md-2"></div>
          <div class="col-md-8">

            <article class="blog-details">

              <div class="post-img">
                <img src="../assets/img/blog_food/food0.jpg" class="img-fluid rounded mx-auto d-block" alt="">
              </div>

              <h2 class="title">อาหาร 5 หมู่มีประโยชน์</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">EazySite</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2020-11-20">Nov 21, 2022</time></a></li>
                  
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p class="fw-bold fs-6">
                  <u>ทำไมถึงต้องกินอาหารครบ 5 หมู่</u>
                  เนื่องจากร่างกายต้องการสารอาหารต่างๆที่มีอยู่ในอาหาร 
                  ได้แก่ โปรตีน คาร์โบไฮเดรต ไขมัน แร่ธาตุ วิตามิน รวมทั้งน้ำและใยอาหาร 
                  แต่ไม่มีอาหารชนิดใดชนิดเดียวที่ให้ สารอาหารต่างๆ ครบในปริมาณที่ร่างกายต้องการ
                  จึงจำเป็นต้องกินอาหารให้ครบ 5 หมู่ และกินแต่ละหมู่ให้หลากหลายจึงจะได้สารอาหารต่างๆ 
                  ครบถ้วนและเพียงพอ
                </p>

                <p>
                  <b class="fs-5">ประโยชน์และชนิดอาหารของแต่ละหมู่</b><br><br>
                    หมู่ที่ 1 นม ไข่ เนื้อสัตว์ต่างๆ ถั่วเมล็ดแห้ง และงา ซึ่งจะช่วยให้ร่างกายเจริญเติบโต แข็งแรง และช่วยซ่อมแซม ส่วนที่สึกหรอ<br>
                    หมู่ที่ 2 ข้าว แป้ง เผือกมัน น้ำตาล ให้พลังงานแก่ร่างกาย<br>
                    หมู่ที่ 3 พืชผัก ต่างๆ เพื่อเสริมสร้างการทำงานของร่างกายให้เป็นปกติ<br>
                    หมู่ที่ 4 ผลไม้ต่างๆ ให้ประโยชน์ เช่นเดียวกับหมู่ที่ 3<br>
                    หมู่ที่ 5 น้ำมันและไขมันจากพืชและสัตว์ ซึ่งจะให้พลังงานและความอบอุ่นแก่ร่างกาย<br>
                </p>

                <img src="../assets/img/blog_food/food1.jpg" class="img-fluid rounded mx-auto d-block" alt=""><br><br>

                
                <br>
                <p class="fw-bold fs-5">
                  พฤติกรรมที่ควรทําเกี่ยวกับการรับประทานอาหาร<br>
                </p>

                <p>
                  <b>1.กินอาหารเช้า</b><br>
                  นั่นเป็นเพราะอาหารมื้อเช้าเป็นมื้อที่สำคัญที่สุด เพราะจะส่งผลต่อจิตใจและพลังชีวิตที่เราจะต้องเผชิญกับภารกิจไปจนตลอดวันอีกทั้งยัง จะช่วยลดระดับคอเลสเตอรอลในเส้นเลือด รวมทั้งลดอัตราการเสี่ยงต่อการเกิดโรคหัวใจอีกด้วย
                </p>
                
                <p>
                  <b>2.กินปลา</b><br>
                  พยายามจัดสรรเมนูปลา ถ้าสามารถรับประทานได้ทุกวันก็จะยิ่งดี โดยเฉพาะปลาทะเลน้ำลึก เพื่อร่างกายจะได้รับกรดไขมันโอเมก้า 3 และโปรตีน ซึ่งจะไปเสริมสร้างเซลล์สมอง ปลายังเป็นเนื้อสัตว์ที่ย่อยง่าย ไขมันน้อย
                </p>
                  
                <p>
                  <b>3.ผักสารพัดสี</b><br>
                  ผักสีๆ อย่างเช่น สีส้มของแครอท สีแดงของมะเขือเทศ สีเขียวของบรอกโคลี สีม่วงขององุ่น เป็นต้น สีของผักแต่ละชนิด บ่งบอกถึงคุณค่าของสารอาหารที่แตกต่างกัน ดังนั้น การรับประทานผักเวียนไปให้ครบทุกสี 
                  โดยไม่เลือกรับประทานเพียงอย่างใดอย่างหนึ่ง ย่อมหมายถึงร่างกายของเราก็จะได้รับประโยชน์จากสารอาหารหลากหลายประเภทตามไปด้วย
                </p>

                <p>
                  <b>4.กินอาหารเสริมแคลเซียม</b><br>
                  การดื่มนม หรือกินปลาเล็ก ปลาน้อย ที่สามารถเคี้ยวได้ทั้งก้าง ผลิตภัณฑ์จากถั่วเหลือง เพื่อให้สารอาหารเหล่านั้นไปช่วยสร้างเสริมกระดูกให้แข็งแรง
                </p>

                <p>
                  <b>5.เปลี่ยนข้าวขาวมาเป็นข้าวกล้องและธัญพืช</b><br>
                  การรับประทานข้าวกล้องและธัญพืช จะช่วยลดความเสี่ยงต่อการเป็นโรคหัวใจ ที่สำคัญคุณค่าของสารอาหารอุดมไปด้วยไฟเบอร์ อีกทั้งยังช่วยในเรื่องควบคุมน้ำตาลในเลือด และลดคอเลสเตอรอล
                </p>

                <p>
                  <b>6.เปลี่ยนน้ำมันที่ใช้ในการปรุงอาหาร</b><br>
                  เปลี่ยนพฤติกรรมการใช้น้ำมัน จากที่เคยใช้น้ำมันพืชทั่วไป เปลี่ยนไปใช้น้ำมันมะกอก หรือน้ำมันดอกทานตะวัน เพราะไขมันที่ได้จากน้ำมันพืชเหล่านี้ เป็นไขมันที่มีประโยชน์ต่อร่างกาย 
                  เป็นไขมันอิ่มตัว ซึ่งช่วยลดไขมันในเส้นเลือดได้เป็นอย่างดี
                </p>

                <p>
                  <b>7.ดื่มชาเพื่อสุขภาพ</b><br>
                  น้ำชามีประโยชน์ต่อสุขภาพ เมื่อตื่นนอนตอนเช้า ให้บ้วนปากด้วยน้ำชา จะช่วยลดแบคทีเรียในปาก ลดอาการฟันผุ และน้ำชายังช่วยป้องกันมะเร็งกระเพาะอาหารถึง 30%
                </p>

                <p>
                  <b>8.ดื่มน้ำสะอาดให้มาก ๆ</b><br>
                  น้ำคือชีวิต ร่างกายของคนเราประกอบไปด้วยน้ำถึง 70% และมีการสูญเสียน้ำหลายทาง อย่างเช่นปัสสาวะ และเหงื่อ การดื่มน้ำสะอาดอย่างน้อยวันละ 2 ลิตรนอกจากจะช่วยให้ร่างกายสดชื่น 
                  ผิวพรรณสดใสแล้ว ยังช่วยรักษาระดับความเข้มข้นของเลือดได้อีกด้วย
                </p>

                <p>
                  <b>9.ถั่ว กินดีมีประโยชน์</b><br>
                  เพราะถั่วอุดมไปด้วยโปรตีน วิตามิน และแร่ธาตุที่ร่างกายต้องการ จะดัดแปลงเป็นน้ำเต้าหู้ หรือถั่วแระต้ม ก็ได้รับประโยชน์ที่ดีมากพอ ๆ กัน
                </p>

                <br>
                <img src="../assets/img/blog_food/food2.jpg" class="img-fluid rounded mx-auto d-block" alt=""><br><br>
                <p>
                  <b class="fs-5">อาหารที่ควรหลีกเลี่ยง</b><br><br>
                  <p>
                    <b>1.น้ำอัดลม</b><br>
                      จัดเป็นเครื่องดื่มที่ทำให้รู้สึกสดชื่นจากน้ำตาล แต่กรดและสารเคมีที่ผสมลงไปจะทำลายอวัยวะภายในอย่างช้าๆ ส่วนสูตรน้ำตาลน้อย หรือ น้ำตาลเทียม
                      อาจกระตุ้นความอยากอาหารตลอดเวลามากกว่าปกติ เพราะสมองรู้สึกถึงความหวาน แต่ไม่ได้รับพลังงาน จึงทำให้ร่างกายรู้สึกหิวตลอดเวลาได้ง่าย
                  </p>
                  <p>
                    <b>2.อาหารกระป๋อง และอาหารแปรรูปต่างๆ</b><br>
                      อาการจําพวกนี้จะเก็บไว้ได้นาน จะเต็มไปด้วยโซเดียมและสารกันบูด สารอาหารที่ได้ก็น้อยกว่าอาหารสดใหม่
                  </p>
                  <p>
                    <b>3.ครีมเทียม</b><br> 
                      มีไขมันเป็นส่วนประกอบหลัก เมื่อรับประทานมากๆเสี่ยงในการเป็นโรคหัวใจ
                  </p>
                  <p>
                    <b>4.ผลไม้เชื่อม</b><br> 
                      แม้จะมีรสหวานอร่อย สีสันสวยงาม แต่มีน้ำตาล สารเคมี และสีสังเคราะห์จะทำลายสุขภาพอย่างมาก
                  </p>
                  <p>
                    <b>5.อาหารดัดแปลงพันธุกรรมหรือ GMO</b><br> 
                      อาจมีสิ่งปนเปื้อนที่เป็นอันตราย และการเป็นพาหะของสารพิษ
                  </p>
                  <p>
                    <b>6.ขนมกรุบกรอบ</b><br> 
                      และมันฝรั่งทอด ส่วนใหญ่จะมีปริมาณแคลอรี่ที่สูงมากและเต็มไปด้วยสารสังเคราะห์ และโซเดียม
                  </p>
                  <p>
                    <b>7.น้ำผักและผลไม้กระป๋อง</b><br> 
                      ส่วนใหญ่จะเจือสี และผสมน้ำตาล ถึงบางประเภทจะเป็นน้ำผลไม้ 100% 
                      สารอาหาร และวิตามินที่มีคุณค่าก็สูญสลายไปเกือบหมด ยังเป็นการรับสารเคมีเข้าไปทำลายร่างกายมากกว่าวิตามิน
                  </p>
                  <p>
                    <b>8.เครื่องดื่มที่ให้รสหวาน</b><br> 
                      ได้แก่ ชา กาแฟ และน้ำหวาน ที่ให้คุณค่าทางสารอาหารต่ำ
                  </p>
                  <p>
                    <b>9.ของหมักดอง</b><br>
                        ในกระบวนการผลิตต้องใส่เกลือ หรือสารเคมีต่างๆในการสงวนรักษาอาหาร และปรุงรส คุณค่าทางอาหารที่น้อยลง
                  </p>
                  <p>
                    <b>10.ขนมปังและขนมเค้ก</b><br> 
                        เป็นขนมที่มีนํ้าตาลสูงมากๆอาจก็ให้เกิดโรคอ้วนได้
                  </p>
                </p>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#"></a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>
        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
</div>

<div class="container mt-4">
  <div class="copyright">
    &copy; Copyright <strong><span>Eazy</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">ทนงทวยคงควรคอย</a>
  </div>
</div>

</footer>
<!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>