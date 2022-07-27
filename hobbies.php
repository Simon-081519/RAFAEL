<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobbies</title>

    <style>
    #hobbies {
        background-image: url('pictures/backgroundHobbies.jpg');
    }

    .container {
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        flex-direction: column;
        overflow-x: hidden;
    }

    .box {
        width: 75%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(1px);
        overflow: auto;
        margin: 10px 0;
        opacity: 0;
        transition: 200ms ease-in-out transform,
                    200ms ease-in-out opacity;
    }

    .box1 {
        padding: 20px 20px;
        transform: translateX(100%);
    }
    .box2 {
        padding: 20px 20px;
        transform: translateX(-100%);
    }
    .box3 {
        padding: 20px 20px;
        transform: translateX(100%);
    }
    .box4 {
        padding: 20px 20px;
        transform: translateX(-100%);
    }
    .box5 {
        padding: 20px 20px;
        transform: translateX(100%);
    }
    .box6 {
        padding: 20px 20px;
        transform: translateX(-100%);
    }
    .box7 {
        padding: 20px 20px;
        transform: translateX(100%);
    }
    .box8 {
        padding: 20px 20px;
        transform: translateX(-100%);
    }
    .box9 {
        padding: 20px 20px;
        transform: translateX(100%);
    }

    .show_content {
        opacity: 1;
        transform: translateX(0);
    }
    </style>
</head>
<body id="hobbies">
    <?php include "components/header.php" ?>
    
    <div class="container">
        <div class="box box1">
            <img src="pictures/guitar.jpg" width=350px/>
            <div>
                <?php echo "<center><h2>Playing Guitar</h2></center>" ?>
            </div> 
        </div>

        <div class="box box2">
            <img src="pictures/piano1.png" width=620px/>
            <div>
                <?php echo "<center><h2>Playing Piano</h2></center>" ?>
            </div>
        </div>

        <div class="box box3">
            <img src="pictures/ukelele.jpg" width=460px/>
            <div>
                <?php echo "<center><h2>Playing Ukelele</h2></center>" ?>
            </div>
        </div>

        <div class="box box4">
            <img src="pictures/violin.jpg" width=350px/>
            <div>
                <?php echo "<center><h2>Playing Violin</h2></center>" ?>
            </div>
        </div>

        <div class="box box5">
            <img src="pictures/mountain.jpg" width=620px/>
            <div>
                <?php echo "<center><h2>Hiking</h2></center>" ?>
            </div>
        </div>

        <div class="box box6" >
            <img src="pictures/pic.jpg" width=620px/>
            <div>
                <?php echo "<center><h2>Taking long exposure pictures</h2></center>" ?>
            </div>
        </div>

        <div class="box box7">
            <img src="pictures/astro.jpg" width=620px/>
            <div>
                <?php echo "<center><h2>Astrophotography</h2></center>" ?>
            </div>
        </div>

        <div class="box box8">
            <img src="pictures/edit.jpg" width=620px/>
            <div>
                <?php echo "<center><h2>Video Editing</h2></center>" ?>
            </div>
        </div>

        <div class="box box9">
            <img src="pictures/games.png" width=620px/>
            <div>
                <?php echo "<center><h2>Playing Games</h2></center>" ?>
            </div>
        </div>
        
    </div>
        
    <div>
        <?php include "components/footer.php" ?>
    </div>
    <script>
        const boxes = document.querySelectorAll('.box')
        
        window.addEventListener('scroll', check_animation)

        check_animation()

        function check_animation () {
            const trigger = window.innerHeight / 6 * 4;
            
            boxes.forEach(box => {

                console.log(box);
                const top = box.getBoundingClientRect().top
                
                if (trigger > top) {
                    box.classList.add('show_content')
                } else {
                    box.classList.remove('show_content')
                }
            })
        }
    </script>
</body>
</html>