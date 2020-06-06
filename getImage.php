
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>$row</h1>
    <p>gdfzefzef</p>
</body>
</html>

<?php 
// include('connect2.php');

// display();
// function display() {
//     $connect=new mysqli("127.0.01","root","","phpproject");
//     $sql="SELECT* from music";
//     $query=mysqli_query($connect,$sql);
//     $num=mysqli_num_rows($query);
//     for ($i=0;$i < $num ;$i++){
//         $result=mysqli_fetch_array($query);
//         $img=$result['Imgartist'];
//         echo'<img src="data:image;base64,'.$img.'">';
//     }
// }


include('connect2.php');    
  $id = $_GET['id'];
  // do some validation here to ensure id is safes

  $link = mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($link,$dbname);
  $sql = "SELECT Imgartist FROM music WHERE id='$id'";
  $result = mysqli_query($connect,$sql);
  $row = mysqli_fetch_assoc($result);
  mysqli_close($link);

  header("Content-type: image/jpeg");
  print_r($row);
?>