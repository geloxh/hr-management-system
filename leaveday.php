<?php include('header.php'); ?>
<?php include_once('controller/connect.php');
      
    $dbs = new database();
    $db = $dbs -> connection();

    $sql = mysqli_query($db, "SELECT * FROM leavedays");
    $rom = mysqli_fetch_assoc($sql);
    $dqyId = $rom['leaveDayId'];

    if(isset($_POST['submit'])) {
        $day = $_POST['leaveday'];
        mysqli_query($db, "UPDATE leavedays SET LeaveDay = '$day' WHERE leaveDayId = '$dayid");
        echo "<script>window.location.reload()</script>";
    }
?>