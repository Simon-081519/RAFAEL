<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <style>
    .mySlides {
        display: none;
    }

    .image {
        width: 1000px;
        height: 500px;
        vertical-align: middle;
    }

    #Music {
        background-image: url('pictures/backgroundMusic.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .container {
        margin-right: 30px;
        margin-left: 30px;
        margin-bottom: 50px;
        overflow: auto;
    }

    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
    }

    .next {
        right: 0;
        border-radius: 3px 0 0 3px;
    }

    .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
    }

    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
    }

    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }

    .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
        background-color: #717171;
    }

    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }

    @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
    }

    @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
    }
    </style>
</head>
<body id="Music">
    <?php include "components/header.php" ?>
    <div>
        <center>
            <?php echo "Hover in image to play music"?>
        </center>
    </div>

    <div class="container">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="pictures/msPhenomenal.jpg" class="image" onmouseover="document.getElementById('ms').play()" onmouseout="document.getElementById('ms').pause()"/>
                <audio id="ms" preload="auto" loop>
                    <source src="assets/msPhenomenal.mp3">
                </audio>
                <div class="text"><?php echo "<center><h2>Ms Phenomenal - Radwimps</h2></center>" ?></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img src="pictures/bf.jpg" class="image" onmouseover="document.getElementById('bf').play()" onmouseout="document.getElementById('bf').pause()"/>
                <audio id="bf" preload="auto" loop>
                    <source src="assets/bf.mp3">
                </audio>
                <div class="text"><?php echo "<center><h2>Best Friend - Rex Orange Country</h2></center>" ?></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="pictures/circles.jpg" class="image" onmouseover="document.getElementById('circles').play()" onmouseout="document.getElementById('circles').pause()"/>
                <audio id="circles" preload="auto" loop>
                    <source src="assets/circles.mp3">
                </audio> 
                <div class="text"><?php echo "<center><h2>Circles - Post Malone</h2></center>" ?></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="pictures/coth.jpg" class="image" onmouseover="document.getElementById('coth').play()" onmouseout="document.getElementById('coth').pause()"/>
                <audio id="coth" preload="auto" loop>
                    <source src="assets/coth.mp3">
                </audio>
                <div class="text"><?php echo "<center><h2>Castle on the Hill - Ed Sheeran</h2></center>" ?></div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="pictures/ciao-adios.jpg" class="image" onmouseover="document.getElementById('ciao').play()" onmouseout="document.getElementById('ciao').pause()"/>
                <audio id="ciao" preload="auto" loop>
                    <source src="assets/ciao-adios.mp3">
                </audio>
                <div class="text"><?php echo "<center><h2>Ciao Adios - Anna Marie</h2></center>" ?></div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
    
        </div>
        <br/>
    
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>

        </div>
        
    </div>
    <div>
        <?php include "components/footer.php" ?>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            }
    </script>
    <script type="text/javascript ">
        function PlaySound(soundobj) {
            var thissound = document.getElementById(soundobj);
            thissound.play();
            console.log('play');
        }

        function StopSound(soundobj) {
            var thissound = document.getElementById(soundobj);
            thissound.pause();
            thissound.currentTime = 0;
            console.log('pause')
        }
    </script>
</body>
</html>