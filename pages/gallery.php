<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:../index.php");
    }
    $b = "block";
    if (($open = fopen("../BE/gallery.csv", "r")) !== false) {
        while (($data = fgetcsv($open, 1000, ",")) !== false) {
            $array[] = $data;
        }
     
        fclose($open);
    }
?>

<html>
    <head>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <div class="my-div">
            <?php
                foreach ($array as $A) {
                    echo '<div class="img-frame">
                        <button class="forwardB" onclick="document.getElementById(\''.$A[1].'\').style.display = \'block\';">
                        <img id="imagegal" src="../images/imgs/'.$A[0].'" class="my-img">
                        </button>
                        </div>';
                }
            ?>
            <!--
            <div class="img-frame">
                <button class="forwardB" onclick= "document.getElementById('hidden1').style.display = 'block';">
                    <img id = "imagegal" src="../images/imgs/im1.jpeg" class="my-img">
                </button>
            </div>

            <div class="img-frame">
                <button class="forwardB" onclick= "document.getElementById('hidden2').style.display = 'block';">
                    <img id = "imagegal" src="../images/imgs/im2.avif" class="my-img">
                </button>
            </div>

            <div class="img-frame">
                <button class="forwardB" onclick= "document.getElementById('hidden3').style.display = 'block';">
                    <img id = "imagegal" src="../images/imgs/im3.jpg" class="my-img"> 
                </button>
            </div>

            <div class="img-frame">
                <button class="forwardB" onclick= "document.getElementById('hidden4').style.display = 'block';">
                    <img id = "imagegal" src="../images/imgs/im4.jpg" class="my-img">
                </button>
            </div>

            <div class="img-frame">
                <button class="forwardB" onclick= "document.getElementById('hidden5').style.display = 'block';">
                    <img id = "imagegal" src="../images/imgs/im5.jpg" class="my-img">
                </button>
            </div>

            <div class="img-frame">
                <button class="forwardB" onclick= "document.getElementById('hidden6').style.display = 'block';">
                    <img id = "imagegal" src="../images/imgs/im6.jpg" class="my-img">
                </button>
            </div>
            -->
        </div>

        <div class="menu1">
            <div class = "container">
                <a href="home.php">
                    <img src = "../images/icons/home.png" alt="Home" width="274" height="52">
                </a>
            </div>
            <div class = "container">
                <a href="contact_us.php">
                    <img src = "../images/icons/sports.png" alt="Sports" width="274" height="52">
                </a>
            </div>
            <div class = "container">
                <a href="gallery.php">
                    <img src = "../images/icons/hobbies.png" alt="Hobbies" width="274" height="52">
                </a>
            </div>
            <div class = "container">
                <a href="CV.php">
                    <img src = "../images/icons/CV.png" alt="CV" width="274" height="52">
                </a>
            </div>
            <div class = "container">Welcome: <?php echo $_SESSION["username"]; ?>!&nbsp;&nbsp;&nbsp;</div>
            <div class = "container"><a href="../index.php">Sign Out</a>&nbsp;&nbsp;&nbsp;</div>
        </div>

        <div class="div_ibutton">
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://instagram.com/eddie_btz?igshid=OGQ5ZDc2ODk2ZA==','_blank')">
                    <img src = "../images/icons/insta.png" alt="Instagram" width="50" height="50">
                </button>
            </div>
            <div style="margin:10;">
                <button class="ibutton" onclick=" window.open('https://open.spotify.com/user/4tszupm5da5e81bkdjvcedrcw?si=78514fa38e8b478c','_blank')">
                    <img src = "../images/icons/spoti.webp" alt="Spotify" width="50" height="50">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://www.linkedin.com/in/edward-prescott-decie-552584263','_blank')">
                    <img src = "../images/icons/linkedin.png" alt="LinkedIn" width="50" height="50">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://mail.google.com/mail/u/0/#inbox?compose=CllgCHrgDMhTMlqJGLhQXGTsrTWFgsmbfzpHvlVSCwjrXQvmvdNPpqbmhFGjPPtWgjcfhgXFzLB','_blank')">
                    <img src = "../images/icons/gmail.png" alt="Gmail" width="50" height="38">
                </button>
            </div>
            <div style="margin: 10;">
                <button class="ibutton" onclick=" window.open('https://twitter.com/DecieEddie','_blank')">
                    <img src = "../images/icons/twit.png" alt="Twitter" width="50" height="50">
                </button>
            </div>
        </div>

        <div id="hidden1" class="hidden">
                <img class="fimg" src="../images/imgs/im1.jpeg">
            <button class="backB" onclick= "document.getElementById('hidden1').style.display = 'none';">
                <img class="back" src="../images/icons/xx.png">
            </button>
        </div>

        <div id="hidden2" class="hidden">
            <img class="fimg" src="../images/imgs/im2.avif">
            <button class="backB" onclick= "document.getElementById('hidden2').style.display = 'none';">
                <img class="back" src="../images/icons/xx.png">
            </button>
        </div>
        
        <div id="hidden3" class="hidden">
            <img class="fimg" src="../images/imgs/im3.jpg">
            <button class="backB" onclick= "document.getElementById('hidden3').style.display = 'none';">
                <img class="back" src="../images/icons/xx.png">
            </button>
        </div>

        <div id="hidden4" class="hidden">
            <img class="fimg" src="../images/imgs/im4.jpg">
            <button class="backB" onclick= "document.getElementById('hidden4').style.display = 'none';">
                <img class="back" src="../images/icons/xx.png">
            </button>
        </div>

        <div id="hidden5" class="hidden">
            <img class="fimg" src="../images/imgs/im5.jpg">
            <button class="backB" onclick= "document.getElementById('hidden5').style.display = 'none';">
                <img class="back" src="../images/icons/xx.png">
            </button>
        </div>

        <div id="hidden6" class="hidden">
            <img class="fimg" src="../images/imgs/im6.jpg">
            <button class="backB" onclick= "document.getElementById('hidden6').style.display = 'none';">
                <img class="back" src="../images/icons/xx.png">
            </button>
        </div>


    </body>
</html>