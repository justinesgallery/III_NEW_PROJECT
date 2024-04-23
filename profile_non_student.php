<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .centered-card {
            margin-top: 8%;
            margin-left: 10%;
            margin-right: auto;
        }
        .card {
            max-width: 300px;
        }
        .accordion-container {
            margin-top: 8%;
        }
        .accordion {
            margin-left: 10%;
        }
    </style>
</head>
<body>

<?php
include("user_db_conn.php");
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['role'])) {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $mobile = $_SESSION['mobile'];
?>

<div class="container justify-content-center">
    <div class="row">
        <div class="col-lg-6 centered-card">
            <?php if ($_SESSION['role'] == 'non_student') { ?>
            <div class="card">
                <img src="<?php echo $_SESSION['profile_pic']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Username: <?php echo $username;?></h5>
                    <a href="dashboard_non_student_admin.php" class="btn btn-primary">Home</a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col-lg-6">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Account Info
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Full Name: <?php echo $name;?><br>
                            Email Address: <?php echo $email;?><br>
                            Mobile Number: <?php echo $mobile;?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Content for Accordion Item #2
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
} else {
    header("Location: non-student-admin-login-screen.php");
    exit();
}
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-YWlJ3NUqjHZXgwA/i3I6BdEf3QiXSqUbjr4A7Ls+V6Bf8p3lFshlUtmjC7hO7I4p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
