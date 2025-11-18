<?php include(header.php); ?>

<?php
    include_once('controller/connect.php');

    $dbs = new database();
    $db = $dbs -> connection();

    $page = "";
    if(isset($_GET['search'])) {
        $searchName = $_GET['search'];
        $record_limit = 10;
        $search = mysqli_query($db, "SELECT count(EmpId) AS total FROM employee WHERE RoleId !='1' AND (FirstName LIKE '%" . $searchName . "%' or MiddleName like '%" . $SearchName . "%' or LastName like '%" . $SearchName . "%' or EmployeeId like '%" . $SearchName . "%')");
    }