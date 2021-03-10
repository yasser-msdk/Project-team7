<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xbox</title>
    <style>
body
{
    background-color:#46c71f;
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
        background:#296b15;
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
.title-text a
{
    
  background-color: #161616; 
  border: none;
  color: #46c71f;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
}
.title-text h1
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
    color:#46c71f;
}
.single-service img{
    width: 100%;
    border-radius: 7px;
    border-color: #ffffff;
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
            <h1>xbox games</h1> 
            <a href="gamming website.php"><strong>Home<strong></a>

        </div>
    </section>
    <br>
        <section id="service">
        <div class="service-box">
            <div class="single-service">
    
            <img src="https://d3isma7snj3lcx.cloudfront.net/optim/images/news/30/3050832989/halo-infinite-le-producteur-chris-lee-quitte-le-projet-7c5510de__1920_1080__0-118-2560-947.jpg">
                <h4 class="service-desc">
                    Halo</h4><p>The central focus of the franchise builds off the experiences of Master Chief John-117, one of a group of supersoldiers codenamed Spartans, and his artificial intelligence (AI) companion, Cortana. The original trilogy centers on an .</p>
                    
            </div>
            <div class="single-service">
                <img src="https://cdn.mos.cms.futurecdn.net/p4fSkPtHLMUz8tDRo248oB-970-80.jpg.webp">
                <h4 class="service-desc">
                    Forza horizon<p>Experience a shared world with dynamic seasons. Explore beautiful scenery, collect over 450 cars and become a Horizon Superstar in historic Britain. With highlight the super-car "McLaren Senna", in honor of Ayrton Senna.</p>
                  
            </div>
            <div class="single-service">
                <img src="https://cdn.mos.cms.futurecdn.net/saLnhFFeWWQAtVmCtg6ccQ-970-80.jpg.webp">
                <h4 class="service-desc">
                   Ashen</h4><p>Set in a sprawling open world, Ashen is a tight, 3rd person, skill-based action RPG about guiding your wanderer through a newly lit world. Fight alongside others, forge friendships and defeat the creatures of shadow determined to .</p>
                
            </div>
            <div class="single-service">
                <img src="https://cdn.mos.cms.futurecdn.net/nngbDGDRK7f7HKozcjq4SG-970-80.jpg.webp">
                <h4 class="service-desc">
                   Quantum break</h4><p>Quantum Break is a science fiction action-adventure third-person shooter video game developed by Remedy Entertainment and published by Microsoft Studios. The game was released worldwide for Microsoft Windows and Xbox One in April 2016. The game centers on Jack Joyce,  </p>                 
                 
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