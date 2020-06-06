<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="userpage.css">

    <title>Profile | Welcome</title>
    <style>
        .body{
            background-color: black;
        }
        .img_size {
            width: 300px;
            height: 50%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border-radius: 50%;
            border: 10px solid #333;
            margin: 50px auto 20px;       
        }
        .info{
            text-align: center;
            color: white;
            font-size: 80px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
        }
        .welcome{
            text-align: center;
            color: white;
            font-size: 30px;
            padding: 7px 13px;
            border-radius: 3px;
        }
    </style>
    
</head>
<body>
    <?php session_start();?>
    <div>
    <nav>
        <input type="checkbox" id="check"> 
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"> </i>
        </label>
        <label class="logo"> Musicalia </label>
        <ul>
            <li><a class="" href="home.php" class="jmal"> Home </a> </li>
            <li><a href="#" class="jmal"> Gallerie </a> </li>
            <li><a href="contact.html" class="jmal"> Contact us</a> </li>
            <li><a href="#" class="jmal"> About </a> </li>
            <li class="nav-item dropdown" class="jmal" class="rami">
				<a href="#" data-toggle="dropdown" class="active"> <?= $_SESSION['fullname'] ?><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="profile.php" class="dropdown-item"><i class="fa fa-user-o"></i> Profile </a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Favourites </a></li>
					<li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Update profile </a></li>
					<li><a href="logout.php" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout </a></li>
				</ul>
            </li>
            <img src="<?= $_SESSION['avatar'] ?>" class="avatar" alt="Avatar">


        </ul>
    </nav>
</div>
    <div class="content">
        <div class="success"><?= $_SESSION["message"] ?></div>
        <div class="container"><img class="img_size" src="<?= $_SESSION['avatar'] ?>"></div>
        <div class="welcome">Welcome</div>
        <div class="info"><?= $_SESSION['username'] ?></div>
        <div class="info"><?= $_SESSION['fullname'] ?></div>



    </div>  
</body>
</html>