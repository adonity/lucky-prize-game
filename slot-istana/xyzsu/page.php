 
<?php

$page = isset($_GET['p']) ? $_GET['p'] : "";

if ($page == 'add_members') {
    include_once "members.php";
} else if ($page == "") {
    include_once "maindata.php";
} else if ($page == "data_stats") {
    include_once "maindata.php";
} else if ($page == "limit") {
    include_once "company.php";
} else if ($page == "password") {
    include_once "pwd.php";
} else if ($page == "custom_user") {
    include_once "u_custom.php";
}
?>
 
