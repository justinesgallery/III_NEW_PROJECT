<?php

    $conn = new mysqli("localhost", "root", "", "iii_tb_user");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    if (isset($_POST['acc1_submit'])) {

        $g11_checkbox = isset($_POST['g11_checkbox']) ? 1 : 0;
        $g12_checkbox = isset($_POST['g12_checkbox']) ? 1 : 0;
        $transfer = isset($_POST['transfer']) ? 1 : 0;


        $sql = "INSERT INTO section1_data (g11_checkbox, g12_checkbox, transfer)
                VALUES ('$g11_checkbox', '$g12_checkbox', '$transfer')";

        if ($conn->query($sql) === TRUE) {

            echo '<script>alert("Information Submitted Successfully");</script>';

            echo '<script>window.location = "pass_admission.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['acc2_submit'])) {

        $summer_checkbox = isset($_POST['summer_checkbox']) ? 1 : 0;
        $firstsem_checkbox = isset($_POST['firstsem_checkbox']) ? 1 : 0;
        $second_checkbox = isset($_POST['second_checkbox']) ? 1 : 0;


        $sql = "INSERT INTO section2_data (summer_checkbox, firstsem_checkbox, second_checkbox)
                VALUES ('$summer_checkbox', '$firstsem_checkbox', '$second_checkbox')";

        if ($conn->query($sql) === TRUE) {

            echo '<script>alert("Information Submitted Successfully");</script>';

            echo '<script>window.location = "pass_admission.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['acc3_submit'])) {

        $track_strand = $_POST['track_strand'];
        $major = $_POST['major'];
        $name = $_POST['name'];
        $number_street = $_POST['number_street'];
        $subdivision_barangay = $_POST['subdivision_barangay'];
        $city_town = $_POST['city_town'];
        $province = $_POST['province'];
        $postal_code = $_POST['postal_code'];


        $sql = "INSERT INTO section3_data (track_strand, major, name, number_street, subdivision_barangay, city_town, province, postal_code)
                VALUES ('$track_strand', '$major', '$name', '$number_street', '$subdivision_barangay', '$city_town', '$province', '$postal_code')";

        if ($conn->query($sql) === TRUE) {

            echo '<script>alert("Information Submitted Successfully");</script>';

            echo '<script>window.location = "pass_admission.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['acc4_submit'])) {
      
        $card_member_child = $_POST['card_member_child'];
        $institution = $_POST['institution'];
        $age = $_POST['age'];
        $student_type = $_POST['student_type'];
        $civil_status = $_POST['civil_status'];
        $name_spouse = isset($_POST['name_spouse']) ? $_POST['name_spouse'] : "";
        $occupation = isset($_POST['occupation']) ? $_POST['occupation'] : "";
        $birthdate = $_POST['birthdate'];
        $sex = $_POST['sex'];
        $birthplace = $_POST['birthplace'];
        $religion = $_POST['religion'];
        $mobilenum = $_POST['mobilenum'];
        $email_address = isset($_POST['email_address']) ? $_POST['email_address'] : "";
    
 
        $sql = "INSERT INTO section4_data (card_member_child, institution, age, student_type, civil_status, name_spouse, occupation, birthdate, sex, birthplace, religion, mobilenum, email_address)
                VALUES ('$card_member_child', '$institution', '$age', '$student_type', '$civil_status', '$name_spouse', '$occupation', '$birthdate', '$sex', '$birthplace', '$religion', '$mobilenum', '$email_address')";
    
        if ($conn->query($sql) === TRUE) {
           
            echo '<script>alert("Information Submitted Successfully");</script>';
            echo '<script>window.location = "pass_admission.php";</script>';
        } else {
           
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_POST['acc5_submit'])) {
        $name_and_address_elem = $_POST['name_and_address'];
        $year_attended_elem = $_POST['year_attended'];
        $awards_elem = $_POST['awards'];
    
        $name_and_address_jhs = $_POST['name_and_address_jhs'];
        $year_attended_jhs = $_POST['year_attended_jhs'];
        $awards_jhs = $_POST['awards_jhs'];
    
        $sql = "INSERT INTO educational_background (name_and_address_elem, year_attended_elem, awards_elem, name_and_address_jhs, year_attended_jhs, awards_jhs)
                VALUES ('$name_and_address_elem', '$year_attended_elem', '$awards_elem', '$name_and_address_jhs', '$year_attended_jhs', '$awards_jhs')";
    
        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Information Submitted Successfully");</script>';
            echo '<script>window.location = "pass_admission.php";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['acc6_submit'])) {

    $citizenship_father = $_POST['citizenship_father'];
    $home_address_father = $_POST['home_address_father'];
    $mobile_phone_father = $_POST['mobile_phone_father'];
    $email_father = $_POST['email_father'];
    $occupation_father = $_POST['occupation_father'];
    $employer_father = $_POST['employer_father'];
    $tel_num_loc_father = $_POST['tel_num_loc_father'];
    $educ_attain_father = $_POST['educ_attain_father'];
    $last_school_father = $_POST['last_school_father'];

 
    $citizenship_mother = $_POST['citizenship_mother'];
    $home_address_mother = $_POST['home_address_mother'];
    $mobile_phone_mother = $_POST['mobile_phone_mother'];
    $email_mother = $_POST['email_mother'];
    $occupation_mother = $_POST['occupation_mother'];
    $employer_mother = $_POST['employer_mother'];
    $tel_num_loc_mother = $_POST['tel_num_loc_mother'];
    $educ_attain_mother = $_POST['educ_attain_mother'];
    $last_school_mother = $_POST['last_school_mother'];


    $citizenship_guardian = $_POST['citizenship_guardian'];
    $home_address_guardian = $_POST['home_address_guardian'];
    $mobile_phone_guardian = $_POST['mobile_phone_guardian'];
    $email_guardian = $_POST['email_guardian'];
    $occupation_guardian = $_POST['occupation_guardian'];
    $employer_guardian = $_POST['employer_guardian'];
    $tel_num_loc_guardian = $_POST['tel_num_loc_guardian'];
    $educ_attain_guardian = $_POST['educ_attain_guardian'];
    $last_school_guardian = $_POST['last_school_guardian'];

    $sql_father = "INSERT INTO father_background (citizenship, home_address, mobile_phone, email, occupation, employer, tel_num_loc, educ_attain, last_school)
            VALUES ('$citizenship_father', '$home_address_father', '$mobile_phone_father', '$email_father', '$occupation_father', '$employer_father', '$tel_num_loc_father', '$educ_attain_father', '$last_school_father')";

    $sql_mother = "INSERT INTO mother_background (citizenship, home_address, mobile_phone, email, occupation, employer, tel_num_loc, educ_attain, last_school)
            VALUES ('$citizenship_mother', '$home_address_mother', '$mobile_phone_mother', '$email_mother', '$occupation_mother', '$employer_mother', '$tel_num_loc_mother', '$educ_attain_mother', '$last_school_mother')";

    $sql_guardian = "INSERT INTO guardian_background (citizenship, home_address, mobile_phone, email, occupation, employer, tel_num_loc, educ_attain, last_school)
            VALUES ('$citizenship_guardian', '$home_address_guardian', '$mobile_phone_guardian', '$email_guardian', '$occupation_guardian', '$employer_guardian', '$tel_num_loc_guardian', '$educ_attain_guardian', '$last_school_guardian')";
        
        
        if ($conn->query($sql_father) === TRUE && $conn->query($sql_mother) === TRUE && $conn->query($sql_guardian) === TRUE) {
            echo '<script>alert("Family Background Information Submitted Successfully");</script>';
            echo '<script>window.location = "pass_admission.php";</script>';
        } else {
            echo "Error: " . $sql_father . "<br>" . $conn->error;
        }
    }

    if(isset($_POST['acc7_submit'])) {
     
        $targetDir = "signature/";
        $fileName = basename($_FILES["signature_image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if(in_array($fileType, $allowTypes)){
           
            
            if(move_uploaded_file($_FILES["signature_image"]["tmp_name"], $targetFilePath)){

                $insert = $conn->query("INSERT into signature_images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
                if($insert){
                  
                    echo '<script>alert("The file '.$fileName.' has been uploaded successfully.");</script>';
                    echo '<script>window.location = "pass_admission.php";</script>';
                }else{
               
                    echo '<script>alert("File upload failed, please try again.");</script>';
                } 
            }else{
              
                echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
            }
        }else{
       
            echo '<script>alert("Sorry, only JPG, JPEG, PNG, GIF files are allowed to upload.");</script>';
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['acc8_submit'])) {

       
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iii_tb_user";
    
      
        $conn_upload = new mysqli($servername, $username, $password, $dbname);
    
     
        if ($conn_upload->connect_error) {
            die("Connection failed: " . $conn_upload->connect_error);
        }
    
     
        $stmt = $conn_upload->prepare("INSERT INTO applicant_files (id_photo, psa, report_card, good_moral) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $id_photo, $psa, $report_card, $good_moral);
    
        
        
        $id_photo = $_FILES['id_photo']['name'];
        $psa = $_FILES['psa']['name'];
        $report_card = $_FILES['report_card']['name'];
        $good_moral = $_FILES['good_moral']['name'];
    
       
        $upload_dir = "applicant_requirements/";
        move_uploaded_file($_FILES['id_photo']['tmp_name'], $upload_dir . $id_photo);
        move_uploaded_file($_FILES['psa']['tmp_name'], $upload_dir . $psa);
        move_uploaded_file($_FILES['report_card']['tmp_name'], $upload_dir . $report_card);
        move_uploaded_file($_FILES['good_moral']['tmp_name'], $upload_dir . $good_moral);
    
        if ($stmt->execute()) {
            echo '<script>alert("Applicant files uploaded successfully.");</script>';
            echo '<script>window.location = "pass_admission.php";</script>';
        } else {
            echo "Error: " . $stmt->error;
        }
    
       
        $stmt->close();
        $conn_upload->close();
    }

        

    $conn->close();
    ?>