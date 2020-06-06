<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="userpage.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
   

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
    
    <title>Document</title>
   
</head>

<body>
    <?php session_start(); ?>
    <div>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"> </i>
            </label>
            <label class="logo"> Musicalia </label>
            <ul>
                <li><a class="active" href="home.php" class="jmal"> Home </a> </li>
                <li><a href="#" class="jmal"> Gallerie </a> </li>
                <li><a href="contact.html" class="jmal"> Contact us</a> </li>
                <li><a href="#" class="jmal"> About </a> </li>
                <li class="nav-item dropdown" class="jmal">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"> <?= $_SESSION['username'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu" style="top: 92%;left: -66px;">
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
    <!-- Artists section 
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">OUR TOP ARTISTS</h1>
        </div>
        <hr>
    </div>
</div>-->


 <div class="container-fluid padding">
    <div class="row padding" >
        <div class="col-md-4" >
            <div class="card" >
                 <!-- <img class="card-img-top" src="../images/emine.jpg">  -->
                 <img class="card-img-top" src="getImage.php?id=47" width="175" height="200" />
                
                
                <div class="card-body">
                    <h4 class="card-title">Eminem</h4>  
            
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn1">Try it</Button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="../images/daddy.jpg">
                <div class="card-body">
                    <h4 class="card-title">Daddy Yankee</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn2">Try it</Button>                
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="../images/alan.jpg">
                <div class="card-body">
                    <h4 class="card-title">Alan Walker</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn3">Try it</Button>                
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="../images/martin.jpg">
                <div class="card-body">
                    <h4 class="card-title">Martin Garrix</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn4">Try it</Button>                
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="../images/snoop.jpg">
                <div class="card-body">
                    <h4 class="card-title">Snoop Dogg</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn5">Try it</Button>                 
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="../images/tiesto.jpg">
                <div class="card-body">
                    <h4 class="card-title">Tiesto</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn6">Try it</Button>                
                </div>
            </div>
        </div> -->
    </div>
</div> 

<!-- include('db.php');
$status = '';
if (!empty($_POST['music'])){
if (is_array($_POST['music'])) {
$status = "<strong>You selected the below music:</strong><br />";
foreach($_POST['music'] as $sport_id){
$query = mysqli_query
    (
    $conn,
    "SELECT * FROM music WHERE `id`='$id'"
    );
$row = mysqli_fetch_assoc($query);
$status .= $row['songname'] . "<br />";
   } 
  } 
}  -->

<!-- include('db.php');
$sql2="SELECT* from music";
$res2=mysqli_query($conn,$sql2);
while ($row2=mysqli_fetch_assoc($res2)) {
    $src1=$row2['songname'];
    echo '<div class="item1" style="background-image : url('.$src1.')";>';
    echo '<div class="box1">';
    echo '<div class="details">';
    echo "<h41> Book name : ".$row2['name']."<br> author name:".$row2['author_name']."</h41>";
    echo '</div></div></div>';
}  -->

</body>

</html>
