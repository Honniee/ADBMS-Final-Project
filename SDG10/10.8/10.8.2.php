<?php include "../db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../styles/header.css">
  <link rel="stylesheet" href="../styles/sidebar.css">
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/10.3.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>SDG 10: Reduced Inequalities </title>
</head>

<body>
  <div class=header-SDG10>
  10.8.2 Access to university underrepresented groups applications</div>
  <div class="sidebar">
    <div class="sdg10-picture">
      <img class="sdg10-icon" src="../pictures/E_SDG_Icons-10.jpg">
    </div>

    <div class="Indicators">
      <div class="home-button"><a href="../index.php ">Home</a></div>
      <div class="indicator1 "><a href="../10.1/10.1.php">10.1 Research on reduced inequalities</a></div>
      <div class="indicator1"><a href="../10.3/10.3.php">10.3 Proportion of students and employees with disabilities</a></div>
      <div class="indicator1"><a href="../10.4/10.4.php">10.4 Proportion of students and employees who belong to Indigenous Peoples (IPs) group</a></div>
      <div class="indicator1"><a href="../10.5/10.5.php">10.5 Proportion of students and employees who are member of LGBTQIA+ group</a></div>
      <div class="indicator1"><a href="../10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
      <div class="indicator1"><a href="10.7.php">10.7 Proportion of refugee students and employees</a></div>
      <div class="indicator1 active-page"><a href="10.8.php">10.8 Measures against discrimination on students and employees</a></div>
    </div>
  </div>

  <div class="container">
        <a href="10.8.2_update.php" class="update-button">Update Records</a>
    </div>


  <?php
    // Database connection
    if (isset($_POST['create'])) {
        // Collect form data
        $total_number_of_student_applicants_belong_to_low_income = $_POST['total_number_of_student_applicants_belong_to_low_income'];
        $total_number_of_student_applicants_belong_to_low_income_male = $_POST['total_number_of_student_applicants_belong_to_low_income_male'];
        $total_number_of_student_applicants_belong_to_low_income_female = $_POST['total_number_of_student_applicants_belong_to_low_income_female'];

        $total_number_of_student_applicants_belong_to_LGBTQIA_group = $_POST['total_number_of_student_applicants_belong_to_LGBTQIA_group'];
        $total_number_of_student_applicants_belong_to_LGBTQIA_group_male = $_POST['total_number_of_student_applicants_belong_to_LGBTQIA_group_male'];
        $total_number_of_student_applicant_belong_LGBTQIA_group_female = $_POST['total_number_of_student_applicant_belong_LGBTQIA_group_female'];
        
        $total_number_of_student_applicants_who_are_refugee = $_POST['total_number_of_student_applicants_who_are_refugee'];
        $total_number_of_student_applicants_who_are_refugee_male = $_POST['total_number_of_student_applicants_who_are_refugee_male'];
        $total_number_of_student_applicants_who_are_refugee_female = $_POST['total_number_of_student_applicants_who_are_refugee_female'];
       
        $total_number_of_student_applicants_who_are_disabled= $_POST['total_number_of_student_applicants_who_are_disabled'];
        $total_number_of_student_applicants_who_are_disabled_male = $_POST['total_number_of_student_applicants_who_are_disabled_male'];
        $total_number_of_student_applicants_who_are_disabled_female = $_POST['total_number_of_student_applicants_who_are_disabled_female'];
        $total_number_of_student_applicants_are_child_of_solo_parent = $_POST['total_number_of_student_applicants_are_child_of_solo_parent'];

        $total_number_of_student_applicants_are_child_of_solo_parent_male = $_POST['total_number_of_student_applicants_are_child_of_solo_parent_male'];
        $total_number_of_student_applicants_are_child_solo_parent_female = $_POST['total_number_of_student_applicants_are_child_solo_parent_female'];
        
        $total_number_of_student_applicants_are_member_of_IPs = $_POST['total_number_of_student_applicants_are_member_of_IPs'];
        $total_number_of_student_applicants_are_member_of_IPs_male = $_POST['total_number_of_student_applicants_are_member_of_IPs_male'];
        $total_number_of_student_applicants_are_member_of_IPs_female = $_POST['total_number_of_student_applicants_are_member_of_IPs_female'];
        
        $student_applicants_belong_to_low_income_families = $_POST['student_applicants_belong_to_low_income_families'];
        $student_applicants_belong_to_LGBTQIA_group = $_POST['student_applicants_belong_to_LGBTQIA_group'];
        $student_applicants_are_refugee = $_POST['student_applicants_are_refugee'];
        $student_applicants_have_a_disability = $_POST['student_applicants_have_a_disability'];
        $student_applicants_are_child_of_solo_parent = $_POST['student_applicants_are_child_of_solo_parent'];
        $student_applicants_are_member_of_IPs = $_POST['student_applicants_are_member_of_IPs'];
        $student_applicants_tracking_evidence = $_POST['student_applicants_tracking_evidence'];

        $total_number_of_job_applicants_who_belong_to_low_income = $_POST['total_number_of_job_applicants_belong_to_low_income'];
        $total_number_of_job_applicants_who_belong_to_low_income_male = $_POST['total_number_of_job_applicants_belong_to_low_income_male'];
        $total_number_of_job_applicants_belong_to_low_income_female = $_POST['total_number_of_job_applicants_belong_to_low_income_female'];
        
        $total_number_of_job_applicants_belong_to_LGBTQIA_group = $_POST['total_number_of_job_applicants_belong_to_LGBTQIA_group'];
        $total_number_of_job_applicants_belong_to_LGBTQIA_group_male = $_POST['total_number_of_job_applicants_belong_to_LGBTQIA_group_male'];
        $total_number_of_job_applicants_belong_to_LGBTQIA_group_female = $_POST['total_number_of_job_applicants_belong_to_LGBTQIA_group_female'];
        
        $total_number_of_job_applicants_who_are_refugee = $_POST['total_number_of_job_applicants_who_are_refugee'];
        $total_number_of_job_applicants_who_are_refugee_male = $_POST['total_number_of_job_applicants_who_are_refugee_male'];
        $total_number_of_job_applicants_who_are_refugee_female = $_POST['total_number_of_job_applicants_who_are_refugee_female'];
        
        $total_number_of_job_applicants_who_are_disabled  = $_POST['total_number_of_job_applicants_who_are_disabled'];
        $total_number_of_job_applicants_who_are_disabled_male  = $_POST['total_number_of_job_applicants_who_are_disabled_male'];
        $total_number_of_job_applicants_who_are_disabled_female = $_POST['total_number_of_job_applicants_who_are_disabled_female'];

        $total_number_of_job_applicants_are_child_of_solo_parent = $_POST['total_number_of_job_applicants_are_child_of_solo_parent'];
        $total_number_of_job_applicants_are_child_of_solo_parent_male = $_POST['total_number_of_job_applicants_are_child_of_solo_parent_male'];
        $total_number_of_job_applicants_are_child_solo_parent_female = $_POST['total_number_of_job_applicants_are_child_of_solo_parent_female'];

        $total_number_of_job_applicants_are_member_of_IPs = $_POST['total_number_of_job_applicants_are_member_of_IPs'];
        $total_number_of_job_applicants_are_member_of_IPs_male = $_POST['total_number_of_job_applicants_are_member_of_IPs_male'];
        $total_number_of_job_applicants_are_member_of_IPs_female = $_POST['total_number_of_job_applicants_are_member_of_IPs_female'];
        
        $job_applicants_belong_to_low_income_families = $_POST['job_applicants_belong_to_low_income_families'];
        $job_applicants_belong_to_LGBTQIA_group = $_POST['job_applicants_belong_to_LGBTQIA_group'];
        $job_applicants_are_refugee = $_POST['job_applicants_are_refugee'];
        $job_applicants_have_a_disability = $_POST['job_applicants_have_a_disability'];
        $job_applicants_are_child_of_solo_parent = $_POST['job_applicants_are_child_of_solo_parent'];
        $job_applicants_are_member_of_IPs = $_POST['job_applicants_are_member_of_IPs'];
        $job_applicants_tracking_evidence = $_POST['job_applicants_tracking_evidence'];

        // SQL query to insert data into table
        $query = "INSERT INTO `10.8.2 Access to university underrepresented groups applications` 
        (total_number_of_student_applicants_belong_to_low_income,
            total_number_of_student_applicants_belong_to_low_income_male,
                 total_number_of_student_applicants_belong_to_low_income_female, 
                 total_number_of_student_applicants_belong_to_LGBTQIA_group, 
                 total_number_of_student_applicants_belong_to_LGBTQIA_group_male, 
                 total_number_of_student_applicant_belong_LGBTQIA_group_female, 
                 total_number_of_student_applicants_who_are_refugee, 
                 total_number_of_student_applicants_who_are_refugee_male, 
                 total_number_of_student_applicants_who_are_refugee_female, 
                 total_number_of_student_applicants_who_are_disabled, 
                 total_number_of_student_applicants_who_are_disabled_male, 
                 total_number_of_student_applicants_who_are_disabled_female, 
                 total_number_of_student_applicants_are_child_of_solo_parent,
                 total_number_of_student_applicants_are_child_of_solo_parent_male,
                 total_number_of_student_applicants_are_child_solo_parent_female,
                 total_number_of_student_applicants_are_member_of_IPs,
                 total_number_of_student_applicants_are_member_of_IPs_male,
                 total_number_of_student_applicants_are_member_of_IPs_female,
                 student_applicants_belong_to_low_income_families, 
                 student_applicants_belong_to_LGBTQIA_group, 
                 student_applicants_are_refugee, 
                 student_applicants_have_a_disability, 
                 student_applicants_are_child_of_solo_parent, 
                 student_applicants_are_member_of_IPs, 
                 student_applicants_tracking_evidence, 
                 total_number_of_job_applicants_who_belong_to_low_income, 
                 total_number_of_job_applicants_who_belong_to_low_income_male, 
                 total_number_of_job_applicants_who_belong_to_low_income_female,
                 total_number_of_job_applicants_who_belong_to_LGBTQIA_group, 
                 total_number_of_job_applicants_who_belong_to_LGBTQIA_group_male, 
                 total_number_of_job_applicants_who_belong_LGBTQIA_group_female, 
                 total_number_of_job_applicants_who_are_refugee, 
                 total_number_of_job_applicants_who_are_refugee_male, 
                 total_number_of_job_applicants_who_are_refugee_female, 
                 total_number_of_job_applicants_who_are_disabled, 
                 total_number_of_job_applicants_who_are_disabled_male, 
                 total_number_of_job_applicants_who_are_disabled_female, 
                 total_number_of_job_applicants_are_child_of_solo_parent, 
                 total_number_of_job_applicants_are_child_of_solo_parent_male, 
                 total_number_of_job_applicants_are_child_solo_parent_female,
                 total_number_of_job_applicants_are_member_of_IPs, 
                 total_number_of_job_applicants_are_member_of_IPs_male, 
                 total_number_of_job_applicants_are_member_of_IPs_female, 
                 job_applicants_belong_to_low_income_families, 
                 job_applicants_belong_to_LGBTQIA_group, 
                 job_applicants_are_refugee, 
                 job_applicants_have_a_disability, 
                 job_applicants_are_child_of_solo_parent, 
                 job_applicants_are_member_of_IPs, 
                 job_applicants_tracking_evidence) 
                 VALUES ('$total_number_of_student_applicants_belong_to_low_income',
    '$total_number_of_student_applicants_belong_to_low_income_male',
    '$total_number_of_student_applicants_belong_to_low_income_female', 
    '$total_number_of_student_applicants_belong_to_LGBTQIA_group', 
    '$total_number_of_student_applicants_belong_to_LGBTQIA_group_male', 
    '$total_number_of_student_applicant_belong_LGBTQIA_group_female', 
    '$total_number_of_student_applicants_who_are_refugee', 
    '$total_number_of_student_applicants_who_are_refugee_male', 
    '$total_number_of_student_applicants_who_are_refugee_female', 
    '$total_number_of_student_applicants_who_are_disabled', 
    '$total_number_of_student_applicants_who_are_disabled_male', 
    '$total_number_of_student_applicants_who_are_disabled_female', 
    '$total_number_of_student_applicants_are_child_of_solo_parent',
    '$total_number_of_student_applicants_are_child_of_solo_parent_male',
    '$total_number_of_student_applicants_are_child_solo_parent_female',
    '$total_number_of_student_applicants_are_member_of_IPs',
    '$total_number_of_student_applicants_are_member_of_IPs_male',
    '$total_number_of_student_applicants_are_member_of_IPs_female',
    '$student_applicants_belong_to_low_income_families', 
    '$student_applicants_belong_to_LGBTQIA_group', 
    '$student_applicants_are_refugee', 
    '$student_applicants_have_a_disability', 
    '$student_applicants_are_child_of_solo_parent', 
    '$student_applicants_are_member_of_IPs', 
    '$student_applicants_tracking_evidence', 
    '$total_number_of_job_applicants_who_belong_to_low_income', 
    '$total_number_of_job_applicants_who_belong_to_low_income_male', 
    '$total_number_of_job_applicants_who_belong_to_low_income_female',
    '$total_number_of_job_applicants_who_belong_to_LGBTQIA_group', 
    '$total_number_of_job_applicants_who_belong_to_LGBTQIA_group_male', 
    '$total_number_of_job_applicants_who_belong_to_LGBTQIA_group_female', 
    '$total_number_of_job_applicants_who_are_refugee', 
    '$total_number_of_job_applicants_who_are_refugee_male', 
    '$total_number_of_job_applicants_who_are_refugee_female', 
    '$total_number_of_job_applicants_who_are_disabled', 
    '$total_number_of_job_applicants_who_are_disabled_male', 
    '$total_number_of_job_applicants_who_are_disabled_female', 
    '$total_number_of_job_applicants_are_child_of_solo_parent', 
    '$total_number_of_job_applicants_are_child_of_solo_parent_male', 
    '$total_number_of_job_applicants_are_child_solo_parent_female',
    '$total_number_of_job_applicants_are_member_of_IPs', 
    '$total_number_of_job_applicants_are_member_of_IPs_male', 
    '$total_number_of_job_applicants_are_member_of_IPs_female', 
    '$job_applicants_belong_to_low_income_families', 
    '$job_applicants_belong_to_LGBTQIA_group', 
    '$job_applicants_are_refugee', 
    '$job_applicants_have_a_disability', 
    '$job_applicants_are_child_of_solo_parent', 
    '$job_applicants_are_member_of_IPs', 
    '$job_applicants_tracking_evidence')";
            


        $add_data = mysqli_query($connect, $query); // send data to database

        // Check if the query was successful
        if (!$add_data) {
            echo "Something went wrong!" . mysqli_error($connect);
        } else {
            echo "<script type='text/javascript'>alert('Record added successfully')</script>";
        }
    }
    
    // Query to fetch the most recent entry
    $query_fetch = "SELECT * FROM `10.8.2 Access to university underrepresented groups applications` ORDER BY id DESC LIMIT 1";
    $result_fetch = mysqli_query($connect, $query_fetch);

    if ($result_fetch) {
        $current_data = mysqli_fetch_assoc($result_fetch);
    } else {
        echo "Error fetching data: " . mysqli_error($connect);
        $current_data = array(); // Initialize as empty array to avoid errors in the form
    }
    ?>

