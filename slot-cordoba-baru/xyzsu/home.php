<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
include('../vd/validation.php');

if (empty($_SESSION['minume'])) {
    return header("location:index.php?pesan=fail");
}

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Language" content="en" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        Dashboard
    </title>
    <!-- <link rel="shortcut icon" type="image/icon" href="../img/Istanaslot789.png"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components." />
    <!-- <link rel="icon" href="favicon.ico" /> -->

    <meta name="msapplication-tap-highlight" content="no" />
    <link href="./assets/css/main.css" rel="stylesheet" />
</head>

<body>
    <div class="app-container app-theme-gray">
        <div class="app-main">
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                            </button>
                            <div class="app-header__menu">
                                <span>
                                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                        <span class="btn-icon-wrapper">
                                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                                        </span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-header">
                        <!-- <div class="page-title-heading">
                            <img src="../img/Istanaslot789.png" alt="Istanaslot789" width="150">
                        </div> -->
                        <div class="app-header-right">
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                    <img width="42" class="rounded" src="assets/img/stafa.jpg" alt="" />
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-info">
                                                            <div class="menu-header-image opacity-2" style="
                                                                background-image: url('assets/img/stafa.jpg');">
                                                            </div>
                                                            <div class="menu-header-content text-left">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="" />
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-subheading opacity-8">
                                                                                Welcome, <b><?php echo $_SESSION['minume']; ?></b>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scroll-area-xs" style="height: 80px">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-header nav-item">
                                                                Settings
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="home.php?p=password" class="nav-link">Change Password
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                                    </ul>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-btn text-center nav-item">
                                                            <a href="../vd/logout.php">
                                                                <button class="btn-wide btn btn-primary btn-sm">
                                                                    Logout
                                                                </button>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
                    </div>
                    <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-bar">
                            <!-- <div class="inner-bar-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link show-menu-btn">
                                            <i class="fa fa-align-left mr-2"></i>
                                            <span class="hide-text-md">Show page menu</span>
                                        </a>
                                        <a href="#" class="nav-link close-menu-btn">
                                            <i class="fa fa-align-right mr-2"></i>
                                            <span class="hide-text-md">Close page menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="inner-bar-center">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a  href="home.php?p=data_stats" class="nav-link active">
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__sidebar">
                                <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                                    <div class="nav flex-column">
                                        <div class="nav-item-header text-primary nav-item">
                                            MAIN MENU
                                        </div>
                                        <a class="dropdown-item" href="home.php?p=data_stats">Dashboard</a>
                                        <a class="dropdown-item" href="home.php?p=add_members">Users</a>
                                        <a class="dropdown-item" href="home.php?p=limit">Company Limit</a>
                                         <a class="dropdown-item" href="home.php?p=custom_user">Custom User</a>
                                    </div>
                                </div>
                            </div>
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="card mb-3 widget-chart">
                                                    <div class="widget-numbers">
                                                        <?php
                                                        $sum1 = mysqli_query($conn, "SELECT comp_limit FROM company");
                                                        $summit1 = mysqli_num_rows($sum1);

                                                        while ($row1 = mysqli_fetch_array($sum1)) :
                                                        ?>
                                                            <span><?php echo rupiah($row1['comp_limit']); ?></span>
                                                        <?php
                                                        endwhile; ?>
                                                    </div>
                                                    <div class="widget-subheading">Company Limits</div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card mb-3 widget-chart">
                                                    <div class="widget-numbers">
                                                        <?php
                                                        $sum = mysqli_query($conn, "SELECT SUM(prize) FROM uvc");
                                                        $summit = mysqli_num_rows($sum);

                                                        function rupiah($rp)
                                                        {
                                                            $hasil_rupiah = "Rp " . number_format($rp);
                                                            return $hasil_rupiah;
                                                        }

                                                        while ($row = mysqli_fetch_array($sum)) :
                                                        ?>
                                                            <span><?php echo rupiah($row['SUM(prize)']); ?></span>
                                                        <?php
                                                        endwhile; ?>
                                                    </div>
                                                    <div class="widget-subheading">Members Win</div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="card mb-3 widget-chart">
                                                    <?php
                                                    include '../vd/validation.php';

                                                    $usquery = mysqli_query($conn, "SELECT * FROM uvc");
                                                    $row = mysqli_num_rows($usquery);
                                                    ?>
                                                    <div class="widget-numbers">
                                                        <span><?php echo $row; ?></span>
                                                    </div>
                                                    <div class="widget-subheading">
                                                        Total Members
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php include "page.php"; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="./assets/js/main.js"></script>
</body>

</html>
