/*Create Database*/
CREATE DATABASE SDG10;

CREATE TABLE `10.1.1 research on reduced inequalities`(
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `total_number_of_research_on_reduced_inequalities` INT DEFAULT NULL,
  `title_of_research` VARCHAR(255) DEFAULT NULL,
  `authors` VARCHAR(255) DEFAULT NULL,
  `year_of_publication` YEAR DEFAULT NULL,
  `total_number_of_citations` INT DEFAULT NULL
);

CREATE TABLE `10.3.1 proportion of students with disabilities`(
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `total_number_of_students_with_disabilities` INT DEFAULT NULL,
  `total_number_of_students_with_disabilities_male` INT DEFAULT NULL,
  `total_number_of_students_with_disabilities_female` INT DEFAULT NULL,
  `psychosocial_disability` INT DEFAULT NULL,
  `disability_caused_by_chronic_illness` INT DEFAULT NULL,
  `learning_disability` INT DEFAULT NULL,
  `visual_disability` INT DEFAULT NULL,
  `orthopedic/locomotor_disability` INT DEFAULT NULL,
  `communication_disability` INT DEFAULT NULL,
  `student_population_belongs_to_PWDs` DECIMAL (5,2) DEFAULT NULL,
  `PWD_student_population_have_a_PWD_ID` DECIMAL (5,2) DEFAULT NULL,
  `total_number_of_PWDs_students_that_have_PWD_ID` INT DEFAULT NULL
);

CREATE TABLE `10.3.2 proportion of employees with disabilities`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `total_number_of_employees_with_disabilities` INT DEFAULT NULL,
    `total_number_of_employees_with_disabilities_male` INT DEFAULT NULL,
    `total_number_of_employees_with_disabilities_female` INT DEFAULT NULL,
    `psychiatric_disorder` INT DEFAULT NULL,
    `disability_caused_by_chronic_illness` INT DEFAULT NULL,
    `learning_disability` INT DEFAULT NULL,
    `visual_disability` INT DEFAULT NULL,
    `orthopedic/locomotor_disability` INT DEFAULT NULL,
    `communication_disability` INT DEFAULT NULL,
    `congenital` INT DEFAULT NULL,
    `employees_population_belongs_to_PWDs` DECIMAL(5,2) DEFAULT NULL,
    `total_number_of_PWDs_employees_that_have_PWD_ID` INT DEFAULT NULL,
    `PWD_employee_population_have_a_PWD_ID` DECIMAL(5,2) DEFAULT NULL
);

CREATE TABLE `10.4.1 proportion of students who belong to IPs`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `total_number_of_IP_students` INT DEFAULT NULL,
    `total_number_of_IP_students_male` INT DEFAULT NULL,
    `total_number_of_IP_students_female` INT DEFAULT NULL,
    `total_student_population_belong_to_IPs` DECIMAL(5,2) DEFAULT NULL
);

CREATE TABLE `10.4.2 proportion of employees who belong to IPs`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
	  `total_number_of_IP_employees` INT DEFAULT NULL,
	  `total_number_of_IP_employees_male` INT DEFAULT NULL,
    `total_number_of_IP_employees_female` INT DEFAULT NULL,
    `total_employee_population_belong_to_IPs` DECIMAL(5,2) DEFAULT NULL
);

CREATE TABLE `10.5.1 proportion of students who are member of LGBTQIA+ group`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `total_number_of_students_who_are_member_of_LGBTQIA+` INT DEFAULT NULL,
    `student_population_are_members_of_LGBTQIA+_group` DECIMAL(5,2) DEFAULT NULL
);

CREATE TABLE `10.5.2 proportion of employees who are member of LGBTQIA+ group`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `total_number_of_employees_who_are_member_of_LGBTQIA+` INT DEFAULT NULL,
    `employee_population_are_members_of_LGBTQIA+_group` DECIMAL(5,2) DEFAULT NULL
);

