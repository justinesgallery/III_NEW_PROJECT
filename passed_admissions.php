<?php
include("user_db_conn.php");

$sql = "SELECT * FROM section1_data";
$result = $conn->query($sql);
$section1_data = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM section2_data";
$result = $conn->query($sql);
$section2_data = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM section3_data";
$result = $conn->query($sql);
$section3_data = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM section4_data";
$result = $conn->query($sql);
$section4_data = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM educational_background";
$result = $conn->query($sql);
$educational_background = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM father_background";
$result = $conn->query($sql);
$father_background = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM mother_background";
$result = $conn->query($sql);
$mother_background = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM guardian_background";
$result = $conn->query($sql);
$guardian_background = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM signature_images";
$result = $conn->query($sql);
$signature_images = $result->fetch_all(MYSQLI_ASSOC);

$sql = "SELECT * FROM applicant_files";
$result = $conn->query($sql);
$applicant_files = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background: rgb(22,74,65);
    background: linear-gradient(90deg, rgba(22,74,65,1) 6%, rgba(77,119,78,1) 68%, rgba(157,200,141,1) 100%);
            color: white;
}
    </style>
</head>

<body>
    
<nav class="navbar navbar-expand-lg py-3">
        <div class="container-fluid">
            <img class="logo" src="final_logo.png" alt="Logo" srcset="">
            <a class="navbar-brand" href="#" style="color: white">School Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #f1b24a"">
            <span class=" navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard_non_student_admin.php" style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register_form_for_student_account.php" style="color: white">Make an Account for student</a>
                    </li>
                    <li class="nav-item ml-auto" style=" border-radius:10px">
                        <a class="nav-link" href="logout.php" style="color: white; text-decoration:none;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 class="mt-5">Form Data</h1>

        <div class="table-responsive">
            <h2 class="mt-4">Application is Made As</h2>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Grade 11</th>
                        <th>Grade 12</th>
                        <th>Transferee</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($section1_data as $data) : ?>
                        <tr>
                            <td><?php echo $data['g11_checkbox']; ?></td>
                            <td><?php echo $data['g12_checkbox']; ?></td>
                            <td><?php echo $data['transfer']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h2 class="mt-4">Application is For</h2>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Summer</th>
                        <th>First Semester</th>
                        <th>Second Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($section2_data as $data) : ?>
                        <tr>
                            <td><?php echo $data['summer_checkbox']; ?></td>
                            <td><?php echo $data['firstsem_checkbox']; ?></td>
                            <td><?php echo $data['second_checkbox']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h2 class="mt-4">Personal Information</h2>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Track/Strand</th>
                        <th>Major</th>
                        <th>Name</th>
                        <th>Number and Street</th>
                        <th>Subdivision/Barangay</th>
                        <th>City/Town</th>
                        <th>Province</th>
                        <th>Postal Code</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($section3_data as $data) : ?>
                        <tr>
                            <td><?php echo $data['track_strand']; ?></td>
                            <td><?php echo $data['major']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['number_street']; ?></td>
                            <td><?php echo $data['subdivision_barangay']; ?></td>
                            <td><?php echo $data['city_town']; ?></td>
                            <td><?php echo $data['province']; ?></td>
                            <td><?php echo $data['postal_code']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>

        <div class="table-responsive">
            <h2 class="mt-4">Other Informations</h2>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Card Member Child</th>
                        <th>Institution</th>
                        <th>Age</th>
                        <th>Student Type</th>
                        <th>Civil Status</th>
                        <th>Name of Spouse</th>
                        <th>Occupation</th>
                        <th>Birthdate</th>
                        <th>Sex</th>
                        <th>Birthplace</th>
                        <th>Religion</th>
                        <th>Mobile Number</th>
                        <th>Email Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($section4_data as $data) : ?>
                        <tr>
                            <td><?php echo $data['card_member_child']; ?></td>
                            <td><?php echo $data['institution']; ?></td>
                            <td><?php echo $data['age']; ?></td>
                            <td><?php echo $data['student_type']; ?></td>
                            <td><?php echo $data['civil_status']; ?></td>
                            <td><?php echo $data['name_spouse']; ?></td>
                            <td><?php echo $data['occupation']; ?></td>
                            <td><?php echo $data['birthdate']; ?></td>
                            <td><?php echo $data['sex']; ?></td>
                            <td><?php echo $data['birthplace']; ?></td>
                            <td><?php echo $data['religion']; ?></td>
                            <td><?php echo $data['mobilenum']; ?></td>
                            <td><?php echo $data['email_address']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


        <div class="table-responsive">
            <h2>Fathers Information</h2>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Citizenship</th>
                        <th>Home Address</th>
                        <th>Mobile Phone</th>
                        <th>Email</th>
                        <th>Occupation</th>
                        <th>Employer</th>
                        <th>Telephone Number Location</th>
                        <th>Educational Attainment</th>
                        <th>Last School Attended</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($father_background as $data) : ?>
                        <tr>
                        <td><?php echo $data['citizenship'];?></td>
                        <td><?php echo $data['home_address'];?></td>
                        <td><?php echo $data['mobile_phone'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['occupation'];?></td>
                        <td><?php echo $data['employer'];?></td>
                        <td><?php echo $data['tel_num_loc'];?></td>
                        <td><?php echo $data['educ_attain'];?></td>
                        <td><?php echo $data['last_school'];?></td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </div>
        
        <div class="table-responsive">
            <h2>Mothers Information</h2>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Citizenship</th>
                        <th>Home Address</th>
                        <th>Mobile Phone</th>
                        <th>Email</th>
                        <th>Occupation</th>
                        <th>Employer</th>
                        <th>Telephone Number Location</th>
                        <th>Educational Attainment</th>
                        <th>Last School Attended</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mother_background as $data) : ?>
                        <tr>
                        <td><?php echo $data['citizenship'];?></td>
                        <td><?php echo $data['home_address'];?></td>
                        <td><?php echo $data['mobile_phone'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['occupation'];?></td>
                        <td><?php echo $data['employer'];?></td>
                        <td><?php echo $data['tel_num_loc'];?></td>
                        <td><?php echo $data['educ_attain'];?></td>
                        <td><?php echo $data['last_school'];?></td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </div>

        <div class="table-responsive">
            <h2>Guardians Information</h2>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Citizenship</th>
                        <th>Home Address</th>
                        <th>Mobile Phone</th>
                        <th>Email</th>
                        <th>Occupation</th>
                        <th>Employer</th>
                        <th>Telephone Number Location</th>
                        <th>Educational Attainment</th>
                        <th>Last School Attended</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($guardian_background as $data) : ?>
                        <tr>
                        <td><?php echo $data['citizenship'];?></td>
                        <td><?php echo $data['home_address'];?></td>
                        <td><?php echo $data['mobile_phone'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['occupation'];?></td>
                        <td><?php echo $data['employer'];?></td>
                        <td><?php echo $data['tel_num_loc'];?></td>
                        <td><?php echo $data['educ_attain'];?></td>
                        <td><?php echo $data['last_school'];?></td>
                        <?php endforeach; ?>
                        </tr>
                </tbody>
            </table>
        </div>
        
        <?php

include("user_db_conn.php");

$sql = "SELECT * FROM signature_images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    echo '<div class="container">';
    echo '<h2 class="mt-4">Uploaded Signature Images</h2>';
    echo '<div class="row">';

    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-3">';
        echo '<div class="card">';
        echo '<img src="signature/' . $row['file_name'] . '" class="card-img-top" alt="Signature Image">';
        echo '<div class="card-body">';
        echo '<p class="card-text" style="color:black;">Uploaded On: ' . $row['uploaded_on'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
} else {
    echo '<h3>No Signature Images Uploaded.</h3>';
}

$conn->close();
?>

<?php
include("user_db_conn.php");

$sql = "SELECT * FROM applicant_files";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo '<div class="container">';
    echo '<h2 class="mt-4">Uploaded Applicant Files</h2>';
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>ID Photo</th>';
    echo '<th>PSA</th>';
    echo '<th>Report Card</th>';
    echo '<th>Good Moral</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>';
        echo '<a data-fancybox="gallery" data-caption="ID Photo" href="applicant_requirements/' . $row['id_photo'] . '">';
        echo '<img src="applicant_requirements/' . $row['id_photo'] . '" class="img-fluid img-thumbnail" alt="ID Photo">';
        echo '</a>';
        echo '</td>';
        echo '<td>';
        echo '<a data-fancybox="gallery" data-caption="PSA" href="applicant_requirements/' . $row['psa'] . '">';
        echo '<img src="applicant_requirements/' . $row['psa'] . '" class="img-fluid img-thumbnail" alt="PSA">';
        echo '</a>';
        echo '</td>';
        echo '<td>';
        echo '<a data-fancybox="gallery" data-caption="Report Card" href="applicant_requirements/' . $row['report_card'] . '">';
        echo '<img src="applicant_requirements/' . $row['report_card'] . '" class="img-fluid img-thumbnail" alt="Report Card">';
        echo '</a>';
        echo '</td>';
        echo '<td>';
        echo '<a data-fancybox="gallery" data-caption="Good Moral" href="applicant_requirements/' . $row['good_moral'] . '">';
        echo '<img src="applicant_requirements/' . $row['good_moral'] . '" class="img-fluid img-thumbnail" alt="Good Moral">';
        echo '</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
} else {
    echo 'No applicant files uploaded.';
}


$conn->close();
?>

    </div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
