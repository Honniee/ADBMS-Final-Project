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
  10.4.1 Proportion of students who belong to Indigenous Peoples (IPs)
  </div>
  <div class="sidebar">
    <div class="sdg10-picture">
      <img class="sdg10-icon" src="../pictures/E_SDG_Icons-10.jpg" alt="SDG 10 Icon">
    </div>
    <div class="Indicators">
      <div class="home-button"><a href="../index.php ">Home</a></div>
      <div class="indicator1"><a href="../10.1/10.1.php">10.1 Research on reduced inequalities</a></div>
      <div class="indicator1"><a href="../10.3/10.3.php">10.3 Proportion of students and employees with disabilities</a></div>
      <div class="indicator1 active-page"><a href="10.4.php">10.4 Proportion of students and employees who belong to Indigenous Peoples (IPs) group</a></div>
      <div class="indicator1"><a href="../10.5/10.5.php">10.5 Proportion of students and employees who are member of LGBTQIA+ group</a></div>
      <div class="indicator1"><a href="../10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
      <div class="indicator1"><a href="../10.7/10.7.php">10.7 Proportion of refugee students and employees</a></div>
      <div class="indicator1"><a href="../10.8/10.8.php">10.8 Measures against discrimination on students and employees</a></div>
    </div>
  </div>

  <div class="container">
  <a href="10.4.1.php" class="back-button">Back</a>
</div>

  <?php
if (isset($_POST['create'])) {
    // Collect form data
    $total_numbers = $_POST['total_numbers'];
    $male_students = $_POST['male_students'];
    $female_students = $_POST['female_students'];
    $IPs_prevalence = $_POST['IPs_prevalence'];
 

    // SQL query to insert data into table
    $query = "INSERT INTO `10.4.1 proportion of students who belong to IPs` 
    (total_number_of_IP_students, 
    total_number_of_IP_students_male, 
    total_number_of_IP_students_female, 
    total_student_population_belong_to_IPs ) 
    VALUES (
    '$total_numbers', 
    '$male_students', 
    '$female_students', 
    '$IPs_prevalence')";

    $add_data = mysqli_query($connect, $query); // send data to database

    // Check if the query was successful
    if (!$add_data) {
        echo "Something went wrong!" . mysqli_error($connect);
    } else {
        echo "<script type = 'text/javascript'>alert('User added successfully')</script>";
    }
}

// Query to fetch the most recent entry
$query_fetch = "SELECT * FROM `10.4.1 proportion of students who belong to IPs` ORDER BY id DESC LIMIT 1";
$result_fetch = mysqli_query($connect, $query_fetch);

if ($result_fetch) {
    $current_data = mysqli_fetch_assoc($result_fetch);
} else {
    echo "Error fetching data: " . mysqli_error($connect);
    $current_data = array(); // Initialize as empty array to avoid errors in the form
}

?>

    
<div class="form-container">
    <div class = "form-group">
        This is the total population of IP students 
    </div>
    
    <form action="" method="POST">
        <div class="form-group">
            <label for="total_numbers">Total number of IP students:
                <input type="number" name="total_numbers" id="total_numbers" value="<?php echo isset($current_data['total_number_of_IP_students']) ? $current_data['total_number_of_IP_students'] : ''; ?>">
                (Male: <input type="number" name="male_students" id="male_students" value="<?php echo isset($current_data['total_number_of_IP_students_male']) ? $current_data['total_number_of_IP_students_male'] : ''; ?>"> 
                / Female: <input type="number" name="female_students" id="female_students" value="<?php echo isset($current_data['total_number_of_IP_students_female']) ? $current_data['total_number_of_IP_students_female'] : ''; ?>">
            </label>
        </div>

        <div class="form-group">
            <input type="number" name="IPs_prevalence" id="IPs_prevalence" value="<?php echo isset($current_data['total_student_population_belong_to_IPs']) ? $current_data['total_student_population_belong_to_IPs'] : ''; ?>"> % of the total student population belong to IPs.
        </div>
        
        <div class="form-group">
            <input type="submit" name="create" value="Submit">
        </div>
    </form>
</div>

</body>

</html>