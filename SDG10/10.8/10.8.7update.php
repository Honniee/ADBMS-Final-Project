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
  <div class = header-SDG10>
  10.8.7 Accessible facilities</div>
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
      <div class="indicator1"><a href="../10.6.php">10.6 Proportion of students and employees based on religion</a></div>
      <div class="indicator1"><a href="../10.7.php">10.7 Proportion of refugee students and employees</a></div>
      <div class="indicator1 active-page"><a href="10.8.php">10.8 Measures against discrimination on students and employees</a></div>
    </div>
  </div>

  <?php
      if(isset ($_GET['user_id']))
      {
        $userid = $_GET['user_id'];
      }

      $query = "SELECT * FROM `10.8.7 accessible facilities` WHERE id = {$userid}";
      $view_user = mysqli_query($connect, $query);
      while ($row = mysqli_fetch_assoc($view_user)){
        $id = $row['id'];
        $total_number_of_facilities_available_in_the_campus_for_pwds = $row['total_number_of_facilities_available_in_the_campus_for_pwds'];
      }
      if(isset($_POST['update'])){
        $total_number_of_facilities_available_in_the_campus_for_pwds = $_POST['total_number_of_facilities_available_in_the_campus_for_pwds'];

        $query = "UPDATE `10.8.7 accessible facilities` SET total_number_of_facilities_available_in_the_campus_for_pwds = '{$total_number_of_facilities_available_in_the_campus_for_pwds}' WHERE id = $userid";
        $update_user = mysqli_query($connect, $query);
        echo "<script type = 'text/javascript'>alert('User updated successfully!)</script>";
      }
    ?>
    <h1>Update Information Details</h1>
    <div>
      <form action = "" method = "post">
        <div>
          <label for="user">Total number of implemented PPAs to support underrepresented groups: </label>
          <input class = 'type' type="text" name = "total_number_of_facilities_available_in_the_campus_for_pwds" value = "<?php echo $total_number_of_facilities_available_in_the_campus_for_pwds ?>">
        </div>
        <div>
          <input class = "update-button" type= "submit" name = "update" value = "Update &raquo;">
        </div>
      </form>
    </div>
    <div>
      <button class = "back-button" onclick = "window.location.href= '10.8.7read.php';">&laquo; Back</button>
    </div>


</body>
</html>