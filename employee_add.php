<?php include(header.php); ?>

<?php
    include_once('controller/connect.php');

    $dbs = new database();
    $db = $dbs -> connection();

    $page = "";
    if(isset($_GET['search'])) {
        $searchName = $_GET['search'];
        $recordLimit = 10;
        $search = mysqli_query($db, "SELECT count(EmpId) AS total FROM employee WHERE RoleId !='1' AND (FirstName LIKE '%" . $searchName . "%' or MiddleName like '%" . $SearchName . "%' or LastName like '%" . $SearchName . "%' or EmployeeId like '%" . $SearchName . "%')");
        
        $sName = mysqli_fetch_array($search);

        $number_of_row = ceil($sName['total'] / 10);
        if(isset($_GET['bn']) &&intval($_GET['bn']) <= $number_of_row && intval($_GET['bn'] !=0)) {
            $skip = (intval($_GET['bn']) * $recordLimit) - $recordLimit;
            $sql = mysqli_query($db, "SELECT * FROM employee WHERE RoleId ! = '1' AND (FirstName LIKE  '%" . $searchName . "%' or MiddleName like '%" . $SearchName . "%' or LastName like '%" . $SearchName . "%' or EmployeeId like '%" . $searchName . "%') LIMIT $Skip, $recordLimit ");
        }
    }   