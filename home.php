<?php 
	$connect = mysqli_connect("localhost", "root", "", "tourism");
	session_start();
	$user = $_SESSION['username'];

	if($user!=NULL){
		$temp = $user;
	}
	else
		$temp = 'Login';
	  
    // $result = mysqli_query($connect, $query);
    

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Home</title>
 	<link rel="stylesheet" href="style1.css">
 	<script src="https://kit.fontawesome.com/8ae3491f5a.js" crossorigin="anonymous"></script>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<style>
		.bg-danger {
		    background-color: #ffacb9!important;
		}
	</style>
 </head>
 <body style="overflow-x: hidden; background-color: #e5d1d1">

<!-- NAVBAR TITLE BAR -->

 	<nav class="navbar sticky-top navbar-light bg-dark">
		
	  	<a class="navbar-brand" href="#" style="color: #dc3545;">
   			<img src="logo.jpg" width="80" height="45" class="d-inline-block align-top" alt="" loading="lazy">
   			Tourism Management Portal
		</a>
	  	<div class="d-flex justify-content-end" id="naDem">
			<a href="#" class="btn btn-outline-danger" style="margin-right: 40px">  Home  </a>
			<a href="about.php" class="btn btn-outline-danger" style="margin-right: 40px " >  About Us  </a>
			<!-- <a href="contact.php" class="btn btn-outline-danger" style="margin-right: 40px">  Wishlist  </a> -->
			<a href="login_page.php" class="btn btn-outline-danger" style="margin-right: 40px"> <i class="fas fa-user"></i> 
				
			<?php
				echo $temp;
			 ?>  
			</a>
		</div>
	</nav>
	<br>

	<!-- SLIDER  -->
	
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="home.jpg" class="d-block w-100 " alt="..." style="height: 520px; width: 1176px">
	      <div class="carousel-caption d-none d-md-block">
	        <h2 style="color: #d60a0a">Location Specifications</h2>
	        <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="sl01.jpg" class="d-block w-100" alt="..." style="height: 520px; width: 1176px">
	      <div class="carousel-caption d-none d-md-block">
	        <h2 style="color: #d60a0a">Bus Service Available</h2>
	        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
	      </div>
	    </div>
	    <div class="carousel-item">
	      <img src="sl02.png" class="d-block w-100" alt="..." style="height: 520px; width: 1176px">
	      <div class="carousel-caption d-none d-md-block">
	        <h2 style="color: #d60a0a">Google Map Locations Available</h2>
	        <!-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<br>
	<hr style="border-top: 3px solid rgb(50 48 48 / 30%);"> <h4 style="text-align: center;"><i class="fas fa-angle-double-right"></i>	Travel Partners	<i class="fas fa-angle-double-left"></i></h4> <hr style="border-top: 3px solid rgb(50 48 48 / 30%);">
	<br>

	<div class="row"  style="margin-left: 120px">
		<div class="col-1"></div>
		<div class="col-3">
			<div class="card" style="width: 18rem; background-color: #d88585;">
			  <img src="ghatge.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">Ghatge Patil Transport</h5>
			    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
			    <a href="http://www.gptmohantravels.com/" target="_blank" class="btn btn-primary" >VISIT</a>
			  </div>
			</div>
		</div>
		<!-- <div class="col-0.5"></div> -->
		<div class="col-3">
			<div class="card" style="width: 18rem;background-color: #d88585;">
			  <img src="neeta.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">NEETA Tours & Travels</h5>
			    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
			    <a href="https://neetabus.in/" target="_blank" class="btn btn-primary">VISIT</a>
			  </div>
			</div>
		</div>
		<!-- <div class="col-0.5"></div> -->
		<div class="col-3">
			<div class="card" style="width: 18rem;background-color: #d88585;">
			  <img src="msrtc.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">MSRCTC</h5>
			    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
			    <a href="https://msrtc.mahaonline.gov.in/" target="_blank" class="btn btn-primary">VISIT</a>
			  </div>
			</div>
		</div>	
		<div class="col-1.5"></div>		
	</div>
		
	<br>
	<br>
	<hr style="border-top: 3px solid rgb(50 48 48 / 30%);"> <h4 style="text-align: center;"><i class="fas fa-angle-double-right"></i>	Locations	<i class="fas fa-angle-double-left"></i></h4> <hr style="border-top: 3px solid rgb(50 48 48 / 30%);">
	<br>
	<!-- MAIN CONTENT LOCATION CARDS -->

	<?php
		$i = 0;
		$query = mysqli_query($connect, "SELECT * FROM locations ");
		while($row = mysqli_fetch_array($query)){
	    	// if($i>2)
	    	// 	break;
	    $id = $row['id'];

	?>
	
		<div style="margin-left: 20%; margin-right: 20%;">
			<div class="card" style="background-color: #d88585;">
			  <div class="card-body">
			    <a href="detail.php?id=<?php echo $row['id'];?>"  style="text-decoration: none;"><h2 class="card-title" style="color: black" onclick="myf(13)"><?php echo $row['NameOfPlace'] ?></h2></a>
			    <p class="card-text"><?php echo $row['Location'] ?></p>
			    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			  </div>
			  <img src="<?php echo $row['Image']; ?>" class="card-img-bottom" width="400px" height="500px">
			</div>
		</div>
		<br>
	<?php $i++; } ?>
	
	<br>
	<br>
	<div style="background-color: black;">
		<footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                    	<br>
                        <li><h5>About Us</h5></li>
                        	<li style="margin-left: 10%">
                            <a href="about.php" target="_blank" style="text-decoration: none; ">
                                Tourism Management System
                            </a>
                       	</li>
                        <br>
                        <li><h5>Creators</h5></li>
                            
                           <div style="margin-left: 10%">
                           	<li><a href="https://instagram.com/sujit_bhoir_4132?igshid=gpz9twhizqwp" target="_blank" style="text-decoration: none; ">
                                Sujit Bhoir
                            </a></li>
                           <li><a href="https://instagram.com/tan_n.nn?igshid=fgdpdnz5j242" target="_blank" style="text-decoration: none; ">
                                Tanmay Chaudhari
                            </a></li>
                           <li><a href="https://instagram.com/dhanesh__13?igshid=1nw864sxedyzi" target="_blank" style="text-decoration: none; ">
                                Dhanesh Tanak
                            </a></li>
                           </div>
                            
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, All credits to R.A.I.T,Nerul.
                </div>
            </div>
        </footer>
	</div>
 </body>
 </html>

