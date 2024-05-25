<?php include "../db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/10.4.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDG 10: Reduced Inequalities</title>

</head>

<body>
    <div class="header-SDG10">
        10.5.1 Proportion of students who are member of LGBTQIA+ group
    </div>
    <div class="sidebar">
        <div class="sdg10-picture">
            <img class="sdg10-icon" src="../pictures/E_SDG_Icons-10.jpg" alt="SDG 10 Icon">
        </div>
        <div class="Indicators">
            <div class="home-button"><a href="../index.php ">Home</a></div>
            <div class="indicator1"><a href="../10.1/10.1.php">10.1 Research on reduced inequalities</a></div>
            <div class="indicator1"><a href="../10.3/10.3.php">10.3 Proportion of students and employees with disabilities</a></div>
            <div class="indicator1 "><a href="../10.4/10.4.php">10.4 Proportion of students and employees who belong to Indigenous Peoples (IPs) group</a></div>
            <div class="indicator1 active-page"><a href="10.5.php">10.5 Proportion of students and employees who are member of LGBTQIA+ group</a></div>
            <div class="indicator1"><a href="../10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
      <div class="indicator1"><a href="../10.7/10.7.php">10.7 Proportion of refugee students and employees</a></div>
      <div class="indicator1"><a href="../10.8/10.8.php">10.8 Measures against discrimination on students and employees</a></div>
        </div>
    </div>

    <div class="container">
        <a href="10.5.1_update.php" class="update-button">Update Records</a>
    </div>

    <?php
    // Database connection

    if (isset($_POST['create'])) {
        // Collect form data
        $total_numbers = $_POST['total_numbers'];
        $LGBTQIA_prevalence = $_POST['IPs_prevalence'];


        // SQL query to insert data into table
        $query = "INSERT INTO `10.5.1 proportion of students who are member of LGBTQIA+ group` 
        (`total_number_of_students_who_are_member_of_LGBTQIA+`, 
        `student_population_are_members_of_LGBTQIA+_group` ) 
        VALUES (
        '$total_numbers', 
        '$LGBTQIA_prevalence')";

        $add_data = mysqli_query($connect, $query); // send data to database

        // Check if the query was successful
        if (!$add_data) {
            echo "Something went wrong!" . mysqli_error($connect);
        } else {
            echo "<script type='text/javascript'>alert('User added successfully')</script>";
        }
    }

    // Query to fetch the most recent entry
    $query_fetch = "SELECT * FROM `10.5.1 proportion of students who are member of LGBTQIA+ group` ORDER BY id DESC LIMIT 1";
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
            <label>Total number of students who are member of LGBTQIA+:
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_number_of_students_who_are_member_of_LGBTQIA+']) ? $current_data['total_number_of_students_who_are_member_of_LGBTQIA+'] : 'N/A'; ?>
                </span>
            </label>
        </div>
        
        <div class="form-group">
            <label>
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['student_population_are_members_of_LGBTQIA+_group']) ? $current_data['student_population_are_members_of_LGBTQIA+_group'] : 'N/A'; ?>
                </span>% of student population are members of LGBTQIA+ group.
            </label>
        </div>

    </div>

</body>

</html>