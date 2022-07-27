<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <style>
    .container {
        display: flex;
        align-items:center;
        justify-content: center;
        padding-bottom: 150px;
    }

    .educ {
        margin-top: 30px;
        margin-bottom: 30px;
    }  

    #educ {
        background-image: url('pictures/school.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    </style>
</head>

<body id="educ">
    <?php include "components/header.php" ?>

    <div class="container">
        <div class="educ">
            <?php echo "<h2><center>Isabela State University Santiago Extension Unit</center></h2>" ?>
            <?php echo "<h2><center>Bachelor of Science in Information Technology</center></h2>" ?>

            <center>
                <img src="pictures/isulogo.png" width=300px/>
                <img src="pictures/ccsict.png" width=290px style="border-radius: 50%"/>
            </center>
        </div>
    </div> 
    <div>
        <?php include "components/footer.php" ?>
    </div>
</body>
</html>