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
    <a href="10.7.php" class="back-button">Back</a>
    <h4>Manage Records</h4>
  </div>

  <div class="container">

    <!--Display Record-->
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>total_refugee_employee_male</th>
          <th>total_refugee_employee_female</th>
          <th>employee_refugee_percentage</th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM `10.7.2 Proportion of refugee employees`";             // SQL query to fetch all table data
        $view_records = mysqli_query($connect, $query);  // sending the query to the database

        // displaying all the data retrieved from database using while loop
        while ($row = mysqli_fetch_assoc($view_records)) {
          $id = $row['id'];
          $total_refugee_employee_male = $row['total_refugee_employee_male'];
          $total_refugee_employee_female = $row['total_refugee_employee_female'];
          $employee_refugee_percentage = $row['employee_refugee_percentage'];
         

          echo "<tr>";
          echo "<td>{$id}</td>";
          echo "<td>{$total_refugee_employee_male}</td>";
          echo "<td>{$total_refugee_employee_female}</td>";
          echo "<td>{$employee_refugee_percentage}</td>";
          
          echo "<td><a href='10.7.2_update.php?id={$id}' class='btn btn-edit'>Edit</a></td>";
          echo "<td><a href='10.7.2_delete.php?delete={$id}' class='btn btn-delete'>Delete</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

    </body>
    </html>

