<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
    .container {
        display: flex;
        align-items:center;
        justify-content: center;
        padding-bottom: 30px;
    }

    .image {
        margin: 0;
        border-radius: 1000px;
        padding-left: 30px;
        width: 420px;
    }

    .text {
        text-align: left;
        padding-left: 30px;
        padding-right: 60px;
    }

    #home {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
    }

    @keyframes gradient {
	    0% {
	    	background-position: 0% 50%;
	    }
	    50% {
	    	background-position: 100% 50%;
	    }
	    100% {
	    	background-position: 0% 50%;
	    }
    }

    </style>
</head>
<body id="home">
    <?php include "components/header.php" ?>

    <div class="container">
        <div class="img-col">
            <img class="image" src="pictures/masr.jpg"/>
        </div>
        
        <div class="text">
            <h3>
                <?php echo "My name is Mon. I am from Ipil, Echague, Isabela." ?><br/>
                <?php echo "I am a student from Isabela State University-Santiago Extention taking a Bachelor of Science in Information Technology course." ?>
                <?php echo "Though BSIT is not my dream course I still learned to love it "?>
                <?php echo "because of its challenges when programming."?><br/><br/>
                <?php echo "My best thing is positive thinking. "?>
                <?php echo "My negative side is that I want to do everything by myself,"?>
                <?php echo "it is my childhood habit and I get more experience with such things."?><br/>
                <?php echo "My strength is my attitude that I like to take the challenge that I can do it,"?>
                <?php echo "self-taught, autonomous. I`m also a good listener and a fast learner." ?>
            </h3>
        </div>
    </div>
    <footer>
        <div>
            <?php include "components/footer.php" ?>
        </div>
    </footer>   
</body>
</html>
