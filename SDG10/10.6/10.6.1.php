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
    10.6.1 Proportion of students based on religion</div>
  <div class="sidebar">
    <div class="sdg10-picture">
      <img class="sdg10-icon" src="../pictures/E_SDG_Icons-10.jpg">
    </div>

    <div class="Indicators">
      <div class="home-button"><a href="../index.php ">Home</a></div>
      <div class="indicator1"><a href="../10.1/10.1.php">10.1 Research on reduced inequalities</a></div>
      <div class="indicator1"><a href="../10.3/10.3.php">10.3 Proportion of students and employees with disabilities</a></div>
      <div class="indicator1 "><a href="../10.4/10.4.php">10.4 Proportion of students and employees who belong to Indigenous Peoples (IPs) group</a></div>
      <div class="indicator1 "><a href="../10.5/10.5.php">10.5 Proportion of students and employees who are member of LGBTQIA+ group</a></div>
      <div class="indicator1 active-page"><a href="../10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
      <div class="indicator1"><a href="../10.7/10.7.php">10.7 Proportion of refugee students and employees</a></div>
      <div class="indicator1"><a href="../10.8/10.8.php">10.8 Measures against discrimination on students and employees</a></div>
    </div>
  </div>

  <div class="container">
        <a href="10.6.1_update.php" class="update-button">Update Records</a>
    </div>


  <?php
    // Database connection
    if (isset($_POST['create'])) {
        // Collect form data
        $total_numbers = $_POST['total_numbers'];
        $male_students = $_POST['male_students'];
        $female_students = $_POST['female_students'];
        $Aglipayan_total = $_POST['Aglipayan_total'];
        $Born_Again_total = $_POST['Born_Again_total'];
        $Buddhism_total = $_POST['Buddhism_total'];
        $Hinduism_total = $_POST['Hinduism_total'];
        $Iglesia_ni_Cristo_total = $_POST['Iglesia_ni_Cristo_total'];
        $Islam_total = $_POST['Islam_total'];
        $Jehovahs_Witnesses_total = $_POST['Jehovahs_Witnesses_total'];
        $Latter_Day_Saints_total = $_POST['Latter_Day_Saints_total'];
        $Protestant_total = $_POST['Protestant_total'];
        $Roman_Catholic_total = $_POST['Roman_Catholic_total'];
        $Seventh_day_Adventists_total = $_POST['Seventh_day_Adventists_total'];
        $Others_total = $_POST['Others_total'];
        $Aglipayan_male = $_POST['Aglipayan_male'];
        $Aglipayan_female = $_POST['Aglipayan_female'];
        $Born_Again_male = $_POST['Born_Again_male'];
        $Born_Again_female = $_POST['Born_Again_female'];
        $Buddhism_male = $_POST['Buddhism_male'];
        $Buddhism_female = $_POST['Buddhism_female'];
        $Hinduism_male = $_POST['Hinduism_male'];
        $Hinduism_female = $_POST['Hinduism_female'];
        $Iglesia_ni_Cristo_male = $_POST['Iglesia_ni_Cristo_male'];
        $Iglesia_ni_Cristo_female = $_POST['Iglesia_ni_Cristo_female'];
        $Islam_male = $_POST['Islam_male'];
        $Islam_female = $_POST['Islam_female'];
        $Jehovahs_Witnesses_male = $_POST['Jehovahs_Witnesses_male'];
        $Jehovahs_Witnesses_female = $_POST['Jehovahs_Witnesses_female'];
        $Latter_Day_Saints_male = $_POST['Latter_Day_Saints_male'];
        $Latter_Day_Saints_female = $_POST['Latter_Day_Saints_female'];
        $Protestant_male = $_POST['Protestant_male'];
        $Protestant_female = $_POST['Protestant_female'];
        $Roman_Catholic_male = $_POST['Roman_Catholic_male'];
        $Roman_Catholic_female = $_POST['Roman_Catholic_female'];
        $Seventh_day_Adventists_male = $_POST['Seventh_day_Adventists_male'];
        $Seventh_day_Adventists_female = $_POST['Seventh_day_Adventists_female'];
        $Others_male = $_POST['Others_male'];
        $Others_female = $_POST['Others_female'];
        $first_religion_name = $_POST['first_religion_name'];
        $first_percentage = $_POST['first_percentage'];
        $second_religion_name = $_POST['second_religion_name'];
        $second_percentage = $_POST['second_percentage'];
        $third_religion_name = $_POST['third_religion_name'];
        $third_percentage = $_POST['third_percentage'];
        $total_number_of_students_not_affiliated = $_POST['total_number_of_students_not_affiliated'];
        $total_percentage_of_students_not_affiliated = $_POST['total_percentage_of_students_not_affiliated'];


        // SQL query to insert data into table
        $query = "INSERT INTO `10.6.1 Proportion of students based on religion` 
        (Total_number_of_students_who_belongs_to_religious_groups, 
        total_number_of_students_who_belongs_to_religious_groups_male, 
        total_number_of_students_who_belongs_to_religious_groups_female, 
        Aglipayan_total,
        Born_Again_total,
        Buddhism_total,
        Hinduism_total,
        Iglesia_ni_Cristo_total,
        Islam_total,
        Jehovahs_Witnesses_total,
        Latter_Day_Saints_total,
        Protestant_total,
        Roman_Catholic_total,
        Seventh_day_Adventists_total,
        Others_total,
        Aglipayan_male, Aglipayan_female, 
        Born_Again_male, Born_Again_female, 
        Buddhism_male, Buddhism_female, 
        Hinduism_male, Hinduism_female, 
        Iglesia_ni_Cristo_male, Iglesia_ni_Cristo_female, 
        Islam_male, Islam_female, 
        Jehovahs_Witnesses_male, Jehovahs_Witnesses_female, 
        Latter_Day_Saints_male, Latter_Day_Saints_female, 
        Protestant_male, Protestant_female, 
        Roman_Catholic_male, Roman_Catholic_female, 
        Seventh_day_Adventists_male, Seventh_day_Adventists_female, 
        Others_male, Others_female, 
        first_religion_name, first_percentage, 
        second_religion_name, second_percentage, 
        third_religion_name, third_percentage, 
        total_number_of_students_not_affiliated, 
        total_percentage_of_students_not_affiliated)  
        VALUES (
        '$total_numbers', '$male_students', '$female_students', 
        '$Aglipayan_total', '$Aglipayan_male', '$Aglipayan_female', 
        '$Born_Again_total', '$Born_Again_male', '$Born_Again_female', 
        '$Buddhism_total', '$Buddhism_male', '$Buddhism_female', 
        '$Hinduism_total', '$Hinduism_male', '$Hinduism_female', 
        '$Iglesia_ni_Cristo_total', '$Iglesia_ni_Cristo_male', '$Iglesia_ni_Cristo_female', 
        '$Islam_total', '$Islam_male', '$Islam_female', 
        '$Jehovahs_Witnesses_total', '$Jehovahs_Witnesses_male', '$Jehovahs_Witnesses_female', 
        '$Latter_Day_Saints_total', '$Latter_Day_Saints_male', '$Latter_Day_Saints_female', 
        '$Protestant_total', '$Protestant_male', '$Protestant_female', 
        '$Roman_Catholic_total', '$Roman_Catholic_male', '$Roman_Catholic_female', 
        '$Seventh_day_Adventists_total', '$Seventh_day_Adventists_male', '$Seventh_day_Adventists_female', 
        '$Others_total', '$Others_male', '$Others_female', 
        '$first_religion_name', '$first_percentage', 
        '$second_religion_name', '$second_percentage', 
        '$third_religion_name', '$third_percentage', 
        '$total_number_of_students_not_affiliated', 
        '$total_percentage_of_students_not_affiliated'')";

        $add_data = mysqli_query($connect, $query); // send data to database

        // Check if the query was successful
        if (!$add_data) {
            echo "Something went wrong!" . mysqli_error($connect);
        } else {
            echo "<script type='text/javascript'>alert('Record added successfully')</script>";
        }
    }

    // Query to fetch the most recent entry
    $query_fetch = "SELECT * FROM `10.6.1 Proportion of students based on religion` ORDER BY id DESC LIMIT 1";
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
            <label>Total number of students who belong to religious groups:
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['Total_number_of_students_who_belongs_to_religious_groups']) ? $current_data['Total_number_of_students_who_belongs_to_religious_groups'] : 'N/A'; ?>
                </span>
                (Male:
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_number_of_students_who_belongs_to_religious_groups_male']) ? $current_data['total_number_of_students_who_belongs_to_religious_groups_male'] : 'N/A'; ?>
                </span>
                / Female:
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_number_of_students_who_belongs_to_religious_groups_female']) ? $current_data['total_number_of_students_who_belongs_to_religious_groups_female'] : 'N/A'; ?>
                </span>
                )
            </label>
        </div>

        <ul>
            <?php
            $religions = [
                'Aglipayan' => 'Aglipayan',
                'Born_Again' => 'Born Again',
                'Buddhism' => 'Buddhism',
                'Hinduism' => 'Hinduism',
                'Iglesia_ni_Cristo' => 'Iglesia ni Cristo',
                'Islam' => 'Islam',
                'Jehovahs_Witnesses' => 'Jehovah\'s Witnesses',
                'Latter_Day_Saints' => 'Latter-Day Saints',
                'Protestant' => 'Protestant',
                'Roman_Catholic' => 'Roman Catholic',
                'Seventh_day_Adventists' => 'Seventh-day Adventists',
                'Others' => 'Others'
            ];

            foreach ($religions as $key => $label) {
                $total_key = $key .'_total';
                $male_key = $key . '_male';
                $female_key = $key . '_female';
                echo '<li>
                        <div class="form-group">
                            <label>' . $label . ':
                                <span style="text-decoration: underline; font-weight: bold;">
                                    ' . (isset($current_data[$total_key]) ? $current_data[$total_key] : 'N/A') . '
                                </span> (Male:
                                <span style="text-decoration: underline; font-weight: bold;">
                                    ' . (isset($current_data[$male_key]) ? $current_data[$male_key] : 'N/A') . '
                                </span>  / Female:
                                <span style="text-decoration: underline; font-weight: bold;">
                                    ' . (isset($current_data[$female_key]) ? $current_data[$female_key] : 'N/A') . '
                                </span> )
                            </label>
                        </div>
                      </li>';
            }
            ?>
        </ul>

        <div class="form-group">
            <label>
                Majority of the student population belongs to
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['first_religion_name']) ? $current_data['first_religion_name'] : 'N/A'; ?>
                </span>
                (
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['first_percentage']) ? $current_data['first_percentage'] . '%' : 'N/A'; ?>
                </span>
                ), followed by
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['second_religion_name']) ? $current_data['second_religion_name'] : 'N/A'; ?>
                </span> 
                (
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['second_percentage']) ? $current_data['second_percentage'] . '%' : 'N/A'; ?>
                </span>), and
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['third_religion_name']) ? $current_data['third_religion_name'] : 'N/A'; ?>
                </span> 
                (
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['third_percentage']) ? $current_data['third_percentage'] . '%' : 'N/A'; ?>
                </span>).
            </label>
        </div>
        <div class="form-group">
            <label>Meanwhile a total number of
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_number_of_students_not_affiliated']) ? $current_data['total_number_of_students_not_affiliated'] : 'N/A'; ?>
                </span> or
                <span style="text-decoration: underline; font-weight: bold;">
                    <?php echo isset($current_data['total_percentage_of_students_not_affiliated']) ? $current_data['total_percentage_of_students_not_affiliated'] . '%' : 'N/A'; ?>
                </span> of the student population are not affiliated with any religious denomination.
            </label>
        </div>
    </div>


</body>

</html>