CREATE TABLE `10.6.1 Proportion of students based on religion`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `Total_number_of_students_who_belongs_to_religious_groups` INT DEFAULT NULL,
    `total_number_of_students_who_belongs_to_religious_groups_female` INT DEFAULT NULL,
    `total_number_of_students_who_belongs_to_religious_groups_male` INT DEFAULT NULL,
    `Aglipayan_total` INT DEFAULT NULL,
    `Aglipayan_male` INT DEFAULT NULL,
    `Aglipayan_female` INT DEFAULT NULL,
    `Born_Again_total` INT DEFAULT NULL,
    `Born_Again_male` INT DEFAULT NULL,
    `Born_Again_female` INT DEFAULT NULL,
    `Buddhism_total` INT DEFAULT NULL,
    `Buddhism_male` INT DEFAULT NULL,
    `Buddhism_female` INT DEFAULT NULL,
    `Hinduism_total` INT DEFAULT NULL,
    `Hinduism_male` INT DEFAULT NULL,
    `Hinduism_female` INT DEFAULT NULL,
    `Iglesia_ni_Cristo_total` INT DEFAULT NULL,
    `Iglesia_ni_Cristo_male` INT DEFAULT NULL,
    `Iglesia_ni_Cristo_female` INT DEFAULT NULL,
    `Islam_total` INT DEFAULT NULL,
    `Islam_male` INT DEFAULT NULL,
    `Islam_female` INT DEFAULT NULL,
    `Jehovahs_Witnesses_total` INT DEFAULT NULL,
    `Jehovahs_Witnesses_male` INT DEFAULT NULL,
    `Jehovahs_Witnesses_female` INT DEFAULT NULL,
    `Latter_Day_Saints_total` INT DEFAULT NULL,
    `Latter_Day_Saints_male` INT DEFAULT NULL,
    `Latter_Day_Saints_female` INT DEFAULT NULL,
    `Protestant_total` INT DEFAULT NULL,
    `Protestant_male` INT DEFAULT NULL,
    `Protestant_female` INT DEFAULT NULL,
    `Roman_Catholic_total` INT DEFAULT NULL,
    `Roman_Catholic_male` INT DEFAULT NULL,
    `Roman_Catholic_female` INT DEFAULT NULL,
    `Seventh_day_Adventists_total` INT DEFAULT NULL,
    `Seventh_day_Adventists_male` INT DEFAULT NULL,
    `Seventh_day_Adventists_female` INT DEFAULT NULL,
    `Others_total` INT DEFAULT NULL,
    `Others_male` INT DEFAULT NULL,
    `Others_female` INT DEFAULT NULL,
    `first_religion_name` TEXT DEFAULT NULL,
    `first_percentage` DECIMAL (5,2) DEFAULT NULL,
    `second_religion_name` TEXT DEFAULT NULL,
    `second_percentage` DECIMAL (5,2) DEFAULT NULL,
    `third_religion_name` TEXT DEFAULT NULL,
    `third_percentage` DECIMAL (5,2) DEFAULT NULL,
    `total_number_of_students_not_affiliated` INT DEFAULT NULL,
    `total_percentage_of_students_not_affiliated` DECIMAL (5,2) DEFAULT NULL
);

