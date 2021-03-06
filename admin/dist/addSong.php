<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Add music - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="./PHP_Project/addmusic.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Admin Panel</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                        </div>


                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Add music
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Add music</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Music</li>
                    </ol>
                </div>
                <div class="container">
                    <form id="contact" action="" method="post" enctype="multipart/form-data">
                        <fieldset>
                        <br>
                            <input placeholder="Artist name" type="text" name="artistname" tabindex="2" required>
                            <br><br>
                            <h7>Add artist image</h7>
                            <br> <br>
                            <input type="file" name="Imgartist" id="uploadFile">
                            <br>
                        </fieldset>
                        <fieldset>
                            <br>
                            <input placeholder="Song name" type="text" name="songname" tabindex="1" required >
                            <br><br>
                            <input type="file" name="track" id="uploadFile">
                            <!-- <input type="submit" value="Upload File" name="submit"> -->
                        </fieldset>
                        <br><br>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </form>
                </div>
            </main>

        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="assets/demo/chart-pie-demo.js"></script>
</body>

</html> 
<?php
        include('connectAdmin.php');
        $_SESSION['message'] = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $artistname = $_POST['artistname'];
            $Imgartist_path = '../../pic/' . $_FILES['Imgartist']['name'];
            $track_path = '../../audio/' . $_FILES['track']['name'];
            $songname = $_POST['songname'];

            $artistname = mysqli_real_escape_string($connect, $artistname);
            $Imgartist_path = mysqli_real_escape_string($connect, $Imgartist_path);
            $songname = mysqli_real_escape_string($connect, $songname);
            $track_path = mysqli_real_escape_string($connect, $track_path);

            if (preg_match("!image!", $_FILES['Imgartist']['type'])) {
                if ((copy($_FILES['Imgartist']['tmp_name'], $Imgartist_path)) AND (copy($_FILES['track']['tmp_name'], $track_path))) {
                    $_SESSION['artistname'] = $artistname;
                    $_SESSION['songname'] = $songname;
                    $_SESSION['Imgartist'] = $Imgartist_path;
                    $_SESSION['track'] = $track_path;

                    $sql = "INSERT INTO music(artistname,Imgartist,songname,song)VALUES('$artistname','$Imgartist_path','$songname','$track_path')";

                    if (mysqli_query($connect, $sql)) {
                        /*header("location:addDone.php"); */
                        echo'<div class="row">
                            <div class="col-sm-2 offset-sm-5">
                            <div>ADD DONE successfuly</div>  
                            </div>
                            </div>';
                    } else {
                        $_SESSION['message'] = "User could not be added to database ! ";
                    }
                } else {
                    $_SESSION['message'] = "File uploaded failed";
                }
            } else {
                $_SESSION['message'] = "Please upload only JPG, PNG or GIF images !";
            }
        }

        ?>