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
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
              <h2>โรคอ้วนอันตรายแค่ไหน?</h2>
              <p>โรคอ้วนนั้นอันตรายแค่ไหน ทําไมเราถึงต้องระวังโรคนี้ โรคนี้มีส่งผลอะไรกับสุขภาพเราบ้างเรารวบรวมข้อมูลทั้งหมดของโรคอ้วนไว้ให้ผู้อ่านได้อ่านแล้วครับ</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="../index.php#services">Home</a></li>
            <li>โรคอ้วนอันตรายแค่ไหน?</li>
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
                <img src="../assets/img/blog_obesity/obesity0.jpg" class="img-fluid rounded mx-auto d-block" alt="">
              </div>

              <h2 class="title">โรคอ้วนอันตรายแค่ไหน?</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">EazySite</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time datetime="2022-11-22">Nov 22, 2022</time></a></li>
                  
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  <b class="fs-5">โรคอ้วนคืออะไร?</b><br><br>
                  โรคอ้วน (Obesity) หรือภาวะน้ำหนักเกิน (Overweight) คือโรคที่มีไขมันสะสมตามส่วนต่างๆ ของร่างกายมากกว่าปกติ ส่งผลให้เกิดภาวะน้ำหนักเกินมาตรฐาน
                  โรคอ้วนเป็นสาเหตุหนึ่งที่ทำให้เกิดโรคอื่นๆ เช่น โรคความดันโลหิตสูง โรคเบาหวาน โรคไขมันในเลือดผิดปกติ 
                  โรคหลอดเลือดตีบ โรคข้อเข่าเสื่อม ประจำเดือนผิดปกติ และโรคอ้วนลงพุง คืออาการที่เกิดจากกระบวนการเผาผลาญพลังงานในร่างกายผิดปกติ 
                  ทำให้เกิดการสะสมไขมันบริเวณช่องท้องและอวัยวะภายใน 
                  เช่น ตับ ไต ลำไส้ กระเพาะอาหาร และที่อื่นๆ ซึ่งเป็นหนึ่งในต้นเหตุของโรคต่างๆ ที่กล่าวมาข้างต้นด้วย
                </p>

                <p>
                  <b class="fs-5">สาเหตุของโรคอ้วน</b><br><br>
                  โรคอ้วน สาเหตุเกิดจากทั้งปัจจัยภายในและภายนอก ดังนี้
                  ปัจจัยภายใน คือ พันธุกรรม อายุ การเผาผลาญของร่างกาย มวลกระดูก ทำให้เกิดการสะสมของพลังงานและไขมันได้ง่าย
                  ปัจจัยภายนอก คือ สิ่งแวดล้อมและพฤติกรรมการรับประทานอาหารที่มีไขมันสูง และขาดการออกกำลังกายอย่างเหมาะสม
                  ทำให้มีปริมาณไขมันสะสมในร่างกายปริมาณมาก
                </p>

                <p>
                  <b class="fs-5">ผลกระทบจากโรคอ้วน</b><br><br>
                  ผู้ที่มีภาวะอ้วน จะส่งผลเสียกับร่างกาย และเพิ่มความเสี่ยงต่อการป่วยที่ทำให้เกิดโรคเรื้อรังและอาการต่างๆ ตามมา เช่น
                  <ul>
                    <li>โรคหลอดเลือดหัวใจและสมอง</li>
                    <li>โรคความดันโลหิตสูง</li>
                    <li>โรคไขมันในเลือดสูง</li>
                    <li>โรคไขมันเกาะตับ</li>
                    <li>โรคหัวใจ</li>
                    <li>โรคอัมพฤกษ์ อัมพาต</li>
                    <li>โรคมะเร็งต่างๆ</li>
                    <li>โรคหยุดหายใจขณะหลับ</li>
                    <li>ปัญหาทางระบบทางเดินหายใจ</li>
                    <li>ภาวะมีบุตรยาก</li>
                    <li>ประจำเดือนมาไม่ปกติ</li>
                    <li>ปวดข้อ ข้อเสื่อมก่อนวัย</li>
                    <li>โรคผิวหนัง เช่น สิว ขนดก ผิวหนังติดเชื้อ มีกลิ่นตัว เป็นต้น</li>
                  </ul>
                </p>

                <p>
                  <b class="fs-5">รู้ได้อย่างไรว่าเราเป็นโรคอ้วนแล้วหรือยัง?</b><br><br>

                  โรคอ้วนสามารถวัดได้คร่าวๆ จากค่าดัชนีมวลกาย (BMI) ตามที่องค์กรอนามัยโลกได้กำหนดค่าดัชนีมวลกายไว้ว่า<br>
                  <ul>
                    <li>เกณฑ์ดัชนีมวลกายต่ำกว่า 18.5 คือ น้ำหนักน้อย</li>
                    <li>อยู่ระหว่าง 18.5-24.99 คือ น้ำหนักปกติ</li>
                    <li>ตั้งแต่ 25 ขึ้นไป คือ น้ำหนักเกิน</li>
                    <li>อยู่ระหว่าง 25-29.99 คือ เริ่มอ้วน</li>
                    <li>และ 30 ขึ้นไปคือ เป็นโรคอ้วน</li>
                  </ul>
                  ค่า BMI เป็นเพียงการประเมินเบื้องต้น ร่างกายแต่ละคนมีมวลกระดูกมากน้อยแตกต่างกัน หรือสภาวะบวมน้ำ ปัสสาวะบ่อยที่ส่งผลต่อน้ำหนักตัวด้วย
                </p>

                <p>
                  <b class="fs-5">วิธีในการรักษาโรคอ้วน มี 4 วิธีดังนี้</b><br><br>
 
                <b>1.การปรับพฤติกรรม</b><br>
                ขั้นตอนแรกของการจัดการกับโรคอ้วน คือ ปรับพฤติกรรมของตนเองทั้งทางด้านการกิน การออกกำลังกายและการใช้ชีวิตประจำวัน
                <ul>
                  <li>พฤติกรรมการกินอาหาร กินอาหารให้ครบ 5 หมู่ โดยเลือกข้าวหรือขนมปังที่มีกากใยสูง เนื้อสัตว์ที่มีไขมันน้อย หลีกเลี่ยงหนังสัตว์ หากไม่กินเนื้อสัตว์ 
                    สามารถกินเต้าหู้ ไข่หรือปลาแทนได้ สำหรับผัก  ควรเลือกกินผักสีรุ้งหรือยิ่งหลายสียิ่งดีโดยไม่จำกัดปริมาณ   
                    ผลไม้ให้เลือกชนิดที่หวานน้อยเท่านั้น สุดท้าย คือ ไขมัน ให้เลือกใช้น้ำมันตามวิธีการปรุงอาหาร นอกจากนี้ควรแบ่งการกินเป็นมื้อเล็กๆ 
                    อาหารเช้าสำคัญที่สุด ควรกินให้เพียงพอ อาหารเย็นควรกินน้อยที่สุด สำหรับมื้อว่างระหว่างมื้อ อาจเป็นผลไม้หรือถั่วอบที่ไม่ใส่เกลือ</li>
                  <li>พฤติกรรมการออกกำลังกาย การออกกำลังกายหลักๆมีอยู่ 2 แบบ หากต้องการลดน้ำหนักควรออกกำลังกายทั้งแบบคาร์ดิโอหรือแอโรบิก 
                    เช่น วิ่ง หรือต่อยมวย ซึ่งมุ่งเผาผลาญพลังงาน และการออกกำลังกายเพื่อเพิ่มมวลกล้ามเนื้อ เพื่อเผาผลาญไขมันที่อยู่ในกล้ามเนื้อ ทำให้กล้ามเนื้อแข็งแรงและร่างกายกระชับมากขึ้น</li>
                  <li>พฤติกรรมการใช้ชีวิตประจำวัน เปลี่ยนพฤติกรรมจากการนั่งเฉยๆ เช่น ดูทีวี เล่นเกมส์มาเป็นการทำกิจกรรมที่มีการเคลื่อนไหวร่างกายมากขึ้น</li>
                </ul>
                  <b>2.การควบคุมน้ำหนักโดยใช้ยา</b><br>
                  ในกรณีที่ผู้ป่วยพยายามปรับพฤติกรรมของตัวเองแล้วแต่ยังลดน้ำหนักไม่ได้ หรือน้ำหนักลดแล้วแต่กลับขึ้นมาใหม่ หรือสงสัยว่ามีโรคประจำตัว เช่น ความดันสูง เบาหวาน ปวดศีรษะทุกเช้า กลางคืนเหมือนนอนไม่พอ ควรมาปรึกษาแพทย์เพื่อหาสาเหตุและวิธีการรักษา แพทย์อาจให้ยาเพื่อเพิ่มการเผาผลาญพลังงาน ช่วยให้ไม่หิวและอิ่มเร็วขึ้น ยาลดน้ำหนักบางชนิดยังช่วยรักษาโรคที่มีอยู่ได้อีกด้วย เช่น ไขมันเกาะตับ ลดระดับน้ำตาลในผู้ที่เป็นเบาหวาน ลดระดับไขมันและความดันโลหิต<br><br>
                   
                  
                  <b>3.การผ่าตัดกระเพาะอาหาร (Bariatric Surgery)</b><br>
                  เป็นการผ่าตัดให้กระเพาะอาหารเล็กลงเพื่อให้ผู้ป่วยกินอาหารแล้วอิ่มเร็วขึ้นหรือลดการดดูดซึมอาหาร ลดแคลอรี่ที่ร่างกายได้รับ การผ่าตัดกระเพาะอาหารทำได้ 2 วิธีใหญ่ๆคือ
                  <ul>
                    <li>การผ่าตัดกระเพาะอาหารให้เล็กลง (Sleeve gastrectomy) เป็นการผ่าตัดกระเพาะให้มีรูปทรงเหมือนกล้วยหอม ทำให้ความจุของกระเพาะอาหารลดลง (restrictive) และทำให้ร่างกายผลิตฮอร์โมนที่มีผลทำให้น้ำหนักลดลงผ่านหลายกลไก เช่น ฮอร์โมน ghrelin, GLP-1, GLP-2, PYY, insulin, glucagon และ leptin โดยไม่มีผลกระทบต่อการดูดซึมแคลอรี่และสารอาหารในลำไส้</li>
                    <li>การผ่าตัดบายพาสกระเพาะอาหาร (Roux-en-Y gastric bypass) เป็นการผ่าตัดเปลี่ยนแปลงโครงสร้างของกระเพาะอาหาร ให้สารอาหารข้ามส่วนที่มีการดูดซึมมากบริเวณลำไส้เล็กส่วนต้น ไปยังลำไส้ส่วนกลางหรือส่วนปลาย (malabsorptive) ช่วยให้ผู้ป่วยกินได้น้อยลง ลดปริมาณแคลอรี่ที่เข้าสู่ร่างกาย ส่งผลให้ฮอร์โมนเปลี่ยนแปลงเพื่อช่วยในการลดย้ำหนัก เช่น ฮอร์โมน gastrin, ghrelin, GLP-1, GLP-2, PYY, oxyntomodulin, insulin, GIP และ leptin</li>
                  </ul>

                  <b>4. การส่องกล้องเย็บกระเพาะอาหาร (Endoscopic Sleeve Gastroplasty: ESG)</b><br>
                  เป็นการเลียนแบบวิธีการผ่าตัดกระเพาะอาหารให้เล็กลง (Sleeve gastrectomy) แต่แทนที่จะผ่าตัดทางช่องท้อง แพทย์จะใช้วิธีการส่องกล้องผ่านหลอดอาหารลงไปที่กระเพาะ เพื่อทำการเย็บกระเพาะให้มีขนาดเท่ากับผลกล้วยหอม ทำให้กระเพาะอาหารมีพื้นที่น้อยลง ผู้ป่วยอิ่มเร็วขึ้น
                  <ul>
                    <li>การปรับเปลี่ยนพฤติกรรม ข้อดีคือทำได้ด้วยตัวเองแต่เมื่อผ่านไปประมาณ 6 เดือน ร่างกายจะมีการปรับตัวทำให้น้ำหนักที่ลดลงไปกลับขึ้นมาใหม่ได้</li>
                    <li>การใช้ยา ข้อดีคือช่วยประคับประคองให้การลดน้ำหนักที่ลดได้แล้วอยู่อย่างถาวร อย่างไรก็ตามโรคอ้วนเป็นโรคเรื้อรัง เพราะฉะนั้นหากผู้ป่วยหยุดยา ร่างกายอาจกลับมาอ้วนขึ้นมาใหม่</li>
                    <li>การผ่าตัดกระเพาะอาหาร สามารถทำให้น้ำหนักลงลงได้ในปริมาณที่เยอะ ถึง 60-70% ของน้ำหนักที่เกินมา ข้อเสียคือ อาจเกิดภาวะแทรกซ้อนได้เช่นเดียวกับการผ่าตัดช่องท้องทั่วๆไป เช่น ภาวะเลือดออก รอยผ่าตัดรั่วหรือติดเชื้อ อย่างไรก็ตาม อาการแทรกซ้อนเหล่านี้เกิดขึ้นได้น้อยในมือศัลยแพทย์ผู้ชำนาญการ</li>
                    <li>การส่องกล้องเย็บกระเพาะอาหาร มีข้อดีคือไม่มีแผลที่หน้าท้อง ดังนั้นผู้ป่วยจึงเจ็บน้อยและฟื้นตัวเร็ว อย่างไรก็ตามอาจมีโอกาสติดเชื้อซึ่งเกิดขึ้นได้น้อยมากหากทำโดยแพทย์ผู้ชำนาญการ รวมถึงอาการคลื่นไส้อาเจียน ซึ่งต้องผ่านการเตรียมคนไข้ด้วยทีมผู้ชำนาญการ และมักหายได้เองภายในเวลาไม่กี่วัน การใช้ยาเสริมควบคู่ไปกับการเย็บกระเพาะอาหารสามารถทำให้ลดน้ำหนักได้มากยิ่งขึ้นอีก</li>
                  </ul>
                  นอกจากนี้ยังพบว่าการเย็บกระเพาะอาหารส่งผลให้เกิดกรดไหลย้อนได้น้อยมาก (2%) เมื่อเทียบกับการผ่าตัดแบบ sleeve gastrectomy (15%) 
                  และเกิดภาวะแทรกซ้อนโดยรวมน้อยมาก (2%) เมื่อเทียบกับการใส่บอลลูนเข้าไปในกระเพาะอาหาร (17%) 
                  นอกจากนี้ผู้ป่วยที่ได้รับการรักษาด้วยการใส่บอลลูนในกระเพาะอาหารจะต้องทำการถอดบอลลูนออกเมื่อเข้าเดือนที่ 6 ทำให้กลับมามีน้ำหนักเพิ่มได้ตามเดิมหรือมากกว่าเดิม 
                  การส่องกล้องผ่านทางปากเพื่อเย็บกระเพาะอาหารจึงส่งผลให้การควบคุมน้ำหนักระยะยาวได้ผลดีกว่าการรักษาแบบใส่บอลลูน
                </p>

              </div><!-- End post content -->
              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#"></a></li>
                </ul>
              </div>

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
<!-- End Footer --><!-- End Footer -->
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