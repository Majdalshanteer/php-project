<?php
session_start();

include "headertest.php";
$servername = "localhost";
$username = "root";
$password = "";
$db_name="smart_home";
// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<?php


if(!isset($_SESSION['name'])){

    header("Location:http://localhost/php-final/login.php");

}else{
 $id=$_SESSION['id']




?>

<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link href="./style.css" rel="stylesheet">

   <title>Document</title>
   <style>

#profileDisplay { display: block; height: 110px; width: 18%; margin: 0px auto; border-radius: 50%; }
.img-placeholder {
  width: 18%;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height:110px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 30%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}
   </style>
</head>
<body>
<div class="container px-4 mt-4">
    <!-- Account page navigation-->
    <nav>
        <h4 style="text-align:center;color:#7386D5
">Profile</h4>
   
       
      
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
    
        <div class="col-sm-2">
  
        </div>
        <div class="col-xl-8">
            
        



            <div class="card mb-4">
                <div style="background-color: 
      #7386d5;" class="card-header  text-light ">Account Details</div>
                <div class="card-body">
<?php 
$query="SELECT * FROM users where id='$id'";
$conn->query($query);
if ($result = $conn->query($query) ) {
    while ($row = $result->fetch_assoc() ) {



?>

                    <form action="./Editing_Code-user.php" method="POST">
                    <!-- <img class="img-account-profile rounded-circle mb-2" src="./images.png" width="100px" height="100px" style="border-raduis:50%">  -->
                       
                    <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Upload image</h4>
              </div>
              <img src="images/avatar.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
            <label>Profile Image</label>
          </div>
                    
                    <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1 " for="inputFirstName"><b>Name :</b></label>
                                <input name="name" class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?php echo $row['name'] ?>" >
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputMiddle name"><b>Email :</b></label>
                                <input  name="email"class="form-control" id="inputMiddle name" type="email" placeholder="Enter your email"   value="<?php echo $row['email'] ?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName"><b>Password :</b></label>
                                <input  name="password" class="form-control" id="inputLastName" type="text" placeholder="Enter your password"  value="<?php echo $row['password'] ?>">
                            </div>
                        
                        <!-- Form Row        -->
                       
                           
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation"><b>Phone :</b></label> 
                                <input name="contact"  class="form-control"  id="inputEmailAddress" type="text"  placeholder="Enter your phone"  value="<?php echo $row['contact'] ?>">
                            </div>
                            
                        <!-- Form Group (email address)-->
                       <div class="col-md-6">
                            <label class="small mb-1" for="inputEmailAddress"><b>City :</b></label>
                            <input    name="city" class="form-control" id="inputLocation"type="text" placeholder="Enter your city" value="<?php echo $row['city'] ?>">
                        </div>
                        <!-- Form Row-->
                        
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone"><b>Address :</b></label>
                                <input name="address" class="form-control" id="inputPhone" type="text" placeholder="+address" value="<?php echo $row['address'] ?>" >
                            </div>
                           <!-- Form Group (new password)-->
                         
                        </div>
                        <!-- Save changes button-->
                        

                        <button  style="background-color: 
      #7386d5;" class="btn " type="submit" name="updateUserData" onclick="return confirm('your information is updated')">Save changes</button>
                        </form>
                        
                        <?php
}
}
?>
                </div>
                
            </div>
           
        </div>
        


    
    </div>
</div>

<script>
    function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}
</script>
</body>
</html>
<?php
}?>