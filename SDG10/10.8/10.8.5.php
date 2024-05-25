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
    <title>10.8.5 Campus Diversity Officer</title>
</head>
<body>
<?php
    if (isset ($_POST['create']))
    {
      $existence_of_committee_and_or_offices = $_POST['existence_of_committee_and_or_offices'];

      $query = "INSERT INTO `10.8.5 campus diversity officer`(existence_of_committee_and_or_offices) VALUES('{$existence_of_committee_and_or_offices}')";
      $add_ppa = mysqli_query($connect, $query);

      if(!$add_ppa)
      {
        echo "Something went wrong!" . mysqli_connect_error($connect);
      }
      else {
        echo "<script type = 'text/javascript'>alert('Information added successfully!')</script>";
      }
    }
  ?>
    <div class = "header-SDG10" style="display: flex; align-items: center; padding-bottom: 12px; padding-right: 10px;">
    10.8.5 Campus Diversity Office
    <div class="point-system" style="margin-left: auto; padding-top: 10px;">
  <h4>Pointing System:
  <?php
    $committee_query = "SELECT COUNT(*) c FROM `10.8.5 campus diversity officer` WHERE existence_of_committee_and_or_offices = 'Yes' && id = 1;";
    $committee_result = mysqli_query($connect, $committee_query);
    $committee_row = mysqli_fetch_assoc($committee_result);
    $committee_points = $committee_row['c'] * 3;
    
    $total_points = $committee_points;
    
    // Limit total_points to 3
    if ($total_points > 3) {
        $total_points = 3;
    }
    
    echo $total_points;
    // Get the current total_points value for id=5
$sql = "SELECT total_points FROM total WHERE id=5;";
$result = mysqli_query($connect, $sql);
$current_total_points = 0;
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $current_total_points = $row["total_points"];
}

// Check if the new total_points value is different from the current value
if ($total_points != $current_total_points) {
    // If there is no current value, insert a new record
    if ($current_total_points == 0) {
        $sql = "INSERT INTO total(id, total_points) VALUES(5, '{$total_points}')";
    }
    // If there is a current value, update the existing record
    else {
        $sql = "UPDATE total SET total_points='{$total_points}' WHERE id=5;";
    }
    $add_ppa = mysqli_query($connect, $sql);

    if(!$add_ppa)
    {
        echo "Something went wrong!" . mysqli_connect_error($connect);
    }
    else {
        echo "<script type = 'text/javascript'>alert('Information updated successfully!')</script>";
    }
}
    
  ?>
  </h4>
</div>
</div>
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
        <div class = "content">
    <form action="" method="post">
      <div class = "line">
        <label for = "existence_of_committee_and_or_offices">Existence of committee and/or offices </label>
        <div class="existence">
            <select name = "existence_of_committee_and_or_offices">
            <option value="yes" name="existence_of_committee_and_or_offices">Yes</option>
            <option value="no" name="existence_of_committee_and_or_offices">No</option>
        </select>
        </div>
        
      </div>
      <div class = "submit-button-wrapper">
        <input class = 'submit-button' type = "submit" name = "create" value = "Submit &raquo;">
      </div>
    </form>
  </div>
</body>
</html>

