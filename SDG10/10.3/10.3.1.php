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
    <link rel="stylesheet" href="../styles/10.3.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDG 10: Reduced Inequalities</title>

</head>

<body>
    <div class="header-SDG10">
        10.3.1 Proportion of students and employees with disabilities
    </div>
    <div class="sidebar">
        <div class="sdg10-picture">
            <img class="sdg10-icon" src="../pictures/E_SDG_Icons-10.jpg" alt="SDG 10 Icon">
        </div>
        <div class="Indicators">
            <div class="home-button"><a href="../index.php ">Home</a></div>
            <div class="indicator1"><a href="../10.1/10.1.php">10.1 Research on reduced inequalities</a></div>
            <div class="indicator1 active-page"><a href="10.3.php">10.3 Proportion of students and employees with disabilities</a></div>
            <div class="indicator1"><a href="../10.4/10.4.php">10.4 Proportion of students and employees who belong to Indigenous Peoples (IPs) group</a></div>
            <div class="indicator1"><a href="../10.5/10.5.php">10.5 Proportion of students and employees who are member of LGBTQIA+ group</a></div>
            <div class="indicator1"><a href="../10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
            <div class="indicator1"><a href="../10.7/10.7.php">10.7 Proportion of refugee students and employees</a></div>
            <div class="indicator1"><a href="../10.8/10.8.php">10.8 Measures against discrimination on students and employees</a></div>
        </div>
    </div>
    </div>

    <div class="container">
        <a href="10.3.1_update.php" class="update-button">Update Records</a>
    </div>

    <?php
    // Database connection

    if (isset($_POST['create'])) {
        // Collect form data
        $total_numbers = $_POST['total_numbers'];
        $male_students = $_POST['male_students'];
        $female_students = $_POST['female_students'];
        $psychosocial_disability = $_POST['psychosocial_disability'];
        $chronic_illness = $_POST['chronic_illness'];
        $learning_disability = $_POST['learning_disability'];
        $visual_disability = $_POST['visual_disability'];
        $orthopedic_disability = $_POST['orthopedic_disability'];
        $communication_disability = $_POST['communication_disability'];
        $pwd_prevalence = $_POST['pwd_prevalence'];
        $pwd_id_ownership = $_POST['pwd_id_ownership'];
        $pwd_id_prevalence = $_POST['pwd_id_prevalence'];

        // SQL query to insert data into table
        $query = "INSERT INTO `10.3.1 proportion of students with disabilities` 
        (total_number_of_students_with_disabilities, 
        total_number_of_students_with_disabilities_male, 
        total_number_of_students_with_disabilities_female, 
        psychosocial_disability, 
        disability_caused_by_chronic_illness, 
        learning_disability, visual_disability, 
        `orthopedic/locomotor_disability`, 
        communication_disability, 
        student_population_belongs_to_PWDs, 
        total_number_of_PWDs_students_that_have_PWD_ID,
        PWD_student_population_have_a_PWD_ID ) 
        VALUES (
        '$total_numbers', 
        '$male_students', 
        '$female_students', 
        '$psychosocial_disability',
        '$chronic_illness', 
        '$learning_disability', 
        '$visual_disability', 
        '$orthopedic_disability', 
        '$communication_disability', 
        '$pwd_prevalence',
        '$pwd_id_ownership', 
        '$pwd_id_prevalence')";

        $add_data = mysqli_query($connect, $query); // send data to database

        // Check if the query was successful
        if (!$add_data) {
            echo "Something went wrong!" . mysqli_error($connect);
        } else {
            echo "<script type='text/javascript'>alert('User added successfully')</script>";
        }
    }

    // Query to fetch the most recent entry
    $query_fetch = "SELECT * FROM `10.3.1 proportion of students with disabilities` ORDER BY id DESC LIMIT 1";
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
            <label>Total number of students with disabilities:
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_number_of_students_with_disabilities']) ? $current_data['total_number_of_students_with_disabilities'] : 'N/A'; ?>
                </span>
                (Male:
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_number_of_students_with_disabilities_male']) ? $current_data['total_number_of_students_with_disabilities_male'] : 'N/A'; ?>
                </span>
                / Female:
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_number_of_students_with_disabilities_female']) ? $current_data['total_number_of_students_with_disabilities_female'] : 'N/A'; ?>
                </span>
                )
            </label>
        </div>

        <ul>
            <li>
                <div class="form-group">
                    <label>Psychosocial disability (ex. anxiety, depression):
                        <span style="text-decoration: underline; font-weight: bold;">
                            <?php echo isset($current_data['psychosocial_disability']) ? $current_data['psychosocial_disability'] : 'N/A'; ?>
                        </span>
                    </label>
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label>Disability caused by chronic illness:
                        <span style="text-decoration: underline; font-weight: bold;">
                            <?php echo isset($current_data['disability_caused_by_chronic_illness']) ? $current_data['disability_caused_by_chronic_illness'] : 'N/A'; ?>
                        </span>
                    </label>
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label>Learning disability:
                        <span style="text-decoration: underline; font-weight: bold;">
                            <?php echo isset($current_data['learning_disability']) ? $current_data['learning_disability'] : 'N/A'; ?>
                        </span>
                    </label>
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label>Visual disability:
                        <span style="text-decoration: underline; font-weight: bold;">
                            <?php echo isset($current_data['visual_disability']) ? $current_data['visual_disability'] : 'N/A'; ?>
                        </span>
                    </label>
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label>Orthopedic/Locomotor disability:
                        <span style="text-decoration: underline; font-weight: bold;">
                            <?php echo isset($current_data['orthopedic/locomotor_disability']) ? $current_data['orthopedic/locomotor_disability'] : 'N/A'; ?>
                        </span>
                    </label>
                </div>
            </li>
            <li>
                <div class="form-group">
                    <label>Communication disability:
                        <span style="text-decoration: underline; font-weight: bold;">
                            <?php echo isset($current_data['communication_disability']) ? $current_data['communication_disability'] : 'N/A'; ?>
                        </span>
                    </label>
                </div>
            </li>
        </ul>

        <div class="form-group">
            <label>
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['student_population_belongs_to_PWDs']) ? $current_data['student_population_belongs_to_PWDs'] : 'N/A'; ?>
                </span>% of the student population belongs to PWDs
            </label>
        </div>
        <div class="form-group">
            <label>Total number of PWDs students that have PWD ID:
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_number_of_PWDs_students_that_have_PWD_ID']) ? $current_data['total_number_of_PWDs_students_that_have_PWD_ID'] : 'N/A'; ?>
                </span>
            </label>
        </div>
        <div class="form-group">
            <label>
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['PWD_student_population_have_a_PWD_ID']) ? $current_data['PWD_student_population_have_a_PWD_ID'] : 'N/A'; ?>
                </span> % of the PWD student population have a PWD ID
            </label>
        </div>
    </div>

</body>

</html>