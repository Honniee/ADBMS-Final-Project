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
  <link rel="stylesheet" href="../styles/10.6.1_update.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>SDG 10: Reduced Inequalities </title>
</head>

<body>
  <div class=header-SDG10>
    10.6.2 Proportion of employees based on religion</div>
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
        <a href="10.6.2.php" class="back-button">Back</a>
    </div>


  <?php
    // Database connection
    if (isset($_POST['create'])) {
        // Collect form data
        $total_numbers = $_POST['total_numbers'];
        $male_employees = $_POST['male_employees'];
        $female_employees = $_POST['female_employees'];
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
        $total_number_of_employees_not_affiliated = $_POST['total_number_of_employees_not_affiliated'];
        $total_percentage_of_employees_not_affiliated = $_POST['total_percentage_of_employees_not_affiliated'];
        

        // SQL query to insert data into table
        $query = "INSERT INTO `10.6.2 Proportion of employees based on religion` 
        (Total_number_of_employees_who_belongs_to_religious_groups, 
        total_number_of_employees_who_belongs_to_religious_groups_male, 
        total_number_of_employees_who_belongs_to_religious_groups_female, 
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
        total_number_of_employees_not_affiliated, 
        total_percentage_of_employees_not_affiliated) 
        VALUES (
        '$total_numbers', '$male_employees', '$female_employees', 
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
        '$total_number_of_employees_not_affiliated', 
        '$total_percentage_of_employees_not_affiliated')";


        $add_data = mysqli_query($connect, $query); // send data to database

        // Check if the query was successful
        if (!$add_data) {
            echo "Something went wrong!" . mysqli_error($connect);
        } else {
            echo "<script type='text/javascript'>alert('Record added successfully')</script>";
        }
    }

    // Query to fetch the most recent entry
    $query_fetch = "SELECT * FROM `10.6.2 Proportion of employees based on religion` ORDER BY id DESC LIMIT 1";
    $result_fetch = mysqli_query($connect, $query_fetch);

    if ($result_fetch) {
        $current_data = mysqli_fetch_assoc($result_fetch);
    } else {
        echo "Error fetching data: " . mysqli_error($connect);
        $current_data = array(); // Initialize as empty array to avoid errors in the form
    }
    ?>
