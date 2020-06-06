<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="user.css">

</head>
<body>
<!-- NAVIGATION -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
    <a class="navbar-brand" href="#"> <h1>Musciallya</h1> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact us </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="choice.php">Connect </a>
    
            </li>
        </ul>

    </div>
</div>
</nav>
<!-- IMAGE SLIDER -->
<div id="slides" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <video width="100%" height="100%" autoplay>
            <source src="images/vid3.mp4" type="video/mp4">
        </video>
            <div class="carousel-caption">
                <h1 class="display-2"> Music for Everyone.</h1>
                <h3>Millions of songs. No credit card needed.</h3>
                <button type="button" class="btn btn-outline-light btn-lg">View Demo</button>
                <button type="button" class="btn btn-primary btn-lg">Get Started</button>
            </div>
        </div>
        <div class="carousel-item">
        <video width="100%" height="100%" autoplay>
            <source src="images/vid2.mp4" type="video/mp4">
        </video >
        </div>
        <div class="carousel-item">
        <video width="100%" height="100%" autoplay>
            <source src="images/vid1.mp4" type="video/mp4">
        </video>
        </div>
    </div>
</div>
<!-- intro -->
<div class="container-fluid">
    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10"> <!-- responsive -->
            <p class="lead"> “The most exciting rhythms seem unexpected and complex, the most beautiful melodies simple and inevitable.” ― W.H. Audeny</p>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button class="btn btn-outline-secondary btn-lg"> Web Hosting</button></a>
        </div>
    </div>
</div>
<!-- Artists section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4">OUR TOP ARTISTS</h1>
        </div>
        <hr>
    </div>
</div>
<!-- Cards -->
<div class="container-fluid padding">
    <div class="row padding" >
        <div class="col-md-4" >
            <div class="card" >
                <img class="card-img-top" src="images/emine.jpg">
                <div class="card-body">
                    <h4 class="card-title">Eminem</h4>
            
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn1">Try it</Button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/daddy.jpg">
                <div class="card-body">
                    <h4 class="card-title">Daddy Yankee</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn2">Try it</Button>                
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/alan.jpg">
                <div class="card-body">
                    <h4 class="card-title">Alan Walker</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn3">Try it</Button>                
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/martin.jpg">
                <div class="card-body">
                    <h4 class="card-title">Martin Garrix</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn4">Try it</Button>                
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/snoop.jpg">
                <div class="card-body">
                    <h4 class="card-title">Snoop Dogg</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn5">Try it</Button>                 
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="images/tiesto.jpg">
                <div class="card-body">
                    <h4 class="card-title">Tiesto</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, consectetur!</p>
                    <Button  class="btn btn-outline-secondary" id="myBtn6">Try it</Button>                
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Modal1 -->
<div id="myModal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <figure>
            <h2>Enemies 2pac </h2>
            <audio title="Noir Désir" preload="auto" controls loop controlsList="nodownload">
            <source src="music/enemies.mp3" type="audio/mp3">
            <p>Votre navigateur est trop ancien pour lire ce fichier</p>
            </audio>
            <h2>Enemies 2pac </h2>
            <audio title="Noir Désir" preload="auto" controls loop controlsList="nodownload">
            <source src="music/enemies.mp3" type="audio/mp3">
            <p>Votre navigateur est trop ancien pour lire ce fichier</p>
            </audio>
            <h2>Enemies 2pac </h2>
            <audio title="Noir Désir" preload="auto" controls loop controlsList="nodownload">  
            <source src="music/enemies.mp3" type="audio/mp3">
            <p>Votre navigateur est trop ancien pour lire ce fichier</p>
            </audio>
            
            
            <figcaption>Lire un fichier audio</figcaption>
        </figure>                            
    </div>
</div>
<!--  Modal2 -->
<div id="myModal2" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <figure>
            <h2>Enemies 2pac </h2>
            <audio title="Noir Désir" preload="auto" controls loop controlsList="nodownload">
            <source src="music/enemies.mp3" type="audio/mp3">
            <p>Votre navigateur est trop ancien pour lire ce fichier</p>
            </audio>
            <figcaption>Lire un fichier audio</figcaption>
        </figure>                            
    </div>
</div>
<!--  Modal3 -->
<div id="myModal3" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <figure>
            <h2>Enemies 2pac </h2>
            <audio title="Noir Désir" preload="auto" controls loop controlsList="nodownload">
            <source src="music/enemies.mp3" type="audio/mp3">
            <p>Votre navigateur est trop ancien pour lire ce fichier</p>
            </audio>
            <figcaption>Lire un fichier audio</figcaption>
        </figure>                            
    </div>
</div>

<!--  Modal4 -->
<div id="myModal4" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <figure>
            <h2>Enemies 2pac </h2>
            <audio title="Noir Désir" preload="auto" controls loop controlsList="nodownload">
            <source src="music/enemies.mp3" type="audio/mp3">
            <p>Votre navigateur est trop ancien pour lire ce fichier</p>
            </audio>
            <figcaption>Lire un fichier audio</figcaption>
        </figure>                            
    </div>
</div>
<!--  Modal5 -->
<div id="myModal5" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <figure>
            <h2>Enemies 2pac </h2>
            <audio title="Noir Désir" preload="auto" controls loop controlsList="nodownload">
            <source src="music/enemies.mp3" type="audio/mp3">
            <p>Votre navigateur est trop ancien pour lire ce fichier</p>
            </audio>
            <figcaption>Lire un fichier audio</figcaption>
        </figure>                            
    </div>
