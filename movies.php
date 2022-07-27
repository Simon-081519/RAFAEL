<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <style>
    .box {
        padding: 15px 15px;
        background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(1.5px);

    }

    .container {
        display: flex;
        margin-right: 30px;
        margin-left: 30px;
        margin-bottom: 50px;
        overflow: auto;
        white-space: nowrap;
    }

    .image {
        height: 500px;
        width: 350px;
    }

    .overlay {
        position: absolute;
        color: white;
        bottom: 15px;
        left: 15px;
        right: 0;
        background-color: rgba(0, 0, 0, 0.75);
        width: 350px;
        height: 0;
        overflow: hidden;
        transition: 1s ease;
    }

    .text {
        color: white;
        padding: 10px 10px 10px 10px;
    }

    .image:hover .overlay {
        height: 94.4%;
    }

    #movies {
        background-image: url('pictures/backgroundMovies.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    </style>
</head>
<body id="movies">
    <?php include "components/header.php" ?>

    <div class="container">
        <div class="box">
            <div class="image">
                <img src="pictures/maze runner.jpg" height="500px" width="350px"/>
            
                <div class="overlay">
                    <div class="text">
                        <h2>The Maze Runner(2014)</h2>
                        <?php echo "<p>Thomas (Dylan O'Brien), a teenager,</p>" ?>
                        <?php echo "<p>arrives in a glade at the center of a giant labyrinth.</p>" ?>
                        <?php echo "<p>Like the other youths dumped there before him,</p>" ?>
                        <?php echo "<p>he has no memory of his previous life.</p>" ?>
                        <?php echo "<p>Thomas quickly becomes part of the group and</p>" ?>
                        <?php echo "<p>soon after demonstrates a unique perspective</p>" ?>
                        <?php echo "<p>that scores him a promotion to Runner status.</p>" ?>
                        <?php echo "<p>Together with Teresa (Kaya Scodelario), the only</p>" ?>
                        <?php echo "<p>female,Thomas tries to convince his cohorts</p>"; ?>
                        <?php echo "<p>that he knows a way out.</p>" ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="pictures/resident-evil.jpg" height="500px" width="350px"/>

                <div class="overlay">
                    <div class="text">
                        <h2>Resident Evil Film Series</h2>
                        <h3>(2002-2016)</h3>
                        <?php echo "<p>Based on the popular video game,</p>" ?>
                        <?php echo "<p>Milla Jovovich and Michelle Rodriguez star</p>" ?>
                        <?php echo "<p>as the leaders of a commando team who must</p>" ?>
                        <?php echo "<p>break into the HIVE, a vast underground genetics </p>" ?>
                        <?php echo "<p>laboratory operated by the powerful Umbrella Corp.</p>" ?>
                        <?php echo "<p>There, a deadly virus has been unleashed,</p>" ?>
                        <?php echo "<p>killing the lab's personnel and resurrecting them</p>" ?>
                        <?php echo "<p>as the evil Un-dead. The team has just three hours</p>" ?>
                        <?php echo "<p>to shut down the lab's supercomputer and close</p>" ?>
                        <?php echo "<p>the facility before the virus threatens </p>" ?>
                        <?php echo "<p>to overrun the Earth.</p>" ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="pictures/Avengers.jpg" height="500px" width="350px"/>
            
                <div class="overlay">
                    <div class="text">
                        <h2>The Avengers Film Series</h2> 
                        <h3>(2012-2019)</h3>
                        <?php echo "<p>After half of all life is snapped away by Thanos,</p>" ?>
                        <?php echo "<p>the Avengers are left scattered and divided.</p>" ?>
                        <?php echo "<p>Now with a way to reverse the damage,</p>" ?>
                        <?php echo "<p>the Avengers and their allies must assemble once</p>" ?>
                        <?php echo "<p>more and learn to put differences aside in</p>" ?>
                        <?php echo "<p>order to work together and set things right.</p>" ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="pictures/warm-bodies.jpg" height="500px" width="350px"/>

                <div class="overlay">
                    <div class="text">
                        <h2>Warm Bodies(2013)</h2>
                        <?php echo "<p>A terrible plague has left the planet's</p>" ?>
                        <?php echo "<p>population divided between zombies and humans.</p>" ?>
                        <?php echo "<p>An unusual zombie named R (Nicholas Hoult)</p>" ?>
                        <?php echo "<p>sees his walking-dead brethren attacking</p>" ?>
                        <?php echo "<p>a living woman named Julie (Teresa Palmer)</p>" ?>
                        <?php echo "<p>and rescues her. Julie sees that R is different</p>" ?>
                        <?php echo "<p>from the other zombies, and the pair</p>" ?>
                        <?php echo "<p>embark on an unusual relationship.</p>" ?>
                        <?php echo "<p>As their bond grows and R becomes more</p>" ?>
                        <?php echo "<p>and more human, a chain of events unfolds</p>" ?>
                        <?php echo "<p>that could transform the entire lifeless world.</p>" ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="pictures/Naruto.jpg" height="500px" width="350px"/>

                <div class="overlay">
                    <div class="text">
                        <h2>Naruto(2002-2014)</h2>
                        <?php echo "<p>Naruto (Japanese: NARUTO ナルト )</p>" ?>
                        <?php echo "<p>is a Japanese manga series</p>" ?>
                        <?php echo "<p>written and illustrated by Masashi Kishimoto.</p>" ?>
                        <?php echo "<p>It tells the story of Naruto Uzumaki, a young ninja</p>" ?>
                        <?php echo "<p>who seeks recognition from his peers and dreams</p>" ?>
                        <?php echo "<p>of becoming the Hokage, the leader of his village.</p>" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <?php include "components/footer.php" ?>
    </div>
</body>
</html>