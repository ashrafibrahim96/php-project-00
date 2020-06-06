<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="addmusic.css">
</head>

<body>
    <div class="container">
        <form id="contact" action="" method="post" enctype="multipart/form-data">
            <h4>Add music</h4>
            <fieldset>
                <input placeholder="Artist name" type="text" name="artistname" tabindex="2" required>
                <h4>Add artist image</h4>
                <input type="file" name="Imgartist" id="uploadFile">
            </fieldset>
            <fieldset>
                <input placeholder="Song name" type="text" name="songname" tabindex="1" required autofocus>
                <input type="file" name="track" id="uploadFile">
                <!-- <input type="submit" value="Upload File" name="submit"> -->
            </fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>

        </form>
    </div>
        <?php
        include('connect2.php');
        $_SESSION['message'] = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $artistname = $_POST['artistname'];
            $Imgartist_path = './pic/' . $_FILES['Imgartist']['name'];
            $track_path = './audio/' . $_FILES['track']['name'];
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
                        header("location:add.php");
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