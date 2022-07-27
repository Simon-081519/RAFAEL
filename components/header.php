<div class="navbar" id="navbar">
    <a href="index.php">Home</a>
    <a href="education.php">Education</a>
    <a href="hobbies.php">Hobbies</a>
    <a href="movies.php">Movies</a>
    <a href="music.php">Music</a>
</div>
<style>
body {
    margin: 0;
}

.navbar {
    margin-bottom: 30px;
    overflow: hidden;
    background-color: #333;
    position: sticky;
    top: 0;
}

.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}

#navbar {
  z-index: 9999;
}

@media screen and (max-width: 500px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}
</style>