CREATE TABLE `10.6.2 Proportion of employees based on religion`(
    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `Total_number_of_employees_who_belongs_to_religious_groups` INT DEFAULT NULL,
    `total_number_of_employees_who_belongs_to_religious_groups_female` INT DEFAULT NULL,
    `total_number_of_employees_who_belongs_to_religious_groups_male` INT DEFAULT NULL,
    `Aglipayan_total` INT DEFAULT NULL,
    `Aglipayan_male` INT DEFAULT NULL,
    `Aglipayan_female` INT DEFAULT NULL,
    `Born_Again_total` INT DEFAULT NULL,
    `Born_Again_male` INT DEFAULT NULL,
    `Born_Again_female` INT DEFAULT NULL,
    `Buddhism_total` INT DEFAULT NULL,
    `Buddhism_male` INT DEFAULT NULL,
    `Buddhism_female` INT DEFAULT NULL,
    `Hinduism_total` INT DEFAULT NULL,
    `Hinduism_male` INT DEFAULT NULL,
    `Hinduism_female` INT DEFAULT NULL,
    `Iglesia_ni_Cristo_total` INT DEFAULT NULL,
    `Iglesia_ni_Cristo_male` INT DEFAULT NULL,
    `Iglesia_ni_Cristo_female` INT DEFAULT NULL,
    `Islam_total` INT DEFAULT NULL,
    `Islam_male` INT DEFAULT NULL,
    `Islam_female` INT DEFAULT NULL,
    `Jehovahs_Witnesses_total` INT DEFAULT NULL,
    `Jehovahs_Witnesses_male` INT DEFAULT NULL,
    `Jehovahs_Witnesses_female` INT DEFAULT NULL,
    `Latter_Day_Saints_total` INT DEFAULT NULL,
    `Latter_Day_Saints_male` INT DEFAULT NULL,
    `Latter_Day_Saints_female` INT DEFAULT NULL,
    `Protestant_total` INT DEFAULT NULL,
    `Protestant_male` INT DEFAULT NULL,
    `Protestant_female` INT DEFAULT NULL,
    `Roman_Catholic_total` INT DEFAULT NULL,
    `Roman_Catholic_male` INT DEFAULT NULL,
    `Roman_Catholic_female` INT DEFAULT NULL,
    `Seventh_day_Adventists_total` INT DEFAULT NULL,
    `Seventh_day_Adventists_male` INT DEFAULT NULL,
    `Seventh_day_Adventists_female` INT DEFAULT NULL,
    `Others_total` INT DEFAULT NULL,
    `Others_male` INT DEFAULT NULL,
    `Others_female` INT DEFAULT NULL,
    `first_religion_name` TEXT DEFAULT NULL,
    `first_percentage` DECIMAL(5, 2) DEFAULT NULL,
    `second_religion_name` TEXT DEFAULT NULL,
    `second_percentage` DECIMAL(5, 2) DEFAULT NULL,
    `third_religion_name` TEXT DEFAULT NULL,
    `third_percentage` DECIMAL(5, 2) DEFAULT NULL,
    `total_number_of_employees_not_affiliated` INT DEFAULT NULL,
    `total_percentage_of_employees_not_affiliated` DECIMAL(5, 2) DEFAULT NULL
);

CREATE TABLE `10.7.1 Proportion of refugee students` ( 
     id INT PRIMARY KEY AUTO_INCREMENT, 
    `total_refugee_students_male` INT DEFAULT NULL,
    `total_refugee_students_female` INT DEFAULT NULL,
    `student_refugee_percentage` DECIMAL(5, 2) DEFAULT 0 COMMENT 'Percentage of the student population who are refugees'
);

CREATE TABLE `10.7.2 Proportion of refugee employees` ( 
     id INT PRIMARY KEY AUTO_INCREMENT, 
    `total_refugee_employee_male` INT DEFAULT NULL,
    `total_refugee_employee_female` INT DEFAULT NULL,
    `employee_refugee_percentage` DECIMAL(5, 2) DEFAULT 0 COMMENT 'Percentage of the employee population who are refugees'
);

CREATE TABLE `10.8.1 Non discriminatory admissions policy` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    total_number_of_non_discriminatory_admission_policy INT DEFAULT NULL,
    total_number_of_PPAs_implemented_in_accordance_to_the_policy INT DEFAULT NULL,
    title_of_the_PPA VARCHAR(255) DEFAULT NULL,
    short_description_of_the_PPA TEXT DEFAULT NULL,
    total_cost DECIMAL(10,2) DEFAULT NULL,
    fund_source VARCHAR(255) DEFAULT NULL,
    evidence TEXT DEFAULT NULL
);

