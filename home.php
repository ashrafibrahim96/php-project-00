<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" href="style.css"> 

    <title>Document</title>
</head>
<body>
  
    
<div>
    <nav>
        <input type="checkbox" id="check"> 
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"> </i>
        </label>
        <label class="logo"> Musicalia </label>
        <ul>
            <li><a class="active" href="home.php"> Home </a> </li>
            <li><a href="#"> Gallerie</a> </li>
            <li><a href="http://127.0.0.1/PHP_Project/login.php"> Login</a> </li>
            <li><a href="choice.php"> Signup</a> </li>
            <li><a href="contact.html"> Contact us</a> </li>
            <li><a href="#"> About </a> </li>

        </ul>
    </nav>
</div>
<div class="part1"> 
    <div class="pic"> 
        <img src="images/person.jpg"  >      
    </div>
    <div class="words" >
        <h1> Music for Everyone. </h1>
        <h4> Millions of songs. No credit card needed.</h4>
    </div>

</div> 

<div>
    <form id="content">
    <input type="text" name="input" class="input" id="search-input">
    <button type="reset" class="search" id="search-btn"></button>
    </form>
</div>

<div class="boxes">
        <div class="box">
            <div class="imgBox">
                <img src="images/emine.jpg"> 
            </div> 
                <div class="details">
                     <div class="content">
                        <h1>Eminem </h1>
                        <!-- Trigger/Open The Modal -->
                            <button id="myBtn">Open Modal</button>
                        
                    </div> 
                </div>
        </div>
        <div class="box"> 
            <div class="imgBox">
            <img src="images/snoop.jpg"> 
            </div> 
                <div class="details">
                     <div class="content">
                        <h1>Snoop Dogg </h1>
                    </div> 
            </div>
        </div>
        <div class="box"> 
            <div class="imgBox">
            <img src="images/daddy.jpg"> 
            </div> 
                 <div class="details">
                     <div class="content">
                     <h1>Daddy Yankee </h1>
                    </div> 
                </div>
        </div>
        <div class="box"> 
            <div class="imgBox">
            <img src="images/coldplay.jpg"> 
            </div> 
                 <div class="details">
                     <div class="content">
                        <h1>Coldplay </h1>
                    </div> 
                </div>
        </div>
        
        <div class="box"> 
            <div class="imgBox">
            <img src="images/DR.jfif"> 
            </div> 
                 <div class="details">
                     <div class="content">
                        <h1> DR DRE </h1>
                    </div> 
                </div>
        </div>
        
        <div class="box"> 
            <div class="imgBox">
            <img src="images/martin.jpg"> 
            </div> 
                 <div class="details">
                     <div class="content">
                        <h1>Martin Garrix </h1>
                    </div> 
                </div>
        </div>
        <div class="box"> 
            <div class="imgBox">
            <img src="images/sia.jpg"> 
            </div> 
                 <div class="details">
                     <div class="content">
                        <h1>SIA </h1>
                    </div> 
                </div>
        </div>
        <div class="box"> 
            <div class="imgBox">
            <img src="images/alan.jpg"> 
            </div> 
                 <div class="details">
                     <div class="content">
                        <h1>Alan Walker</h1>
                    </div> 
                </div>
        </div>
        <div class="box"> 
            <div class="imgBox">
            <img src="images/tiesto.png"> 
            </div> 
                 <div class="details">
                     <div class="content">
                        <h1>TIESTO  </h1>
                    </div> 
                </div>
        </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
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
<div class="container counter-section">
    <div class="row text-center ">
		<div class="col-md-3 counter-box">
				<div class="icon-box"><i class="fa fa-book"></i></div>
				<br><br>
				<p1 class="counter">850</p1>
				<br><br>
				<p10>&nbsp&nbsp New Album  </p10>
		</div>
		<div class="col-md-3 counter-box">
				<div class="icon-box1"><i  class="fas fa-compact-disc"></i></div>
				<br><br>
				<p11 class="counter">630</p11>
				<br><br>
				<p110>&nbsp&nbsp Musicians and artists</p110>
		</div>
		<div class="col-md-3 counter-box">
				<div class="icon-box2"><i class="fa fa-user"></i></div>
				<br><br>
				<p111 class="counter">1450</p111>
				<br>
				<p1110>&nbsp&nbsp Users Signups</p1110>
		</div>
    </div>
</div> 
<!--
<div class="slidershow middle">
    <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">

        <div class="slide s1">
            <img src="images/tiesto.png" alt=""> 
        </div>
        <div class="slide">
            <img src="images/emine.jpg" alt=""> 
        </div>
        <div class="slide">
            <img src="images/tiesto.png" alt=""> 
        </div>
        <div class="slide">
            <img src="images/alan.jpg" alt=""> 
        </div> 
        <div class="slide">
            <img src="images/tiesto.png" alt=""> 
        </div>
        <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
        </div>
    </div>
</div> -->
<div class="cadre">
<div class="paragraph">
    <h2>Dozens of <em> other ALBUMS </em>     match your <br> desired MUSIC style</h2>
    <p>Choose any type of music you want , then DOWNLOAD it and enjoy to the fulest !</p>
</div>
</div>
<footer>
    <div class="main-content">
        <div class="left box">
            <h2> about us</h2>
            <div class="content">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem repellendus minus quis fuga eaque sint ratione voluptate, consequatur quia, sunt vel. Est dolor vitae unde harum natus? Doloremque, pariatur quia?</p>
                <div class="social">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-youtube"></span></a>
                </div>
            </div>
        </div>
        <div class="center box">
            <h2> Adress</h2>
            <div class="content">
                <div class="place">
                    <span class="fas fa-map-marker-alt"></span>
                    <span class="text">Hammem Sousse, Sousse, Tunisia</span>
                </div>
                <div class="phone">
                    <span class="fas fa-phone-alt"></span>
                    <span class="text">+216 50 698 140</span>
                </div>
                <div class="email">
                    <span class="fas fa-envelope"></span>
                    <span class="text">contact.us@musicaly.com</span>
                </div>
            </div>
        </div>
        <div class="right box">
            <h2>Contact us</h2>
            <div class="content">
                <form action="#">
                    <div class="email">
                        <div class="text">Email*</div>
                        <textarea rows="2" cols="25" required></textarea>
                        <!-- <input type="email" required> -->
                    </div>
                    <div class="msg">
                        <div class="text"> Message* </div>
                        <textarea rows="2" cols="25" required></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit"> Send </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>

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
    <script> 
        const input = document.getElementById("search-input");
        const searchBtn = document.getElementById("search-btn");
        const expand = () => {
            searchBtn.classList.toggle("close");
            input.classList.toggle("square");
            };
        searchBtn.addEventListener("click", expand);
    </script>
   <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>
<!-- read more read less 
button get musically free thez lel sign up 
partie tendance feha akther ghenyet w des liens yhezou lel youtube wala videos 
footer 
bar recherche selon el naw3 taa l mouzika -->