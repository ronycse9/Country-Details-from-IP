<?php include('get_ip.php');?> 
<?php include('details.php');?> 

<!DOCTYPE html>
<html>
<head>
	<title>Country Name From IP Address</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
     <h2>Country Name From IP Address</h2><hr>

     <form action="" method="POST">
       <div class="col-md-4">     
         <input type="text" name="ip"  class="form-control" placeholder="Please Enter IP Address">
       </div>
       <div class="col-md-4">
         <input type="submit" name="show" value="Show" class="btn btn-primary">
       </div>       
     </form>


     <?php      
       //call get_client_ip function get client ip dynamically
       // $IPaddress  = get_client_ip();

       $IPaddress  = "116.58.206.2";
       $details    =   ip_details($IPaddress);   

       if(isset($_POST['show'])){
         $IPaddress  = $_POST['ip'];
         $details    = ip_details($IPaddress); 
       } 
     ?>     

   

  </div> 
  <?php if($details){?>
    <div class="container">
         <h3>Country Name : <?php echo getCountryName($details->country);?></h3>
         <img src="flag/<?php echo strtolower($details->country).".png"?>">      
    </div> 
  <?php } ?>

</body>
</html>