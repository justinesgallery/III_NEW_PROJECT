<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            padding-top: 50px;
            background: rgb(22,74,65);
    background: linear-gradient(90deg, rgba(22,74,65,1) 6%, rgba(77,119,78,1) 68%, rgba(157,200,141,1) 100%);
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .accordion-item {
            margin-bottom: 15px;
        }

        .accordion-button {
            background-color: #4d774e;
            color: #fff;
        }

        .accordion-button:hover {
            background-color: #9dc88d;
        }

        .accordion-body {
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-top: none;
            border-radius: 0 0 .25rem .25rem;
        }

        .form-check-input:checked {
            background-color: #007bff;
        }

        .btn-primary {
            background-color: #f1b24a;
            border-color: #f1b24a;
        }

        .btn-primary:hover {
            background-color: darkgoldenrod;
            border-color: darkgoldenrod;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg" style="padding: 0; margin: 0;">
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
                    <li class="nav-item ml-auto" style=" border-radius:10px">
                        <a class="nav-link" href="logout.php" style="color: white; text-decoration:none;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="Title d-flex justify-content-center" style="color:#fff; ">
        <H1>Fill Up Information:</H1>
    </div>

    <div class="container mb-5">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Application is made as
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="admission_passing_handler.php" method="post" id="myForm1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="g11_checkbox" id="g11_checkbox" onclick="uncheckAllExcept('g11_checkbox', 'myForm1')">
                                <label class="form-check-label" for="g11_checkbox">Grade 11</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="g12_checkbox" id="g12_checkbox" onclick="uncheckAllExcept('g12_checkbox', 'myForm1')">
                                <label class="form-check-label" for="g12_checkbox">Grade 12</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="transfer" id="transfer" onclick="uncheckAllExcept('transfer', 'myForm1')">
                                <label class="form-check-label" for="transfer">Transfer Applicant</label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="acc1_submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Application is for
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="admission_passing_handler.php" method="post" id="myForm2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="summer_checkbox" id="summer_checkbox" onclick="uncheckAllExcept('summer_checkbox', 'myForm2')">
                                <label class="form-check-label" for="summer_checkbox">Summer</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="firstsem_checkbox" id="firstsem_checkbox" onclick="uncheckAllExcept('firstsem_checkbox', 'myForm2')">
                                <label class="form-check-label" for="firstsem_checkbox">First Semester</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="second_checkbox" id="second_checkbox" onclick="uncheckAllExcept('second_checkbox', 'myForm2')">
                                <label class="form-check-label" for="second_checkbox">Second Semester</label>
                            </div>
                            <button type="submit" class="btn btn-primary" name="acc2_submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Getting Personal Information
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="admission_passing_handler.php" method="post" id="myForm3">
                            <div class="mb-3">
                                <label for="track" class="form-label">Track/Strand</label>
                                <input type="text" name="track_strand" class="form-control" id="track" required>
                            </div>
                            <div class="mb-3">
                                <label for="major" class="form-label">Major In</label>
                                <input type="text" name="major" class="form-control" id="major">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Last Name, First Name, Middle Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="number_street" class="form-label">Number & Street</label>
                                <input type="text" name="number_street" class="form-control" id="number_street" required>
                            </div>
                            <div class="mb-3">
                                <label for="subdivision_barangay" class="form-label">Subdivision/Barangay</label>
                                <input type="text" name="subdivision_barangay" class="form-control" id="subdivision_barangay" required>
                            </div>
                            <div class="mb-3">
                                <label for="city_town" class="form-label">City/Town</label>
                                <input type="text" name="city_town" class="form-control" id="city_town" required>
                            </div>
                            <div class="mb-3">
                                <label for="province" class="form-label">Province</label>
                                <input type="text" name="province" class="form-control" id="province" required>
                            </div>
                            <div class="mb-3">
                                <label for="postal_code" class="form-label">Postal Code</label>
                                <input type="text" name="postal_code" class="form-control" id="postal_code" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="acc3_submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Getting other Information
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="admission_passing_handler.php" method="post" id="myForm4">
                            <div class="mb-2">
                                <label for="card_member_child" class="form-label">Child of CARD-MRI Member:</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="card_member_child" id="yes" value="yes" required>
                                <label class="form-check-label" for="yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="card_member_child" id="no" value="no" required>
                                <label class="form-check-label" for="no">No</label>
                            </div>

                            <div class="mb-3">
                                <label for="institution">Institution:</label>
                                <input class="form-control" type="text" name="institution" required>
                            </div>

                            <div class="mb-3">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" name="age" required>
                            </div>

                            <div class="mb-2">
                                <label for="student_type" class="form-label">Student Type:</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="student_type" id="general_public" value="general_public" required>
                                <label class="form-check-label" for="general_public">General Public</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="student_type" id="cmdi_scholar" value="cmdi_scholar" required>
                                <label class="form-check-label" for="cmdi_scholar">CARD MRI SCHOLAR</label>
                            </div>

                            <div class="mb-3">
                                <label for="civil_status">Civil Status: </label>
                                <input class="form-control" type="text" name="civil_status" id="civil_status" required>
                            </div>

                            <div class="mb-3">
                                <label for="married">If Married:</label>

                                <div class="form-check mb-2">
                                    <label for="name_spouse">Name of Spouse</label>
                                    <input type="text" class="form-control" name="name_spouse">
                                </div>
                                <div class="form-check">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" class="form-control" name="occupation">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="birthdate">Date of Birth: </label>
                                <input class="form-control" type="date" name="birthdate" id="birthdate" required>
                            </div>

                            <div class="mb-2">
                                <label for="student_type" class="form-label">Sex:</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sex" id="sex_male" value="Male" required>
                                <label class="form-check-label" for="sex_male">Male</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="sex" id="sex_female" value="Female" required>
                                <label class="form-check-label" for="sex_female">Female</label>
                            </div>

                            <div class="mb-3">
                                <label for="birthplace">Place of Birth:</label>
                                <input type="text" class="form-control" name="birthplace" required>
                            </div>

                            <div class="mb-3">
                                <label for="religion">Religion:</label>
                                <input type="text" class="form-control" name="religion" required>
                            </div>

                            <div class="mb-3">
                                <label for="mobilenum">Mobile phone number and/or Landline Number:</label>
                                <input type="text" class="form-control" name="mobilenum" required>
                            </div>

                            <div class="mb-3">
                                <label for="email_address">Email Address:</label>
                                <input type="email" class="form-control" name="email_address">
                            </div>

                            <button type="submit" class="btn btn-primary" name="acc4_submit">Submit</button>

                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Educational Background
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="admission_passing_handler.php" method="post" id="myForm5">

                            <div class="mb-3">
                                <label for="elem">Elementary:</label>

                                <div class="form-check mb-2">
                                    <label for="name_and_address">Name and Address of School:</label>
                                    <input type="text" class="form-control" name="name_and_address" required>
                                </div>

                                <div class="form-check mb-2">
                                    <label for="year_attended">Year Attended:</label>
                                    <input type="text" class="form-control" name="year_attended" required>
                                </div>

                                <div class="form-check mb-2">
                                    <label for="awards">Honors/Award:</label>
                                    <input type="text" class="form-control" name="awards">
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="jhs">Junior High School:</label>

                                <div class="form-check mb-2">
                                    <label for="name_and_address_jhs">Name and Address of School:</label>
                                    <input type="text" class="form-control" name="name_and_address_jhs" required>
                                </div>

                                <div class="form-check mb-2">
                                    <label for="year_attended_jhs">Year Attended:</label>
                                    <input type="text" class="form-control" name="year_attended_jhs" required>
                                </div>

                                <div class="form-check mb-2">
                                    <label for="awards_jhs">Honors/Award:</label>
                                    <input type="text" class="form-control" name="awards_jhs">
                                </div>
                            </div>

                            <!-- <div class="mb-3">
                                <label for="trnsferee">Transferee:</label>

                                <div class="form-check mb-2">
                                    <label for="name_and_address_trnsferee">Name and Address of School:</label>
                                    <input type="text" class="form-control" name="name_and_address_trnsferee" required>
                                </div>

                                <div class="form-check mb-2">
                                    <label for="year_attended_trnsferee">Year Attended:</label>
                                    <input type="text" class="form-control" name="year_attended_trnsferee" required>
                                </div>

                                <div class="form-check mb-2">
                                    <label for="awards_trnsferee">Honors/Award:</label>
                                    <input type="text" class="form-control" name="awards_trnsferee">
                                </div>
                            </div> -->

                            <button type="submit" class="btn btn-primary" name="acc5_submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>



            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Family Background
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="admission_passing_handler.php" method="post" id="myForm6">

                            <!-- Father -->
                            <div class="mb-3">
                                <label for="father">Father </label>

                                <div class="form-check mb-3">
                                    <label for="father">Citizenship:</label>
                                    <input type="text" class="form-control" name="citizenship_father" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="father">Home Address:</label>
                                    <input type="text" class="form-control" name="home_address_father" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="father">Tel. No. / Mobile No. :</label>
                                    <input type="text" class="form-control" name="mobile_phone_father" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="father">Email Address:</label>
                                    <input type="text" class="form-control" name="email_father">
                                </div>

                                <div class="form-check mb-3">
                                    <label for="father">Occupation:</label>
                                    <input type="text" class="form-control" name="occupation_father" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="father">Employer:</label>
                                    <input type="text" class="form-control" name="employer_father">
                                </div>

                                <div class="form-check mb-3">
                                    <label for="father">Tel. Numbers/Loc. :</label>
                                    <input type="text" class="form-control" name="tel_num_loc_father">
                                </div>

                                <div class="form-check mb-3">
                                    <label for="father">Educational Attainment:</label>
                                    <input type="text" class="form-control" name="educ_attain_father" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="father">Last School Attended:</label>
                                    <input type="text" class="form-control" name="last_school_father" required>
                                </div>
                            </div>


                            <!-- Mother -->

                            <label for="mother">Mother </label>

                            <div class="form-check mb-3">
                                <label for="mother">Citizenship:</label>
                                <input type="text" class="form-control" name="citizenship_mother" required>
                            </div>

                            <div class="form-check mb-3">
                                <label for="mother">Home Address:</label>
                                <input type="text" class="form-control" name="home_address_mother" required>
                            </div>

                            <div class="form-check mb-3">
                                <label for="mother">Tel. No. / Mobile No. :</label>
                                <input type="text" class="form-control" name="mobile_phone_mother" required>
                            </div>

                            <div class="form-check mb-3">
                                <label for="mother">Email Address:</label>
                                <input type="text" class="form-control" name="email_mother">
                            </div>

                            <div class="form-check mb-3">
                                <label for="mother">Occupation:</label>
                                <input type="text" class="form-control" name="occupation_mother" required>
                            </div>

                            <div class="form-check mb-3">
                                <label for="mother">Employer:</label>
                                <input type="text" class="form-control" name="employer_mother">
                            </div>

                            <div class="form-check mb-3">
                                <label for="mother">Tel. Numbers/Loc. :</label>
                                <input type="text" class="form-control" name="tel_num_loc_mother">
                            </div>

                            <div class="form-check mb-3">
                                <label for="mother">Educational Attainment:</label>
                                <input type="text" class="form-control" name="educ_attain_mother" required>
                            </div>

                            <div class="form-check mb-3">
                                <label for="mother">Last School Attended:</label>
                                <input type="text" class="form-control" name="last_school_mother" required>
                            </div>


                            <!-- Guardian -->

                            <div class="mb-3">

                                <label for="guardian"> Guardian </label>

                                <div class="form-check mb-3">
                                    <label for="guardian">Citizenship:</label>
                                    <input type="text" class="form-control" name="citizenship_guardian" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="guardian">Home Address:</label>
                                    <input type="text" class="form-control" name="home_address_guardian" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="guardian">Tel. No. / Mobile No. :</label>
                                    <input type="text" class="form-control" name="mobile_phone_guardian" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="guardian">Email Address:</label>
                                    <input type="text" class="form-control" name="email_guardian">
                                </div>

                                <div class="form-check mb-3">
                                    <label for="guardian">Occupation:</label>
                                    <input type="text" class="form-control" name="occupation_guardian" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="guardian">Employer:</label>
                                    <input type="text" class="form-control" name="employer_guardian">
                                </div>

                                <div class="form-check mb-3">
                                    <label for="guardian">Tel. Numbers/Loc. :</label>
                                    <input type="text" class="form-control" name="tel_num_loc_guardian">
                                </div>

                                <div class="form-check mb-3">
                                    <label for="guardian">Educational Attainment:</label>
                                    <input type="text" class="form-control" name="educ_attain_guardian" required>
                                </div>

                                <div class="form-check mb-3">
                                    <label for="guardian">Last School Attended:</label>
                                    <input type="text" class="form-control" name="last_school_guardian" required>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary" name="acc6_submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Upload Signature
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form action="admission_passing_handler.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="signature_image" class="form-label">Upload Signature Image:</label>
                                <p>Full Name and Signature of Applicant/Date</p>
                                <input type="file" class="form-control" id="signature_image" name="signature_image" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary" name="acc7_submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>



            <div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
            Applicant Requirements Checklist
        </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form action="admission_passing_handler.php" method="post" enctype="multipart/form-data">

            <label for="requirements">Requirements</label>
                <div class="mb-3">
                    <label for="id_photo" class="form-label" >2pcs. Recent 2"x2" ID photo (Student)</label><br>
                    <input class="form-control" type="file" name="id_photo" id="id_photo" required>
                </div>

                <div class="mb-3">
                    <label for="psa" class="form-label">PHOTOCOPY Birth Certificate (PSA)</label>
                    <input type="file" class="form-control" name="psa" id="psa" required>
                </div>

                <div class="mb-3">
                    <label for="report_card" class="form-label">JHS Original Report Card(For SHS and BEC Graduate)</label>
                    <input type="file" class="form-control" name="report_card" id="report_card" required>
                </div>

                <div class="mb-3">
                <label for="good_moral" class="form-label">Original Certificate of Good Moral Character </label>
                    <input type="file" class="form-control" name="good_moral" id="good_moral" required>
                </div>
                <button type="submit" class="btn btn-primary" name="acc8_submit">Submit</button>
            </form>
        </div>
    </div>
</div>



        </div>
    </div>

    <script>
        function uncheckAllExcept(checkboxId, formId) {
            var checkboxes = document.querySelectorAll('#' + formId + ' input[type="checkbox"]');
            checkboxes.forEach(function(checkbox) {
                if (checkbox.id !== checkboxId) {
                    checkbox.checked = false;
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>