<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nintendo</title>
    <style>
body
{
    background-color:#be1010;
    text-align: center;
}
#sideNav{
        width: 250px;
        height: 100vh;
        position: fixed;
        right: -250px;
        top: 0;
        background: #161616;
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
        background: #831010;
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

.title-text a
{
    
  background-color: #161616; 
  border: none;
  color: #be1010;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
}
.single-service{
    flex-basis: 48%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 20px;
    background: #161616;;
    
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
    color:#be1010;
}
.single-service img{
    width: 100%;
    border-radius: 7px;
}

footer
{
    color: #ffffff;
    background-color: #be1010;
    text-align: center;
}
    </style>
</head>
<body>
<div id="sideNav">
        <nav>
            <ul>
                <li><a href="PlayStation.php">PlayStation</a></li>
                <li><a href="Xbox.php">Xbox</a></li>
                <li><a href="PC.php">PC</a></li>
                <li><a href="Nintendo.php">Nintendo</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn">
        <img src="https://android-settings-menu-button-png.gaubandhi.pw/img/747229.png" id="menu">
    </div>
    <section id="title">
        <div class="title-text">
            <h1>Nintendo games</h1> 
            <a href="gamming website.php"><Strong>Home</Strong></a>
        </div>
    </section>
    <br>
        <section id="service">
        <div class="service-box">
            <div class="single-service">
    
               
            <img src="https://www.telerama.fr/sites/tr_master/files/styles/simplecrop1000/public/super-mario-maker-2_0.jpg?itok=gv5FgRYo">
                <h4 class="service-desc">
                   Mario</h4><p>A plumber named Mario and his brother Luigi travel through the Mushroom Kingdom to save the princess from the evil Bowser. But one day, evil cast a shadow over the land and the evil King Bowser Koopa emerged with his army of Goombas, Spinies, Flying Koopas, and other malignant creatures.</p>
                  
            </div>
            <div class="single-service">
                <img src="https://statics.lesinrocks.com/content/thumbs/uploads/2017/03/width-1125-height-612-quality-10/daily1.jpg">
                <h4 class="service-desc">
                   Lengende of Zelda</h4><p>An evil man has captured her. ... That is the basic plot outline of most (but not all) Zelda games: Link, a commoner, is suddenly thrust into a mysterious, magical quest in the kingdom of Hyrule to save the princess, Zelda, from one evil or another.</p>
               
            </div>
            <div class="single-service">
                <img src="https://i0.wp.com/culturedvultures.com/wp-content/uploads/2016/11/animal-crossing-new-leaf-amiibo-update-banner-790x486.jpg?fit=770%2C474&ssl=1">
                <h4 class="service-desc">
                 Animal Crossing: New Horizons</h4><p>In Animal Crossing, the player character is a human who lives in a village inhabited by various anthropomorphic animals, carrying out various activities such as fishing, bug catching, and fossil hunting.      </p>
                
            </div>
            <div class="single-service">
                <img src="https://mms.businesswire.com/media/20200826005266/en/815910/5/Switch_JustDance2021.jpg?download=1">
                <h4 class="service-desc">
                 Just Dance</h4><p>Just Dance is a motion-based dancing game for multiple players, with each game including a collection of classic and modern songs each with their own dance choreographies. During each song, players mirror a dance performed by actors on the screen, following commands that appear on the screen, and are awarded for their accuracy. Additionally, there are gold moves in which players must strike a pose in order to earn bonus points. Players are given ranks based on how well they do. Depending on the game and system it is played on, the game can be played with either motion controllers or camera devices (such as the Wii Remote and Kinect), or using an app downloaded on a smart device.</p>                 
                 
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