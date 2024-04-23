<?php
@include 'user_db_conn.php';

session_start();

if(isset($_POST['submit'])){
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = ($_POST['pass']);
   $role = $_POST['role'];

   $sql = "SELECT * FROM iii_non_students WHERE username = '$username' AND pass = '$pass'";
   
   $result = mysqli_query($conn, $sql);

   if($result && mysqli_num_rows($result) > 0){

     $row = mysqli_fetch_assoc($result);
     if ($row['pass'] == $pass) {
        if ($row['role'] != $role) {
            $error[] = 'You are not authorized to access this dashboard.';
            echo "<script>alert('You are not authorized to access this dashboard.'); window.location='non-student-admin-login-screen.php';</script>";
        } else {
            $_SESSION['username'] = $row['username'];
            $_SESSION['profile_pic'] = $row['profile_pic'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['mobile'] = $row['mobile'];

            echo "<script>alert('Login Successfull!'); window.location='dashboard_non_student_admin.php';</script>";
            exit();
        }
     } else {
         $error[] = 'Incorrect email or password!';
         echo "<script>alert('Incorrect email or password!'); window.location='non-student-admin-login-screen.php';</script>";
     }
   } else {
       $error[] = 'Incorrect email or password!';
       echo "<script>alert('Incorrect email or password!'); window.location='non-student-admin-login-screen.php';</script>";
   }
}

?>