<div class="form-container">
    
    <div class="form-group">
        Measure and track applications and admissions of underrepresented (and potentially underrepresented) groups including ethnic minorities, low-income students, non-traditional students, women, LGBTQIA+ students, disabled students and newly settled refugee students.
    </div>
    <div class="form-group">
    <h4>Student applicants tracking</h4>
    </div>

    <div class="form-group">
        <label>Total number of student applicants who belong to low-income families:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_belong_to_low_income']) ? $current_data['total_number_of_student_applicants_belong_to_low_income'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_belong_to_low_income_male']) ? $current_data['total_number_of_student_applicants_belong_to_low_income_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_belong_to_low_income_female']) ? $current_data['total_number_of_student_applicants_belong_to_low_income_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of student applicants who belong to LGBTQIA+ group:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_belong_to_LGBTQIA_group']) ? $current_data['total_number_of_student_applicants_belong_to_LGBTQIA_group'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_belong_to_LGBTQIA_group_male']) ? $current_data['total_number_of_student_applicants_belong_to_LGBTQIA_group_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicant_belong_to_LGBTQIA_group_female']) ? $current_data['total_number_of_student_applicant_belong_to_LGBTQIA_group_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of student applicants who are refugees:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_who_are_refugee']) ? $current_data['total_number_of_student_applicants_who_are_refugee'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_who_are_refugee_male']) ? $current_data['total_number_of_student_applicants_who_are_refugee_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_who_are_refugee_female']) ? $current_data['total_number_of_student_applicants_who_are_refugee_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of student applicants who are disabled:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_who_are_disabled']) ? $current_data['total_number_of_student_applicants_who_are_disabled'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_who_are_disabled_male']) ? $current_data['total_number_of_student_applicants_who_are_disabled_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_who_are_disabled_female']) ? $current_data['total_number_of_student_applicants_who_are_disabled_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of student applicants who are child of solo parents:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_are_child_of_solo_parent']) ? $current_data['total_number_of_student_applicants_are_child_of_solo_parent'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_are_child_of_solo_parent_male']) ? $current_data['total_number_of_student_applicants_are_child_of_solo_parent_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_are_child_of_solo_parent_female']) ? $current_data['total_number_of_student_applicants_are_child_of_solo_parent_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of student applicants who are members of Indigenous Peoples (IPs):
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_are_member_of_IPs']) ? $current_data['total_number_of_student_applicants_are_member_of_IPs'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_are_member_of_IPs_male']) ? $current_data['total_number_of_student_applicants_are_member_of_IPs_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_student_applicants_are_member_of_IPs_female']) ? $current_data['total_number_of_student_applicants_are_member_of_IPs_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['student_applicants_belong_to_low_income_families']) ? $current_data['student_applicants_belong_to_low_income_families'] : 'N/A'; ?>
            </span>% of student applicants belong to low-income families
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['student_applicants_belong_to_LGBTQIA_group']) ? $current_data['student_applicants_belong_to_LGBTQIA_group'] : 'N/A'; ?>
            </span>% of student applicants belong to LGBTQIA+ group:
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['student_applicants_are_refugee']) ? $current_data['student_applicants_are_refugee'] : 'N/A'; ?>
            </span> % of student applicants are refugee
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['student_applicants_have_a_disability']) ? $current_data['student_applicants_have_a_disability'] : 'N/A'; ?>
            </span>% of student applicants have a disability
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['student_applicants_are_child_of_solo_parent']) ? $current_data['student_applicants_are_child_of_solo_parent'] : 'N/A'; ?>
            </span>% of student applicants are child of solo parent
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['student_applicants_are_member_of_IPs']) ? $current_data['student_applicants_are_member_of_IPs'] : 'N/A'; ?>
            </span>% of student applicants are members of Indigenous Peoples (IPs)
        </label>
    </div>

    <div class="form-group">
        <label>Evidence:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['student_applicants_tracking_evidence']) ? $current_data['student_applicants_tracking_evidence'] : 'N/A'; ?>
            </span>
        </label>
    </div>

    <div class="form-group">
    <h4>Job applicants tracking</h4>
    </div>

    <div class="form-group">
        <label>Total number of job applicants who belong to low-income families:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_belong_to_low_income']) ? $current_data['total_number_of_job_applicants_who_belong_to_low_income'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_belong_to_low_income_male']) ? $current_data['total_number_of_job_applicants_who_belong_to_low_income_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_belong_to_low_income_female']) ? $current_data['total_number_of_job_applicants_who_belong_to_low_income_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of job applicants who belong to LGBTQIA+ group:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_belong_to_LGBTQIA_group']) ? $current_data['total_number_of_job_applicants_who_belong_to_LGBTQIA_group'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_belong_to_LGBTQIA_group_male']) ? $current_data['total_number_of_job_applicants_who_belong_to_LGBTQIA_group_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_belong_to_LGBTQIA_group_female']) ? $current_data['total_number_of_job_applicants_who_belong_to_LGBTQIA_group_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of job applicants who are refugees:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_are_refugee']) ? $current_data['total_number_of_job_applicants_who_are_refugee'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_are_refugee_male']) ? $current_data['total_number_of_job_applicants_who_are_refugee_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_are_refugee_female']) ? $current_data['total_number_of_job_applicants_who_are_refugee_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of job applicants who are disabled:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_are_disabled']) ? $current_data['total_number_of_job_applicants_who_are_disabled'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_are_disabled_male']) ? $current_data['total_number_of_job_applicants_who_are_disabled_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_who_are_disabled_female']) ? $current_data['total_number_of_job_applicants_who_are_disabled_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of job applicants who are children of solo parents:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_are_child_of_solo_parent']) ? $current_data['total_number_of_job_applicants_are_child_of_solo_parent'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_are_child_of_solo_parent_male']) ? $current_data['total_number_of_job_applicants_are_child_of_solo_parent_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_are_child_of_solo_parent_female']) ? $current_data['total_number_of_job_applicants_are_child_of_solo_parent_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>Total number of job applicants who are members of Indigenous Peoples (IPs):
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_are_member_of_IPs']) ? $current_data['total_number_of_job_applicants_are_member_of_IPs'] : 'N/A'; ?>
            </span>
            (Male:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_are_member_of_IPs_male']) ? $current_data['total_number_of_job_applicants_are_member_of_IPs_male'] : 'N/A'; ?>
            </span>
            / Female:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['total_number_of_job_applicants_are_member_of_IPs_female']) ? $current_data['total_number_of_job_applicants_are_member_of_IPs_female'] : 'N/A'; ?>
            </span>
            )
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['job_applicants_belong_to_low_income_families']) ? $current_data['job_applicants_belong_to_low_income_families'] : 'N/A'; ?>
            </span>% of job applicants belong to low-income families
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['job_applicants_belong_to_LGBTQIA_group']) ? $current_data['job_applicants_belong_to_LGBTQIA_group'] : 'N/A'; ?>
            </span>% of job applicants belong to LGBTQIA+ group
        </label>
    </div>

    <div class="form-group">
        <label>Job applicants are refugees:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['job_applicants_are_refugee']) ? $current_data['job_applicants_are_refugee'] : 'N/A'; ?>
            </span>% of job applicants are refugee
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['job_applicants_have_a_disability']) ? $current_data['job_applicants_have_a_disability'] : 'N/A'; ?>
            </span>% of job applicants have a disability
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['job_applicants_are_child_of_solo_parent']) ? $current_data['job_applicants_are_child_of_solo_parent'] : 'N/A'; ?>
            </span>% of job applicants are child of solo parent
        </label>
    </div>

    <div class="form-group">
        <label>
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['job_applicants_are_member_of_IPs']) ? $current_data['job_applicants_are_member_of_IPs'] : 'N/A'; ?>
            </span>% of job applicants are members of Indigenous Peoples (IPs)
        </label>
    </div>

    <div class="form-group">
        <label>Evidence:
            <span style="text-decoration: underline; font-weight: bold;">
                <?php echo isset($current_data['job_applicants_tracking_evidence']) ? $current_data['job_applicants_tracking_evidence'] : 'N/A'; ?>
            </span>
        </label>
    </div>

</div>

</body>

</html>