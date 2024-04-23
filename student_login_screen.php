<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 d-flex justify-content-center align-items-center" style="height:90vh">
        
        <form class="border shadow p-3 rounded" style="width: 450px;" action="student_login_checker.php" method="POST">
            <h2 class="text-center p-3 mb-4">User Login</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="pass">Password:</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="pass" name="pass" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <img src="view.png" alt="eye" style="height: 1.25rem;">
                        </button>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="student_number">Student Number:</label>
                <input type="text" class="form-control" id="student_number" name="student_number" placeholder="Student Number" required>
            </div>
            <p>Not a Student? <a href="non-student-admin-login-screen.php">Click here</a></p>
            <p>A Student account is provided by the Admin.</p>
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
        </form>
    </div>

 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#pass');

            togglePassword.addEventListener('click', function () {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);

     
                const eyeImg = togglePassword.querySelector('img');
                if (type === 'password') {
                    eyeImg.src = 'view.png'; 
                } else {
                    eyeImg.src = 'hide.png'; 
                }
            });
        });
    </script>
</body>
</html>
