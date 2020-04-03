
 <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Developing To Developed</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                     
                    <li><a href = "../php/settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "../php/logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>

                    <?php
                } else {
                    ?>
                    <li><a href="../php/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="../php/aboutus.php"><span class="glyphicon glyphicon-th-list"></span> About</a></li>
                    <!--<li><a href="../../d2d/php/adminSignup.php"><span class="glyphicon glyphicon-user"></span> Admin Sign Up</a></li>-->
                    <?php
                }
                    ?>
            </ul>
        </div>
    </div>
</div>
