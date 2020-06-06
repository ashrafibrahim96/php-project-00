<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='choice.css'>
    <script src='main.js'></script>
    
</head>

<body>
    <p> You are : </p>
    <div class="page">
        <div class="user">
            <h1 > USER </h1>
            <img src="images/user.png"  >
            <input type="checkbox" id="user" name="check" onclick="onlyOne(this)" >
        </div>
        <div class="admin">
            <h1> ADMIN </h1>
            <img src="images/adm.png">
            <input type="checkbox" id="admin" name="check" onclick="onlyOne(this)" >

        </div>
    </div>
    <button onClick="redirect()"onclick="document.getElementById('modal-wrapper').style.display='block'"  style="--content: 'Welcome';">
  <div class="left"></div>
  Welcome
  <div class="right"></div>
</button> 
    
<!--
<div id="modal-wrapper" class="modal" class="ok">
  
  <form class="modal-content animate" action="/action_page.php">
        
    <div class="imgcontainer2">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="images/1.png" alt="Avatar" class="avatar">
      <h1 class="welcome" style="text-align:center">Welcome Home !</h1>
    </div>

    <div class="container2">
      <input type="text" placeholder="Enter Username" name="uname">
      <input type="password" placeholder="Enter Password" name="psw">        
      <button class="button2" type="submit">Login</button>
    </div>
    
  </form>
  
</div>
-->



    <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
    </ul>
    <script>
      function onlyOne(checkbox) {
      var checkboxes = document.getElementsByName('check')
        checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
        })
      }
      function redirect()
        {
        if(document.getElementById("user").checked == true)
            window.location='Signup.php';  
        else if(document.getElementById("admin").checked == true)
        window.location='loginAdmin.php';  
      }
    </script>
       <script>
        
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
</script>
<!-- onclick="window.location='Signup.php'" -->
</body>

</html>
