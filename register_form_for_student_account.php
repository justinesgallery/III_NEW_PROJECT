<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background: rgb(22,74,65);
  background: linear-gradient(90deg, rgba(22,74,65,1) 6%, rgba(77,119,78,1) 68%, rgba(157,200,141,1) 100%);
            color: white;
}

.btn{
    background-color: #4d774e;
    color: white;
}
.btn :hover{
    background-color: #9dc88d;
}

    </style>


</head>

<body>

    <a class="return" href="dashboard_non_student_admin.php" style="text-decoration:none; color:white">Return</a>

    <div class="container mt-5">
        <h2 class="mb-4">User Registration</h2>
        <form action="register_checker_for_student_account.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="pass">Password:</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
            </div>

            <div class="form-group">
                <label for="cpassword">Confirm Password:</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" id="role" name="role">
                    <option value="student">Student</option>
                </select>
            </div>

            <button type="submit" class="btn" name="submite">Register</button>
        </form>
    </div>
</body>

</html>