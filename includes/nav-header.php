<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Vehicle App</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <!-- <ul class="nav navbar-nav">
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul> -->
            <ul class="nav navbar-nav navbar-right">
                <?php

                    session_start();

                    if (isset($_SESSION['username'])) {

                        echo "<li><a href='admin-page.php'>You are Logged In as {$_SESSION['firstname']} </a></li>";
                        echo "<li><a href='logout.php'>Log out</a></li>";

                    }
                    else {
                        echo "<li><a href='register.php'>Register</a></li>";
                        echo "<li><a href='login.php'>Log In</a></li>";
                    }

                 ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
