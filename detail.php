<?php 
	// include('stream1.php');
	$connect = mysqli_connect("localhost", "root", "", "tourism");

	session_start();

	// $id = $_SESSION['id'];

	$user = $_SESSION['username'];
	if($user!=NULL){
		$temp = $user;
	}
	else
		$temp = 'Login';

	$id = $_GET['id'];
	$query = mysqli_query($connect, "SELECT * FROM locations where id = '$id'");
	$row = mysqli_fetch_array($query);
 
	$title = $row['NameOfPlace'];
	$desc  = $row['Description'];
	$image = $row['Image'];
	$location = $row['Location'];
	$link = $row['Link'];
	$travel = $row['Travel'];
	$special = $row['Special'];
	$cuisene = $row['Cuisene'];
	$stay = $row['Stay'];

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
   			<img src="logo.jpg" width="80" height="35" class="d-inline-block align-top" alt="" loading="lazy">
   			Tourism Management Portal
		</a>
	  	<div class="d-flex justify-content-end" id="naDem">
			<a href="home.php" class="btn btn-outline-danger" style="margin-right: 40px">  Home  </a>
			<a href="about.php" class="btn btn-outline-danger" style="margin-right: 40px " >  About Us  </a>
			<!-- <a href="contact.php" class="btn btn-outline-danger" style="margin-right: 40px">  Wishlist  </a> -->
			<a href="login_page.php" class="btn btn-outline-danger" style="margin-right: 40px"> <i class="fas fa-user"></i> 
				
			<?php
				echo $temp;
			 ?>  
			</a>
		</div>
	</nav>

	<div class="card mb-3" style="max-width: 100%">
		<br>
	  <div class="row no-gutters">
	    <div class="col-md-4">
	      <img src="<?php echo $image ?>" class="card-img" alt="...">
	    </div>
	    <div class="col-md-8">
	      <div class="card-body">
	        <h5 class="card-title"><?php echo $title ?></h5>
	        <p class="card-text"><?php echo $desc ?></p>
	        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
	      </div>
	    </div>
	  </div>
	  <br>
	</div>
	 <h5><br><br>
        <div class="container">
        	<h2>Location Details:</h2>
        	<br>
        	<table class="table table-bordered table-dark">
			  <tbody>
			    <tr style="text-align: center;text-align: center; color: red">
			      <!-- <th scope="row">1</th> -->
			      <td>Location</td>
			      <td>Speciality</td>
			      <td>Cuisene</td>
			      <td>Boarding and Lodging</td>
			    </tr>
			    <tr style="text-align: center;">
			      <!-- <th scope="row">2</th> -->
			      <td><a href="<?php echo $link; ?>" target="_blank" style="color: white;"><?php echo $location; ?></a></td>
			      <td><?php echo $special; ?></td>
			      <td><?php echo $cuisene; ?></td>
			      <td><?php echo $stay; ?></td>
			    </tr>
			  </tbody>
		</table>
        </div>
        <br><br>
         <div class="container">
        	<h2>Bus Availability Details:</h2>
        	<br>
        	<table class="table table-bordered table-dark">
			  <tbody>
			    <tr style="text-align: center; color: red">
			      <td>Neeta Travels</td>
			      <td>Ghatge Patil Transport</td>
			      <td>MSRCTC</td>
			    </tr>
			    <tr style="text-align: center;">
			      <td><a href="https://neetabus.in/" style="color: white;">Check Bus Availability</a></td>
			      <td><a href="http://www.gptmohantravels.com/" style="color: white;" >Check Bus Availability</a></td>
			      <td><a href="https://msrtc.mahaonline.gov.in/" style="color: white;">Check Bus Availability</a></td>
			    </tr>
			  </tbody>
		</table>
        </div>
     </h5>
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
                           	<li><a href="about.php" target="_blank" style="text-decoration: none; ">
                                Sujit Bhoir
                            </a></li>
                           <li><a href="about.php" target="_blank" style="text-decoration: none; ">
                                Tanmay Chaudhari
                            </a></li>
                           <li><a href="about.php" target="_blank" style="text-decoration: none; ">
                                Dhanesh Tanak
                            </a></li>
                           </div>
                            
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and Coded by Serve(8) Web Solutions, Inc.
                </div>
            </div>
        </footer>
	</div>
	
 </body>
 </html>