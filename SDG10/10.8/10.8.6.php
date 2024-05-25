<?php include "../db.php"?>

<!DOCTYPE html>
<html lang = "en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel = "stylesheet" href="../styles/header.css">
  <link rel = "stylesheet" href="../styles/sidebar.css">
  <link rel = "stylesheet" href="../styles/general.css">
  <link rel = "stylesheet" href="../styles/10.8.css">
  <meta charset = "UTF-8">
  <meta http-equiv = "X-UA-Compatible" content = "IE-edge">
  <meta name = "viewport" content = "width=device-width,initial-scale=1.0">

  <title>SDG 10: Reduced Inequalities</title>
</head>

<body>
  <?php
    if (isset ($_POST['create']))
    {
      if (isset($_POST['total_number_PPAs_to_support_underrepresented_groups']) && is_numeric($_POST['total_number_PPAs_to_support_underrepresented_groups'])) {
        $total_number_PPAs_to_support_underrepresented_groups = $_POST['total_number_PPAs_to_support_underrepresented_groups'];
      } else {
        echo "<script type = 'text/javascript'>alert('Error: Total number of PPAs must be a number.')</script>";
        exit();
      }
  
      $total_number_PPAs_to_support_underrepresented_groups = $_POST['total_number_PPAs_to_support_underrepresented_groups'];
      $title_of_the_ppa = $_POST['title_of_the_ppa'];
      $short_description = $_POST['short_description'];
      $total_cost = $_POST['total_cost'];
      $fund_source = $_POST['fund_source'];
      
      
      if (!is_numeric($total_cost)) {
        echo "<script type = 'text/javascript'>alert('Error: Total cost must be a number.')</script>";
        exit();
      }

      if (!is_numeric($total_number_PPAs_to_support_underrepresented_groups)) {
        echo "<script type = 'text/javascript'>alert('Error: Total number of PPAs must be a number.')</script>";
        exit();
      }

      $query = "INSERT INTO `10.8.6 support for underrepresented groups`(total_number_PPAs_to_support_underrepresented_groups, title_of_the_ppa, short_description, total_cost, fund_source) VALUES('{$total_number_PPAs_to_support_underrepresented_groups}','{$title_of_the_ppa}','{$short_description}','{$total_cost}','{$fund_source}')";
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
  <div class = header-SDG10 style="display: flex; align-items: center; padding-bottom: 12px; padding-right: 10px;">
  10.8.6 Support for underrepresented groups (exclude PWDs)
  <div class="point-system" style="margin-left: auto; padding-top: 10px;">
  <h4>Pointing System:
    <?php
      $query = "SELECT COUNT(*) c FROM `10.8.6 support for underrepresented groups`;";
      $result = mysqli_query($connect, $query);
      $row = mysqli_fetch_assoc($result);
      $x_value = $row['c'];
      
      $total_points = $x_value / 2;
      
      // Limit total_points to 9
      if ($total_points > 9) {
          $total_points = 9;
      }
      
      echo $total_points;
      // Get the current total_points value for id=6
$sql = "SELECT total_points FROM total WHERE id=6;";
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
        $sql = "INSERT INTO total(id, total_points) VALUES(6, '{$total_points}')";
    }
    // If there is a current value, update the existing record
    else {
        $sql = "UPDATE total SET total_points='{$total_points}' WHERE id=6;";
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
        <label for = "ppa">Total number of implemented PPAs to support underrepresented groups: </label>
        <input class="type1" type="textbox" placeholder="Type here" name = "total_number_PPAs_to_support_underrepresented_groups">
      </div>
      <div class = "line">
        <label for = "ppa">Title of the PPA: </label>
        <input class="type2" type="textbox" placeholder="Type here" name = "title_of_the_ppa">
      </div>
      <div class = "line">
      <label for = "ppa">Short Description: </label>
        <textarea class="type3" placeholder="Type here" name = "short_description"></textarea>
      </div>
      <div class = "line">
      <label for = "ppa">Total Cost: </label>
        <input class="type4" type="textbox" placeholder="Type here" name = "total_cost">
      </div>
      <div class = "line">
      <label for = "ppa">Fund Source: </label>
        <input class="type5" type="textbox" placeholder="Type here" name = "fund_source">
      </div>
      <div class = "submit-button-wrapper">
        <input class = 'submit-button' type = "submit" name = "create" value = "Submit &raquo;">
        <div class = "view-button"><a href = "10.8.6read.php">View</a></div>
      </div>
      <div>
        <button class = "back-button" onclick = "window.location.href= '10.8.php';">&laquo; Back</button>
      </div>
    </form>
  </div>
</body>
</html>