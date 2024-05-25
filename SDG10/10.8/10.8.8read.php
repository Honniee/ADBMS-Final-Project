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
  10.8.8 Disability support services for students and employees</div>
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

  <table>
    <thead>
    </thead>
      <tr>
        <th>ID</th>
        <th>Total number of implemented PPAs to support underrepresented groups</th>
        <th>Title of the PPA</th>
        <th>Short Description</th>
        <th>Total Cost</th>
        <th>Fund Source</th>
        <th scope = "col" colspan = "2">EDIT DELETE OPERATIONS</th>
      </tr>
      <tr>
      <?php
        $query = "SELECT * FROM `10.8.8 disability support services for students and employees`;";
        $view_users = mysqli_query($connect, $query);

        while($row = mysqli_fetch_assoc($view_users)){
          $id = $row['id'];
          $total_number_of_the_support_service = $row['total_number_of_the_support_service'];
          $title_type_of_the_support_service = $row['title_type_of_the_support_service'];
          $short_description = $row['short_description'];
          $total_cost = $row['total_cost'];
          $fund_source = $row['fund_source'];

          echo "<tr>";
          echo "<th scope = 'row' > {$id}</th>";
          echo "<td> {$total_number_of_the_support_service}</td>";
          echo "<td> {$title_type_of_the_support_service}</td>";
          echo "<td> {$short_description}</td>";
          echo "<td> {$total_cost}</td>";
          echo "<td> {$fund_source}</td>";

          echo "<td> <a href = '10.8.8update.php?user_id={$id}' class = 'button2'> EDIT </a></td>";
          echo "<td> <a href = '10.8.8delete.php?delete={$id}' class = 'button3'> DELETE </a></td>";
        }
      ?>
      </tr>
  </table>
  <div>
    <button class = "back-button" onclick = "window.location.href= '10.8.8.php';">&laquo; Back</button>
  </div>

</body>
</html>