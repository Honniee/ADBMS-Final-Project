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
        10.7.2 Proportion of refugee employees</div>
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
      <div class="indicator1"><a href="../10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
      <div class="indicator1 active-page"><a href="../10.7/10.7.php">10.7 Proportion of refugee students and employees</a></div>
      <div class="indicator1"><a href="../10.8/10.8.php">10.8 Measures against discrimination on students and employees</a></div>
    </div>
  </div>

    <div class="container">
        <a href="10.7.1.php" class="back-button">Back</a>
    </div>

    <?php
// Database connection

if (isset($_GET['id'])) {
    $id = $_GET['id'];


// Fetch user details from the database
$query = "SELECT * FROM `10.7.1 Proportion of refugee employees` WHERE id = $id";
$view = mysqli_query($connect, $query);

if ($view) {
    while ($row = mysqli_fetch_assoc($view)) {
        $id = $row['id'];
        $total_refugee_employee_male = $row['total_refugee_employee_male'];
        $total_refugee_employee_female = $row['total_refugee_employee_female'];
        $employee_refugee_percentage = $row['employee_refugee_percentage'];
    }
} else {
    echo "Error fetching data: " . mysqli_error($connect);
}

if (isset($_POST['update'])) {
    $total_refugee_employee_male = $_POST['total_refugee_employee_male'];
    $total_refugee_employee_female = $_POST['total_refugee_employee_female'];
    $employee_refugee_percentage = $_POST['employee_refugee_percentage'];

    $query = "UPDATE `10.7.2 Proportion of refugee employees` SET 
        total_refugee_employee_male = '{$total_refugee_employee_male}', 
        total_refugee_employee_female = '{$total_refugee_employee_female}', 
        employee_refugee_percentage = '{$employee_refugee_percentage}' 
        WHERE id = $id";
    $update = mysqli_query($connect, $query);

    // Display message whether the query is successful
    if (!$update) {
        echo "Something went wrong! " . mysqli_error($connect);
    } else {
        echo "<script type='text/javascript'>alert('Updated successfully');</script>";
    }
}
}
?>
<div class="form-container">
    <form action="" method="POST">
        <div class="form-group">
            <label for="total_refugee_employee_male">Total Refugee Employees (Male):</label>
            <input type="number" name="total_refugee_employee_male" id="total_refugee_employee_male" value="<?php echo isset($total_refugee_employee_male) ? $total_refugee_employee_male : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="total_refugee_employee_female">Total Refugee Employees (Female):</label>
            <input type="number" name="total_refugee_employee_female" id="total_refugee_employee_female" value="<?php echo isset($total_refugee_employee_female) ? $total_refugee_employee_female : ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="employee_refugee_percentage">Employee Refugee Percentage:</label>
            <input type="text" name="employee_refugee_percentage" id="employee_refugee_percentage" value="<?php echo isset($employee_refugee_percentage) ? $employee_refugee_percentage : ''; ?>" required>
        </div>
        
        <div class="form-group">
            <input type="submit" name="update" value="Update">
        </div>
    </form>
</div>

</body>
</html>