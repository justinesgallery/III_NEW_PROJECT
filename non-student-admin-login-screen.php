<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="border shadow p-3 rounded" style="width: 450px;" action="check_login.php" method="post">
            <h1 class="text-center p-3">LOGIN</h1>
            <?php 
            if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error'] ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="pass" id="password">
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <img src="view.png" alt="eye" style="height: 1.25rem;">
                    </button>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Select User Type:</label>
                <select class="form-select mb-3" name="role" id="role" aria-label="Default select example" onchange="showStudentNumberInput()">
                    <option value="Pick" disable selected hidden>Login as a</option>
                    <option value="non_student">Non-Student</option>
                    <option value="admin">Admin</option>
                </select>
                <div id="studentNumberInput" style="display: none;">
                    <label for="student_number" class="form-label">Student Number</label>
                    <input type="text" class="form-control" name="student_number" id="student_number">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-3" name="submit">Submit</button>
            <p>A student already? <a href="student_login_screen.php">Click here</a></p>
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </form>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Change the image source based on the type of the password field
            const eyeImg = togglePassword.querySelector('img');
            if (type === 'password') {
                eyeImg.src = 'view.png'; // Change this to the path of the eye icon image
            } else {
                eyeImg.src = 'hide.png'; // Change this to the path of the eye slash icon image
            }
        });
    </script>
</body>
</html>