CREATE TABLE `10.8.2 Access to university underrepresented groups applications`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    total_number_of_student_applicants_belong_to_low_income INT DEFAULT NULL,
    total_number_of_student_applicants_belong_to_low_income_male INT DEFAULT NULL,
    total_number_of_student_applicant_belong_to_low_income_female INT DEFAULT NULL,
    total_number_of_student_applicants_belong_to_LGBTQIA_group INT DEFAULT NULL,
    total_number_of_student_applicants_belong_to_LGBTQIA_group_male INT DEFAULT NULL,
    total_number_of_student_applicants_belong_LGBTQIA_group_female INT DEFAULT NULL,
    total_number_of_student_applicants_who_are_refugee INT DEFAULT NULL,
    total_number_of_student_applicants_who_are_refugee_male INT DEFAULT NULL,
    total_number_of_student_applicants_who_are_refugee_female INT DEFAULT NULL,
    total_number_of_student_applicants_who_are_disabled INT DEFAULT NULL,
    total_number_of_student_applicants_who_are_disabled_male INT DEFAULT NULL,
    total_number_of_student_applicants_who_are_disabled_female INT DEFAULT NULL,
    total_number_of_student_applicants_are_child_of_solo_parent INT DEFAULT NULL,
    total_number_of_student_applicants_are_child_of_solo_parent_male INT DEFAULT NULL,
    total_number_of_student_applicants_are_child_solo_parent_female INT DEFAULT NULL,
    total_number_of_student_applicants_are_member_of_IPs INT DEFAULT NULL,
    total_number_of_student_applicants_are_member_of_IPs_male INT DEFAULT NULL,
    total_number_of_student_applicants_are_member_of_IPs_female INT DEFAULT NULL,
    student_applicants_belong_to_low_income_families DECIMAL(5, 2) DEFAULT NULL,
    student_applicants_belong_to_LGBTQIA_group DECIMAL(5, 2) DEFAULT NULL,
    student_applicants_are_refugee DECIMAL(5, 2) DEFAULT NULL,
    student_applicants_have_a_disability DECIMAL(5, 2) DEFAULT NULL,
    student_applicants_are_child_of_solo_parent DECIMAL(5, 2) DEFAULT NULL,
    student_applicants_are_member_of_IPs DECIMAL(5, 2) DEFAULT NULL,
    student_applicants_tracking_evidence TEXT DEFAULT NULL,
    total_number_of_job_applicants_who_belong_to_low_income INT DEFAULT NULL,
    total_number_of_job_applicants_who_belong_to_low_income_male INT DEFAULT NULL,
    total_number_of_job_applicants_who_belong_to_low_income_female INT DEFAULT NULL,
    total_number_of_job_applicants_who_belong_to_LGBTQIA_group INT DEFAULT NULL,
    total_number_of_job_applicants_who_belong_to_LGBTQIA_group_male INT DEFAULT NULL,
    total_number_of_job_applicants_who_belong_LGBTQIA_group_female INT DEFAULT NULL,
    total_number_of_job_applicants_who_are_refugee INT DEFAULT NULL,
    total_number_of_job_applicants_who_are_refugee_male INT DEFAULT NULL,
    total_number_of_job_applicants_who_are_refugee_female INT DEFAULT NULL,
    total_number_of_job_applicants_who_are_disabled INT DEFAULT NULL,
    total_number_of_job_applicants_who_are_disabled_male INT DEFAULT NULL,
    total_number_of_job_applicants_who_are_disabled_female INT DEFAULT NULL,
    total_number_of_job_applicants_are_child_of_solo_parent INT DEFAULT NULL,
    total_number_of_job_applicants_are_child_of_solo_parent_male INT DEFAULT NULL,
    total_number_of_job_applicants_are_child_solo_parent_female INT DEFAULT NULL,
    total_number_of_job_applicants_are_member_of_IPs INT DEFAULT NULL,
    total_number_of_job_applicants_are_member_of_IPs_male INT DEFAULT NULL,
    total_number_of_job_applicants_are_member_of_IPs_female INT DEFAULT NULL,
    job_applicants_belong_to_low_income_families DECIMAL(5, 2) DEFAULT NULL,
    job_applicants_belong_to_LGBTQIA_group DECIMAL(5, 2) DEFAULT NULL,
    job_applicants_are_refugee DECIMAL(5, 2) DEFAULT NULL,
    job_applicants_have_a_disability DECIMAL(5, 2) DEFAULT NULL,
    job_applicants_are_child_of_solo_parent DECIMAL(5, 2) DEFAULT NULL,
    job_applicants_are_member_of_IPs DECIMAL(5, 2) DEFAULT NULL,
    job_applicants_tracking_evidence TEXT DEFAULT NULL
);

