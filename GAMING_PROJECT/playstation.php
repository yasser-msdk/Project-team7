<?php  include 'Db.php';
$likes = $_POST['likes'];
$post = $_POST['post_id'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlayStation</title>
    <style>
body
{
    background-color:#003087;
    text-align: center;
}
#sideNav{
        width: 250px;
        height: 100vh;
        position: fixed;
        right: -250px;
        top: 0;
        background:#161616;
        z-index: 2;
        transition: 0.5s;
    }
    nav ul li{
        list-style: none;
        margin: 50px 20px;
    }
    nav ul li a{
        text-decoration: none;
        color: white;
    }
    #menuBtn{
        width: 50px;
        height: 50px;
        background: #081f4b;
        text-align: center;
        position: fixed;
        right: 30px;
        top: 20px;
        border-radius: 3px;
        z-index: 3;
        cursor: pointer;
    }
    #menuBtn img{
    width: 20px;
    margin-top: 15px;
    }
.title-text
{
    font-size: 45px;
}
#service{
    width: 100%;
    padding: 70px 0;
    background: #161616;;
    
}
.service-box{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
    background: #161616;;
   
}

.single-service{
    flex-basis: 48%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 20px;
    background: #161616;;
    
}
.single-service h1
{
    color: whitesmoke;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}
.single-service p
{
    color: whitesmoke;
    font-size: 17px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.single-service h4
{
    font-size: 24px;  
    text-decoration: none;
    padding-left: 10px;
    padding-right: 10px;
    color:#003087;
}
.single-service img{
    width: 100%;
    border-radius: 7px;
}
.title-text a
{
    
  background-color: #161616; 
  border: none;
  color: #003087;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
}

    </style>
</head>
<body>
<div id="sideNav">
        <nav>
            <ul>
                <li><a href="PC.php">PC</a></li>
                <li><a href="Xbox.php">Xbox</a></li>
                <li><a href="PlayStation.php">PlayStation</a></li>
                <li><a href="Nintendo.php">Nintendo</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="https://android-settings-menu-button-png.gaubandhi.pw/img/747229.png" id="menu">
    </div>
    <section id="title">
        <div class="title-text">
            <h1>playstation games</h1> 
           <a href="gamming website.php"><Strong>Home</Strong></a>
               
        </div>
    </section>
    <br>
        <section id="service">
        <div class="service-box">
            <div class="single-service">
            <img src="https://cdn.wccftech.com/wp-content/uploads/2021/01/WCCFgodofwar6.jpg">
            <h4 class="service-desc">
                God of War</h4> <p>Based in ancient mythology, the story follows Kratos, a Spartan warrior who was tricked into killing his family by his former master, the Greek God of War Ares. This sets off a series of events that leads to wars with the mythological pantheons.</p>
        </div>
        <div class="single-service">
            <img src="https://cdn.mos.cms.futurecdn.net/r6deDatMxXnxVQMSnDi7Ak.jpg">
            <h4 class="service-desc">
                Resident Evil</h4><p>The game's plot follows Chris Redfield and Jill Valentine, members of an elite task force known as S.T.A.R.S., as they investigate the outskirts of Raccoon City following the disappearance of their team members. They soon become trapped in a mansion infested with zombies and other monsters.</p>
              
        </div>
        <div class="single-service">
            <img src="https://image.api.playstation.com/vulcan/img/rnd/202010/2620/IE1JWLbJBd5kCxTzxKvaCYBw.png?w=440">
            <h4 class="service-desc">
               Uncharted</h4><p>Combining action-adventure and platforming elements with a third-person perspective, the game follows Nathan Drake, the supposed descendant of the explorer Sir Francis Drake, as he seeks the lost treasure of El Dorado, with the help of journalist Elena Fisher and mentor Victor Sullivan.</p>
            
            
        </div>
        <div class="single-service">
            <img src="https://techraptor.net/sites/default/files/styles/image_header/public/2020-11/Demon%27s%20Souls%20PS5%20Activities%20UI%20features%20cover.jpg?itok=Li5uJQSB">
            <h4 class="service-desc">
               Demon Souls</h4><p>Demon's Souls takes place in the kingdom of Boletaria. ... Now bound to the Nexus until the Old One is returned to slumber, the player travels to five regions of Boletaria, killing the powerful demons controlling those areas and absorbing their souls to increase their power so they can face King Allant.</p>                 
             
        </div>
    </div>
</div>
        </section>

        
      
        <script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")

    sideNav.style.right = "-250px";

    menuBtn.onclick = function(){
        if(sideNav.style.right == "-250px"){
        sideNav.style.right = "0";
        menu.src = "https://upload.wikimedia.org/wikipedia/commons/8/87/Normas_X.png";
    }
    else{
        sideNav.style.right = "-250px";
        menu.src = "https://android-settings-menu-button-png.gaubandhi.pw/img/747229.png";
    }
    }

</script>
</body>
</html>