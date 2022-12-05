<?php
    session_start();
    include('server.php');

    $errors = array();
    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if(empty($username)){
            array_push($errors, "โปรดใส่ชื่อผู้ใช้");
        }
        if(empty($email)){
            array_push($errors, "โปรดใส่อีเมล");
        }
        if(empty($password_1)){
            array_push($errors, "โปรดใส่รหัสผ่าน");
        }
        if($password_1 != $password_2){
            array_push($errors, "รหัสผ่านไม่ตรงกัน");
        }

        $user_check_query = "SELECT * FROM userpj WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn,$user_check_query);
        $result = mysqli_fetch_array($query);

        if($result){
            if($result['username'] === $username){
                array_push($error, "ชื่อผู้ใช้นี้มีผู้ใช้แล้ว");
            }
            if($result['email'] === $email){
                array_push($error, "อีเมลนี้มีผู้ใช้แล้ว");
            }
        }

        if(count($errors) == 0){

            $sql = "INSERT INTO `userpj`(`username`, `email`, `dob`, `password`) VALUES ('$username', '$email', '$dob', '$password_1')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "คุณได้ลงทะเบียนเรียบร้อยแล้ว";
            header('location: index.php'); //เดี๋ยวมาแก้ทีหลังว่าจะไปหน้าไหน
        }else {
            array_push($errors, "ชื่อผู้ใช้หรืออีเมลถูกใช้แล้ว");
            $_SESSION['error'] = "ชื่อผู้ใช้หรืออีเมลถูกใช้แล้ว โปรดลองใหม่อีกครั้ง";
            header('location: register.php'); //เดี๋ยวมาแก้ทีหลังว่าจะไปหน้าไหน
        }
    }
?>