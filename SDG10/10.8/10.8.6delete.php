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
  <meta charset = "UTF-8">
  <meta http-equiv = "X-UA-Compatible" content = "IE-edge">
  <meta name = "viewport" content = "width=device-width,initial-scale=1.0">

  <title>SDG 10: Reduced Inequalities</title>
</head>

<body>
  <div class = header-SDG10>
  10.8.6 Support for underrepresented groups (exclude PWDs)</div>
  <div class= "sidebar">
    <div class="sdg10-picture">
      <img class="sdg10-icon"src="../pictures/E_SDG_Icons-10.jpg">
    </div>
    
    <div class = "Indicators">
      <div class="home-button"><a href="index.php ">Home</a></div>
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
    if (isset ($_GET['delete']))
    {
      $userid = $_GET['delete'];

      $query = "DELETE FROM `10.8.6 support for underrepresented groups` WHERE id = {$userid}";
      $delete_query = mysqli_query ($connect, $query);
      header("Location: 10.8.php");
    }

  ?>

</body>
</html>