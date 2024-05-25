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
  <link rel="stylesheet" href="../styles/10.1.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>SDG 10: Reduced Inequalities </title>
</head>

<body>
  <div class=header-SDG10 style="display: flex; align-items: center; padding-bottom: 12px; padding-right: 10px;">
      10.1 Research on reduced inequalities
    <div class="point-system" style="margin-left: auto; margin-right:-690px">
      <h4>Pointing System: 
        <?php
          $query = "SELECT COUNT(*) c FROM `10.1.1 research on reduced inequalities`;";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$x_value = $row['c'];

$scopus_weight = 25;
$other_weight = 10;

$total_points = 0;

$scopus_string = "SCOPUS";
$webScience_string = "Web of Science";

$author_query = "SELECT authors FROM `10.1.1 research on reduced inequalities`;";
$author_table = mysqli_query($connect, $author_query);
while ($authors = mysqli_fetch_assoc($author_table)){
    if($authors["authors"] == $scopus_string || $authors["authors"] == $webScience_string){
        $total_points += $scopus_weight;
    }else{
        $total_points += $other_weight;
    }
}

// Limit total_points to 25
if ($total_points > 25) {
    $total_points = 25;
}

echo $total_points;
          // Get the current total_points value for id=1
$sql = "SELECT total_points FROM total WHERE id=1;";
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
        $sql = "INSERT INTO total(id, total_points) VALUES(1, '{$total_points}')";
    }
    // If there is a current value, update the existing record
    else {
        $sql = "UPDATE total SET total_points='{$total_points}' WHERE id=1;";
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
  <div class="sidebar">
    <div class="sdg10-picture">
      <img class="sdg10-icon" src="../pictures/E_SDG_Icons-10.jpg">
    </div>

    <div class="Indicators">
      <div class="home-button"><a href="../index.php ">Home</a></div>
      <div class="indicator1 active-page"><a href="10.1.php">10.1 Research on reduced inequalities</a></div>
      <div class="indicator1"><a href="../10.3/10.3.php">10.3 Proportion of students and employees with disabilities</a></div>
      <div class="indicator1"><a href="../10.4/10.4.php">10.4 Proportion of students and employees who belong to Indigenous Peoples (IPs) group</a></div>
      <div class="indicator1"><a href="../10.5/10.5.php">10.5 Proportion of students and employees who are member of LGBTQIA+ group</a></div>
      <div class="indicator1"><a href="../10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
      <div class="indicator1"><a href="../10.7/10.7.php">10.7 Proportion of refugee students and employees</a></div>
      <div class="indicator1"><a href="../10.8/10.8.php">10.8 Measures against discrimination on students and employees</a></div>
    </div>
  </div>

  <?php
  // Check if the form is submitted
  if (isset($_POST['create'])) {
    $title_of_research = $_POST['title_of_research'];
    $authors = $_POST['authors'];
    $year_of_publication = $_POST['year_of_publication'];
    $total_number_of_citations = $_POST['total_number_of_citations'];

    // SQL query to insert data into table
    $query = "INSERT INTO `10.1.1 research on reduced inequalities` (title_of_research, authors, year_of_publication, total_number_of_citations) VALUES ('$title_of_research', '$authors', '$year_of_publication', '$total_number_of_citations')";
    $add_data = mysqli_query($connect, $query); // send data to database

    // Check if the query was successful
    if (!$add_data) {
      echo "Something went wrong!" . mysqli_error($connect);
    } else {
      echo "<script type = 'text/javascript'>alert('User added successfully')</script>";
    }

    // Query to fetch existing data
    $query_fetch = "SELECT * FROM `10.1.1 research on reduced inequalities`";
    $result_fetch = mysqli_query($connect, $query_fetch);
  }
  ?>

  <div class="container">
    <a href="10.1_read.php" class="manage-button">Manage Records</a>
  </div>

  <div class="container">
    <form action="" method="post">
      <div>
        <label for="title_of_research">Title of Research:</label>
        <input type="text" name="title_of_research">
      </div>
      <div>
        <label for="authors">Author/s:</label>
        <input type="text" name="authors">
      </div>
      <div>
        <label for="year_of_publication">Year of Publication:</label>
        <input type="number" name="year_of_publication" class="year-input" placeholder="YYYY" pattern="\d{4}" max="9999">
      </div>

      <div>
        <label for="total_number_of_citations">Total number of Citations:</label>
        <input type="number" name="total_number_of_citations">
      </div>
      <div class="btn-container">
        <input type="submit" name="create" value="Submit">
        <input type="button" class="cancel" value="Cancel" onclick="window.location.href='10.1.php';">
      </div>
    </form>
  </div>
</body>

</html>