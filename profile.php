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

    $stateId = $city['StateId'];
    $staId = mysqli_query($db, "SELECT * FROM STATE WHERE StateId = '$stateId'");
    $state = mysqli_fetch_assoc($staId);

    $countryId = $state['CountryId'];
	$couId = mysqli_query($db, "SELECT * FROM country WHERE CountryId = '$countryid'");
	$country = mysqli_fetch_assoc($couid);

	$positionId = $row['PositionId'];
	$posId = mysqli_query($db, "SELECT * FROM position WHERE PositinId = '$positionId'");
	$position = mysqli_fetch_assoc($posId);

	$roleId = $row['RoleId'];
	$rolId= mysqli_query($db, "SELECT * FROM ROLE WHERE RoleId = '$rolId'");
	$role = mysqli_fetch_assoc($rolId);

    if(isset($_POST['close']))
	{
		echo "<script>window.location='home.php';</script>";
	}
?>

<link href="css/table-style.css" rel="stylesheet" type="text/css" />
<script src="