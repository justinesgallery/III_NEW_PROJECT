<?php
@include 'user_db_conn.php';

if(isset($_POST['submite'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = ($_POST['pass']);
    $cpass = ($_POST['cpassword']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['role']); // Add role variable
    $error = array();

    if(empty($name) || empty($username) || empty($pass) || empty($cpass) || empty($role)) {
        $error[] = 'All fields are required!';
    }

    if(strlen($pass) < 8) {
        $error[] = 'Password must be at least 8 characters long!';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Invalid email format!';
    }

    if(empty($error)) {
        // Check if email already exists
        $select = "SELECT * FROM iii_students WHERE email = '$email'";
        $result = mysqli_query($conn, $select);
        if(mysqli_num_rows($result) > 0) {
            $error[] = 'Email already exists!';
            echo "<script>alert('Email already exists!'); window.location='register_form_for_student_account.php';</script>";
        } else {
            // Check if username already exists
            $select = "SELECT * FROM iii_students WHERE username = '$username'";
            $result = mysqli_query($conn, $select);
            if(mysqli_num_rows($result) > 0) {
                $error[] = 'Username already exists!';
                echo "<script>alert('Username already exists!'); window.location='register_form_for_student_account.php';</script>";
            } else {
                if($pass != $cpass) {
                    $error[] = 'Passwords do not match!';
                    echo "<script>alert('Passwords do not match!'); window.location='register_form_for_student_account.php';</script>";
                } else {
                    // Generate a random number
                    $random_number = mt_rand(100000, 999999);

                    // Hash the password
                    // $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
                    // Insert user data into database
                    $insert = "INSERT INTO iii_students(name, username, password, email, students_number, role) VALUES('$name','$username','$pass','$email', '$random_number', '$role')";
                    mysqli_query($conn, $insert);
                    echo "<script>alert('Account created Successfully!'); window.location='register_form_for_student_account.php';</script>";
                }
            }
        }
    }

    if(!empty($error)) {
        foreach($error as $err) {
            echo '<p>' . $err . '</p>';
        }
    }
}
?>