<div class="form-container">
        <form action="" method="POST">
            <div class="form-group">
            <label for="total_numbers">Total number of employees who belongs to religious groups:
                    <input type="number" name="total_numbers" id="total_numbers" value="<?php echo isset($current_data['Total_number_of_employees_who_belongs_to_religious_groups']) ? $current_data['Total_number_of_employees_who_belongs_to_religious_groups'] : ''; ?>">
                    (Male: <input type="number" name="male_employees" id="male_employees" value="<?php echo isset($current_data[' total_number_of_employees_who_belongs_to_religious_groups_female']) ? $current_data[' total_number_of_employees_who_belongs_to_religious_groups_female'] : ''; ?>"> 
                    / Female: <input type="number" name="female_employees" id="female_employees" value="<?php echo isset($current_data['total_number_of_employees_with_disabilities_female']) ? $current_data['total_number_of_employees_with_disabilities_female'] : ''; ?>">
                    )
                </label>
                
                <ul>
                    <li>
                        <div class="form-group">
                            <label for="Aglipayan_total">Aglipayan:
                                <input type="number" name="Aglipayan_total" id="Aglipayan_total" value="<?php echo isset($current_data['Aglipayan_total']) ? $current_data['Aglipayan_total'] : ''; ?>">
                                (Male: <input type="number" name="Aglipayan_male" id="Aglipayan_male" value="<?php echo isset($current_data['Aglipayan_male']) ? $current_data['Aglipayan_male'] : ''; ?>"> 
                                / Female: <input type="number" name="Aglipayan_female" id="Aglipayan_female" value="<?php echo isset($current_data['Aglipayan_female']) ? $current_data['Aglipayan_female'] : ''; ?>">
                                )
                            </label>
                        </div>
                    </li>

                <li>
                <div class="form-group">
                <label for="Born_Again_total">Born Again:
                    <input type="number" name="Born_Again_total" id="Born_Again_total" value="<?php echo isset($current_data['Born_Again_total']) ? $current_data['Born_Again_total'] : ''; ?>">
                    (Male: <input type="number" name="Born_Again_male" id="Born_Again_male" value="<?php echo isset($current_data['Born_Again_male']) ? $current_data['Born_Again_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Born_Again_female" id="Born_Again_female" value="<?php echo isset($current_data['Born_Again_female']) ? $current_data['Born_Again_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Buddhism_total">Buddhism:
                    <input type="number" name="Buddhism_total" id="Buddhism_total" value="<?php echo isset($current_data['Buddhism_total']) ? $current_data['Buddhism_total'] : ''; ?>">
                    (Male: <input type="number" name="Buddhism_male" id="Buddhism_male" value="<?php echo isset($current_data['Buddhism_male']) ? $current_data['Buddhism_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Buddhism_female" id="Buddhism_female" value="<?php echo isset($current_data['Buddhism_female']) ? $current_data['Buddhism_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Hinduism_tota">Hinduism:
                    <input type="number" name="Hinduism_total" id="Hinduism_total" value="<?php echo isset($current_data['Hinduism_total']) ? $current_data['Hinduism_total'] : ''; ?>">
                    (Male: <input type="number" name="Hinduism_male" id="Hinduism_male" value="<?php echo isset($current_data['Hinduism_male']) ? $current_data['Hinduism_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Hinduism_female" id="Hinduism_female" value="<?php echo isset($current_data['Hinduism_female']) ? $current_data['Hinduism_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Iglesia_ni_Cristo_total">Iglesia ni Cristo:
                    <input type="number" name="Iglesia_ni_Cristo_total" id="Iglesia_ni_Cristo_total" value="<?php echo isset($current_data['Iglesia_ni_Cristo_total']) ? $current_data['Iglesia_ni_Cristo_total'] : ''; ?>">
                    (Male: <input type="number" name="Iglesia_ni_Cristo_male" id="Iglesia_ni_Cristo_male" value="<?php echo isset($current_data['Iglesia_ni_Cristo_male']) ? $current_data['Iglesia_ni_Cristo_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Iglesia_ni_Cristo_female" id="Iglesia_ni_Cristo_female" value="<?php echo isset($current_data['Iglesia_ni_Cristo_female']) ? $current_data['Iglesia_ni_Cristo_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Islam_total">Islam:
                    <input type="number" name="Islam_total" id="Islam_total" value="<?php echo isset($current_data['Islam_total']) ? $current_data['Islam_total'] : ''; ?>">
                    (Male: <input type="number" name="Islam_male" id="Islam_male" value="<?php echo isset($current_data['Islam_male']) ? $current_data['Islam_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Islam_female" id="Islam_female" value="<?php echo isset($current_data['Islam_female']) ? $current_data['Islam_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>
                <li>
                <div class="form-group">
                <label for="Jehovahs_Witnesses_total">Jehovah's Witnesses:
                    <input type="number" name="Jehovahs_Witnesses_total" id="Jehovahs_Witnesses_total" value="<?php echo isset($current_data['Jehovahs_Witnesses_total']) ? $current_data['Jehovahs_Witnesses_total'] : ''; ?>">
                    (Male: <input type="number" name="Jehovahs_Witnesses_male" id="Jehovahs_Witnesses_male" value="<?php echo isset($current_data['Jehovahs_Witnesses_male']) ? $current_data['Jehovahs_Witnesses_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Jehovahs_Witnesses_female" id="Jehovahs_Witnesses_female" value="<?php echo isset($current_data['Jehovahs_Witnesses_female']) ? $current_data['Jehovahs_Witnesses_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Latter_Day_Saints_total">Latter Day Saints:
                    <input type="number" name="Latter_Day_Saints_total" id="Latter_Day_Saints_total" value="<?php echo isset($current_data['Latter_Day_Saints_total']) ? $current_data['Latter_Day_Saints_total'] : ''; ?>">
                    (Male: <input type="number" name="Latter_Day_Saints_male" id="Latter_Day_Saints_male" value="<?php echo isset($current_data['Latter_Day_Saints_male']) ? $current_data['Latter_Day_Saints_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Latter_Day_Saints_female" id="Latter_Day_Saints_female" value="<?php echo isset($current_data['Latter_Day_Saints_female']) ? $current_data['Latter_Day_Saints_female'] : ''; ?>">
                    )
                </label>

            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Protestant_total">Protestant:
                    <input type="number" name="Protestant_total" id="Protestant_total" value="<?php echo isset($current_data['Protestant_total']) ? $current_data['Protestant_total'] : ''; ?>">
                    (Male: <input type="number" name="Protestant_male" id="Protestant_male" value="<?php echo isset($current_data['Protestant_male']) ? $current_data['Protestant_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Protestant_female" id="Protestant_female" value="<?php echo isset($current_data['Protestant_female']) ? $current_data['Protestant_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Roman_Catholic_total">Roman Catholic:
                    <input type="number" name="Roman_Catholic_total" id="Roman_Catholic_total" value="<?php echo isset($current_data['Roman_Catholic_total']) ? $current_data['Roman_Catholic_total'] : ''; ?>">
                    (Male: <input type="number" name="Roman_Catholic_male" id="Roman_Catholic_male" value="<?php echo isset($current_data['Roman_Catholic_male']) ? $current_data['Roman_Catholic_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Roman_Catholic_female" id="Roman_Catholic_female" value="<?php echo isset($current_data['Roman_Catholic_female']) ? $current_data['Roman_Catholic_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Seventh_day_Adventists_total">Seventh day Adventists:
                    <input type="number" name="Seventh_day_Adventists_total" id="Seventh_day_Adventists_total" value="<?php echo isset($current_data['Seventh_day_Adventists_total']) ? $current_data['Seventh_day_Adventists_total'] : ''; ?>">
                    (Male: <input type="number" name="Seventh_day_Adventists_male" id ="Seventh_day_Adventists_male" value="<?php echo isset($current_data['Seventh_day_Adventists_male']) ? $current_data['Seventh_day_Adventists_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Seventh_day_Adventists_female" id="Seventh_day_Adventists_female" value="<?php echo isset($current_data['Seventh_day_Adventists_female']) ? $current_data['Seventh_day_Adventists_female'] : ''; ?>">
                    )
                </label>
            </div>
                </li>

                <li>
                <div class="form-group">
                <label for="Others_total">Others:
                    <input type="number" name="Others_total" id="Others_total" value="<?php echo isset($current_data['Others_total']) ? $current_data['Others_total'] : ''; ?>">
                    (Male: <input type="number" name="Others_male" id="Others_male" value="<?php echo isset($current_data['Others_male']) ? $current_data['Others_male'] : ''; ?>"> 
                    / Female: <input type="number" name="Others_female" id="Others_female" value="<?php echo isset($current_data['Others_female']) ? $current_data['Others_female'] : ''; ?>">
                    )
                </label>
                </div>
                </li>
            </ul>

            <h4>The top three religions with percentage: </h4>

            <ol> 
                    <li>
                        <div class="form-group">
                            <label for="first_religion_name">
                                <input type="text" name="first_religion_name" id="first_religion_name" value="<?php echo isset($current_data['first_religion_name']) ? $current_data['first_religion_name'] : ''; ?>">
                                ( <input type="number" name="first_percentage" id="first_percentage" value="<?php echo isset($current_data['first_percentage']) ? $current_data['first_percentage'] : ''; ?>">
                                %)
                            </label>
                        </div>
                    </li>

                    <li>
                        <div class="form-group">
                            <label for="second_religion_name">
                                <input type="text" name="second_religion_name" id="second_religion_name" value="<?php echo isset($current_data['second_religion_name']) ? $current_data['second_religion_name'] : ''; ?>">
                                ( <input type="number" name="second_percentage" id="first_percentage" value="<?php echo isset($current_data['second_percentage']) ? $current_data['second_percentage'] : ''; ?>">
                                %)
                            </label>
                        </div>
                    </li>

                    <li>
                        <div class="form-group">
                            <label for="third_religion_name">
                                <input type="text" name="third_religion_name" id="third_religion_name" value="<?php echo isset($current_data['third_religion_name']) ? $current_data['third_religion_name'] : ''; ?>">
                                ( <input type="number" name="third_percentage" id="third_percentage" value="<?php echo isset($current_data['third_percentage']) ? $current_data['third_percentage'] : ''; ?>">
                                %)
                            </label>
                        </div>
                    </li>
            </ol>
            <ul> 
            <li>
                        <div class="form-group">
                            <label for="total_number_of_employees_not_affiliated">Employee population who are not affiliated with any religious denomination: 
                                <input type="number" name="total_number_of_employees_not_affiliated" id="total_number_of_employees_not_affiliated" value="<?php echo isset($current_data['total_number_of_employees_not_affiliated']) ? $current_data['total_number_of_employees_not_affiliated'] : ''; ?>">
                                (<input type="number" name="total_percentage_of_employees_not_affiliated" id="total_percentage_of_employees_not_affiliated" value="<?php echo isset($current_data['total_percentage_of_employees_not_affiliated']) ? $current_data['total_percentage_of_employees_not_affiliated'] : ''; ?>"> 
                                %)
                                
                            </label>
                        </div>
                    </li>
            </ul>
            <div class="form-group">
                <input type="submit" name="create" value="Submit">
            </div>

        </form>
    </div>


</body>

</html>