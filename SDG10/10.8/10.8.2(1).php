<?php include "../db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel = "stylesheet" href="../styles/header.css">
  <link rel = "stylesheet" href="../styles/sidebar.css">
  <link rel = "stylesheet" href="../styles/general.css">
  <link rel = "stylesheet" href="../styles/10.8.css">
    <title>SDG 10.8.2 Access to University Underrepresented Groups Applications</title>
    <style>
         body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    padding-left:300px;
    padding-top:50px;
}

#form-container {
    width: 90%;
    margin: 30px auto;
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border: 1px solid #ccc;

}

h1 {
    color: rgb(224, 20, 131);
    text-align: center;
}

form div {
    margin-bottom: 20px;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: rgb(224, 20, 131);
}

form input[type="text"], form input[type="number"] {
    width: calc(100% - 24px);
    padding: 12px;
    border: 2px solid rgb(224, 20, 131);
    border-radius: 5px;
    font-size: 16px;
}

form input[type="submit"] {
    background: rgb(224, 20, 131);
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
}

form input[type="submit"]:hover {
    background: #c917a1;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    overflow-x: auto;
    display: block;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 12px;
    text-align: left;
    white-space: nowrap;
}

th {
    background-color: rgb(224, 20, 131);
    color: white;
}

.action-buttons {
    display: flex;
    gap: 5px;
}

.action-buttons a {
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 5px;
}

.action-buttons .edit {
    background-color: #4CAF50;
    color: white;
}