</div>
<!--  Modal6 -->
<div id="myModal6" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <figure>
            <h2>Enemies 2pac </h2>
            <audio title="Noir Désir" preload="auto" controls loop controlsList="nodownload">
            <source src="music/enemies.mp3" type="audio/mp3">
            <p>Votre navigateur est trop ancien pour lire ce fichier</p>
            </audio>
            <figcaption>Lire un fichier audio</figcaption>
        </figure>                            
    </div>
</div>
<!-- Text section -->
<div class="container-fluid padding">
    <div class="row  padding">
        <div class="col-md-12 col-lg-6">
            <h2>If you do it...</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ullam sit dolore nesciunt qui veritatis modi, asperiores nulla molestiae illo repudiandae?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, minima.
                 Nulla et corrupti unde ipsam, eius harum tenetur atque id rerum. Voluptatibus similique, soluta, 
                provident ut officiis animi at voluptas asperiores atque dolore porro optio?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, minima.
                Nulla et corrupti unde ipsam, eius harum tenetur atque id rerum. Voluptatibus similique, soluta, 
                provident ut officiis animi at voluptas asperiores atque dolore porro optio?</p>
            <br>
            <a href="#" class="btn btn-primary">Learn more</a>
        </div>
        <div class="col-lg-6">
            <img src="img/desk.png" class="img-fluid">
        </div>
    </div>
</div>
<hr class="my-4">
<!-- fixed background -->
<figure>
    <div class="fixed-wrap">
        <div id="fixed"> 

        </div>
    </div>
</figure>
<!-- emoji section -->
<button class="fun" data-toggle="collapse" data-target="#emoji">Click for fun</button>
<div id="emoji" class="collapse">
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="images/gif4.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="images/gif4.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="images/gif4.gif">
            </div>
            <div class="col-sm-6 col-md-3">
                <img class="gif" src="images/gif4.gif">
            </div>
        </div>
    </div>
</div>


<!-- Our philosophy -->

<div class="container-fluid padding">
    <div class="row  padding">
        <div class="col-md-12 col-lg-6">
            <h2>mezelt nkhamem</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Ullam sit dolore nesciunt qui veritatis modi, asperiores nulla molestiae illo repudiandae?</p>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi, minima.
                 Nulla et corrupti unde ipsam, eius harum tenetur atque id rerum. Voluptatibus similique, soluta, 
                provident ut officiis animi at voluptas asperiores atque dolore porro optio?</p>            
        </div>
        <div class="col-lg-6">
            <img src="images/cover2.jpg" class="img-fluid">
        </div>
    </div>
    <hr class="my-4">
</div>

<!-- Welcome section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="display-4"> LISTEN with ease.</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">To play and enjoy music without the app, all within your browser, Signup, Soundtrack your life with Musicallya and Download unlimited music for free..</p>
        </div>
    </div>
</div>
<!-- Next section -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs12 col-sm-6 col-md-4">
        <i class="far fa-file-audio"></i>           
        <h3 class="counter"> 850 </h3>
            <p>&nbsp&nbsp New Album.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-music"></i>
            <h3 class="counter"> 630 </h3>
            <p>&nbsp&nbsp Musicians and artists.</p>
            
        </div>
        <div class="col-sm-12 col-md-4">
        <i class="fa fa-user"></i>
        <h3 class="counter"> 1450 </h3>
            <p>&nbsp&nbsp Users Signups.</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<!-- Social media -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>

        </div>
    </div>
</div>
<!-- footer-->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <!-- <img src="img/w3newbie.png"> -->
                <h1>Musciallya</h1>
                <hr class="light">
                <p>+216 50 698 140</p>
                <p>achrafbrahim996@gmail.com</p>
                <p>Hammmem Sousse,Tunisia</p>
                <p>Sousse, Tunisia</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hours</h5>
                <hr class="light">
                <p>Monday: 9am - 5 pm </p>
                <p>Monday: 9am - 5 pm </p>
                <p>Monday: 9am - 5 pm </p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hours</h5>
                <hr class="light">
                <p>Sousse, Tunisia</p>
                <p>Sousse, Tunisia</p> 
                <p>Sousse, Tunisia</p>           
            </div>
            <div class="col-12">
                <hr class="light">
                <h5>&copy; Musciallya</h5>
            </div>
        </div>
    </div>
</footer>
<script>
// Get the modal
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
var modal5 = document.getElementById("myModal5");
var modal6 = document.getElementById("myModal6");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
var span3 = document.getElementsByClassName("close")[2];
var span4 = document.getElementsByClassName("close")[3];
var span5 = document.getElementsByClassName("close")[4];
var span6 = document.getElementsByClassName("close")[5];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}
btn3.onclick = function() {
  modal3.style.display = "block";
}
btn4.onclick = function() {
  modal4.style.display = "block";
}
btn5.onclick = function() {
  modal5.style.display = "block";
}
btn6.onclick = function() {
  modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}
span2.onclick = function() {
  modal2.style.display = "none";
}
span3.onclick = function() {
  modal3.style.display = "none";
}
span4.onclick = function() {
  modal4.style.display = "none";
}
span5.onclick = function() {
  modal5.style.display = "none";
}
span6.onclick = function() {
  modal6.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
   if (event.target == modal2) {
    modal2.style.display = "none";
  }
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}
</script>

<!------counter------->

<script src="jquery.counterup.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script>
		jQuery(document).ready(function( $ )
		{
			$('.counter').counterUp({
			delay: 10,
			time: 1000 
		    });
		});
	</script>



</body>
</html>
