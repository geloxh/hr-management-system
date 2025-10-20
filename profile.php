<?php include('header.php'); ?>
<?php
    include_once('controller/connect.php');
    $dbs = new database();
    $db = $dbs -> connection();
    $row = "";
    $gender = "";
    $civilstatus = "";
    $city = "";
    $state = "";
    $country = "";
    $jobposition = "";
    $jobrole = "";
    $profileEmployeeId = $_SESSION['User']['EmployeeId'];
    $view = mysqli_query($db, "SELECT * FROM employee WHERE EmployeeId = '$profileEmployeeId'");
    $row = mysqli_fetch_assoc($view);

    $genderId = $row['Gender'];
    $genId = mysqli_query($db, "SELECT * FROM gender WHERE GenderId = '$genderid'");
    $gender = mysqli_fetch_assoc($gid);

    $civilId = $row['CivilStatus'];
    $civId = mysqli_query($db, "SELECT * FROM civilstatus WHERE CivilId = '$civilId'");
    $civilstatus = mysqli_fetch_assoc($civId);

    $cityId = $row['CityId'];
    $citId = mysqli_query($db, "SELECT * FROM city WHERE CityId = '$cityId'");
    $city = mysqli_fetch_assoc($citId);