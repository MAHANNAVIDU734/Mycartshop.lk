 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" ><h4 style="color:white;"><img src="image/1.ico" style="width:10%; height:10;">Mycartshop.lk</h4></a>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['admin_id'])) {
    			?>
    				<a class="nav-link" href="../admin-1/admin-logout.php"><h3>Sign out</h3></a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link" href="../admin-1/register.php"><h3>Register</h3></a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link" href="../admin-1/login.php"><h3>Login</h3></a>
	    			<?php
    			}


    			
    		}

    	?>
      
    </li>
  </ul>
</nav>