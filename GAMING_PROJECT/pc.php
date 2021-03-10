<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pc</title>
    <style>
body
{
    background-color:#f0bd33;
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
        background:#83671a;
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
    background: #161616;
    
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
.title-text a
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
.title-text a:hover
{
    color:#ffffff;

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
    color:#f0bd33;
}
.single-service img{
    width: 100%;
    border-radius: 7px;
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
            <h1>pc games</h1> 
            <a href="gamming website.php"><Strong>Home</Strong></a>

        </div>
    </section>
<br>
    <section id="service">
        <div class="service-box">
            <div class="single-service">
    
            <img src="https://www.reference-gaming.com/assets/media/product/22287/outlast-trinity-xbox-one-58d3a046ab4da.jpg?format=product-cover-large&k=1490264134">
                <h4 class="service-desc">
                   outlast</h4><p>Outlast is a first-person survival horror video game developed and published by Red Barrels. The game revolves around a freelance investigative journalist, Miles Upshur, who decides to investigate a remote psychiatric hospital named Mount Massive Asylum, located deep in the mountains of Lake County, Colorado.<br> the second title of the franshize  a journalist named Blake Langermann, along with his wife Lynn, roaming the Arizona desert to explore the murder of a pregnant woman only known as Jane Doe.[1] Blake and Lynn get separated in a helicopter crash, and Blake has to find his wife while traveling through a village inhabited by a deranged sect that believes the end of days are upon them.</p>
                  
            </div>
            <div class="single-service">
                <img src="https://i2.wp.com/www.techdigest.tv/wp-content/uploads/2020/09/league-of-legends.jpg?ssl=1">
                <h4 class="service-desc">
                   League of Legends</h4><p>League of Legends is a staple moba game and one of the most popular to this day, where two teams of five powerful champions face off to destroy the other's base, varying from over 140 champions your objective is to take down enimy towers as you battle your way to victory.</p>
               
            </div>
            <div class="single-service">
                <img src="https://images.pushsquare.com/465e76aa7dfba/splinter-cell-ghost-recon-wildlands-ps4-playstation-4.original.jpg">
                <h4 class="service-desc">
                  splinter cell</h4><p>Stealth-mission expert Sam Fisher searches for two US agents in Georgia and soon uncovers a plot involving a nuclear device. Sam Fisher is an elite Black-Ops agent called the Splinter Cell. When two government operatives undercover in Georgia go missing, Sam is sent in by the Third Echelon to investigate.</p>
               
            </div>
            <div class="single-service">
                <img src="https://wallpaperaccess.com/full/147194.jpg">
                <h4 class="service-desc">
                   Counter-Strike: Global Offensive</h4><p> Counter-Strike: Global Offensive or CS:GO for short expands upon the team-based first person shooter gameplay the original Counter-Strike pioneered when it launched in 1999. Two teams compete in multiple rounds of objective-based game modes with the goal of winning enough rounds to win the match.</p>                 
                 
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