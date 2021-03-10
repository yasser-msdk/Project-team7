<?php include 'Db.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gaming website</title>

    <link rel="stylesheet" href="one.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css1.css">
    <style>
        
    *{
        margin: 0;
        padding: 0;
    }
.botton a
{
    
  background-color: #161616; 
  border: none;
  color:#f0bd33;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
}
    #banner{
        background: linear-gradient(rgba(0,0,0,0.5),#6c1aa3),url(https://cutewallpaper.org/21/steam-vaporwave-backgrounds/Vaporwave-Steam-Backgrounds,-wallpaper-collections-at-.png);
        background-size: cover;
        background-position: center;
        height: 100vh;
    }

    .logo{
        width: 140px;
        position: absolute;
        top: 4%;
        left: 10%;
    }
    .banner-text{
        text-align: center;
        color: #ffffff;
        padding-top:193px;
    }
    .banner-text input[type=submit]{
        font-size: 17px;
        background-color:#8a00ff;
        color:#ffffff;
        font-style: bold;
        border-radius:12px;
        padding: 2px 20px;
        transition-duration: 0.4s;
    }

    .banner-text input[type=submit]:hover {
     background-color: #000000;
     color: white;
   }

    .banner-text input[type=text]{
        font-size: 17px;
        padding: 5px 20px;
        font-style: bold;
    }
 
    </style>
</head>
<body>
<?php

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['gmail'];
$username= $_POST['username'];
$password= $_POST['password'];

$sql="insert into gammingusergames (fname, lname, gmail, username, password)
values('$fname', '$lname', '$gmail', '$username', '$password')";

if($conn->query($sql) === TRUE) {
    echo "you are now a user";
    echo "<a href='gamming website.php' class='top'>Home </a>";
}
else
{
    echo "ERROR: " .$sql. "<br>" . $conn->error;
}
$conn->close();

?>
    
</body>
</html>