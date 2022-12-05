
<?php 
  session_start();

  if (!isset($_SESSION["success"])) {
    header("Location: login.php");
}

  include('server.php');
   
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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
  <script>
    //click icon to edit data in table
    $(document).ready(function(){
        $('.edit').click(function(){
            var currentTD = $(this).parents('tr').find('td');
            if ($(this).html() == '<span class="material-symbols-outlined">edit</span>') {
                $.each(currentTD, function () {
                    $(this).prop('contenteditable', true)
                });
            } else {
                $.each(currentTD, function () {
                    $(this).prop('contenteditable', false)
                     // var id = $(this).closest('tr').find('td:eq(0)').text();
                    // var username = $(this).closest('tr').find('td:eq(1)').text();
                    var email = $(this).closest('tr').find('td:eq(0)').text();
                    var dob = $(this).closest('tr').find('td:eq(1)').text();
                    var address = $(this).closest('tr').find('td:eq(2)').text();
                    var phone = $(this).closest('tr').find('td:eq(3)').text();
          
            var data = {
                email: email , dob: dob, address: address, phone: phone
            };
            $.ajax({
                url: 'update.php',
                type: 'POST',
                data: data,
                success: function(response){
                    location.reload();
                    
                }
            });
                });
            };
            $(this).html($(this).html() == '<span class="material-symbols-outlined">edit</span>' ? 'save' : '<span class="material-symbols-outlined">edit</span>')
            
        });
    });

    $(document).ready(function(){
        $("#sortme th").click(function(){
            var table = $(this).parents('table').eq(0)
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
            this.asc = !this.asc
            if (!this.asc){rows = rows.reverse()}
            for (var i = 0; i < rows.length; i++){table.append(rows[i])}
        })
    })
    function comparer(index) {
        return function(a, b) {
            var valA = getCellValue(a, index), valB = getCellValue(b, index)
            return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
        }
    }
    function getCellValue(row, index){ return $(row).children('td').eq(index).html() }

</script>         




<body>
    

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
    .center{
        margin: auto;
        width: 100%;
        padding: 100px;
           
    }
    table, th, td {
        border: 1px solid black;
        background-color: #F0F0F0;
    }
    th, td {
        padding: 15px;
        text-align: left;
    }
    .error{
        color: red;
    }
    .button {
        background-color: #04AA6D; /* Green */
        border: none;
        color: white;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 12px;
    }

    .container {
       
        position: relative;
        margin-bottom: 5%;
        
    }

    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

  </style>

</head>

<body>
<header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <h1>Eazy<span>.</span></h1>
  </a>
  <nav id="navbar" class="navbar">
    <ul>
      <!-- <li><a href="#hero">Home</a></li>
      <li><a href="#about">BMI</a></li>
      <li><a href="#services">HEALTH</a></li>
      <li><a href="#faq">EXERCISE</a></li>
      <li><a href="#contact">Contact</a></li> -->
      <!-- <li><a href="login.php">Login</a></li> -->
      <!-- <li class="dropdown"><a href="">test</a>
        <ul>
          <li><a href="login.php">ข้อมูลผู้ใช้</a></li>
        </ul>
      </li> -->
      
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

 

  
  <main id="main">
    <!-- ======= Contact Section ======= -->

    <form action="" method="post" enctype="multipart/form-data">
            <?php

            $username = $_SESSION["username"];

            $sql = "SELECT * FROM userpj WHERE username = '$username'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
    <section id="contact" class="contact">

    <div class="info-form center">
        <form class="rounded-5" action="" method="post">
 

            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>


            
            <div class="form-group">
                <input type="text" class="form-control item" id="username" name="username" placeholder="ชื่อผู้ใช้" value="<?php echo $row['username'] ?> "disabled>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" name="email" placeholder="อีเมล" value="<?php echo $row['email'] ?>"disabled>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="birth-date" name="dob" placeholder="ดด-วว-ปปปป" value="<?php echo $row['dob'] ?>"disabled>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="address" name="address" placeholder="ที่อยู่" value="<?php echo $row['address'] ?>"disabled>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone" name="phone" placeholder="เบอร์โทร" value="<?php echo $row['phone'] ?>"disabled>
            </div>
          
            
        </form>


        <?php
        
        
        $username = $_SESSION["username"];
        $sql = "SELECT * FROM userpj WHERE username = '$username'";
        $result = $conn->query($sql);
      
            if ($result->num_rows > 0 ) {
                echo '<table id="sortme" class="table-auto center"><thead><tr>
            
            <th>Email <i style="font-size:10px" class="fa"></i></th>
            <th>DOB <i style="font-size:10px" class="fa"></i></th>
            <th>Address <i style="font-size:10px" class="fa"></i></th>
            <th>Phone <i style="font-size:10px" class="fa"></i></th>
            <th>Edit <i style="font-size:10px" class="fa"></i></th>
            </td></tr></thead>';
            while($row = $result->fetch_assoc()) {
                echo "<tbody><tr><td>" .  $row["email"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["address"]. "</td><td>" . $row["phone"].  '</td><td class="edit"><span class="material-symbols-outlined">edit</span></td></tr></tbody>';
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
       
            $conn->close();
            ?>
            
        </div>
        
        </div>
        <?php
    
                }
            }
        
        
      

        ?>
            
    </section>
    
    <div class="container">
        <div class="vertical-center">
            <a href="index.php" class = "">
                <button class="button button1">HOME</button>
            </a> 
        </div>
    </div>
    
  </main>

 
    
</body>
</html>