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
  <link rel="stylesheet" href="../styles/10.1.css">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SDG 10: Reduced Inequalities</title>

</head>

<body>
  <div class="header-SDG10">
    10.1 Research on reduced inequalities
  </div>
  <div class="sidebar">
    <div class="sdg10-picture">
      <img class="sdg10-icon" src="../pictures/E_SDG_Icons-10.jpg" alt="SDG 10 Icon">
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
  </div>

  <div class="container">
    <a href="10.1_read.php" class="back-button">Back</a>
  </div>

  <?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  // Fetch user details from the database
  $query = "SELECT * FROM `10.1.1 research on reduced inequalities` WHERE id = $id";
  $view = mysqli_query($connect, $query);

  // displaying all the data retrieved from database using while loop
  while ($row = mysqli_fetch_assoc($view)) {
    $id = $row['id'];
    $title_of_research = $row['title_of_research'];
    $authors = $row['authors'];
    $year_of_publication = $row['year_of_publication'];
    $total_number_of_citations = $row['total_number_of_citations'];
  }

  if (isset($_POST['update'])) {
    $title_of_research = $_POST['title_of_research'];
    $authors = $_POST['authors'];
    $year_of_publication = $_POST['year_of_publication'];
    $total_number_of_citations = $_POST['total_number_of_citations'];

    $query = "UPDATE `10.1.1 research on reduced inequalities` SET title_of_research = '{$title_of_research}', authors = '{$authors}', year_of_publication = '{$year_of_publication}', total_number_of_citations = '{$total_number_of_citations}' WHERE id = $id";
    $update = mysqli_query($connect, $query);

    // Display message whether the query is successful
    if (!$update) {
      echo "Something went wrong!" . mysqli_connect_error($connect);
    } else {
      echo "<script type = 'text/javascript'> alert ('Updated successfully')</script>";
    }
  }

  ?>

  <div class="container">
    <form action="" method="post">
      <div>
        <label for="title_of_research">Title of Research:</label>
        <input type="text" name="title_of_research" value="<?php echo $title_of_research ?>">
      </div>
      <div>
        <label for="authors">Author/s:</label>
        <input type="text" name="authors" value="<?php echo $authors ?>">
      </div>
      <div>
        <label for="year_of_publication">Year of Publication:</label>
        <input type="number" name="year_of_publication" class="year-input" placeholder="YYYY" pattern="\d{4}" max="9999" value="<?php echo $year_of_publication ?>">
      </div>

      <div>
        <label for="total_number_of_citations">Total number of Citations:</label>
        <input type="number" name="total_number_of_citations" value="<?php echo $total_number_of_citations ?>">
      </div>
      <div class="btn-container">
        <input type="submit" name="update" value="Update">
      </div>
    </form>
  </div>



</body>

</html>