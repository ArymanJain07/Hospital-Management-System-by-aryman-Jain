 

<nav role="navigation" class="navbar navbar-default real-nav" >
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img src='images2/Screenshot_2022-12-08_192653-removebg-preview.png' class='img-responsive img-logo' style="height: 55px; margin-bottom: 100px;" /></a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
			
            <ul class="nav navbar-nav navbar-right">
                <?php if(!User::loggedIn() && !Patient::isPatientIn() ) {?> 
               <li><a href='login.php'><br>Login</a></li>
               <?php } else {
                ?> 

               <li><h3 class="content-header" align="center">Hospital Management System &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h3></li>
				
			    <li><a href='logout.php'><br>Logout</a></li>
                <?php 
               } ?>
            </ul>
        </div>
    </div>
</nav>
