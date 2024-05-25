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
  <link rel="stylesheet" href="../styles/10.4.css">
  <link rel="stylesheet" href="../styles/10.8.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>SDG 10: Reduced Inequalities </title>
</head>

<body>
  <div class=header-SDG10>
      10.6 Proportion of students and employees based on religion</div>
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
    <a href="10.6.php" class="back-button">Back</a>
    <h4>Manage Records</h4>
  </div>

  <div class="container">

    <!--Display Record-->
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>total_number_of_students_who_belongs_to_religious_groups_female</th>
          <th>Aglipayan_male</th>
          <th>Aglipayan_female</th>
          <th>Born_Again_male</th>
          <th>Born_Again_female</th>
          <th>Buddhism_male</th>
          <th>Buddhism_female</th>
          <th>Hinduism_male</th>
          <th>Hinduism_female</th>
          <th>Iglesia_ni_Cristo_male</th>
          <th>Iglesia_ni_Cristo_female</th>
          <th>Islam_male</th>
          <th>Islam_female</th>
          <th>Jehovahs_Witnesses_male</th>
          <th>Jehovahs_Witnesses_female</th>
          <th>Latter_Day_Saints_male</th>
          <th>Latter_Day_Saints_female</th>
          <th>Protestant_male</th>
          <th>Protestant_female</th>
          <th>Roman_Catholic_male</th>
          <th>Roman_Catholic_female</th>
          <th>Seventh_day_Adventists_male</th>
          <th>Seventh_day_Adventists_female</th>
          <th>Others_male</th>
          <th>Others_female</th>
          <th>Roman_Catholic_percentage</th>
          <th>Others_percentage</th>
          <th>Iglesia_ni_Cristo_percentage</th>
          <th>Not_Affiliated_percentage</th>
          <th>total_num_student_population_not_affiliated_with_any_religious</th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM `10.6.1 Proportion of students based on religion`";             // SQL query to fetch all table data
        $view_records = mysqli_query($connect, $query);  // sending the query to the database

        // displaying all the data retrieved from database using while loop
        while ($row = mysqli_fetch_assoc($view_records)) {
          $id = $row['id'];
          $total_number_of_students_who_belongs_to_religious_groups_female = $row['total_number_of_students_who_belongs_to_religious_groups_female'];
          $total_number_of_students_who_belongs_to_religious_groups_male = $row['total_number_of_students_who_belongs_to_religious_groups_male'];
          $Aglipayan_male = $row['Aglipayan_male'];
          $Aglipayan_female = $row['Aglipayan_female'];
          $Born_Again_male = $row['Born_Again_male'];
          $Born_Again_female = $row['Born_Again_female'];
          $Buddhism_male= $row['Buddhism_male'];
          $Buddhism_female = $row['Buddhism_female'];
          $Hinduism_male = $row['Hinduism_male'];
          $Hinduism_female = $row['Hinduism_female'];
          $Iglesia_ni_Cristo_male = $row['Iglesia_ni_Cristo_male'];
          $Iglesia_ni_Cristo_female = $row['Iglesia_ni_Cristo_female'];
          $Islam_male = $row['Islam_male'];
          $Islam_female = $row['Islam_female'];
          $Jehovahs_Witnesses_male = $row['Jehovahs_Witnesses_male'];
          $Jehovahs_Witnesses_female = $row['Jehovahs_Witnesses_female'];
          $Latter_Day_Saints_male = $row['Latter_Day_Saints_male'];
          $Latter_Day_Saints_female = $row['Latter_Day_Saints_female'];
          $Protestant_male = $row['Protestant_male'];
          $Protestant_female = $row['Protestant_female'];
          $Roman_Catholic_male = $row['Roman_Catholic_male'];
          $Roman_Catholic_female = $row['Roman_Catholic_female'];
          $Seventh_day_Adventists_male = $row['Seventh_day_Adventists_male'];
          $Seventh_day_Adventists_female = $row['Seventh_day_Adventists_female'];
          $Others_male = $row['Others_male'];
          $Others_female = $row['Others_female'];
          $Roman_Catholic_percentage = $row['Roman_Catholic_percentage'];
          $Others_percentage = $row['Others_percentage'];
          $Iglesia_ni_Cristo_percentage = $row['Iglesia_ni_Cristo_percentage'];
          $Not_Affiliated_percentage = $row['Not_Affiliated_percentage'];
          $total_num_student_population_not_affiliated_with_any_religious = $row['total_num_student_population_not_affiliated_with_any_religious'];

          echo "<tr>";
          echo "<td>{$id}</td>";
          echo "<td>{$total_number_of_students_who_belongs_to_religious_groups_female}</td>";
          echo "<td>{$total_number_of_students_who_belongs_to_religious_groups_male}</td>";
          echo "<td>{$Aglipayan_male}</td>";
          echo "<td>{$Aglipayan_female}</td>";
          echo "<td>{$Born_Again_male}</td>";
          echo "<td>{$Born_Again_female}</td>";
          echo "<td>{$Buddhism_male}</td>";
          echo "<td>{$Buddhism_female}</td>";
          echo "<td>{$Hinduism_male}</td>";
          echo "<td>{$Hinduism_female}</td>";
          echo "<td>{$Iglesia_ni_Cristo_male}</td>";
          echo "<td>{$Iglesia_ni_Cristo_female}</td>";
          echo "<td>{$Islam_male}</td>";
          echo "<td>{$Islam_female}</td>";
          echo "<td>{$Jehovahs_Witnesses_male}</td>";
          echo "<td>{$Jehovahs_Witnesses_female}</td>";
          echo "<td>{$Latter_Day_Saints_male}</td>";
          echo "<td>{$Latter_Day_Saints_female}</td>";
          echo "<td>{$Protestant_male}</td>";
          echo "<td>{$Protestant_female}</td>";
          echo "<td>{$Roman_Catholic_male}</td>";
          echo "<td>{$Roman_Catholic_female}</td>";
          echo "<td>{$Seventh_day_Adventists_male}</td>";
          echo "<td>{$Seventh_day_Adventists_female}</td>";
          echo "<td>{$Others_male}</td>";
          echo "<td>{$Others_female}</td>";
          echo "<td>{$Roman_Catholic_percentage}</td>";
          echo "<td>{$Others_percentage}</td>";
          echo "<td>{$Iglesia_ni_Cristo_percentage}</td>";
          echo "<td>{$Not_Affiliated_percentage}</td>";
          echo "<td>{$total_num_student_population_not_affiliated_with_any_religious}</td>";

          echo "<td><a href='10.6.1_update.php?id={$id}' class='btn btn-edit'>Edit</a></td>";
          echo "<td><a href='10.6.1_delete.php?delete={$id}' class='btn btn-delete'>Delete</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>




</body>

</html>