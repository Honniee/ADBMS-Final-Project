<?php include "db.php"?>

<!DOCTYPE html>
<html lang = "en">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel = "stylesheet" href="styles/header.css">
  <link rel = "stylesheet" href="styles/sidebar.css">
  <link rel = "stylesheet" href="styles/general.css">
  <meta charset = "UTF-8">
  <meta http-equiv = "X-UA-Compatible" content = "IE-edge">
  <meta name = "viewport" content = "width=device-width,initial-scale=1.0">

  <title> </title>
</head>

<body>
<div class = "header-SDG10" style="display: flex; align-items: center; padding-bottom: 12px; padding-right: 10px;">
  SDG 10: Reduced Inequalities
  <div class="point-system" style="margin-left: auto; padding-top: 10px;">
  <h4>
    <?php
      $sql = "SELECT SUM(total_points) FROM total;";

      // Execute the query and store the result set
      $total_result = mysqli_query($connect, $sql);
      
      // Check for errors
      if (!$total_result) {
          die("Invalid query: " . mysqli_error($connect));
      }
      
      // Fetch the result from the result set
      if (mysqli_num_rows($total_result) > 0) {
          // Fetch the first row of the result set
          $row = mysqli_fetch_assoc($total_result);
      
          // Display the result
          echo "Total points: " . $row["SUM(total_points)"];
      } else {
          echo "No results found";
      }
      
    ?>
  </h4>
</div>
    </div>
  <div class= "sidebar">
    <div class="sdg10-picture">
      <img class="sdg10-icon"src="pictures/E_SDG_Icons-10.jpg">
    </div>
    
    <div class = "Indicators">
      <div class="home-button active-page"><a href="index.php ">Home</a></div>
      <div class="indicator1"><a href="10.1/10.1.php">10.1 Research on reduced inequalities</a></div>
      <div class="indicator1"><a href="10.3/10.3.php">10.3 Proportion of students and employees with disabilities</a></div>
      <div class="indicator1"><a href="10.4/10.4.php">10.4 Proportion of students and employees who belong to Indigenous Peoples (IPs) group</a></div>
      <div class="indicator1"><a href="10.5/10.5.php">10.5 Proportion of students and employees who are member of LGBTQIA+ group</a></div>
      <div class="indicator1"><a href="10.6/10.6.php">10.6 Proportion of students and employees based on religion</a></div>
      <div class="indicator1"><a href="10.7/10.7.php">10.7 Proportion of refugee students and employees</a></div>
      <div class="indicator1"><a href="10.8/10.8.php">10.8 Measures against discrimination on students and employees</a></div>
    </div>
  </div>

  <img style="margin-top: 50px;height: 300px; display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;" src = "pictures/global-goal-10-reducing-inequalities-hero.jpg__1600x900_q85_crop_subsampling-2.jpg">
  <div>
    <p style="font-size: 20px; text-align:center;"><strong>Reducing Inequality within Batangas State University</strong></p>
  </div>
<br>
  <p style="text-indent: 50px; margin-right: 20px;">Inequality within educational institutions threatens long-term social and academic development, undermines efforts to improve student outcomes, and harms the sense of fulfillment and self-worth among students and staff.
</p>
<br>
<p><strong>Why do we need to reduce inequalities at Batangas State University?</strong></p>
<p style="text-indent: 50px; ">Inequalities based on income, gender, age, disability, sexual orientation, ethnicity, and opportunities persist within academic environments, including Batangas State University (BSU). Addressing these inequalities is crucial as they can impede academic performance, limit personal growth, and breed feelings of exclusion and injustice.
</p>
<p style="text-indent: 50px; ">We cannot achieve a harmonious and progressive academic community if members are excluded from opportunities for growth and success.
</p>
<br>
<p><strong>What are some examples of inequality at Batangas State University?</strong></p>
<p>1. <em>Economic Disparities: </em>Students from lower-income families may struggle to afford tuition, books, and other essential resources, impacting their academic performance and participation.</p>
<p>2. <em>Gender Inequality:</em> Female students and staff may face gender-based discrimination or lack equal representation in leadership roles.</p>
<p>3. <em>Disability Inclusion:</em> Students with disabilities may not have adequate access to facilities, learning materials, or support services, hindering their educational experience.</p>
<p>4. <em>Ethnic and Cultural Diversity:</em> Minority groups may experience cultural insensitivity or lack of representation in the curriculum and university activities.</p>
<p>5. <em>LGBTQ+ Acceptance:</em> LGBTQ+ students and staff might encounter discrimination or a lack of support systems, affecting their mental health and academic performance.</p>
<br>
<p><strong>How do we tackle these inequalities?</strong></p>
<p>1. <em>Equitable Resource Distribution:</em> Ensure that all students have access to necessary resources, such as scholarships, affordable housing, and academic materials.</p>
<p>2. <em>Inclusive Policies:</em> Implement and enforce policies that promote gender equality, cultural diversity, and inclusivity in all university practices.</p>
<p>3. <em>Support Services:</em> Enhance support services for students with disabilities, including accessible facilities and tailored academic assistance.</p>
<p>4. <em>Awareness and Education:</em> Conduct workshops and training sessions to raise awareness about diversity, inclusion, and the harmful effects of discrimination.</p>
<p>5. <em>Student and Staff Representation:</em> Promote equal representation of all groups in university decision-making bodies and leadership positions.</p>
<br>
<p><strong>Can we achieve equality for everyone at Batangas State University?</strong></p>
<p style="text-indent:50px;">Achieving equality is a continuous process that requires commitment from all university stakeholders. By implementing comprehensive policies and fostering an inclusive environment, BSU can create a more equitable academic community where all members have the opportunity to thrive.</p>
<br>
<p><strong>What can we do to promote equality?</strong></p>
<p>1. <em>Invest in Education and Skills Development:</em> Provide additional support for underrepresented groups to enhance their academic and professional skills.</p>
<p>2. <em>Implement Social Protection Measures:</em> Establish safety nets such as financial aid, counseling services, and mentorship programs.</p>
<p>3. <em>Combat Discrimination: </em>Develop a zero-tolerance policy towards discrimination and establish clear procedures for reporting and addressing incidents.</p>
<p>4. <em>Foster Community Engagement:</em> Encourage collaboration and dialogue among students, staff, and the broader community to build a supportive and inclusive environment.</p>
<br>
<p style="text-indent:50px;">By addressing these inequalities, Batangas State University can enhance its role as a catalyst for positive social change, fostering an environment where every student and staff member can achieve their full potential.</p>
</body>
</html>