CREATE TABLE `10.8.3 Access to university underrepresented groups recruit` (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    total_num_of_recruitment_programs_for_underrepresented_groups INT DEFAULT NULL,
    title_of_recruitment_programs VARCHAR(100) DEFAULT NULL,
    short_description_of_the_PPA TEXT DEFAULT NULL,
    total_cost DECIMAL(10,2) DEFAULT NULL,
    fund_source VARCHAR(255)DEFAULT NULL
  );

CREATE TABLE `10.8.4 Anti-discrimination policies` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    total_number_of_PPAs_implemented_in_accordance_to_the_policy INT DEFAULT NULL,
    title_of_the_ppa VARCHAR(255) DEFAULT NULL,
    short_description TEXT DEFAULT NULL,
    total_cost INT DEFAULT NULL,
    fund_source VARCHAR(255) DEFAULT NULL,
    evidence TEXT DEFAULT NULL
);

CREATE TABLE `10.8.5 Campus diversity officer` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    existence_of_committee_and_or_offices VARCHAR(10) DEFAULT NULL,
    position VARCHAR(50) DEFAULT NULL
);

CREATE TABLE `10.8.6 Support for underrepresented groups` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    total_number_PPAs_to_support_underrepresented_groups INT DEFAULT NULL,
    title_of_the_ppa VARCHAR(255) DEFAULT NULL,
    short_description TEXT DEFAULT NULL,
    total_cost DECIMAL(10,2) DEFAULT NULL,
    fund_source VARCHAR(255) DEFAULT NULL
);

CREATE TABLE `10.8.7 Accessible facilities` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    total_number_of_facilities_available_in_the_campus_for_pwds INT DEFAULT NULL
);

CREATE TABLE `10.8.8 Disability support services for students and employees` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    total_number_of_the_support_service INT DEFAULT NULL,
    title_type_of_the_support_service VARCHAR(255) DEFAULT NULL,
    short_description TEXT DEFAULT NULL,
    total_cost DECIMAL(10,2) DEFAULT NULL,
    fund_source VARCHAR(255) DEFAULT NULL
);

CREATE TABLE `10.8.9 Disability access scheme` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    total_number_of_access_schemes_for_PWDs INT DEFAULT NULL,
    title_of_the_access_scheme VARCHAR(255) DEFAULT NULL,
    short_description TEXT DEFAULT NULL,
    total_cost DECIMAL(10,2) DEFAULT NULL,
    fund_source VARCHAR(255) DEFAULT NULL
);

CREATE TABLE `10.8.10 Disability accommodation policy` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    total_number_of_disability_accomodation_policy INT DEFAULT NULL,
    total_number_of_PPAs_implemented_in_accordance_to_the_policy INT DEFAULT NULL,
    title_of_the_ppa VARCHAR(255) DEFAULT NULL,
    short_description TEXT DEFAULT NULL,
    total_cost DECIMAL(10,2) DEFAULT NULL,
    fund_source VARCHAR(255) DEFAULT NULL,
    evidence TEXT DEFAULT NULL
);

CREATE TABLE total (
  id INT PRIMARY KEY AUTO_INCREMENT,
  total_points DECIMAL (10,2)
);
