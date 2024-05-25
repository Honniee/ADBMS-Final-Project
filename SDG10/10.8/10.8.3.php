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
    <title>SDG 10.8.1 Non Discriminatory Admissions Policy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            padding-left:300px;
            padding-top:50px;
        }
        #form-container {
            width: 80%;
            margin: 30px auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 1px solid #ccc;
        }
        h1 {
            color: rgb(224, 20, 131);
            text-align: center;
        }
        form div {
            margin-bottom: 20px;
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: rgb(224, 20, 131);
        }
        form input[type="text"], form input[type="number"] {
            width: calc(100% - 24px);
            padding: 12px;
            border: 2px solid rgb(224, 20, 131);
            border-radius: 5px;
            font-size: 16px;
        }
        form input[type="submit"], button {
            background: rgb(224, 20, 131);
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        form input[type="submit"]:hover, button:hover {
            background: #c917a1;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: rgb(224, 20, 131);
            color: white;
        }
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        .action-buttons a {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
        }
        .action-buttons .edit {
            background-color: #4CAF50;
            color: white;
        }
        .action-buttons .delete {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
<div class = "header-SDG10" style="display: flex; align-items: center; padding-bottom: 12px; padding-right: 10px;">
10.8.3 Access to university underrepresented groups recruit
<div class="point-system" style="margin-left: auto; padding-top: 10px;">
  <h4>Pointing System:
  <?php
    $query = "SELECT COUNT(*) c FROM `10.8.3 access to university underrepresented groups recruit`";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    $x_value = $row['c'];
    
    $total_points = $x_value / 2;
    
    // Limit total_points to 9
    if ($total_points > 9) {
        $total_points = 9;
    }
    
    echo $total_points;
    // Get the current total_points value for id=3
$sql = "SELECT total_points FROM total WHERE id=3;";
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
        $sql = "INSERT INTO total(id, total_points) VALUES(3, '{$total_points}')";
    }
    // If there is a current value, update the existing record
    else {
        $sql = "UPDATE total SET total_points='{$total_points}' WHERE id=3;";
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
    <?php 
        // Create and Update
        if(isset($_POST['save'])){
            $id = $_POST['id'];
            $total_num_of_recruitment_programs_for_underrepresented_groups  = $_POST['total_num_of_recruitment_programs_for_underrepresented_groups'];
            $title_of_recruitment_programs = $_POST['title_of_recruitment_programs'];
            $short_description_of_the_PPA = $_POST['short_description_of_the_PPA'];
            $total_cost = $_POST['total_cost'];
            $fund_source = $_POST['fund_source'];

            if($id) {
                // Update 
                $query = "UPDATE `10.8.3 Access to university underrepresented groups recruit` SET total_num_of_recruitment_programs_for_underrepresented_groups='$total_num_of_recruitment_programs_for_underrepresented_groups',title_of_recruitment_programs='$title_of_recruitment_programs', short_description_of_the_PPA='$short_description_of_the_PPA', total_cost='$total_cost', fund_source='$fund_source' WHERE id=$id";
            } else {
                // Create
                $query = "INSERT INTO `10.8.3 Access to university underrepresented groups recruit` (total_num_of_recruitment_programs_for_underrepresented_groups,title_of_recruitment_programs, short_description_of_the_PPA, total_cost, fund_source) VALUES ('$total_num_of_recruitment_programs_for_underrepresented_groups','$title_of_recruitment_programs', '$short_description_of_the_PPA', '$total_cost', '$fund_source')";
            }

            $result = mysqli_query($connect, $query);

            if(!$result){
                echo "Something went wrong! " . mysqli_error($connect);
            } else {
                echo "<script type='text/javascript'>alert('Data saved successfully');</script>";
            }
        } 

        // Delete
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $delete_query = "DELETE FROM `10.8.3 Access to university underrepresented groups recruit` WHERE id=$id";
            $delete_result = mysqli_query($connect, $delete_query);
            if(!$delete_result){
                echo "Something went wrong! " . mysqli_error($connect);
            } else {
                echo "<script type='text/javascript'>alert('Data deleted successfully');</script>";
            }
        }

        // Edit
        $edit_data = [];
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $edit_query = "SELECT * FROM `10.8.3 Access to university underrepresented groups recruit` WHERE id=$id";
            $edit_result = mysqli_query($connect, $edit_query);
            $edit_data = mysqli_fetch_assoc($edit_result);
        }

        // Clear form for new entry
        if(isset($_GET['create'])){
            $edit_data = [];
        }
    ?>

    <div id="form-container">
        <button onclick="location.href='?create=true'">Create New Entry</button>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo isset($edit_data['id']) ? $edit_data['id'] : ''; ?>">
            <div>
                <label for="total_num_of_recruitment_programs_for_underrepresented_groups">Total Num of Recruitment Programs For Underrepresented Groups</label>
                <input type="number" name="total_num_of_recruitment_programs_for_underrepresented_groups" value="<?php echo isset($edit_data['total_num_of_recruitment_programs_for_underrepresented_groups']) ? $edit_data['total_num_of_recruitment_programs_for_underrepresented_groups'] : ''; ?>" required>
            </div>
            <div>
                <label for="title_of_recruitment_programs">Title/Type of recruitment programs</label>
                <input type="text" name="title_of_recruitment_programs" value="<?php echo isset($edit_data['title_of_recruitment_programs']) ? $edit_data['title_of_recruitment_programs'] : ''; ?>" required>
            </div>
            <div>
                <label for="short_description_of_the_PPA">Short Description of the PPA:</label>
                <input type="text" name="short_description_of_the_PPA" value="<?php echo isset($edit_data['short_description_of_the_PPA']) ? $edit_data['short_description_of_the_PPA'] : ''; ?>" required>
            </div>
            <div>
                <label for="total_cost">Total Cost:</label>
                <input type="number" name="total_cost" value="<?php echo isset($edit_data['total_cost']) ? $edit_data['total_cost'] : ''; ?>" required>
            </div>
            <div>
                <label for="fund_source">Fund Source:</label>
                <input type="text" name="fund_source" value="<?php echo isset($edit_data['fund_source']) ? $edit_data['fund_source'] : ''; ?>" required>
            </div>
            <div>
                <input type="submit" name="save" value="Save">
            </div>
        </form>
        
        <?php
            $fetchquery = "SELECT * FROM `10.8.3 Access to university underrepresented groups recruit`";
            $fetch_data = mysqli_query($connect, $fetchquery);

            if(mysqli_num_rows($fetch_data) > 0){
                echo "<table>
                        <tr>
                            <th>ID</th>
                            <th>Total Num Of Recruitment Programs for Underrepresented Groups</th>
                            <th>Title of Recruitment Programs</th>
                            <th>Short Description</th>
                            <th>Total Cost</th>
                            <th>Fund Source</th>
                            <th>Actions</th>
                        </tr>";
                while($row = mysqli_fetch_assoc($fetch_data)){
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['total_num_of_recruitment_programs_for_underrepresented_groups']}</td>
                            <td>{$row['title_of_recruitment_programs']}</td>
                            <td>{$row['short_description_of_the_PPA']}</td>
                            <td>{$row['total_cost']}</td>
                            <td>{$row['fund_source']}</td>
                            <td class='action-buttons'>
                                <a class='edit' href='?edit={$row['id']}'>Edit</a>
                                <a class='delete' href='?delete={$row['id']}' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>
                            </td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No data found</p>";
            }
        ?>
    </div>
</body>
</html>
