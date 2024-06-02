<header>
    <div class="homebar">
        <a href="../index.html">
            <img src="../immagini/logo.png" width="110px" height="60px" id="logo">
            Holiway
        </a>
        <a href="../pagine/Chi-Siamo.php">Chi siamo</a>
        <a  class="destinazioni-media" href="#destinazioni">Destinazioni</a>
        <?php
            if(isset($_SESSION["username"])){
                echo "<img src='../immagini/logo.png'>";
                echo "<a href='../backend/logout.php'>Log Out</a>";
            }
            else{
                echo "<a href='login.html' style='margin-left:62%;'>Log in</a>";
                echo "<a href='register.html'>Register</a>";
            }
        ?>
    </div>
</header>