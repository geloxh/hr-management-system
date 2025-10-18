<?php include('header.php'); ?>
<?php
    include_once('controller/connect.php');

    $dbs = new database();
    $db = $dbs -> connection();
    $TotalEmployee = mysqli_query($db, "SELECT count(EmployeeId) AS empl FROM employee WHERE RoleId != '1' ");
    $TotalEmployeeId = mysqli_fetch_assoc($TotalEmployee);
    $pendingLeave = mysqli_query($db, "SELECT count(LeaveStatus) AS pendingLeave FROM leavedetails WHERE LeaveStatus = 'Pending'");
    $totalpendingleave = mysqli_fetch_assoc($pendingleave);
?>

<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item" title="Home"><a href="index.php">Home</a></li>
</ol>
    <!-- Four-Grids -->
     <div class="row" style="">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="panel panel-default bg-light dash-summary">
                <div class="panel-body">
                    <a href="employee_view.php">