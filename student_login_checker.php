<?php
@include 'user_db_conn.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = $_POST['pass'];
    $student_number = mysqli_real_escape_string($conn, $_POST['student_number']);
    $error = "";

    if(empty($username) || empty($pass) || empty($student_number)) {
        $error = 'Username, password, and student number are required!';
        echo "<script>alert('All fields are required!'); window.location='student_login_screen.php';</script>";
    } else {
        // Check if the username exists in the database
        $select = "SELECT * FROM iii_students WHERE username = '$username'";
        $result = mysqli_query($conn, $select);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            // Verify the password
            if($pass == $row['password']) {
                // Check if the student number matches
                if($student_number == $row['students_number']) {
                    // Check if the user is a student
                    if($row['role'] == 'student') {
                        // Start session and set session variables
                        session_start();
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['student_number'] = $row['students_number'];
                        $_SESSION['role'] = $row['role'];
                        // Redirect to a welcome page or dashboard
                        header('location: dashboard_student.php');
                    } else {
                        $error = 'You are not authorized to access student dashboard!';
                        echo "<script>alert('You are not authorized to access student dashboard!'); window.location='student_login_screen.php';</script>";
                    }
                } else {
                    $error = 'Student number does not match!';
                    echo "<script>alert('Student number does not match!'); window.location='student_login_screen.php';</script>";
                }
            } else {
                $error = 'Incorrect password!';
                echo "<script>alert('Incorrect password!'); window.location='student_login_screen.php';</script>";
            }
        } else {
            $error = 'Username not found!';
            echo "<script>alert('Username not found!'); window.location='student_login_screen.php';</script>";
        }
    }

    if(!empty($error)) {
        echo '<p>' . $error . '</p>';
    }
}
?>