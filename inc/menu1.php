<div style="z-index: 10; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: white; position: fixed; top: 0; width: 100%;">
		<div class="topnav" id="myTopnav">
		  <a><img class="logo" style="margin-top: -5px;" src="img/logo2.png" height="50px"></a>
		  <a href="index.php" class="nav_content" style="color: #00A2E8;">Home</a>
		  
		  <div class="dropdownx">
		    <button class="dropbtn">Find Partner 
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdownx-content">
		    <?php
		    	if(isset($_SESSION['user'])  || isset($_COOKIE['user'])){
		    		$_SESSION['user'] = $_COOKIE['user'];
		    ?>
		      <a href="search.php?gender=Male" class="nav_content">Bride</a>
		      <a href="search.php?gender=Female" class="nav_content">Groom</a>
		      <?php
		 	 	}
		 	 	else{
		 	 	?>
		 	 	<a href="#" onclick="openModal1()" class="nav_content">Bride</a>
		      	<a href="#" onclick="openModal1()" class="nav_content">Groom</a>
		 	 	<?php
		 	 	}
		      ?>
		    </div>
		  </div> 
		  <a href="posts.php" class="nav_content">Posts</a>
		  <a href="blog.php" class="nav_content">Blog</a>
		  <?php
		  	if(isset($_SESSION['user'])){
	
		  		$user = $_SESSION['user'];
		  		$r = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
		  		if(mysqli_num_rows($r)>0){
		  			$temp = mysqli_fetch_array($r);
		  			$user_id = $temp['id'];
		  			$name = $temp['name'];
		  			$_SESSION['name'] = $name;
		  		}
		  		
		  ?>
		  <!--<a href="help.php" class="nav_content">হেল্প</a>-->
		  <div class="dropdownx">
		    <button class="dropbtn">Help
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdownx-content">
		      <a href="terms.php" class="nav_content">Terms</a>
		      <a href="services.php" class="nav_content">Services</a>
		      <a href="faq.php" class="nav_content">FAQ</a>
		    </div>
		  </div> 
		  <a href="logout.php" class="nav_content"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a>
		  <?php
		  	}
		  	else{
		  		

		  	
		  ?>
		  <a href="#" onclick="openModal1()" class="nav_content">Log In</a>
		  <a href="#" onclick="openModal()" class="nav_content">Registration</a>
		  <!--<a href="help.php" class="nav_content">হেল্প</a>-->
		  <div class="dropdownx">
		    <button class="dropbtn">Help
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdownx-content">
		      <a href="terms.php" class="nav_content">Terms</a>
		      <a href="services.php" class="nav_content">Services</a>
		      <a href="faq.php" class="nav_content">FAQ</a>
		    </div>
		  </div> 
		  
		  <?php
		  	}
		  ?>
		  <a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
	</div>