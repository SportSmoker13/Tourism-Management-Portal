 <?php  
 $connect = mysqli_connect("localhost", "root", "", "tourism");  
 if(isset($_POST["insert"]))  
 {  

      $nameplace = $_POST["nameplace"];
      $descrp = $_POST["descrp"];
      $location = $_POST["location"];
      $link = $_POST['link'];
      $travel = $_POST["travel"];
      $special = $_POST["special"];
      $cuisene = $_POST["cuisene"];
      $stay = $_POST["stay"];
      $file = $_FILES['image']['name'];
      $temp = $_FILES['image']['tmp_name'];
      move_uploaded_file($temp,"$file");
      $query = mysqli_query($connect,"insert into locations(`NameOfPlace`,`Description`,`Image`, `Location`,`Link`, `Travel`, `Special`, `Cuisene`, `Stay`)values('$nameplace','$descrp','$file','$location','$link','$travel','$special','$cuisene','$stay')");
   
      if(mysqli_query($connect, $query))   
           echo '<script>alert("Data Inserted into Database")</script>';  
      else
        echo 'Unable to Enter Data!!!';
 }  
 ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/8ae3491f5a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body style="background-image:url(register_admin_7.jpeg)">
<div class="row" style="margin-top: 200px">
  <div class="col-6">
    <div class="container">
  <form action="register_admin.php" method="POST" enctype="multipart/form-data">
    <div class="login">
      <h1 align="center">LOG IN</h1>
      <div class="txtbox">
        <i class="fas fa-place-of-worship"></i>
        <input type="text" placeholder="Name of Place" name="nameplace" required>
      </div>
      <div class="txtbox">
        <i class="fas fa-info"></i>
        <input name="descrp" placeholder="Description" cols="40" rows="4"></input>
      </div> 
      <div class="txtbox">
        <i class="fas fa-images"></i>   
        <input type="file" placeholder="image" name="image" required>
      </div>
      <div class="txtbox">
        <i class="fas fa-map-marked-alt"></i>
        <input type="text" placeholder="Location" name="location" required>
      </div>
      <div class="txtbox">
        <i class="fas fa-map-marked-alt"></i>
        <input type="text" placeholder="Google Map Link" name="link" required>
      </div>
      <div class="txtbox">
        <i class="fas fa-bus"></i>
        <input type="text" placeholder="Travel Resourcer" name="travel" required>
      </div>
      <div class="txtbox">
        <i class="fas fa-star"></i>
        <input type="text" placeholder="Specialities" name="special" required>
      </div>
      <div class="txtbox">
        <i class="fas fa-utensils"></i>
        <input type="text" placeholder="Cuisene" name="cuisene" required>
      </div>
      <div class="txtbox">
        <i class="fas fa-hotel"></i>
        <input type="text" placeholder="Lodging & Boarding" name="stay" required>
      </div>
      <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" /> 
    </div>
        <!-- <div class="prn">
          <p align="center">Already A User ?  <a style="text-decoration: none;" href="login_page.php">Sign In</a></p>
        </div> -->
  </form>
  
</div>
</div>
<div class="col-5">
  <div>
   <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">NameOfPlace</th>
        <th scope="col">Location</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
   <?php

   $q = "select * from locations ";

   $query = mysqli_query($connect,$q);

   while($res = mysqli_fetch_array($query)){
   ?>
     <tr class="text-center">
       <td> <?php echo $res['id'];  ?> </td>
       <td> <?php echo $res['NameOfPlace'];  ?> </td>
       <td> <?php echo $res['Location'];  ?> </td>
       <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>

     </tr>
   </tbody>
   <?php 
   }
    ?>
   
   </table> 

</div>
</div>
  </div>
  <div class="col-1"></div>
</div>


</body>
</html>



