<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="border shadow p-3 rounded" style="width: 450px;" action="check_register.php" method="post" enctype="multipart/form-data">
            <h1 class="text-center p-3">REGISTER</h1>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error'] ?>
                </div>
            <?php } ?>
            <div class="mb-1">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-1">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" name="pass" id="password">
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                        <img src="view.png" alt="eye" style="height: 1.25rem;">
                    </button>
                </div>
            </div>
            <div class="mb-1">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="confirmPassword">
            </div>
            <div class="mb-1">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-1">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input type="tel" class="form-control" name="mobile" id="mobile">
            </div>
            <div class="mb-1">
                <label class="form-label">Select User Type:</label>
            </div>
            <select class="form-select mb-3" name="role" aria-label="Default select example">
                <option value="Pick" disable selected hidden>Register as a</option>    
                <option value="non_student">Non-Student</option>
            </select>

            <div class="mb-1">
                <label for="profile_pic" class="form-label">Profile Picture</label>
                <input type="file" class="form-control mb-3" name="profile_pic" id="profile_pic">
            </div>

            <button type="submit" name="submit" class="btn btn-primary mb-2">Register</button>
            <p class="mb-0">Already have an account? <a href="non-student-admin-login-screen.php">Login here</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
