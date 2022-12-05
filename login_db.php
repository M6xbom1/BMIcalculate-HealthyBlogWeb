<?php
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['log_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        

        if(empty($username)){
            array_push($errors, "โปรดใส่ชื่อผู้ใช้");
        }
        if(empty($password)){
            array_push($errors, "โปรดใส่รหัสผ่าน");
        }

        if(count($errors) == 0){
            $query = "SELECT * FROM userpj WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn,$query);

            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "คุณได้เข้าสู่ระบบเรียบร้อยแล้ว";
                
                
                header('location: index.php'); //เดี๋ยวมาแก้ทีหลังว่าจะไปหน้าไหน
            }else{
                array_push($errors, "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง");
                $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง โปรดลองใหม่อีกครั้ง";
                header('location: login.php'); 
                
               
    
                
                
            }
        }
    }
?>