.action-buttons .delete {
    background-color: #f44336;
    color: white;
}
</style>
</head>
<body>
<div class = "header-SDG10">
10.8.2 Access to University Underrepresented Groups Applications</div>
    <div class= "sidebar">
      <div class="sdg10-picture">
        <img class="sdg10-icon"src="../pictures/E_SDG_Icons-10.jpg">
      </div>
      
      <div class = "Indicators">
        <div class="home-button"><a href="../index.php ">Home</a></div>
        <div class="indicator1"><a href="../10.1/10.1.php">10.1 Research on reduced inequalities</a></div>
        <div class="indicator1"><a href="../10.3/10.3.php">10.3 Proportion of students and employees with disabilities</a></div>
        <div class="indicator1"><a href="../10.4/10.4.php">10.4 Proportion of students and employees who belong to Indigenous Peoples (IPs) group</a></div>
        <div class="indicator1"><a href="../10.5/10.5.php">10.5 Proportion of students and employees who are member of LGBTQIA+ group</a></div>
        <div class="indicator1"><a href="../10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
        <div class="indicator1"><a href="../10.7/10.7.php">10.7 Proportion of refugee students and employees</a></div>
        <div class="indicator1 active-page"><a href="10.8.php">10.8 Measures against discrimination on students and employees</a></div>
      </div>
    </div>
    <?php 
        // Create and Update
        if(isset($_POST['save'])){
            $id = $_POST['id'];
            $total_number_of_student_applicants_belong_to_low_income_male = $_POST['total_number_of_student_applicants_belong_to_low_income_male'];
            $total_number_of_student_applicant_belong_to_low_income_female = $_POST['total_number_of_student_applicant_belong_to_low_income_female'];
            $total_number_of_student_applicants_belong_to_LGBTQIA_group_male = $_POST['total_number_of_student_applicants_belong_to_LGBTQIA_group_male'];
            $total_number_of_student_applicants_belong_LGBTQIA_group_female = $_POST['total_number_of_student_applicants_belong_LGBTQIA_group_female'];
            $total_number_of_student_applicants_who_are_refugee_male = $_POST['total_number_of_student_applicants_who_are_refugee_male'];
            $total_number_of_student_applicants_who_are_refugee_female = $_POST['total_number_of_student_applicants_who_are_refugee_female'];
            $total_number_of_student_applicants_who_are_disabled_male = $_POST['total_number_of_student_applicants_who_are_disabled_male'];
            $total_number_of_student_applicants_who_are_disabled_female = $_POST['total_number_of_student_applicants_who_are_disabled_female'];
            $total_number_of_student_applicants_are_child_of_solo_parent_male = $_POST['total_number_of_student_applicants_are_child_of_solo_parent_male'];
            $total_number_of_student_applicants_are_child_solo_parent_female = $_POST['total_number_of_student_applicants_are_child_solo_parent_female'];
            $total_number_of_student_applicants_are_member_of_IPs_male = $_POST['total_number_of_student_applicants_are_member_of_IPs_male'];
            $total_number_of_student_applicants_are_member_of_IPs_female = $_POST['total_number_of_student_applicants_are_member_of_IPs_female'];
            $student_applicants_belong_to_low_income_families = $_POST['student_applicants_belong_to_low_income_families'];
            $student_applicants_belong_to_LGBTQIA_group = $_POST['student_applicants_belong_to_LGBTQIA_group'];
            $student_applicants_are_refugee = $_POST['student_applicants_are_refugee'];
            $student_applicants_have_a_disability = $_POST['student_applicants_have_a_disability'];
            $student_applicants_are_child_of_solo_parent = $_POST['student_applicants_are_child_of_solo_parent'];
            $student_applicants_are_member_of_IPs = $_POST['student_applicants_are_member_of_IPs'];
            $student_applicants_tracking_evidence = $_POST['student_applicants_tracking_evidence'];
            $total_number_of_job_applicants_who_belong_to_low_income_male = $_POST['total_number_of_job_applicants_belong_to_low_income_male'];
            $total_number_of_job_applicants_belong_to_low_income_female = $_POST['total_number_of_job_applicants_belong_to_low_income_female'];
            $total_number_of_job_applicants_belong_to_LGBTQIA_group_male = $_POST['total_number_of_job_applicants_belong_to_LGBTQIA_group_male'];
            $total_number_of_job_applicants_belong_to_LGBTQIA_group_female = $_POST['total_number_of_job_applicants_belong_to_LGBTQIA_group_female'];
            $total_number_of_job_applicants_who_are_refugee_male = $_POST['total_number_of_job_applicants_who_are_refugee_male'];
            $total_number_of_job_applicants_who_are_refugee_female = $_POST['total_number_of_job_applicants_who_are_refugee_female'];
            $total_number_of_job_applicants_who_are_disabled_male  = $_POST['total_number_of_job_applicants_who_are_disabled_male'];
            $total_number_of_job_applicants_who_are_disabled_female = $_POST['total_number_of_job_applicants_who_are_disabled_female'];
            $total_number_of_job_applicants_are_child_of_solo_parent_male = $_POST['total_number_of_job_applicants_are_child_of_solo_parent_male'];
            $total_number_of_job_applicants_are_child_solo_parent_female = $_POST['total_number_of_job_applicants_are_child_of_solo_parent_female'];
            $total_number_of_job_applicants_are_member_of_IPs_male = $_POST['total_number_of_job_applicants_are_member_of_IPs_male'];
            $total_number_of_job_applicants_are_member_of_IPs_female = $_POST['total_number_of_job_applicants_are_member_of_IPs_female'];
            $job_applicants_belong_to_low_income_families = $_POST['job_applicants_belong_to_low_income_families'];
            $job_applicants_belong_to_LGBTQIA_group = $_POST['job_applicants_belong_to_LGBTQIA_group'];
            $job_applicants_are_refugee = $_POST['job_applicants_are_refugee'];
            $job_applicants_have_a_disability = $_POST['job_applicants_have_a_disability'];
            $job_applicants_are_child_of_solo_parent = $_POST['job_applicants_are_child_of_solo_parent'];
            $job_applicants_are_member_of_IPs = $_POST['job_applicants_are_member_of_IPs'];
            $job_applicants_tracking_evidence = $_POST['job_applicants_tracking_evidence'];

            if($id) {
                // Update 
                $query = "UPDATE `10.8.2 Access to university underrepresented groups applications` SET 
                total_number_of_student_applicants_belong_to_low_income_male ='$total_number_of_student_applicants_belong_to_low_income_male', 
                total_number_of_student_applicants_belong_to_low_income_female='$total_number_of_student_applicants_belong_to_low_income_female', 
                total_number_of_student_applicants_belong_to_LGBTQIA_group_male ='$total_number_of_student_applicants_belong_to_LGBTQIA_group_male', 
                total_number_of_student_applicants_belong_LGBTQIA_group_female ='$total_number_of_student_applicants_belong_LGBTQIA_group_female',
                total_number_of_student_applicants_who_are_refugee_male ='$total_number_of_student_applicants_who_are_refugee_male', 
                total_number_of_student_applicants_who_are_refugee_female='$total_number_of_student_applicants_who_are_refugee_female', 
                total_number_of_student_applicants_who_are_disabled_male='$total_number_of_student_applicants_who_are_disabled_male', 
                total_number_of_student_applicants_who_are_disabled_female='$total_number_of_student_applicants_who_are_disabled_female',
                total_number_of_student_applicants_are_child_of_solo_parent_male='$total_number_of_student_applicants_are_child_of_solo_parent_male', 
                total_number_of_student_applicants_are_child_solo_parent_female='$total_number_of_student_applicants_are_child_solo_parent_female',
                total_number_of_student_applicants_are_member_of_IPs_male='$total_number_of_student_applicants_are_member_of_IPs_male', 
                total_number_of_student_applicants_are_member_of_IPs_female='$total_number_of_student_applicants_are_member_of_IPs_female', 
                student_applicants_belong_to_low_income_families='$student_applicants_belong_to_low_income_families', 
                student_applicants_belong_to_LGBTQIA_group='$student_applicants_belong_to_LGBTQIA_group', 
                student_applicants_are_refugee='$student_applicants_are_refugee', 
                student_applicants_have_a_disability='$student_applicants_have_a_disability', 
                student_applicants_are_child_of_solo_parent='$student_applicants_are_child_of_solo_parent', 
                student_applicants_are_member_of_IPs='$student_applicants_are_member_of_IPs', 
                student_applicants_tracking_evidence='$student_applicants_tracking_evidence', 
                total_number_of_job_applicants_belong_to_low_income_male='$total_number_of_job_applicants_belong_to_low_income_male', 
                total_number_of_job_applicants_belong_to_low_income_female='$total_number_of_job_applicants_belong_to_low_income_female', 
                total_number_of_job_applicants_belong_to_LGBTQIA_group_male='$total_number_of_job_applicants_belong_to_LGBTQIA_group_male', 
                total_number_of_job_applicants_belong_LGBTQIA_group_female='$total_number_of_job_applicants_belong_LGBTQIA_group_female', 
                total_number_of_job_applicants_who_are_refugee_male='$total_number_of_job_applicants_who_are_refugee_male', 
                total_number_of_job_applicants_who_are_refugee_female='$total_number_of_job_applicants_who_are_refugee_female', 
                total_number_of_job_applicants_who_are_disabled_male='$total_number_of_job_applicants_who_are_disabled_male', 
                total_number_of_job_applicants_who_are_disabled_female='$total_number_of_job_applicants_who_are_disabled_female', 
                total_number_of_job_applicants_are_child_of_solo_parent_male='$total_number_of_job_applicants_are_child_of_solo_parent_male',
                total_number_of_job_applicants_are_child_solo_parent_female='$total_number_of_job_applicants_are_child_solo_parent_female', 
                total_number_of_job_applicants_are_member_of_IPs_male='$total_number_of_job_applicants_are_member_of_IPs_male', 
                total_number_of_job_applicants_are_member_of_IPs_female='$total_number_of_job_applicants_are_member_of_IPs_female', 
                job_applicants_belong_to_low_income_families='$job_applicants_belong_to_low_income_families', 
                job_applicants_belong_to_LGBTQIA_group='$job_applicants_belong_to_LGBTQIA_group', 
                job_applicants_are_refugee='$job_applicants_are_refugee', 
                job_applicants_have_a_disability='$job_applicants_have_a_disability', 
                job_applicants_are_child_of_solo_parent='$job_applicants_are_child_of_solo_parent', 
                job_applicants_are_member_of_IPs='$job_applicants_are_member_of_IPs', 
                job_applicants_tracking_evidence='$job_applicants_tracking_evidence',  
                WHERE id=$id";
            } else {
                // Create
                $query = "INSERT INTO `10.8.2 Access to university underrepresented groups applications` 
                (total_number_of_student_applicants_belong_to_low_income_male,
                 total_number_of_student_applicants_belong_to_low_income_female, 
                 total_number_of_student_applicants_belong_to_LGBTQIA_group_male, 
                 total_number_of_student_applicants_belong_LGBTQIA_group_female, 
                 total_number_of_student_applicants_who_are_refugee_male, 
                 total_number_of_student_applicants_who_are_refugee_female, 
                 total_number_of_student_applicants_who_are_disabled_male, 
                 total_number_of_student_applicants_who_are_disabled_female, 
                 total_number_of_student_applicants_are_child_of_solo_parent_male,
                 total_number_of_student_applicants_are_child_solo_parent_female,
                 total_number_of_student_applicants_are_member_of_IPs_male,
                 total_number_of_student_applicants_are_member_of_IPs_female,
                 student_applicants_belong_to_low_income_families, 
                 student_applicants_belong_to_LGBTQIA_group, 
                 student_applicants_are_refugee, 
                 student_applicants_have_a_disability, 
                 student_applicants_are_child_of_solo_parent, 
                 student_applicants_are_member_of_IPs, 
                 student_applicants_tracking_evidence, 
                 total_number_of_job_applicants_who_belong_to_low_income_male, 
                 total_number_of_job_applicants_who_belong_to_low_income_female, 
                 total_number_of_job_applicants_who_belong_to_LGBTQIA_group_male, 
                 total_number_of_job_applicants_who_belong_LGBTQIA_group_female, 
                 total_number_of_job_applicants_who_are_refugee_male, 
                 total_number_of_job_applicants_who_are_refugee_female, 
                 total_number_of_job_applicants_who_are_disabled_male, 
                 total_number_of_job_applicants_who_are_disabled_female, 
                 total_number_of_job_applicants_are_child_of_solo_parent_male, 
                 total_number_of_job_applicants_are_child_solo_parent_female, 
                 total_number_of_job_applicants_are_member_of_IPs_male, 
                 total_number_of_job_applicants_are_member_of_IPs_female, 
                 job_applicants_belong_to_low_income_families, 
                 job_applicants_belong_to_LGBTQIA_group, 
                 job_applicants_are_refugee, 
                 job_applicants_have_a_disability, 
                 job_applicants_are_child_of_solo_parent, 
                 job_applicants_are_member_of_IPs, 
                 job_applicants_tracking_evidence) 
                 VALUES ('$total_number_of_student_applicants_belong_to_low_income_male',
                         '$total_number_of_student_applicants_belong_to_low_income_female', 
                         '$total_number_of_student_applicants_belong_to_LGBTQIA_group_male', 
                         '$total_number_of_student_applicants_belong_LGBTQIA_group_female', 
                         '$total_number_of_student_applicants_who_are_refugee_male', 
                         '$total_number_of_student_applicants_who_are_refugee_female', 
                         '$total_number_of_student_applicants_who_are_disabled_male', 
                         '$total_number_of_student_applicants_who_are_disabled_female', 
                         '$total_number_of_student_applicants_are_child_of_solo_parent_male', 
                         '$total_number_of_student_applicants_are_child_solo_parent_female', 
                         '$total_number_of_student_applicants_are_member_of_IPs_male', 
                         '$total_number_of_student_applicants_are_member_of_IPs_female', 
                         '$student_applicants_belong_to_low_income_families', 
                         '$student_applicants_belong_to_LGBTQIA_group', 
                         '$student_applicants_are_refugee', 
                         '$student_applicants_have_a_disability', 
                         '$student_applicants_are_child_of_solo_parent', 
                         '$student_applicants_are_member_of_IPs', 
                         '$student_applicants_tracking_evidence', 
                         '$total_number_of_job_applicants_belong_to_low_income_male', 
                         '$total_number_of_student_applicants_belong_to_low_income_female', 
                         '$total_number_of_job_applicants_belong_to_LGBTQIA_group_male', 
                         '$total_number_of_job_applicants_belong_to_LGBTQIA_group_female', 
                         '$total_number_of_job_applicants_who_are_refugee_male', 
                         '$total_number_of_job_applicants_who_are_refugee_female',
                         '$total_number_of_job_applicants_who_are_disabled_male', 
                         '$total_number_of_job_applicants_who_are_disabled_female', 
                         '$total_number_of_job_applicants_are_child_of_solo_parent_male', 
                         '$total_number_of_job_applicants_are_child_solo_parent_female', 
                         '$total_number_of_job_applicants_are_member_of_IPs_male', 
                         '$total_number_of_job_applicants_are_member_of_IPs_female', 
                         '$job_applicants_belong_to_low_income_families', 
                         '$job_applicants_belong_to_LGBTQIA_group', 
                         '$job_applicants_are_refugee', 
                         '$job_applicants_have_a_disability', 
                         '$job_applicants_are_child_of_solo_parent', 
                         '$job_applicants_are_member_of_IPs', 
                         '$job_applicants_tracking_evidence')";
            }

            $result = mysqli_query($connect, $query);

            if(!$result){
                echo "Something went wrong! " . mysqli_error($connect);
            } else {
                echo "<script type='text/javascript'>alert('Data saved successfully');</script>";
            }
        } 

        // Delete
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $delete_query = "DELETE FROM `10.8.2 Access to university underrepresented groups applications` WHERE id=$id";
            $delete_result = mysqli_query($connect, $delete_query);
            if(!$delete_result){
                echo "Something went wrong! " . mysqli_error($connect);
            } else {
                echo "<script type='text/javascript'>alert('Data deleted successfully');</script>";
            }
        }

        // Edit
        $edit_data = [];
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $edit_query = "SELECT * FROM `10.8.2 Access to university underrepresented groups applications` WHERE id=$id";
            $edit_result = mysqli_query($connect, $edit_query);
            $edit_data = mysqli_fetch_assoc($edit_result);
        }
    ?>

    <div id="form-container">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo isset($edit_data['id']) ? $edit_data['id'] : ''; ?>">
            <div>
                <label for="total_number_of_student_applicants_belong_to_low_income_male ">Total Number Of Student Applicants Belong to Low Income Male:</label>
                <input type="number" name="total_number_of_student_applicants_belong_to_low_income_male" value="<?php echo isset($edit_data['total_number_of_student_applicants_belong_to_low_income_male']) ? $edit_data['total_number_of_student_applicants_belong_to_low_income_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_belong_to_low_income_female">Total Number Of Student Applicants Belong to Low Income Female:</label>
                <input type="number" name="total_number_of_student_applicants_belong_to_low_income_female" value="<?php echo isset($edit_data['total_number_of_student_applicants_belong_to_low_income_female']) ? $edit_data['total_number_of_student_applicants_belong_to_low_income_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_belong_to_LGBTQIA_group_male ">Total Number Of Student Applicants Belong To LGBTQIA Group Male:</label>
                <input type="number" name="total_number_of_student_applicants_belong_to_LGBTQIA_group_male " value="<?php echo isset($edit_data['total_number_of_student_applicants_belong_to_LGBTQIA_group_male']) ? $edit_data['total_number_of_student_applicants_belong_to_LGBTQIA_group_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_belong_LGBTQIA_group_female ">Total Number Of Student Applicants Belong To LGBTQIA Group Female:</label>
                <input type="number" name="total_number_of_student_applicants_belong_LGBTQIA_group_female " value="<?php echo isset($edit_data['total_number_of_student_applicants_belong_LGBTQIA_group_female']) ? $edit_data['total_number_of_student_applicants_belong_LGBTQIA_group_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_who_are_refugee_male ">Total Number Of Student Applicants Who Are Refugee Male:</label>
                <input type="number" name="total_number_of_student_applicants_who_are_refugee_male " value="<?php echo isset($edit_data['total_number_of_student_applicants_who_are_refugee_male']) ? $edit_data['total_number_of_student_applicants_who_are_refugee_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_who_are_refugee_female ">Total Number Of Student Applicants Who Are Refugee Female:</label>
                <input type="number" name="total_number_of_student_applicants_who_are_refugee_female " value="<?php echo isset($edit_data['total_number_of_student_applicants_who_are_refugee_female']) ? $edit_data['total_number_of_student_applicants_who_are_refugee_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_who_are_disabled_male ">Total Number Of Student Applicants Who Are Disabled Male:</label>
                <input type="number" name="total_number_of_student_applicants_who_are_disabled_male" value="<?php echo isset($edit_data['total_number_of_student_applicants_who_are_disabled_male']) ? $edit_data['total_number_of_student_applicants_who_are_disabled_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_who_are_disabled_female">Total Number Of Student Applicants Who Are Disabled Female:</label>
                <input type="number" name="total_number_of_student_applicants_who_are_disabled_female" value="<?php echo isset($edit_data['total_number_of_student_applicants_who_are_disabled_female']) ? $edit_data['total_number_of_student_applicants_who_are_disabled_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_are_child_of_solo_parent_male ">Total Number Of Student Applicants Are Child Of Solo Parent Male:</label>
                <input type="number" name="total_number_of_student_applicants_are_child_of_solo_parent_male " value="<?php echo isset($edit_data['total_number_of_student_applicants_are_child_of_solo_parent_male']) ? $edit_data['total_number_of_student_applicants_are_child_of_solo_parent_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_are_child_solo_parent_female ">Total Number Of Student Applicants Are Child Of Solo Parent Female:</label>
                <input type="number" name="total_number_of_student_applicants_are_child_solo_parent_female " value="<?php echo isset($edit_data['total_number_of_student_applicants_are_child_solo_parent_female']) ? $edit_data['total_number_of_student_applicants_are_child_solo_parent_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_are_member_of_IPs_male ">Total Number Of Student Applicants Are Member of IPs Male:</label>
                <input type="number" name="total_number_of_student_applicants_are_member_of_IPs_male " value="<?php echo isset($edit_data['total_number_of_student_applicants_are_member_of_IPs_male']) ? $edit_data['total_number_of_student_applicants_are_member_of_IPs_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_student_applicants_are_member_of_IPs_female ">Total Number Of Student Applicants Are Member of IPs Female:</label>
                <input type="number" name="total_number_of_student_applicants_are_member_of_IPs_female" value="<?php echo isset($edit_data['total_number_of_student_applicants_are_member_of_IPs_female']) ? $edit_data['total_number_of_student_applicants_are_member_of_IPs_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="student_applicants_belong_to_low_income_families ">Student Applicants Belong To Low Income Families:</label>
                <input type="text" name="student_applicants_belong_to_low_income_families" value="<?php echo isset($edit_data['student_applicants_belong_to_low_income_families']) ? $edit_data['student_applicants_belong_to_low_income_families'] : ''; ?>" required>
            </div>
            <div>
                <label for="student_applicants_belong_to_LGBTQIA_group ">Student Applicants Belong To LGBTQIA Group:</label>
                <input type="text" name="student_applicants_belong_to_LGBTQIA_group" value="<?php echo isset($edit_data['student_applicants_belong_to_LGBTQIA_group']) ? $edit_data['student_applicants_belong_to_LGBTQIA_group'] : ''; ?>" required>
            </div>
            <div>
                <label for="student_applicants_are_refugee">Student Applicants That Are Refugee:</label>
                <input type="text" name="student_applicants_are_refugee" value="<?php echo isset($edit_data['student_applicants_are_refugee']) ? $edit_data['student_applicants_are_refugee'] : ''; ?>" required>
            </div>
            <div>
                <label for="student_applicants_have_a_disability ">Student Applicants That Have a Disability:</label>
                <input type="text" name="student_applicants_have_a_disability" value="<?php echo isset($edit_data['student_applicants_have_a_disability']) ? $edit_data['student_applicants_have_a_disability'] : ''; ?>" required>
            </div>
            <div>
                <label for="student_applicants_are_child_of_solo_parent ">Student Applicants Are Child Of Solo Parent:</label>
                <input type="text" name="student_applicants_are_child_of_solo_parent" value="<?php echo isset($edit_data['student_applicants_are_child_of_solo_parent']) ? $edit_data['student_applicants_are_child_of_solo_parent'] : ''; ?>" required>
            </div>
            <div>
                <label for="student_applicants_are_member_of_IPs ">Student Applicant Are Member of IPs:</label>
                <input type="text" name="student_applicants_are_member_of_IPs" value="<?php echo isset($edit_data['student_applicants_are_member_of_IPs']) ? $edit_data['student_applicants_are_member_of_IPs'] : ''; ?>" required>
            </div>
            <div>
                <label for="student_applicants_tracking_evidence ">Student Applicants Tracking Evidence:</label>
                <input type="text" name="student_applicants_tracking_evidence" value="<?php echo isset($edit_data['student_applicants_tracking_evidence']) ? $edit_data['student_applicants_tracking_evidence'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_belong_to_low_income_male ">Total Number Of Job Applicants Belong to Low Income Male:</label>
                <input type="text" name="total_number_of_job_applicants_belong_to_low_income_male" value="<?php echo isset($edit_data['total_number_of_job_applicants_belong_to_low_income_male']) ? $edit_data['total_number_of_job_applicants_belong_to_low_income_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_belong_to_low_income_female ">Total Number Of Job Applicants Belong to Low Income Female:</label>
                <input type="text" name="total_number_of_job_applicants_belong_to_low_income_female" value="<?php echo isset($edit_data['total_number_of_job_applicants_belong_to_low_income_female']) ? $edit_data['total_number_of_job_applicants_belong_to_low_income_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_belong_to_LGBTQIA_group_male ">Total Number Of Job Applicants Belong To LGBTQIA Group Male:</label>
                <input type="number" name="total_number_of_job_applicants_belong_to_LGBTQIA_group_male " value="<?php echo isset($edit_data['total_number_of_job_applicants_belong_to_LGBTQIA_group_male']) ? $edit_data['total_number_of_job_applicants_belong_to_LGBTQIA_group_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_belong_LGBTQIA_group_female ">Total Number Of Job Applicants Belong To LGBTQIA Group Female:</label>
                <input type="number" name="total_number_of_job_applicants_belong_LGBTQIA_group_female " value="<?php echo isset($edit_data['total_number_of_job_applicants_belong_LGBTQIA_group_female']) ? $edit_data['total_number_of_job_applicants_belong_LGBTQIA_group_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_who_are_refugee_male ">Total Number Of Job Applicants Who Are Refugee Male:</label>
                <input type="number" name="total_number_of_job_applicants_who_are_refugee_male " value="<?php echo isset($edit_data['total_number_of_job_applicants_who_are_refugee_male']) ? $edit_data['total_number_of_job_applicants_who_are_refugee_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_who_are_refugee_female ">Total Number Of Job Applicants Who Are Refugee Female:</label>
                <input type="number" name="total_number_of_job_applicants_who_are_refugee_female " value="<?php echo isset($edit_data['total_number_of_job_applicants_who_are_refugee_female']) ? $edit_data['total_number_of_job_applicants_who_are_refugee_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_who_are_disabled_male">Total Number Of Job Applicants Who Are Disabled Male:</label>
                <input type="number" name="total_number_of_job_applicants_who_are_disabled_male" value="<?php echo isset($edit_data['total_number_of_job_applicants_who_are_disabled_male']) ? $edit_data['total_number_of_job_applicants_who_are_disabled_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_who_are_disabled_female">Total Number Of Job Applicants Who Are Disabled Female:</label>
                <input type="number" name="total_number_of_job_applicants_who_are_disabled_female" value="<?php echo isset($edit_data['total_number_of_job_applicants_who_are_disabled_female']) ? $edit_data['total_number_of_job_applicants_who_are_disabled_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_are_child_of_solo_parent_male">Total Number Of Job Applicants Are Child Of Solo Parent Male:</label>
                <input type="number" name="total_number_of_job_applicants_are_child_of_solo_parent_male " value="<?php echo isset($edit_data['total_number_of_job_applicants_are_child_of_solo_parent_male']) ? $edit_data['total_number_of_job_applicants_are_child_of_solo_parent_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_are_child_solo_parent_female">Total Number Of Job Applicants Are Child Of Solo Parent Female:</label>
                <input type="number" name="total_number_of_job_applicants_are_child_solo_parent_female " value="<?php echo isset($edit_data['total_number_of_job_applicants_are_child_solo_parent_female']) ? $edit_data['total_number_of_job_applicants_are_child_solo_parent_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_are_member_of_IPs_male">Total Number Of Job Applicants Are Member of IPs Male:</label>
                <input type="number" name="total_number_of_job_applicants_are_member_of_IPs_male " value="<?php echo isset($edit_data['total_number_of_job_applicants_are_member_of_IPs_male']) ? $edit_data['total_number_of_job_applicants_are_member_of_IPs_male'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_number_of_job_applicants_are_member_of_IPs_female">Total Number Of Job Applicants Are Member of IPs Female:</label>
                <input type="number" name="total_number_of_job_applicants_are_member_of_IPs_female" value="<?php echo isset($edit_data['total_number_of_job_applicants_are_member_of_IPs_female']) ? $edit_data['total_number_of_job_applicants_are_member_of_IPs_female'] : ''; ?>" required>
            </div>
            <div>
                <label for="job_applicants_belong_to_low_income_families">Job Applicants Belong To Low Income Families:</label>
                <input type="text" name="job_applicants_belong_to_low_income_families" value="<?php echo isset($edit_data['job_applicants_belong_to_low_income_families']) ? $edit_data['job_applicants_belong_to_low_income_families'] : ''; ?>" required>
            </div>
            <div>
                <label for="job_applicants_belong_to_LGBTQIA_group">Job Applicant Belong to LGBTQIA group:</label>
                <input type="text" name="job_applicants_belong_to_LGBTQIA_group" value="<?php echo isset($edit_data['job_applicants_belong_to_LGBTQIA_group']) ? $edit_data['job_applicants_belong_to_LGBTQIA_group'] : ''; ?>" required>
            </div>
            <div>
                <label for="job_applicants_are_refugee">Job Applicants that Are Refugee:</label>
                <input type="text" name="job_applicants_are_refugee" value="<?php echo isset($edit_data['job_applicants_are_refugee']) ? $edit_data['job_applicants_are_refugee'] : ''; ?>" required>
            </div>
            <div>
                <label for="job_applicants_have_a_disability">Job Applicants That Have A Disability:</label>
                <input type="text" name="job_applicants_have_a_disability" value="<?php echo isset($edit_data['job_applicants_have_a_disability']) ? $edit_data['job_applicants_have_a_disability'] : ''; ?>" required>
            </div>
            <div>
                <label for="job_applicants_are_child_of_solo_parent ">Job Applicants That Are Child Of Solo Parent:</label>
                <input type="text" name="job_applicants_are_child_of_solo_parent" value="<?php echo isset($edit_data['job_applicants_are_child_of_solo_parent']) ? $edit_data['job_applicants_are_child_of_solo_parent'] : ''; ?>" required>
            </div>
            <div>
                <label for="job_applicants_are_member_of_IPs">Job Applicants That Are Member of IPs:</label>
                <input type="text" name="job_applicants_are_member_of_IPs" value="<?php echo isset($edit_data['job_applicants_are_member_of_IPs']) ? $edit_data['job_applicants_are_member_of_IPs'] : ''; ?>" required>
            </div>
            <div>
                <label for="job_applicants_tracking_evidence ">Job Applicants Tracking Evidence:</label>
                <input type="text" name="job_applicants_tracking_evidence" value="<?php echo isset($edit_data['job_applicants_tracking_evidence']) ? $edit_data['job_applicants_tracking_evidence'] : ''; ?>" required>
            </div>
            <div>
                <input type="submit" name="save" value="Save">
            </div>
        </form>
        
        <?php
            $fetchquery = "SELECT * FROM `10.8.2 Access to university underrepresented groups applications`";
            $fetch_data = mysqli_query($connect, $fetchquery);

            if(mysqli_num_rows($fetch_data) > 0){
                echo "<table>
                        <tr>
                            <th>ID</th>
                            <th>Total Number Of Student Applicants Belong to Low Income Male</th>
                            <th>Total Number Of Student Applicants Belong to Low Income Female</th>
                            <th>Total Number Of Student Applicants Belong To LGBTQIA Group Male</th>
                            <th>Total Number Of Student Applicants Belong To LGBTQIA Group Female</th>
                            <th>Total Number Of Student Applicants Who Are Refugee Male</th>
                            <th>Total Number Of Student Applicants Who Are Refugee Female</th>
                            <th>Total Number Of Student Applicants Who Are Disabled Male</th>
                            <th>Total Number Of Student Applicants Who Are Disabled Female</th>
                            <th>Total Number Of Student Applicants Are Child Of Solo Parent Male</th>
                            <th>Total Number Of Student Applicants Are Child Of Solo Parent Female</th>
                            <th>Total Number Of Student Applicants Are Member of IPs Male</th>
                            <th>Total Number Of Student Applicants Are Member of IPs Female</th>
                            <th>Student Applicants Belong To Low Income Families</th>
                            <th>Student Applicants Belong To LGBTQIA Group</th>
                            <th>Student Applicants That Are Refugee</th>
                            <th>Student Applicants That Have a Disability</th>
                            <th>Student Applicants Are Child Of Solo Parent</th>
                            <th>Student Applicant Are Member of IPs</th>
                            <th>Student Applicants Tracking Evidence</th>
                            <th>Total Number Of Job Applicants Belong to Low Income Male</th>
                            <th>Total Number Of Job Applicants Belong to Low Income Female</th>
                            <th>Total Number Of Job Applicants Belong To LGBTQIA Group Male</th>
                            <th>Total Number Of Job Applicants Belong To LGBTQIA Group Female</th>
                            <th>Total Number Of Job Applicants Who Are Refugee Male</th>
                            <th>Total Number Of Job Applicants Who Are Refugee Female</th>
                            <th>Total Number Of Job Applicants Who Are Disabled Male</th>
                            <th>Total Number Of Job Applicants Who Are Disabled Female</th>
                            <th>Total Number Of Job Applicants Are Child Of Solo Parent Male</th>
                            <th>Total Number Of Job Applicants Are Child Of Solo Parent Female</th>
                            <th>Job Applicants Belong To Low Income Families</th>
                            <th>Job Applicant Belong to LGBTQIA group</th>
                            <th>Job Applicants that Are Refugee</th>
                            <th>Job Applicants That Have A Disability</th>
                            <th>Job Applicants That Are Child Of Solo Parent</th>
                            <th>Job Applicants That Are Member of IPs</th>
                            <th>Job Applicants Tracking Evidence</th>
                            <th>Actions</th>
                        </tr>";
                while($row = mysqli_fetch_assoc($fetch_data)){
                    echo "<div style='overflow-x:auto;'><table>
                            <tr>
                            <td>{$row['id']}</td>
                            <td>{$row['total_number_of_student_applicants_belong_to_low_income_male']}</td>
                            <td>{$row['total_number_of_student_applicant_belong_to_low_income_female']}</td>
                            <td>{$row['total_number_of_student_applicants_belong_to_LGBTQIA_group_male']}</td>
                            <td>{$row['total_number_of_student_applicants_belong_LGBTQIA_group_female']}</td>
                            <td>{$row['total_number_of_student_applicants_who_are_refugee_male']}</td>
                            <td>{$row['total_number_of_student_applicants_who_are_refugee_female']}</td>
                            <td>{$row['total_number_of_student_applicants_who_are_disabled_male']}</td>
                            <td>{$row['total_number_of_student_applicants_who_are_disabled_female']}</td>
                            <td>{$row['total_number_of_student_applicants_are_child_of_solo_parent_male']}</td>
                            <td>{$row['total_number_of_student_applicants_are_child_solo_parent_female']}</td>
                            <td>{$row['total_number_of_student_applicants_are_member_of_IPs_male']}</td>
                            <td>{$row['total_number_of_student_applicants_are_member_of_IPs_female']}</td>
                            <td>{$row['student_applicants_belong_to_low_income_families']}</td>
                            <td>{$row['student_applicants_belong_to_LGBTQIA_group']}</td>
                            <td>{$row['student_applicants_are_refugee']}</td>
                            <td>{$row['student_applicants_have_a_disability']}</td>
                            <td>{$row['student_applicants_are_child_of_solo_parent']}</td>
                            <td>{$row['student_applicants_are_member_of_IPs']}</td>
                            <td>{$row['student_applicants_tracking_evidence']}</td>
                            <td>{$row['total_number_of_job_applicants_who_belong_to_low_income_male']}</td>
                            <td>{$row['total_number_of_job_applicants_who_belong_to_low_income_female']}</td>
                            <td>{$row['total_number_of_job_applicants_who_belong_to_LGBTQIA_group_male']}</td>
                            <td>{$row['total_number_of_job_applicants_who_belong_LGBTQIA_group_female']}</td>
                            <td>{$row['total_number_of_job_applicants_who_are_refugee_male']}</td>
                            <td>{$row['total_number_of_job_applicants_who_are_refugee_female']}</td>
                            <td>{$row['total_number_of_job_applicants_who_are_disabled_male']}</td>
                            <td>{$row['total_number_of_job_applicants_who_are_disabled_female']}</td>
                            <td>{$row['total_number_of_job_applicants_are_child_of_solo_parent_male']}</td>
                            <td>{$row['total_number_of_job_applicants_are_child_solo_parent_female']}</td>
                            <td>{$row['total_number_of_job_applicants_are_member_of_IPs_male']}</td>
                            <td>{$row['total_number_of_job_applicants_are_member_of_IPs_female']}</td>
                            <td>{$row['job_applicants_belong_to_low_income_families']}</td>
                            <td>{$row['job_applicants_belong_to_LGBTQIA_group']}</td>
                            <td>{$row['job_applicants_are_refugee']}</td>
                            <td>{$row['job_applicants_have_a_disability']}</td>
                            <td>{$row['job_applicants_are_child_of_solo_parent']}</td>
                            <td>{$row['job_applicants_are_member_of_IPs']}</td>
                            <td>{$row['job_applicants_tracking_evidence']}</td>
                            <td class='action-buttons'>
                                <a class='edit' href='?edit={$row['id']}'>Edit</a>
                                <a class='delete' href='?delete={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>
                            </td>
                          </tr>";
                }
                echo "</table></div>";
            } else {
                echo "<p>No data found</p>";
            }
        ?>
    </div>
</body>
</html>